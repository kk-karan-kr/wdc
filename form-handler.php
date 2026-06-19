<?php

declare(strict_types=1);

require_once __DIR__ . '/mail-config-loader.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

function respond(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function cleanHeaderValue(string $value, int $limit = 200): string
{
    $value = str_replace("\0", '', $value);
    $value = trim(str_replace(["\r", "\n"], ' ', $value));
    return function_exists('mb_substr') ? mb_substr($value, 0, $limit) : substr($value, 0, $limit);
}

function cleanBodyValue(string $value, int $limit = 8000): string
{
    $value = str_replace("\0", '', $value);
    $value = str_replace(["\r\n", "\r"], "\n", $value);
    $value = preg_replace('/[^\P{C}\n\t]/u', '', $value) ?? $value;
    $value = trim($value);
    return function_exists('mb_substr') ? mb_substr($value, 0, $limit) : substr($value, 0, $limit);
}

function stringLength(string $value): int
{
    return function_exists('mb_strlen') ? mb_strlen($value) : strlen($value);
}

function postFormRequest(string $url, array $data): array
{
    $body = http_build_query($data);

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $responseBody = curl_exec($ch);
        $curlError = curl_error($ch);
        $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        if ($responseBody === false) {
            throw new RuntimeException('HTTP request failed: ' . $curlError);
        }

        return [
            'status' => $statusCode,
            'body' => (string) $responseBody,
        ];
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $body,
            'timeout' => 20,
            'ignore_errors' => true,
        ],
    ]);

    $responseBody = @file_get_contents($url, false, $context);
    if ($responseBody === false) {
        throw new RuntimeException('HTTP request failed.');
    }

    $statusCode = 0;
    global $http_response_header;
    if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $matches)) {
        $statusCode = (int) $matches[1];
    }

    return [
        'status' => $statusCode,
        'body' => $responseBody,
    ];
}

function verifyTurnstileToken(string $secret, string $token, string $remoteIp = ''): bool
{
    if ($secret === '' || $token === '') {
        return false;
    }

    $payload = [
        'secret' => $secret,
        'response' => $token,
    ];

    if ($remoteIp !== '') {
        $payload['remoteip'] = $remoteIp;
    }

    $result = postFormRequest('https://challenges.cloudflare.com/turnstile/v0/siteverify', $payload);

    if ($result['status'] < 200 || $result['status'] >= 300) {
        throw new RuntimeException('Turnstile verification HTTP ' . $result['status']);
    }

    $decoded = json_decode((string) $result['body'], true);
    return is_array($decoded) && !empty($decoded['success']);
}

function smtpRead($socket): string
{
    $response = '';

    while (!feof($socket)) {
        $line = fgets($socket, 515);
        if ($line === false) {
            break;
        }

        $response .= $line;

        if (strlen($line) >= 4 && $line[3] === ' ') {
            break;
        }
    }

    return $response;
}

function smtpExpect($socket, array $expectedCodes, string $context): string
{
    $response = smtpRead($socket);
    $code = (int) substr($response, 0, 3);

    if (!in_array($code, $expectedCodes, true)) {
        throw new RuntimeException($context . ' failed: ' . trim($response));
    }

    return $response;
}

function smtpCommand($socket, string $command, array $expectedCodes, string $context): string
{
    fwrite($socket, $command . "\r\n");
    return smtpExpect($socket, $expectedCodes, $context);
}

function encodeHeader(string $value): string
{
    return '=?UTF-8?B?' . base64_encode($value) . '?=';
}

function sendSmtpMail(
    string $host,
    int $port,
    string $encryption,
    string $username,
    string $password,
    string $fromEmail,
    string $fromName,
    string $toEmail,
    string $toName,
    string $ccEmail,
    string $ccName,
    string $replyToEmail,
    string $subject,
    string $body
): void {
    $transport = $encryption === 'ssl' ? 'ssl://' . $host : $host;
    $socket = @stream_socket_client($transport . ':' . $port, $errno, $errstr, 20, STREAM_CLIENT_CONNECT);

    if (!$socket) {
        throw new RuntimeException('Unable to connect to SMTP server: ' . $errstr . ' (' . $errno . ')');
    }

    stream_set_timeout($socket, 20);

    try {
        smtpExpect($socket, [220], 'SMTP greeting');
        smtpCommand($socket, 'EHLO wdcindia.com', [250], 'EHLO');
        smtpCommand($socket, 'AUTH LOGIN', [334], 'AUTH LOGIN');
        smtpCommand($socket, base64_encode($username), [334], 'SMTP username');
        smtpCommand($socket, base64_encode($password), [235], 'SMTP password');
        smtpCommand($socket, 'MAIL FROM:<' . $fromEmail . '>', [250], 'MAIL FROM');
        smtpCommand($socket, 'RCPT TO:<' . $toEmail . '>', [250, 251], 'RCPT TO');
        smtpCommand($socket, 'RCPT TO:<' . $ccEmail . '>', [250, 251], 'RCPT TO (CC)');
        smtpCommand($socket, 'DATA', [354], 'DATA');

        $headers = [
            'Date: ' . date('r'),
            'From: ' . encodeHeader($fromName) . ' <' . $fromEmail . '>',
            'To: ' . encodeHeader($toName) . ' <' . $toEmail . '>',
            'Cc: ' . encodeHeader($ccName) . ' <' . $ccEmail . '>',
            'Reply-To: ' . $replyToEmail,
            'Subject: ' . encodeHeader($subject),
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
        ];

        $message = implode("\r\n", $headers) . "\r\n\r\n" . $body;
        $message = preg_replace("/(?m)^\./", '..', (string) $message);

        fwrite($socket, $message . "\r\n.\r\n");
        smtpExpect($socket, [250], 'Message body');
        smtpCommand($socket, 'QUIT', [221], 'QUIT');
    } finally {
        fclose($socket);
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    respond(405, [
        'ok' => false,
        'message' => 'Method not allowed.',
    ]);
}

$mailConfig = wdc_load_mail_config();

if ($mailConfig === []) {
    respond(500, [
        'ok' => false,
        'message' => 'Mail service is not configured correctly.',
    ]);
}

$smtpHost = (string) wdc_mail_config_value($mailConfig, ['smtp_host', 'host'], 'smtp.gmail.com');
$smtpPort = (int) wdc_mail_config_value($mailConfig, ['smtp_port', 'port'], 465);
$smtpEncryption = (string) wdc_mail_config_value($mailConfig, ['smtp_encryption', 'encryption'], 'ssl');
$smtpUsername = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['smtp_username', 'username'], ''), 200);
$smtpPassword = preg_replace('/\s+/', '', (string) wdc_mail_config_value($mailConfig, ['smtp_password', 'password'], ''));
$fromEmail = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['from_email'], ''), 200);
$fromName = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['from_name'], 'The Wedding Design Company'), 120);
$toEmail = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['to_email'], ''), 200);
$toName = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['to_name'], 'Primary Recipient'), 120);
$ccEmail = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['cc_email'], ''), 200);
$ccName = cleanHeaderValue((string) wdc_mail_config_value($mailConfig, ['cc_name'], 'CC Recipient'), 120);
$turnstileSecretKey = preg_replace('/\s+/', '', (string) wdc_mail_config_value(
    $mailConfig,
    ['turnstile_secret_key', 'turnstile_secret'],
    ''
));

if (
    $smtpUsername === '' ||
    $smtpPassword === '' ||
    !filter_var($fromEmail, FILTER_VALIDATE_EMAIL) ||
    !filter_var($toEmail, FILTER_VALIDATE_EMAIL) ||
    !filter_var($ccEmail, FILTER_VALIDATE_EMAIL) ||
    $turnstileSecretKey === ''
) {
    respond(500, [
        'ok' => false,
        'message' => 'Mail service is not configured correctly.',
    ]);
}

$email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
$subjectInput = cleanHeaderValue((string) ($_POST['subject'] ?? ''), 180);
$messageInput = cleanBodyValue((string) ($_POST['message'] ?? ''), 8000);
$formName = cleanHeaderValue((string) ($_POST['form_name'] ?? 'Website Contact Form'), 120);
$sourceUrl = cleanHeaderValue((string) ($_POST['source_url'] ?? ''), 300);
$honeypot = trim((string) ($_POST['website'] ?? ''));
$turnstileToken = trim((string) ($_POST['cf-turnstile-response'] ?? ''));

if ($honeypot !== '') {
    respond(200, [
        'ok' => true,
        'message' => 'Thank you. Your message has been received.',
    ]);
}

if (!$email || $subjectInput === '' || $messageInput === '') {
    respond(422, [
        'ok' => false,
        'message' => 'Please complete all required fields before sending.',
    ]);
}

if (stringLength($subjectInput) > 180 || stringLength($messageInput) > 8000) {
    respond(422, [
        'ok' => false,
        'message' => 'Your message is too long. Please shorten it and try again.',
    ]);
}

try {
    $turnstileValid = verifyTurnstileToken(
        $turnstileSecretKey,
        $turnstileToken,
        (string) ($_SERVER['REMOTE_ADDR'] ?? '')
    );
} catch (Throwable $exception) {
    error_log('[WDC Turnstile] ' . $exception->getMessage());
    respond(500, [
        'ok' => false,
        'message' => 'Captcha verification failed. Please try again.',
    ]);
}

if (!$turnstileValid) {
    respond(422, [
        'ok' => false,
        'message' => 'Please complete the captcha before sending your message.',
    ]);
}

$body = implode("\r\n", [
    'New website enquiry received.',
    '',
    'Form: ' . $formName,
    'From: ' . $email,
    'Subject: ' . $subjectInput,
    'Source URL: ' . ($sourceUrl !== '' ? $sourceUrl : 'Not provided'),
    // 'IP Address: ' . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown'),
    '',
    'Message:',
    $messageInput,
]);

try {
    sendSmtpMail(
        $smtpHost,
        $smtpPort,
        $smtpEncryption,
        $smtpUsername,
        $smtpPassword,
        $fromEmail,
        $fromName,
        $toEmail,
        $toName,
        $ccEmail,
        $ccName,
        (string) $email,
        '[WDC Website] ' . $subjectInput,
        $body
    );

    respond(200, [
        'ok' => true,
        'message' => 'Thank you. Your message has been sent successfully.',
    ]);
} catch (Throwable $exception) {
    error_log('[WDC Form Handler] ' . $exception->getMessage());
    respond(500, [
        'ok' => false,
        'message' => 'We could not send your message right now. Please try again shortly.',
    ]);
}

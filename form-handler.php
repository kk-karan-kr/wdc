<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

$mailConfigPath = '/home/uatwdc/mail-config.php';

function respond(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function cleanHeaderValue(string $value, int $limit = 200): string
{
    $value = trim(str_replace(["\r", "\n"], ' ', $value));
    return function_exists('mb_substr') ? mb_substr($value, 0, $limit) : substr($value, 0, $limit);
}

function configValue(array $config, array $keys, $default = null)
{
    foreach ($keys as $key) {
        if (array_key_exists($key, $config)) {
            return $config[$key];
        }
    }

    return $default;
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

if (!is_file($mailConfigPath) || !is_readable($mailConfigPath)) {
    respond(500, [
        'ok' => false,
        'message' => 'Mail service is not configured correctly.',
    ]);
}

$mailConfig = require $mailConfigPath;

if (!is_array($mailConfig)) {
    respond(500, [
        'ok' => false,
        'message' => 'Mail service is not configured correctly.',
    ]);
}

$smtpHost = (string) configValue($mailConfig, ['smtp_host', 'host'], 'smtp.gmail.com');
$smtpPort = (int) configValue($mailConfig, ['smtp_port', 'port'], 465);
$smtpEncryption = (string) configValue($mailConfig, ['smtp_encryption', 'encryption'], 'ssl');
$smtpUsername = cleanHeaderValue((string) configValue($mailConfig, ['smtp_username', 'username'], ''), 200);
$smtpPassword = preg_replace('/\s+/', '', (string) configValue($mailConfig, ['smtp_password', 'password'], ''));
$fromEmail = cleanHeaderValue((string) configValue($mailConfig, ['from_email'], ''), 200);
$fromName = cleanHeaderValue((string) configValue($mailConfig, ['from_name'], 'The Wedding Design Company'), 120);
$toEmail = cleanHeaderValue((string) configValue($mailConfig, ['to_email'], ''), 200);
$toName = cleanHeaderValue((string) configValue($mailConfig, ['to_name'], 'Primary Recipient'), 120);
$ccEmail = cleanHeaderValue((string) configValue($mailConfig, ['cc_email'], ''), 200);
$ccName = cleanHeaderValue((string) configValue($mailConfig, ['cc_name'], 'CC Recipient'), 120);

if (
    $smtpUsername === '' ||
    $smtpPassword === '' ||
    !filter_var($fromEmail, FILTER_VALIDATE_EMAIL) ||
    !filter_var($toEmail, FILTER_VALIDATE_EMAIL) ||
    !filter_var($ccEmail, FILTER_VALIDATE_EMAIL)
) {
    respond(500, [
        'ok' => false,
        'message' => 'Mail service is not configured correctly.',
    ]);
}

$email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_VALIDATE_EMAIL);
$subjectInput = cleanHeaderValue((string) ($_POST['subject'] ?? ''), 180);
$messageInput = trim((string) ($_POST['message'] ?? ''));
$formName = cleanHeaderValue((string) ($_POST['form_name'] ?? 'Website Contact Form'), 120);
$sourceUrl = cleanHeaderValue((string) ($_POST['source_url'] ?? ''), 300);
$honeypot = trim((string) ($_POST['website'] ?? ''));

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

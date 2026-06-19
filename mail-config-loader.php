<?php
declare(strict_types=1);

function wdc_mail_config_candidates(): array
{
    $projectDir = __DIR__;
    $publicHtmlParent = dirname($projectDir);
    $accountHome = dirname($projectDir, 2);
    $envPath = getenv('WDC_MAIL_CONFIG_PATH') ?: '';

    $candidates = [
        $envPath,
        $accountHome . DIRECTORY_SEPARATOR . 'mail-config.php',
        $accountHome . DIRECTORY_SEPARATOR . '.mail-config.php',
        $publicHtmlParent . DIRECTORY_SEPARATOR . 'mail-config.php',
        $publicHtmlParent . DIRECTORY_SEPARATOR . '.mail-config.php',
        $projectDir . DIRECTORY_SEPARATOR . '.mail-config.php',
    ];

    $normalized = [];
    foreach ($candidates as $candidate) {
        if (!is_string($candidate) || trim($candidate) === '') {
            continue;
        }

        $normalized[] = $candidate;
    }

    return array_values(array_unique($normalized));
}

function wdc_load_mail_config(): array
{
    static $config = null;

    if (is_array($config)) {
        return $config;
    }

    $path = null;
    foreach (wdc_mail_config_candidates() as $candidate) {
        if (is_file($candidate) && is_readable($candidate)) {
            $path = $candidate;
            break;
        }
    }

    if ($path === null) {
        $config = [];
        return $config;
    }

    $loaded = require $path;
    $config = is_array($loaded) ? $loaded : [];

    return $config;
}

function wdc_mail_config_value(array $config, array $keys, $default = null)
{
    foreach ($keys as $key) {
        if (array_key_exists($key, $config)) {
            return $config[$key];
        }
    }

    return $default;
}

<?php
/**
 * env.php — Environment Variable Loader
 * 
 * Reads key=value pairs from the project root .env file
 * and populates both $_ENV and putenv() so they are
 * accessible everywhere in the current request.
 * 
 * This file is safe to require_once multiple times.
 * 
 * Usage:
 *   require_once __DIR__ . '/../config/env.php';
 *   $value = getenv('APP_ENV');
 */

(function () {
    // Prevent re-loading on subsequent require_once calls
    static $loaded = false;
    if ($loaded) return;

    $envPath = __DIR__ . '/../.env';
    if (!file_exists($envPath)) return;

    $env = parse_ini_file($envPath);
    if (!is_array($env)) return;

    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
        putenv("$key=$value");
    }

    $loaded = true;
})();

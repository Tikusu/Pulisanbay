<?php
/**
 * db.php — Database Connection & Setup
 * 
 * Provides the getDB() function that returns a PDO connection
 * to the Supabase PostgreSQL database.
 * 
 * The connection is memoized via a static variable so that
 * repeated calls to getDB() within the same request reuse
 * the existing PDO instance.
 * 
 * Usage:
 *   require_once __DIR__ . '/../config/db.php';
 *   $db = getDB();
 */

function getDB() {
    static $instance = null;

    if ($instance !== null) {
        return $instance;
    }

    // Load environment variables from .env file
    $envPath = __DIR__ . '/../.env';
    if (file_exists($envPath)) {
        $env = parse_ini_file($envPath);
        if (is_array($env)) {
            foreach ($env as $key => $value) {
                $_ENV[$key] = $value;
                putenv("$key=$value");
            }
        }
    }

    // Get credentials from environment
    $host = getenv('DB_HOST') ?: $_ENV['DB_HOST'] ?? '';
    $port = getenv('DB_PORT') ?: $_ENV['DB_PORT'] ?? '5432';
    $dbname = getenv('DB_NAME') ?: $_ENV['DB_NAME'] ?? '';
    $user = getenv('DB_USER') ?: $_ENV['DB_USER'] ?? '';
    $password = getenv('DB_PASSWORD') ?: $_ENV['DB_PASSWORD'] ?? '';

    if (!$host || !$dbname || !$user || !$password) {
        throw new Exception("Database configuration is missing. Please check your .env file.");
    }

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    
    $instance = new PDO($dsn, $user, $password);
    $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $instance;
}

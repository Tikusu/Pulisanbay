<?php
/**
 * db.php — Database Connection & Setup
 * 
 * Provides the getDB() function that returns a PDO connection
 * to the SQLite database. Auto-creates the database file and
 * inquiries table on first use.
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

    // SQLite file lives in /db/ at project root
    $dbPath = __DIR__ . '/../db/inquiries.sqlite';
    $dbDir = dirname($dbPath);
    
    // Auto-create the /db/ directory if it doesn't exist yet
    if (!is_dir($dbDir)) {
        mkdir($dbDir, 0755, true);
    }
    
    $instance = new PDO('sqlite:' . $dbPath);
    $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create the inquiries table if this is a fresh database
    $instance->exec("CREATE TABLE IF NOT EXISTS inquiries (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        whatsapp TEXT NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )");
    
    return $instance;
}

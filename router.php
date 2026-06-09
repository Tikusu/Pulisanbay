<?php
/**
 * router.php — PHP Built-in Server Router
 *
 * Meniru logika .htaccess untuk development lokal dengan PHP built-in server.
 * Semua request diteruskan ke dalam folder public/, dan file tanpa ekstensi
 * .php secara otomatis dipetakan ke file .php yang sesuai.
 *
 * Penggunaan:
 *   php -S localhost:8000 router.php
 *
 * (Dijalankan dari root project, bukan dari dalam folder public/)
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$publicDir = __DIR__ . '/public';

// --- 1. Serve static assets langsung dari public/ ---
// File statis (gambar, CSS, JS, dll.) disajikan manual agar path-nya benar.
$staticFile = $publicDir . $uri;
if ($uri !== '/' && is_file($staticFile)) {
    $ext = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css'     => 'text/css',
        'js'      => 'application/javascript',
        'webp'    => 'image/webp',
        'jpg'     => 'image/jpeg',
        'jpeg'    => 'image/jpeg',
        'png'     => 'image/png',
        'gif'     => 'image/gif',
        'svg'     => 'image/svg+xml',
        'ico'     => 'image/x-icon',
        'woff'    => 'font/woff',
        'woff2'   => 'font/woff2',
        'ttf'     => 'font/ttf',
        'json'    => 'application/json',
        'webmanifest' => 'application/manifest+json',
        'xml'     => 'application/xml',
        'txt'     => 'text/plain',
        'pdf'     => 'application/pdf',
        'mp4'     => 'video/mp4',
        'webm'    => 'video/webm',
    ];
    $mime = $mimeTypes[$ext] ?? 'application/octet-stream';
    header('Content-Type: ' . $mime);
    readfile($staticFile);
    exit;
}

// --- 2. Pemetaan URL khusus untuk kamar (sesuai .htaccess) ---
$roomRoutes = [
    '/the-pulisan/club-room'      => '/club-room.php',
    '/the-pulisan/lower-bungalow' => '/lower-bungalow.php',
    '/the-pulisan/upper-bungalow' => '/upper-bungalow.php',
    '/the-pulisan/minahasa-suite' => '/minahasa-suite.php',
];

$cleanUri = rtrim($uri, '/');
if (isset($roomRoutes[$cleanUri])) {
    require $publicDir . $roomRoutes[$cleanUri];
    exit;
}

// --- 3. Teruskan semua request ke public/ ---
// Coba cocokkan URI dengan file .php di dalam public/
$phpFile  = $publicDir . $cleanUri . '.php';
$indexFile = $publicDir . $cleanUri . '/index.php';

if ($cleanUri === '' || $cleanUri === '/') {
    // Root → public/index.php
    require $publicDir . '/index.php';
} elseif (is_file($phpFile)) {
    // Contoh: /about → public/about.php
    require $phpFile;
} elseif (is_file($indexFile)) {
    // Contoh: /about/ → public/about/index.php
    require $indexFile;
} else {
    // 404
    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>The page <code><b><i>" . htmlspecialchars($uri) . "</b></i></code> was not found.</p>";
}

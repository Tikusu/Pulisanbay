<?php
/**
 * head.php — Shared <head> partial
 * 
 * Include this at the top of every page AFTER setting:
 *   $pageTitle       — The <title> tag content
 *   $pageDescription — The meta description content
 * 
 */

require_once __DIR__ . '/../config/env.php';
$isProd = (getenv('APP_ENV') ?: ($_ENV['APP_ENV'] ?? 'development')) === 'production';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? 'Pulisanbay') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription ?? '') ?>">

<?php
// Base URL for SEO tags
$baseUrl = 'https://pulisanbay.xyz';
$currentUrl = $baseUrl . explode('?', $_SERVER['REQUEST_URI'])[0];
$ogImage = $baseUrl . '/assets/images/hero-pulisan.png'; // Default OG image
?>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">

<!-- Canonical URL -->
<link rel="canonical" href="<?= htmlspecialchars($currentUrl) ?>">

<!-- Open Graph / Facebook / WhatsApp -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($currentUrl) ?>">
<meta property="og:title" content="<?= htmlspecialchars($pageTitle ?? 'Pulisanbay') ?>">
<meta property="og:description" content="<?= htmlspecialchars($pageDescription ?? '') ?>">
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?= htmlspecialchars($currentUrl) ?>">
<meta property="twitter:title" content="<?= htmlspecialchars($pageTitle ?? 'Pulisanbay') ?>">
<meta property="twitter:description" content="<?= htmlspecialchars($pageDescription ?? '') ?>">
<meta property="twitter:image" content="<?= htmlspecialchars($ogImage) ?>">

<?php if ($isProd): ?>
  <!-- Production: single bundled & minified CSS -->
  <link rel="stylesheet" href="../assets/dist/css/index.min.css">
<?php else: ?>
  <!-- Development: individual CSS modules (loaded in dependency order) -->
  <link rel="stylesheet" href="../assets/css/variables.css">
  <link rel="stylesheet" href="../assets/css/base.css">
  <link rel="stylesheet" href="../assets/css/layout.css">
  <link rel="stylesheet" href="../assets/css/navigation.css">
  <link rel="stylesheet" href="../assets/css/hero.css">
  <link rel="stylesheet" href="../assets/css/components.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/carousel.css">
  <link rel="stylesheet" href="../assets/css/utilities.css">
<?php endif; ?>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
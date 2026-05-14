<?php
/**
 * head.php — Shared <head> partial
 * 
 * Include this at the top of every page AFTER setting:
 *   $pageTitle       — The <title> tag content
 *   $pageDescription — The meta description content
 * 
 * Example usage:
 *   <?php
 *   $pageTitle = "About Us — Pulisanbay";
 *   $pageDescription = "Learn about Pulisanbay...";
 *   ?>
 *   <!DOCTYPE html>
 *   <html lang="en">
 *   <head>
 *     <?php include __DIR__ . '/../includes/head.php'; ?>
 *   </head>
 */
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? 'Pulisanbay') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDescription ?? '') ?>">

<!-- CSS Modules (loaded in dependency order) -->
<link rel="stylesheet" href="../assets/css/variables.css">
<link rel="stylesheet" href="../assets/css/base.css">
<link rel="stylesheet" href="../assets/css/layout.css">
<link rel="stylesheet" href="../assets/css/navigation.css">
<link rel="stylesheet" href="../assets/css/hero.css">
<link rel="stylesheet" href="../assets/css/components.css">
<link rel="stylesheet" href="../assets/css/footer.css">
<link rel="stylesheet" href="../assets/css/carousel.css">
<link rel="stylesheet" href="../assets/css/utilities.css">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
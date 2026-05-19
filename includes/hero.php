<?php
/**
 * Variables for including:
 *   $heroImage    — Background image URL (relative path)
 *   $heroTitle    — <h1> heading text
 *   $heroSubtitle — <p> subtitle text
 *   $heroPosition — (optional) CSS background-position override
 *   $heroClasses  — (optional) Extra classes on the hero <h1> and <p>
 */
$heroPosition = $heroPosition ?? '';
$positionStyle = $heroPosition ? "background-position: $heroPosition;" : '';
?>
<section class="hero">
  <div class="hero-bg" style="background-image:url('<?= $heroImage ?>');<?= $positionStyle ?>"></div>
  <div class="hero-content">
    <h1><?= $heroTitle ?></h1>
    <p><?= $heroSubtitle ?></p>
  </div>
  <div class="hero-scroll-indicator"><span></span></div>
</section>
<?php
// Reset variables to prevent leaking into subsequent includes
unset($heroImage, $heroTitle, $heroSubtitle, $heroPosition, $positionStyle);
?>
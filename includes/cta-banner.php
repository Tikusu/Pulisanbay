<?php
/**
 * cta-banner.php — Reusable gradient CTA section
 * 
 * Set these variables before including:
 *   $ctaTitle  — Heading text
 *   $ctaText   — Subtitle paragraph
 *   $ctaLabel  — Button label (default: "Plan Your Escape")
 *   $ctaLink   — Button href (default: "contact.php")
 *   $ctaGradient — Optional gradient override (default: turquoise→deep-sea)
 */
$ctaTitle    = $ctaTitle    ?? 'Begin Your Journey to Pulisanbay';
$ctaText     = $ctaText     ?? 'Whether you seek adventure, serenity, or purpose — your story at Pulisanbay begins with a single step.';
$ctaLabel    = $ctaLabel    ?? 'Plan Your Escape';
$ctaLink     = $ctaLink     ?? 'contact.php';
$ctaGradient = $ctaGradient ?? 'linear-gradient(135deg, var(--oceanic-turquoise), var(--deep-sea))';
?>
<section class="section cta-banner" style="background:<?= $ctaGradient ?>;">
  <div class="container reveal">
    <h2 class="cta-banner__title"><?= $ctaTitle ?></h2>
    <p class="cta-banner__text"><?= $ctaText ?></p>
    <a href="<?= $ctaLink ?>" class="btn-cta-outline cta-banner__link">
      <?= $ctaLabel ?> <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</section>
<?php
// Reset variables to prevent leaking into subsequent includes
unset($ctaTitle, $ctaText, $ctaLabel, $ctaLink, $ctaGradient);
?>

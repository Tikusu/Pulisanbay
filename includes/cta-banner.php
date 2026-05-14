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
<section class="section" style="background:<?= $ctaGradient ?>;text-align:center;color:var(--white);">
  <div class="container reveal">
    <h2 style="color:var(--white);font-size:clamp(2rem,4vw,2.8rem);margin-bottom:1rem;"><?= $ctaTitle ?></h2>
    <p style="color:rgba(255,255,255,0.85);font-size:1.15rem;max-width:550px;margin:0 auto 2rem;"><?= $ctaText ?></p>
    <a href="<?= $ctaLink ?>" class="btn-cta-outline" style="font-size:1rem;padding:0.85rem 2.5rem;">
      <?= $ctaLabel ?> <i class="fas fa-arrow-right" style="margin-left:4px;"></i>
    </a>
  </div>
</section>

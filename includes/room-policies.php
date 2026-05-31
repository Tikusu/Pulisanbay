<?php
/**
 * room-policies.php — Reusable Terms & Policy grid for room pages
 * 
 * Set these variables before including:
 *   $policyAccent     — CSS color variable for icons/links (e.g. 'var(--oceanic-turquoise)')
 *   $termsExtra       — Room-specific extra terms line (e.g. 'Bungalow features traditional wood construction')
 *   $policyExtra      — Room-specific extra policy line (e.g. 'Non-smoking room — designated areas available')
 */
$policyAccent = $policyAccent ?? 'var(--oceanic-turquoise)';
$termsExtra   = $termsExtra   ?? '';
$policyExtra  = $policyExtra  ?? '';
?>
<section class="section-lg section-bg-white">
  <div class="container">
    <div class="grid-2">
      <div class="reveal" style="padding:2.5rem;background:var(--earthy-sand);">
        <h3 style="margin-bottom:1.25rem;"><i class="fas fa-file-contract"
            style="color:<?= $policyAccent ?>;margin-right:8px;"></i>Terms of Service</h3>
        <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
          <li>✦ Check-in time: 14:00 | Check-out time: 12:00</li>
          <li>✦ Advance booking required (min. 14 days prior)</li>
          <li>✦ Minimum stay of 3 nights during peak season</li>
          <li>✦ Maximum 1 additional person per room (charges apply)</li>
          <?php if ($termsExtra): ?>
            <li>✦ <?= $termsExtra ?></li>
          <?php endif; ?>
          <li>✦ Valid government-issued ID required at check-in</li>
          <li>✦ Rates are subject to applicable taxes and service charges</li>
          <li style="margin-top:1rem;"><a href="https://www.thepulisan.com/index.php/rates/" target="_blank"
              style="color:<?= $policyAccent ?>;text-decoration:none;font-weight:600;font-size:0.85rem;">View Full
              Terms & Conditions →</a></li>
        </ul>
      </div>
      <div class="reveal reveal-delay-1" style="padding:2.5rem;background:var(--earthy-sand);">
        <h3 style="margin-bottom:1.25rem;"><i class="fas fa-shield-halved"
            style="color:<?= $policyAccent ?>;margin-right:8px;"></i>Policy</h3>
        <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
          <li>✦ 50% non-refundable deposit required to secure booking</li>
          <li>✦ No cancellations accepted less than 14 days before arrival</li>
          <li>✦ No refunds for no-shows or early check-outs</li>
          <li>✦ Date changes permitted up to 14 days before arrival (once only)</li>
          <?php if ($policyExtra): ?>
            <li>✦ <?= $policyExtra ?></li>
          <?php endif; ?>
          <li>✦ Pets are not permitted</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php
// Reset variables to prevent leaking into subsequent includes
unset($policyAccent, $termsExtra, $policyExtra);
?>

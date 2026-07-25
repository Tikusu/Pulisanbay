<?php
/**
 * footer.php — Shared footer + WhatsApp float
 * 
 * Include at the bottom of every page, before the closing </body> tag.
 * This also includes the WhatsApp floating button.
 */
?>
<footer class="footer">
  <div class="footer-grid">
    <div class="footer-brand">
      <span class="logo">Pulisanbay</span>
      <p>A regenerative tourism sanctuary within KEK Likupang, North Sulawesi. Where nature, culture, and conscious
        travel come together.</p>
      <div class="footer-socials">
        <a href="https://www.facebook.com/107105505295425" target="_blank" aria-label="Facebook"><i
            class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/pulisanbay/" target="_blank" aria-label="Instagram"><i
            class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/minahasa-permai-resort-development/" target="_blank"
          aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.tiktok.com/@pulisan.bay" target="_blank" aria-label="Tiktok"><i
            class="fab fa-tiktok"></i></a>
        <a href="http://www.youtube.com/@Pulisanbay" target="_blank" aria-label="YouTube"><i
            class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div>
      <h4>Explore</h4>
      <a href="/about">About Us</a>
      <a href="/the-pulisan">The Pulisan</a>
      <a href="/noma-campsite">NOMA Campsite</a>
      <a href="/activities">Activities</a>
    </div>
    <div>
      <h4>Discover</h4>
      <a href="/conservation">Conservation</a>
      <a href="/culture">Culture</a>
      <a href="/gastronomy">Gastronomy</a>
      <a href="/community">Community</a>
      <a
        href="https://www.thepulisan.com/index.php/rates/#:~:text=RENT-,%2DA%2D,-RESORT%0A(EXCLUSIVE%20PRIVATE">Offers</a>
    </div>
    <div>
      <h4>Connect</h4>
      <a href="/contact">Inquiry Form</a>
      <a href="/development">Development</a>
      <a href="/careers">Careers</a>
      <a href="/terms-and-conditions">Terms & Conditions</a>
    </div>

  </div>
  <div class="footer-bottom">
    <span>&copy; <?= date('Y') ?> Pulisanbay — KEK Likupang. All rights reserved.</span>
    <span>A project by PT Minahasa Permai Resort Development · Sintesa Group</span>
  </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6285117786920" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
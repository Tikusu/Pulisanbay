<?php
$pageTitle = "Contact Us — Pulisanbay | Plan Your Escape";
$pageDescription = "Get in touch with Pulisanbay. Submit an inquiry for bookings, questions, or to plan your regenerative tourism experience in KEK Likupang.";
$navStyle = "scrolled";
?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <!-- FORM SECTION (no hero — navbar starts scrolled) -->
  <section class="section-lg section-bg-white" style="padding-top:8rem;">
    <div class="container">
      <div class="split-section" style="gap:5rem;">
        <div class="reveal">
          <span class="section-label">Get in Touch</span>
          <h2 style="margin-bottom:1.5rem;">Begin Your Journey<br>to Pulisanbay</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">Whether you're planning a getaway, interested in our
            conservation programs, or simply curious about life at the edge of the Coral Triangle — we'd love to hear
            from you. Fill out the form and our team will respond within 24 hours.</p>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h4>Location</h4>
              <p>KEK Likupang, Desa Pulisan, North Sulawesi, Indonesia</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <h4>WhatsApp</h4>
              <p><a href="https://wa.me/6285117786920" target="_blank"
                  style="text-decoration: none; color: inherit;">+62 851 1778 6920</a></p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-envelope"></i></div>
            <div>
              <h4>Email</h4>
              <p><a href="mailto:info@pulisanbay.com" target="_blank"
                  style="text-decoration: none; color: inherit;">info@pulisanbay.com</a></p>
            </div>
          </div>
        </div>
        <div class="reveal reveal-delay-1">
          <div style="background:var(--earthy-sand);padding:2.5rem;">
            <h3 style="margin-bottom:0.5rem;">Inquiry Form</h3>
            <p style="color:var(--slate);font-size:0.9rem;margin-bottom:2rem;">All fields are required</p>
            <form id="inquiryForm">
              <div class="form-group"><label for="fullName">Full Name</label><input type="text" id="fullName"
                  name="name" placeholder="Your full name" required></div>
              <div class="form-group"><label for="email">Email Address</label><input type="email" id="email"
                  name="email" placeholder="you@example.com" required></div>
              <div class="form-group"><label for="whatsapp">WhatsApp Number</label><input type="tel" id="whatsapp"
                  name="whatsapp" placeholder="+62 812 3456 7890" required></div>
              <div class="form-group"><label for="message">Message</label><textarea id="message" name="message"
                  placeholder="Tell us about your plans or questions..." required></textarea></div>
              <button type="submit" class="btn-cta-dark"
                style="width:100%;justify-content:center;font-size:1rem;padding:0.9rem 2rem;" id="submitBtn"><span
                  id="btnText">Send Inquiry</span> <i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/form.min.js' : 'js/form.js' ?>"></script>
</body>

</html>
<?php $pageTitle = "NOMA Campsite — Glamping Under the Stars | Pulisanbay";
$pageDescription = "Experience NOMA Campsite at Pulisanbay. Choose from curated tent packages or bring your own — fall asleep to ocean waves on the shores of Pulisan Bay.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <?php
  $heroImage = '../assets/images/noma/noma-hero.webp';
  $heroTitle = 'NOMA';
  $heroSubtitle = 'Fall asleep to ocean waves and wake to golden sunrises. Where the thrill of the outdoors meets the comfort you deserve.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- TENT PACKAGES -->
  <section id="tent-packages" class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Tent Packages</span>
        <h2>Choose Your Adventure</h2>
        <p>From premium expedition tents to cozy family shelters — we've curated the perfect camping experience for
          every type of adventurer.</p>
      </div>
      <div class="swiper noma-tent-swiper reveal">
        <div class="swiper-wrapper">
          <div class="swiper-slide noma-tent-slide" style="background-image: url('../assets/images/noma/rendezvous.webp');">
            <div class="noma-tent-slide__body">
              <span class="section-label" style="font-size:0.7rem;">4-Person Capacity</span>
              <h3>Eiger Rendezvous</h3>
              <p>Our flagship tent package — a premium Eiger expedition tent with full setup, sleeping gear, camping
                lights, and a curated comfort kit. Perfect for the discerning adventurer.</p>
              <a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="swiper-slide noma-tent-slide" style="background-image: url('../assets/images/noma/arpenaz.webp');">
            <div class="noma-tent-slide__body">
              <span class="section-label" style="font-size:0.7rem;">5-Person Capacity</span>
              <h3>Decathlon Arpenaz</h3>
              <p>A spacious family-friendly tent with easy setup, ideal for groups and families looking to connect with
                nature.</p>
              <a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="swiper-slide noma-tent-slide" style="background-image: url('../assets/images/noma/air-second.webp');">
            <div class="noma-tent-slide__body">
              <span class="section-label" style="font-size:0.7rem;">6-Person Capacity</span>
              <h3>Decathlon Air Second</h3>
              <p>An innovative inflatable tent for the modern camper — set up in seconds and enjoy instant comfort.
                Lightweight, compact, and perfectly functional.</p>
              <a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                  class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination noma-tent-pagination"></div>
      </div>
      <div class="noma-tent-cta reveal">
        <a href="https://www.instagram.com/noma.adventure/" target="_blank" rel="noopener noreferrer" class="btn-cta-dark">
          <i class="fab fa-instagram"></i> Learn More <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- BRING YOUR OWN TENT -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal">
          <span class="section-label">For the Seasoned Camper</span>
          <h2 style="margin-bottom:1rem;">Bring Your Own Tent</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Already have your trusted gear? We welcome experienced
            campers to bring their own tents and pitch on our curated beachfront and hillside campsites. <i>*Tent pitch
              space is free</i></p>
          <p style="color:var(--slate);margin-bottom:2rem;">Your campsite fee includes access to shared facilities —
            clean restrooms, showers, and communal fire pits.
          </p>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-solar-panel"></i></div>
            <div>
              <h4>Essentials</h4>
              <p>Electricity & Clean Water</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-restroom"></i></div>
            <div>
              <h4>Shared Facilities</h4>
              <p>Clean restrooms, showers, and changing rooms.</p>
            </div>
          </div>
          <a href="contact.php" class="btn-cta-dark" style="display:none;margin-top:0.5rem;">Inquire About Rates <i
              class="fas fa-arrow-right"></i></a>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/noma/bring-own-tent.webp" alt="NOMA Campsite" class="img-cover"
              style="height:480px;"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- AROUND NOMA -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Around NOMA Campsite</span>
        <h2>Explore Nature's Wonders</h2>
        <p>Venture beyond your tent and explore the ancient trails, breathtaking savanna vistas, and diverse flora and
          fauna of Pulisan Bay.</p>
      </div>
      <div class="swiper noma-around-swiper" style="padding-bottom: 3rem;">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="activities.php#land-adventures" class="acco-card reveal">
              <img src="../assets/images/activities/eco-trail.webp" alt="Trekking" class="acco-card__img">
              <div class="acco-card__content" style="padding-bottom:1rem;">
                <h3 class="acco-card__title">Trekking</h3>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="activities.php#land-adventures" class="acco-card reveal reveal-delay-1">
              <img src="../assets/images/activities/savanna.webp" alt="Hiking" class="acco-card__img">
              <div class="acco-card__content" style="padding-bottom:1rem;">
                <h3 class="acco-card__title">Hiking</h3>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="activities.php#wildlife-carousel" class="acco-card">
              <img src="../assets/images/wildlife/Tarsius.webp" alt="Wildlife Encounter" class="acco-card__img">
              <div class="acco-card__content" style="padding-bottom:1rem;">
                <h3 class="acco-card__title">Wildlife Encounter</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-pagination noma-around-pagination"></div>
      </div>
    </div>
  </section>

  <!-- <?php $ctaTitle = "Ready for Your Camping Adventure?";
  $ctaText = "The stars are waiting. The waves are calling. Your campsite at Pulisan Bay is ready.";
  $ctaLabel = "Plan Your Camping Trip";
  $ctaGradient = "linear-gradient(135deg,var(--deep-sea),var(--deep-sea-dark))";
  include __DIR__ . '/../includes/cta-banner.php'; ?> -->
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/carousel.min.js' : 'js/carousel.js' ?>"></script>
</body>

</html>
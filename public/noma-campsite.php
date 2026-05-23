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
      <div class="grid-3 reveal">
        <div class="card">
          <div class="card-img-wrapper"><img src="../assets/images/noma/rendezvous.webp" alt="Eiger Rendezvous"
              class="card-img"></div>
          <div class="card-body"><span class="section-label" style="font-size:0.7rem;">4-Person Capacity</span>
            <h3>Eiger Rendezvous</h3>
            <p>Our flagship tent package — a premium Eiger expedition tent with full setup, sleeping gear, camping
              lights, and a curated comfort kit. Perfect for the discerning adventurer.</p>
            <div style="margin-top:1.25rem;">
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> A set of mattress included
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Waterproof
              </div>
              <div style="display:flex;align-items:center;gap:8px;color:var(--slate);font-size:0.85rem;"><i
                  class="fas fa-check" style="color:var(--forest-green);"></i> Moderate Windproof</div>
            </div>
            <a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="card reveal-delay-1">
          <div class="card-img-wrapper"><img src="../assets/images/noma/arpenaz.webp" alt="Decathlon Apenaz"
              class="card-img"></div>
          <div class="card-body"><span class="section-label" style="font-size:0.7rem;">5-Person Capacity</span>
            <h3>Decathlon Arpenaz</h3>
            <p>A spacious family-friendly tent with easy setup, ideal for groups and families looking to connect with
              nature.</p>
            <div style="margin-top:1.25rem;">
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> 2 sets of mattresses included
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Quick set up
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Waterproof
              </div>
              <div style="display:flex;align-items:center;gap:8px;color:var(--slate);font-size:0.85rem;"><i
                  class="fas fa-check" style="color:var(--forest-green);"></i> Windproof</div>
            </div>
            <a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div class="card reveal-delay-2">
          <div class="card-img-wrapper"><img src="../assets/images/noma/air-second.webp" alt="Decathlon Air Second"
              class="card-img"></div>
          <div class="card-body"><span class="section-label" style="font-size:0.7rem;">6-Person Capacity</span>
            <h3>Decathlon Air Second</h3>
            <p>An innovative inflatable tent for the modern camper — set up in seconds and enjoy instant comfort.
              Lightweight, compact, and perfectly functional.</p>
            <div style="margin-top:1.25rem;">
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> 2 sets of mattresses included
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Inflatable — sets up in seconds
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Waterproof
              </div>
              <div
                style="display:flex;align-items:center;gap:8px;margin-bottom:0.5rem;color:var(--slate);font-size:0.85rem;">
                <i class="fas fa-check" style="color:var(--forest-green);"></i> Windproof
              </div>
            </div><a href="contact.php" class="card-link" style="margin-top:1.25rem;">Book This Package <i
                class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PACKAGE INCLUSIONS -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Rate Inclusions</span>
        <h2>What's Included in Your Package</h2>
      </div>
      <div class="grid-4 grid-4-dense reveal">
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-ticket-alt"></i></div>
          <h3>Entrance Fee</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-campground"></i></div>
          <h3>Tent Pitch Space</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-chair"></i></div>
          <h3>Camping Chairs</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-lightbulb"></i></div>
          <h3>Tent Lighting</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-bed"></i></div>
          <h3>Fabric Mattress</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-plug"></i></div>
          <h3>Power Outlets</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-route"></i></div>
          <h3>Access to Eco-Trails</h3>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-mountain"></i></div>
          <h3>Access to Savana Peaks</h3>
        </div>
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
            <a href="activities.php#wildlife-carousel" class="acco-card reveal reveal-delay-2">
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
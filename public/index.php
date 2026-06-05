<?php
$pageTitle = "Pulisanbay — Regenerative Tourism Sanctuary";
$pageDescription = "Discover Pulisanbay, a regenerative tourism sanctuary in KEK Likupang, North Sulawesi. Where pristine nature, living heritage, and conscious travel unite.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <!-- HERO -->
  <section class="hero" id="hero-home">
    <div class="hero-bg" style="background-image: url('../assets/images/home-hero.webp')"></div>
    <div class="hero-content">
      <h1>Beyond Nature Experience</h1>
      <p>A regenerative sanctuary in the heart of the Coral Triangle — where every footprint restores, every moment
        reconnects, and every horizon tells a story.</p>
      <!-- <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
        <a href="/about" class="btn-cta-outline">Discover Our Story</a>
        <a href="/contact" class="btn-cta">Plan Your Escape</a>
      </div> -->
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>

  <!-- INTRO SECTION -->
  <section class="section section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal">
          <span class="section-label">Regenerative Tourism</span>
          <h2>More Than a Destination.<br>A Movement.</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Nestled along the northern shores of Sulawesi within the
            prestigious KEK Likupang Special Economic Zone, Pulisanbay is redefining what it means to travel. Here,
            tourism doesn't take — it gives back.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Every trail you walk helps protect ancient forests. Every
            meal you savor sustains local fishermen and farmers. Every sunrise you witness is a testament to an
            ecosystem being lovingly restored. This is not just a holiday — it is a partnership with the earth.</p>
          <a href="/about" class="btn-cta-dark">Our Story <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg);">
            <img src="../assets/images/regenerative-tourism.webp" alt="Pulisanbay Landscape" class="img-cover"
              style="height: 100%;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ACCOMMODATION TEASER -->
  <section class="section section-bg-sand">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Stay With Us</span>
        <h2>Rest in Harmony with Nature</h2>
        <p>From luxurious ocean-view suites to beachfront glamping beneath the stars — find your perfect retreat at
          Pulisanbay.</p>
      </div>
      <div class="grid-2 reveal">
        <a href="/the-pulisan" class="acco-card">
          <img src="../assets/images/the-pulisan/main-page/the-pulisan-hero.webp" alt="The Pulisan Resort"
            class="acco-card__img" loading="lazy">
          <div class="acco-card__overlay-base"></div>
          <div class="acco-card__overlay-hover"></div>
          <span class="acco-card__number">01</span>
          <div class="acco-card__content">
            <span class="acco-card__tag">Resort</span>
            <h2 class="acco-card__title">The Pulisan</h2>
            <div class="acco-card__reveal">
              <p class="acco-card__desc">An exclusive collection of bungalows and suites where traditional Minahasa
                architecture meets modern luxury — perched between emerald hills and the turquoise sea.</p>
              <div class="acco-card__link">
                Explore Rooms
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
        </a>
        <a href="/noma-campsite" class="acco-card">
          <img src="../assets/images/noma/noma-hero.webp" alt="NOMA Campsite" class="acco-card__img" loading="lazy">
          <div class="acco-card__overlay-base"></div>
          <div class="acco-card__overlay-hover"></div>
          <span class="acco-card__number">02</span>
          <div class="acco-card__content">
            <span class="acco-card__tag">Camping</span>
            <h2 class="acco-card__title">NOMA Campsite</h2>
            <div class="acco-card__reveal">
              <p class="acco-card__desc">Fall asleep to ocean waves and wake to golden sunrises. Our curated campsite
                blends the thrill of the outdoors with the comfort you deserve.</p>
              <div class="acco-card__link">
                Explore Campsite
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M2 7h10M8 3l4 4-4 4" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- EXPERIENCES TEASER -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Immerse Yourself</span>
        <h2>Experiences That Transform</h2>
        <p>Dive into the Coral Triangle. Trek ancient savanna trails. Taste the ocean's harvest. Every experience at
          Pulisanbay is a story waiting to unfold.</p>
      </div>
      <div class="grid-4 reveal">
        <a href="/activities" class="card" style="text-decoration:none;color:inherit;">
          <div class="card-img-wrapper"><img src="../assets/images/activities/activities-hero.webp" alt="Activities"
              class="card-img"></div>
          <div class="card-body">
            <h3>Activities</h3>
            <p>Diving, kayaking, trekking, wildlife encounters, and more.</p><span class="card-link">Explore <i
                class="fas fa-arrow-right"></i></span>
          </div>
        </a>
        <a href="/conservation" class="card" style="text-decoration:none;color:inherit;">
          <div class="card-img-wrapper"><img src="../assets/images/conservation-teaser.webp" alt="Conservation"
              class="card-img"></div>
          <div class="card-body">
            <h3>Conservation</h3>
            <p>Join the movement to protect Wallacea's extraordinary biodiversity.</p><span class="card-link">Learn More
              <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
        <a href="/culture" class="card" style="text-decoration:none;color:inherit;">
          <div class="card-img-wrapper"><img src="../assets/images/culture/gitar-mama.webp" alt="Culture" class="card-img">
          </div>
          <div class="card-body">
            <h3>Culture</h3>
            <p>Discover the living heritage of Minahasa through art, music, and tradition.</p><span
              class="card-link">Discover <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
        <a href="/gastronomy" class="card" style="text-decoration:none;color:inherit;">
          <div class="card-img-wrapper"><img src="../assets/images/gastronomy/gastronomy-hero.webp" alt="Gastronomy"
              class="card-img"></div>
          <div class="card-body">
            <h3>Gastronomy</h3>
            <p>Savor sea-to-table cuisine celebrating North Sulawesi's culinary soul.</p><span class="card-link">Taste
              <i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- FOUR PILLARS -->
  <section class="section-lg section-bg-dark">
    <div class="container" style="display: flex; flex-direction: column; align-items: center;">
      <div class="section-header reveal">
        <span class="section-label">Our Foundation</span>
        <h2>Built Upon Four Pillars</h2>
        <p>Every decision, every design, every detail at Pulisanbay is guided by these four enduring commitments.</p>
      </div>
      <div class="grid-4 reveal">
        <div class="pillar-card">
          <img src="../assets/images/four-pillars/Nature.webp" alt="Nature" class="img-round">
          <h3>Nature</h3>
        </div>
        <div class="pillar-card reveal-delay-1">
          <img src="../assets/images/four-pillars/Culture.webp" alt="Culture" class="img-round">
          <h3>Culture</h3>
        </div>
        <div class="pillar-card reveal-delay-2">
          <img src="../assets/images/four-pillars/Destination.webp" alt="Destination" class="img-round">
          <h3>Destination</h3>
        </div>
        <div class="pillar-card reveal-delay-3">
          <img src="../assets/images/four-pillars/Memorable.webp" alt="Memorable" class="img-round">
          <h3>Memorable</h3>
        </div>
      </div>
      <a href="/about" class="btn-cta-dark"
        style="background: var(--oceanic-turquoise);font-size:1rem;padding:0.85rem 2.5rem;margin-top:3rem;">
        Learn More <i class="fas fa-arrow-right" style="margin-left:4px;"></i>
      </a>
    </div>
  </section>

  <!-- CTA BANNER -->
  <?php include __DIR__ . '/../includes/cta-banner.php'; ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
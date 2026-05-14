<?php
$pageTitle = "Activities — Adventures in Paradise | Pulisanbay";
$pageDescription = "Explore thrilling activities at Pulisanbay — scuba diving, snorkeling, kayaking, trekking, wildlife spotting, and rock climbing in North Sulawesi.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <section class="hero">
    <div class="hero-bg" style="background-image: url('../assets/images/activities/activities-hero.webp')"></div>
    <div class="hero-content">
      <h1>Activities</h1>
      <p>From the depths of the Coral Triangle to the peaks of ancient savanna hills — every adventure at Pulisanbay
        writes a chapter of your story.</p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>

  <!-- DIVING & SNORKELING -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal">
          <span class="section-label">Marine Adventures</span>
          <h2>Scuba Diving &amp; Snorkeling</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Descend into the heart of the Coral Triangle — one of
            Earth's most biodiverse marine ecosystems. Our PADI-certified dive masters guide you through vibrant coral
            walls, underwater caves, and encounters with sea turtles, reef sharks, and schools of tropical fish.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">For those who prefer the surface, our snorkeling excursions
            reveal a world of color just below the waterline — with visibility that stretches to the horizon.</p>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg)"><img
              src="../assets/images/activities/diving.webp" alt="Scuba Diving" class="img-cover" style="height: 100%;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WATER SPORTS -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal reveal-delay-1" style="order:1;">
          <div class="section-img" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/activity-kayaking.png" alt="Kayaking" class="img-cover" style="height: 100%;"></div>
        </div>
        <div class="reveal" style="order:2;">
          <span class="section-label">On the Water</span>
          <h2>Paddleboarding &amp; Kayaking</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Glide across the calm turquoise waters of Pulisan Bay at
            your own pace. Our stand-up paddleboards and sea kayaks are the perfect way to explore hidden coves,
            mangrove channels, and coastline formations that are inaccessible by land.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Early morning and sunset sessions are particularly magical —
            when the bay transforms into a mirror reflecting the sky's most spectacular palette.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TREKKING -->
  <section class="section-lg section-bg-white" id="land-adventures">
    <div class="container">
      <div class="split-section">
        <div class="reveal">
          <span class="section-label">Land Adventures</span>
          <h2>Eco-Trails</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Traverse ancient trails that wind through tropical forests
            and open onto sweeping savanna vistas. Our guided treks range from gentle coastal walks to challenging hill
            climbs — each rewarding you with breathtaking panoramas of the bay, the hills, and the distant ocean
            horizon.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Every path tells a story of the land — from medicinal plants
            used by generations of Minahasa healers to the geological formations shaped by millennia of wind and water.
          </p>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/activity-trekking.png" alt="Trekking" class="img-cover" style="height: 100%;"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- WILDLIFE 3D CAROUSEL -->
  <section class="wildlife-section" id="wildlife-carousel">
    <div class="wildlife-header reveal">
      <span class="section-label">Wildlife Encounters</span>
      <h2>Guardians of the Wallacea</h2>
      <p>Meet the extraordinary endemic wildlife that calls this region home — each species a living testament to
        millions of years of evolution.</p>
    </div>
    <div class="carousel-3d-wrapper reveal reveal-delay-1">
      <!-- Swiper -->
      <div class="swiper wildlife-swiper">
        <div class="swiper-wrapper">
          <!-- Original slides -->
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Yaki.webp" alt="Yaki — Sulawesi Black Crested Macaque">
            <span class="card-badge">Macaca nigra</span>
          </div>
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Tarsius.webp" alt="Tarsius — Sulawesi Tarsier">
            <span class="card-badge">Tarsius spectrum</span>
          </div>
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Rangkong.webp" alt="Burung Rangkong — Sulawesi Hornbill">
            <span class="card-badge">Rhyticeros cassidix</span>
          </div>
          <!-- Duplicated slides — required by Swiper loop mode (needs ≥ slidesPerView×2 slides) -->
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Yaki.webp" alt="Yaki — Sulawesi Black Crested Macaque">
            <span class="card-badge">Macaca nigra</span>
          </div>
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Tarsius.webp" alt="Tarsius — Sulawesi Tarsier">
            <span class="card-badge">Tarsius spectrum</span>
          </div>
          <div class="swiper-slide">
            <img src="../assets/images/wildlife/Rangkong.webp" alt="Burung Rangkong — Sulawesi Hornbill">
            <span class="card-badge">Rhyticeros cassidix</span>
          </div>
        </div>
      </div>

      <div class="carousel-controls">
        <div class="carousel-arrows">
          <button class="carousel-arrow swiper-button-prev-custom" aria-label="Previous"><i
              class="fas fa-chevron-left"></i></button>
          <div class="carousel-dots" id="wildlife-dots">
            <button class="carousel-dot carousel-dot--active" data-index="0" aria-label="Slide 1"></button>
            <button class="carousel-dot" data-index="1" aria-label="Slide 2"></button>
            <button class="carousel-dot" data-index="2" aria-label="Slide 3"></button>
          </div>
          <button class="carousel-arrow swiper-button-next-custom" aria-label="Next"><i
              class="fas fa-chevron-right"></i></button>
        </div>
      </div>

      <div class="carousel-description" id="carouselDescription">
        <div class="desc-panel swiper-desc-active" data-index="0">
          <span class="species-name">Macaca nigra</span>
          <h3>Yaki — Sulawesi Black Crested Macaque</h3>
          <p>The critically endangered Sulawesi black crested macaque — a charismatic primate found nowhere else on
            Earth. Observe them in their natural forest habitat with our trained conservation rangers.</p>
        </div>
        <div class="desc-panel" data-index="1">
          <span class="species-name">Tarsius spectrum</span>
          <h3>Tarsier — The Night's Tiny Watcher</h3>
          <p>The world's smallest primate, with enormous, mesmerizing eyes adapted for nocturnal life. Our evening walks
            offer rare glimpses of these enchanting creatures clinging to forest branches.</p>
        </div>
        <div class="desc-panel" data-index="2">
          <span class="species-name">Rhyticeros cassidix</span>
          <h3>Burung Rangkong — Sulawesi Hornbill</h3>
          <p>The majestic Sulawesi hornbill, with its distinctive casque and powerful wingspan, is a symbol of the
            forest's health. Spot them during early morning birdwatching excursions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ROCK CLIMBING -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal reveal-delay-1">
          <div class="section-img" style="box-shadow:var(--shadow-lg); height: 380px;"><img
              src="../assets/images/hero-about.png" alt="Rock Climbing" class="img-cover" style="height: 100%;"></div>
        </div>
        <div class="reveal">
          <span class="section-label">Vertical Adventures</span>
          <h2>Rock Climbing</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Challenge yourself on the natural limestone formations and
            volcanic rock faces that define Pulisanbay's dramatic coastline. With routes ranging from beginner-friendly
            to advanced, every climber finds their perfect ascent.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Our experienced guides provide all equipment and safety
            briefings. The reward? Unparalleled views from vantage points that few ever reach.</p>
        </div>
      </div>
    </div>
  </section>

  <?php
  $ctaTitle = "Ready for Your Next Adventure?";
  $ctaText = "Every day at Pulisanbay holds a new discovery. What will yours be?";
  $ctaLabel = "Plan Your Activities";
  include __DIR__ . '/../includes/cta-banner.php';
  ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/carousel.js"></script>
</body>

</html>
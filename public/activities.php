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
  <link rel="stylesheet"
    href="../assets/<?= $isProd ? 'dist/css/activities-enhanced.min.css' : 'css/activities-enhanced.css' ?>" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/activities/activities-hero.webp';
  $heroTitle = 'Activities';
  $heroSubtitle = 'From the depths of the Coral Triangle to the peaks of ancient savanna hills — every adventure at Pulisanbay writes a chapter of your story.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- WATER SPORTS — Asymmetric Staggered Layout -->
  <section class="act-water" id="water-sports">
    <div class="act-water__inner">
      <!-- Image side -->
      <div class="act-water__img-stack reveal">
        <div class="act-water__img-main">
          <img src="../assets/images/activities/kayaking.webp" alt="Kayaking at Pulisanbay">
        </div>
        <div class="act-water__badge">
          <span class="act-water__badge-num">∞</span>
          <span class="act-water__badge-text">Open Water</span>
        </div>
      </div>

      <!-- Text side -->
      <div class="act-water__content reveal reveal-delay-1">
        <span class="section-label">On the Water</span>
        <h2>Paddleboarding &amp; Kayaking</h2>
        <p>Glide across the calm turquoise waters of Pulisan Bay at your own pace. Our stand-up paddleboards and sea
          kayaks are the perfect way to explore hidden coves, mangrove channels, and coastline formations that are
          inaccessible by land.</p>
        <p>Early morning and sunset sessions are particularly magical — when the bay transforms into a mirror reflecting
          the sky's most spectacular palette.</p>

        <!-- <ul class="act-water__features">
          <li>Equipment & safety gear included</li>
          <li>Guided & self-guided routes available</li>
          <li>Hidden cove & mangrove tours</li>
          <li>Sunset paddling sessions</li>
        </ul> -->
      </div>
    </div>
  </section>

  <!-- DIVING & SNORKELING — "The Depth" Layout -->
  <section class="act-marine" id="marine-adventures">
    <!-- Floating bubble decorations -->
    <div class="act-marine__bubble"></div>
    <div class="act-marine__bubble"></div>
    <div class="act-marine__bubble"></div>

    <div class="act-marine__inner reveal">
      <!-- Left: Image -->
      <div class="act-marine__img-panel">
        <img src="../assets/images/activities/diving.webp" alt="Scuba Diving at Pulisanbay">
      </div>

      <!-- Right: Text -->
      <div class="act-marine__text-panel">
        <div>
          <span class="section-label">Marine Adventures</span>
          <h2>Scuba Diving &amp; Snorkeling</h2>
          <p>Descend into the heart of the Coral Triangle — one of Earth's most biodiverse marine ecosystems. Our
            dive masters will guide you through vibrant coral walls, underwater caves, and encounters with sea
            turtles, reef sharks, and schools of tropical fish.</p>
          <p>For those who prefer the surface, our snorkeling excursions reveal a world of color just below the
            waterline — with visibility that stretches to the horizon.</p>

          <div class="act-marine__stats reveal reveal-delay-1">
            <div class="act-marine__stat">
              <span class="act-marine__stat-num">40+</span>
              <span class="act-marine__stat-label">Dive Sites</span>
            </div>
            <div class="act-marine__stat">
              <span class="act-marine__stat-num">25m</span>
              <span class="act-marine__stat-label">Avg. Visibility</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- ECO-TRAILS — Layout -->
  <section class="act-trails" id="land-adventures">
    <div class="act-trails__bg"></div>
    <div class="act-trails__inner">

      <!-- Text column -->
      <div class="act-trails__content reveal">
        <span class="section-label">Land Adventures</span>
        <h2>Eco-Trails</h2>
        <p>Traverse ancient trails that wind through tropical forests and open onto sweeping savanna vistas. Our guided
          treks range from gentle coastal walks to challenging hill climbs — each rewarding you with breathtaking
          panoramas of the bay, the hills, and the distant ocean horizon.</p>
        <p>Every path tells a story of the land — from medicinal plants used by generations of Minahasa healers to the
          geological formations shaped by millennia of wind and water.</p>

        <div class="act-trails__img-stack left-stack" style="margin-top: 3rem;">
          <div class="act-trails__img-main">
            <img src="../assets/images/activities/savanna.webp" alt="Eco-Trekking trails at Pulisanbay">
          </div>
        </div>
      </div>

      <!-- Image column -->
      <div class="act-trails__img-col reveal reveal-delay-2">
        <div class="act-trails__img-stack right-stack">
          <div class="act-trails__img-main">
            <img src="../assets/images/activities/eco-trail.webp" alt="Tropical forest at Pulisanbay">
          </div>
        </div>
        <p class="act-trails__img-caption">Ancient paths through living wilderness</p>

        <div class="act-trails__chips reveal reveal-delay-1" style="margin-top: 2rem;">
          <span class="act-trails__chip"><i class="fas fa-seedling"></i> Medicinal Plants</span>
          <span class="act-trails__chip"><i class="fas fa-mountain"></i> Hill Climbs</span>
          <span class="act-trails__chip"><i class="fas fa-binoculars"></i> Bird Watching</span>
          <span class="act-trails__chip"><i class="fas fa-water"></i> Coastal Walks</span>
          <span class="act-trails__chip"><i class="fas fa-compass"></i> Guided Routes</span>
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

  <!-- ROCK CLIMBING — "Vertical Power" Layout -->
  <section class="act-climb" id="rock-climbing">
    <div class="act-climb__inner">
      <!-- Image panel — tall & vertical -->
      <div class="act-climb__img-panel reveal">
        <img src="../assets/images/activities/rock-climbing.webp" alt="Rock Climbing at Pulisanbay coastline">
      </div>

      <!-- Text panel -->
      <div class="act-climb__text-panel reveal reveal-delay-1">
        <div class="act-climb__text-inner">
          <span class="section-label">Vertical Adventures</span>
          <h2>Rock Climbing</h2>
          <p>Challenge yourself on the natural limestone formations and volcanic rock faces that define Pulisanbay's
            dramatic coastline. With routes ranging from beginner-friendly to advanced, every climber finds their
            perfect ascent.</p>
          <p>Our experienced guides provide all equipment and safety briefings. The reward? Unparalleled views from
            vantage points that few ever reach.</p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/carousel.min.js' : 'js/carousel.js' ?>"></script>
</body>

</html>
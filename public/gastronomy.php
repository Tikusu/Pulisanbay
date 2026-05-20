<?php $pageTitle = "Gastronomy — Sea-to-Table Dining | Pulisanbay";
$pageDescription = "Savor the culinary soul of North Sulawesi at Pulisanbay. Sea-to-table dining, iconic local dishes, and flexible dietary accommodations.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../assets/<?= $isProd ? 'dist/css/gastronomy-enhanced.min.css' : 'css/gastronomy-enhanced.css' ?>" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/hero-gastronomy.png';
  $heroTitle = 'Gastronomy';
  $heroSubtitle = 'Where the ocean\'s harvest meets the hands of local artisans — every plate tells a story of the land, the sea, and the people who call this place home.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- CULINARY ICONS — Land Adventures / UNSRAT Layout -->
  <section class="gast-culinary" id="culinary-icons">
    <div class="gast-culinary__inner">

      <!-- Column 1: Label + Title + Description + 2 stacked images -->
      <div class="gast-culinary__content reveal">
        <span class="section-label">Culinary Icons</span>
        <h2>Flavors of North Sulawesi</h2>
        <p>Discover the bold, aromatic, and unforgettable flavors that define Minahasa cuisine — a culinary tradition
          shaped by centuries of spice trade, coastal abundance, and mountain harvests.</p>

        <!-- Image slider below text -->
        <div class="gast-culinary__slider" style="margin-top: 3rem;">
          <div class="swiper gast-culinary-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="gast-culinary__slide-img">
                  <img src="../assets/images/gastronomy/seafood-barbeque.webp" alt="Minahasa cuisine at Pulisanbay">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gast-culinary__slide-img">
                  <img src="../assets/images/gastronomy/local-food.webp" alt="Fresh ingredients from Pulisan Bay">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="gast-culinary__slide-img">
                  <img src="../assets/images/gastronomy/fish.webp" alt="North Sulawesi spices and flavors">
                </div>
              </div>
            </div>
            <!-- Pagination dots -->
            <div class="swiper-pagination gast-culinary-pagination"></div>
          </div>
        </div>
      </div>

      <!-- Column 2: Hero image + caption + dish list -->
      <div class="gast-culinary__img-col reveal reveal-delay-2">
        <div class="gast-culinary__img-stack gast-culinary__img-stack--right">
          <div class="gast-culinary__img-main">
            <img src="../assets/images/gastronomy/flavours-of-north-sulawesi.webp" alt="Flavours of North Sulawesi">
          </div>
        </div>
        <p class="gast-culinary__caption">A celebration of North Sulawesi's culinary heritage</p>
      </div>

    </div>
  </section>

  <!-- SEA-TO-TABLE PHILOSOPHY — Immersive Dark Layout -->
  <section class="gast-philosophy" id="sea-to-table">
    <div class="gast-philosophy__inner">
      <!-- Text panel — left -->
      <div class="gast-philosophy__text-panel reveal">
        <div class="gast-philosophy__text-inner">
          <span class="section-label">Our Philosophy</span>
          <h2>Sea-to-Table</h2>
          <p>At Pulisanbay, the distance between the ocean and your plate is measured not in miles, but in hours. Our
            chefs work directly with local fishermen who harvest sustainably from the waters of Pulisan Bay.</p>
          <p>This isn't just a culinary concept — it's a commitment. By partnering with local fishing communities,
            we ensure that traditional fishing practices are sustained and fishermen earn fair wages.</p>
          <p>From the morning's catch to the evening's masterpiece — experience the purest expression of coastal
            cuisine, enhanced with herbs and spices grown in our own resort gardens.</p>

          <div class="gast-philosophy__stats reveal reveal-delay-1">
            <div class="gast-philosophy__stat">
              <span class="gast-philosophy__stat-num">100%</span>
              <span class="gast-philosophy__stat-label">Local Sourced</span>
            </div>
            <div class="gast-philosophy__stat">
              <span class="gast-philosophy__stat-num">Daily</span>
              <span class="gast-philosophy__stat-label">Fresh Catch</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Image panel — right -->
      <div class="gast-philosophy__img-panel reveal reveal-delay-1">
        <img src="../assets/images/gastronomy/sea-to-table.webp" alt="Sea-to-table dining at Pulisanbay">
      </div>
    </div>
  </section>

  <!-- DIETARY ACCOMMODATIONS — Premium Card Grid -->
  <section class="gast-dietary" id="dietary-accommodations">
    <div class="gast-dietary__inner">
      <div class="gast-dietary__header reveal">
        <span class="section-label">Tailored for You</span>
        <h2>Dietary Accommodations</h2>
        <p>We believe every guest deserves an exceptional dining experience, regardless of dietary needs.</p>
      </div>

      <div class="gast-dietary__grid">
        <div class="gast-dietary__card reveal" data-num="01">
          <div class="gast-dietary__icon"
            style="background-image: linear-gradient(135deg, var(--forest-green), #22C55E);">
            <i class="fas fa-leaf"></i>
          </div>
          <h3>Vegetarian &amp; Vegan</h3>
          <p>Full vegetarian and vegan menus crafted with the same creativity and care as our signature dishes.</p>
        </div>

        <div class="gast-dietary__card reveal reveal-delay-1" data-num="02">
          <div class="gast-dietary__icon"
            style="background-image: linear-gradient(135deg, var(--savanna-gold), #B8860B);">
            <i class="fas fa-wheat-awn-circle-exclamation"></i>
          </div>
          <h3>Gluten-Free</h3>
          <p>Gluten-free options thoughtfully integrated across all meals without compromising flavor.</p>
        </div>

        <div class="gast-dietary__card reveal reveal-delay-2" data-num="03">
          <div class="gast-dietary__icon"
            style="background-image: linear-gradient(135deg, var(--oceanic-turquoise), var(--deep-sea));">
            <i class="fas fa-triangle-exclamation"></i>
          </div>
          <h3>Allergy-Aware</h3>
          <p>Detailed allergen information available. Our chefs can adapt any dish to meet your specific requirements.
          </p>
        </div>

        <div class="gast-dietary__card reveal reveal-delay-3" data-num="04">
          <div class="gast-dietary__icon" style="background-image: linear-gradient(135deg, #DC2626, #F97316);">
            <i class="fas fa-star-and-crescent"></i>
          </div>
          <h3>Halal Options</h3>
          <p>Halal-prepared meals available upon advance request, honoring your traditions with full respect.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/carousel.min.js' : 'js/carousel.js' ?>"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
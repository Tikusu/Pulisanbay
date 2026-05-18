<?php $pageTitle = "Culture — Living Heritage of Minahasa | Pulisanbay";
$pageDescription = "Discover the living heritage of Minahasa at Pulisanbay — Gitar Mama, Waruga monuments, and the Echoes of Minahasa exhibition celebrating culture reborn.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../assets/css/culture-enhanced.css" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <section class="hero">
    <div class="hero-bg" style="background-image:url('../assets/images/hero-culture.png')"></div>
    <div class="hero-content">
      <h1>Culture</h1>
      <p>Where the ancient rhythms of Minahasa still echo through the hills — and every tradition is a bridge between
        the past and the future.</p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>

  <!-- WARUGA & HERITAGE — Eco-Trails Layout -->
  <section class="cult-waruga" id="waruga-heritage">
    <div class="cult-waruga__bg"></div>
    <div class="cult-waruga__inner">

      <!-- Text column -->
      <div class="cult-waruga__content reveal">
        <span class="section-label">Ancient Heritage</span>
        <h2>Waruga &amp; Heritage</h2>
        <p>The Waruga are ancient Minahasa stone sarcophagi — carved burial monuments that stand as silent sentinels of
          a
          civilization that revered both its ancestors and the natural world.</p>
        <p>Our guided heritage tours explore the cultural significance of these remarkable monuments, connecting
          visitors
          with the spiritual beliefs, artistic traditions, and community values that have shaped Minahasa society for
          centuries.</p>

        <div class="cult-waruga__img-stack left-stack" style="margin-top: 3rem;">
          <div class="cult-waruga__img-main">
            <img src="../assets/images/hero-culture.png" style="aspect-ratio: 3/2;" alt="Waruga heritage">
          </div>
        </div>
      </div>

      <!-- Image column -->
      <div class="cult-waruga__img-col reveal reveal-delay-2">
        <div class="cult-waruga__img-stack right-stack">
          <div class="cult-waruga__img-main">
            <img src="../assets/images/culture/amphitheatre.webp" style="aspect-ratio: 2 / 3;"
              alt="Amphitheatre at Pulisanbay">
          </div>
        </div>
        <p class="cult-waruga__caption">Ancient traditions preserved in stone and spirit</p>
      </div>

    </div>
  </section>

  <!-- GITAR MAMA — Premium Split (Image Left, Text Right) -->
  <section class="cult-gitar" id="gitar-mama">
    <div class="cult-gitar__inner">
      <div class="cult-gitar__img-wrap reveal">
        <div class="cult-gitar__img-inner">
          <img src="../assets/images/hero-culture.png" alt="Gitar Mama — traditional Minahasa instrument">
        </div>
      </div>
      <div class="cult-gitar__content reveal reveal-delay-2">
        <span class="section-label">Musical Heritage</span>
        <h2>Gitar Mama</h2>
        <p>Standing at an awe-inspiring two meters tall, the Gitar Mama is more than a musical instrument — it is a
          cultural monument. This traditional Minahasa creation produces deep, resonant melodies that have echoed
          through
          the hills of North Sulawesi for generations.</p>
        <p>At Pulisanbay, the Gitar Mama is not simply displayed — it is played, taught, and celebrated. Guests are
          invited to experience live performances by local musicians and even try their hand at coaxing melodies from
          this magnificent instrument during interactive cultural workshops.</p>
      </div>
    </div>
  </section>

  <!-- ECHOES OF MINAHASA — Cards + Gallery -->
  <section class="cult-echoes" id="echoes-of-minahasa">
    <div class="cult-echoes__inner">
      <div class="cult-echoes__header reveal">
        <span class="section-label">Art Exhibition by WCL</span>
        <h2>Echoes of Minahasa:<br>From Forgotten to Reborn</h2>
        <p>A groundbreaking art exhibition by the Wallace Conservation Licoupang — celebrating the masterpieces of
          Minahasa culture that time nearly erased.</p>
      </div>

      <div class="cult-echoes__grid">
        <div class="cult-echoes__card reveal" data-num="01">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, #dc2626, var(--savanna-gold));">
            <i class="fas fa-masks-theater"></i>
          </div>
          <h3>Tarian Kabasaran</h3>
          <p>The fierce and sacred Kabasaran war dance — once performed by Minahasa warriors before battle. This
            powerful tradition is being revived and celebrated as a living art form.</p>
        </div>

        <div class="cult-echoes__card reveal reveal-delay-1" data-num="02">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, var(--savanna-gold), #b8860b);">
            <i class="fas fa-scroll"></i>
          </div>
          <h3>Kain Tenun Minahasa</h3>
          <p>The nearly-lost art of Minahasa hand-weaving — intricate textiles with patterns that encode ancestral
            wisdom, social status, and spiritual protection.</p>
        </div>

        <div class="cult-echoes__card reveal reveal-delay-2" data-num="03">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, var(--oceanic-turquoise), var(--deep-sea));">
            <i class="fas fa-palette"></i>
          </div>
          <h3>Living Art</h3>
          <p>Beyond preservation, this exhibition breathes new life into forgotten traditions — commissioning
            contemporary Minahasa artists to reinterpret ancestral motifs.</p>
        </div>
      </div>

      <!-- Image Gallery Slider -->
      <div class="swiper cult-echoes-swiper reveal" style="margin-top: 4rem;">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="cult-echoes__slide-img">
              <img src="../assets/images/hero-culture.png" alt="Kabasaran war dance">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cult-echoes__slide-img">
              <img src="../assets/images/hero-culture.png" alt="Kain Tenun weaving">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cult-echoes__slide-img">
              <img src="../assets/images/hero-culture.png" alt="Contemporary Minahasa art">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cult-echoes__slide-img">
              <img src="../assets/images/hero-culture.png" alt="Contemporary Minahasa art">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="cult-echoes__slide-img">
              <img src="../assets/images/hero-culture.png" alt="Contemporary Minahasa art">
            </div>
          </div>
        </div>
        <div class="swiper-pagination cult-echoes-pagination"></div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <div class="lightbox" id="lightbox"><button class="lightbox-close">&times;</button><img src="" alt=""></div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="../assets/js/carousel.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
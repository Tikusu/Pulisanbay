<?php
$pageTitle = "About Us — Pulisanbay | Regenerative Tourism Pioneer";
$pageDescription = "Learn about Pulisanbay's story as a pioneer of regenerative tourism in KEK Likupang, North Sulawesi. Our vision, mission, four pillars, and partners.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <link rel="preload" as="image" href="/assets/images/hero-about.png" imagesizes="100vw">
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <!--  -->
  <?php
  $heroImage = '/assets/images/about/about-hero.webp';
  $heroTitle = 'Special Economic Zone Likupang';
  $heroSubtitle = 'An eco-tourism master-planning project in North Sulawesi — designated as one of Indonesia\'s five Super Priority Destinations, positioned as the entrance gate of Eastern Indonesia\'s natural wonders.';
  $heroPosition = 'top';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- VIDEO PROFILE -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Watch</span>
        <h2>Video Profile SEZ Likupang</h2>
      </div>
      <div class="reveal" style="max-width:900px;margin:0 auto;">
        <div class="video-wrapper">
          <iframe src="https://www.youtube.com/embed/RTjHOOJ4SFs?si=b17L4JVIeUzEIBfH" title="SEZ Likupang Video Profile"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR STORY -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal">
          <span class="section-label">Our Story</span>
          <h2>A Dream Rooted in Devotion</h2>
          <p style="color:var(--slate);margin-bottom:1.25rem;">Rooted in the vision of Sintesa Group founder Johnny
            Widjaja, Minahasa Permai Resort Development was established in 1992 as a dream project to transform Pulisan
            Bay into a world-class eco-resort destination.</p>
          <p style="color:var(--slate);margin-bottom:1.25rem;">When the 1998 monetary crisis forced the project to a
            halt, the dream never faded. In 2014, the vision was revisited and expanded into a revolutionary concept of
            <em>"sustainability through nature culture conservation"</em>.
          </p>
          <p style="color:var(--slate);">In December 2019, the Government of Indonesia recognized this extraordinary
            vision, granting it the title of <strong>Special Economic Zone</strong> and <strong>Super Priority
              Destination</strong>. The development is now known as KEK Likupang — Pulisanbay.</p>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="position: relative; box-shadow:var(--shadow-lg); height: 100%;">
            <img src="/assets/images/about/johnny-widjaja.webp" alt="Johnny Widjaja" class="img-cover"
              style="height: 100%;">
            <div style="position: absolute; bottom: 2rem; left: 1.75rem; z-index: 10;">
              <span
                style="display: block; font-size: 12px; letter-spacing: 0.2em; text-transform: uppercase; color: #c9a96e; margin-bottom: 0.6rem; font-weight: 500; text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.9), 0 0 8px rgba(0, 0, 0, 0.7);">Sintesa
                Founder</span>
              <span
                style="display: block; font-family: 'Cormorant Garamond', serif; font-size: clamp(1.4rem, 2.5vw, 1.9rem); font-weight: 500; color: #f0ebe4; line-height: 1.2; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.8), 0 0 10px rgba(0, 0, 0, 0.5);">Johnny
                Widjaja</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VISION & MISSION -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="grid-2">
        <div class="reveal" style="padding:2.5rem;background:var(--earthy-sand);">
          <img src="/assets/images/logo/pulisanbay-logo-dark.webp" alt="Pulisanbay Logo"
            style="height: 56px; margin-bottom: 1.5rem; width: auto; object-fit: contain;">
          <h3 style="margin-bottom:1rem;">Our Vision</h3>
          <p style="color:var(--slate);">To create high-quality, sustainable living spaces that ensure every environment
            becomes a comfortable and safe place to live. We aspire to set the global standard (DPSP) for tourism that
            restores nature and empowers local communities, rather than exploiting them.</p>
        </div>
        <div class="reveal reveal-delay-1" style="padding:2.5rem;background:var(--earthy-sand);">
          <img src="/assets/images/logo/sez-logo-dark.webp" alt="SEZ Likupang Logo"
            style="height: 56px; margin-bottom: 1.5rem; width: auto; object-fit: contain;">
          <h3 style="margin-bottom:1rem;">Our Mission</h3>
          <p style="color:var(--slate);">To develop projects that not only meet our clients' needs but also improve the
            quality of life for surrounding communities. We are committed to using environmentally friendly construction
            practices and creating developments that actively uplift every life they touch.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SIX BIG IDEAS -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Executive Summary</span>
        <h2>Six Big Ideas</h2>
        <p>The visionary pillars driving the development of the Pulisanbay ecosystem.</p>
      </div>
      <div class="grid-3 reveal">
        <div class="idea-card">
          <img class="idea-card__img" src="/assets/images/six-ideas/Marine%20Eco%20Tourism.webp"
            alt="Marine eco-Tourism" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">01</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 01</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">Marine eco-Tourism</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">World-class diving and marine experiences in the heart of the Coral Triangle —
                one of Earth's richest marine biodiversity hotspots.</p>
            </div>
          </div>
        </div>
        <div class="idea-card reveal-delay-1">
          <img class="idea-card__img" src="/assets/images/six-ideas/Resort%20Villas%20&amp;%20Hotels.webp"
            alt="Resort Villas &amp; Hotel" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">02</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 02</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">Resort Villas &amp; Hotel</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">Luxury accommodations that harmonize with the landscape — from hillside
                bungalows to beachfront suites, crafted with local materials and heritage design.</p>
            </div>
          </div>
        </div>
        <div class="idea-card reveal-delay-2">
          <img class="idea-card__img" src="/assets/images/six-ideas/Sports%20Complex%20&amp;%20Equestrian.webp"
            alt="Sports Complex &amp; Equestrian" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">03</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 03</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">Sports Complex &amp; Equestrian</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">A world-class sports facility featuring equestrian grounds, fitness centers,
                and open-air arenas set against breathtaking natural backdrops.</p>
            </div>
          </div>
        </div>
        <div class="idea-card reveal-delay-1">
          <img class="idea-card__img" src="/assets/images/six-ideas/International%20Mice%20Events%20Venue.webp"
            alt="International MICE Events Venue" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">04</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 04</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">International MICE Events Venue</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">State-of-the-art meeting and convention facilities designed for international
                conferences, incentive events, and exhibitions.</p>
            </div>
          </div>
        </div>
        <div class="idea-card reveal-delay-2">
          <img class="idea-card__img" src="/assets/images/six-ideas/Ecological%20Preservation.webp"
            alt="Ecological Preservation" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">05</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 05</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">Ecological Preservation</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">Dedicated conservation programs protecting Wallacea's unique biodiversity —
                from the enigmatic Yaki to pristine coral reef systems.</p>
            </div>
          </div>
        </div>
        <div class="idea-card reveal-delay-3">
          <img class="idea-card__img" src="/assets/images/six-ideas/Recycle%20Water%20&amp;%203R%20Waste.webp"
            alt="Recycle Waste &amp; 3R" loading="lazy">
          <div class="idea-card__overlay-base"></div>
          <div class="idea-card__overlay-hover"></div>
          <span class="idea-card__number">06</span>
          <div class="idea-card__content">
            <span class="idea-card__tag">Idea 06</span>
            <h2 class="idea-card__title" style="font-size: 1.5rem;">Recycle Waste &amp; 3R</h2>
            <div class="idea-card__reveal">
              <p class="idea-card__desc">Comprehensive waste management through Reduce, Reuse, and Recycle initiatives —
                pioneering sustainable practices for the entire region.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOUR PILLARS -->
  <section class="section-lg four-pillars-section"
    style="background-image: url('/assets/images/four-pillars/pillar-bg.webp'); background-size: cover; background-position: right bottom; overflow: hidden;">
    <div class="section-header reveal" style="text-align: center; margin-bottom: 3rem; padding: 0 2rem;">
      <span class="section-label">Our Commitment</span>
      <h2>Through The Implementation<br>of These Four Pillars</h2>
    </div>

    <div class="pillars-swiper-container reveal">
      <div class="swiper pillars-swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1: Nature -->
          <div class="swiper-slide pillar-slide">
            <div class="pillar-slide-img">
              <img src="/assets/images/four-pillars/Nature.webp" alt="Nature">
            </div>
            <div class="pillar-slide-content">
              <h3>NATURE</h3>
              <p>Maintaining pristine environments by preserving local natural features such as clear water beaches,
                undulating hills, green forests, and underwater ecosystems.</p>
            </div>
          </div>

          <!-- Slide 2: Culture -->
          <div class="swiper-slide pillar-slide">
            <div class="pillar-slide-img">
              <img src="/assets/images/four-pillars/Culture.webp" alt="Culture">
            </div>
            <div class="pillar-slide-content">
              <h3>CULTURE</h3>
              <p>Reviving local culture rooted in the spirit of "Si Tou Timou Tumou Tou" — focusing on community
                inclusivity and the preservation of cultural heritage and biodiversity.</p>
            </div>
          </div>

          <!-- Slide 3: Destination -->
          <div class="swiper-slide pillar-slide">
            <div class="pillar-slide-img">
              <img src="/assets/images/four-pillars/Destination.webp" alt="Destination">
            </div>
            <div class="pillar-slide-content">
              <h3>DESTINATION</h3>
              <p>Designing distinctive attractions and accommodations to establish Pulisanbay as the premier tourism
                gateway in Eastern Indonesia.</p>
            </div>
          </div>

          <!-- Slide 4: Memorable -->
          <div class="swiper-slide pillar-slide">
            <div class="pillar-slide-img">
              <img src="/assets/images/four-pillars/Memorable.webp" alt="Memorable">
            </div>
            <div class="pillar-slide-content">
              <h3>MEMORABLE</h3>
              <p>Dedicated to creating unforgettable experiences for visitors from the very first moment they enter the
                gates through to their adventures across Pulisanbay.</p>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination pillars-pagination"></div>
      </div>

      <!-- Custom Navigation -->
      <button class="pillars-nav pillars-nav-prev" aria-label="Previous"><i class="fas fa-angle-left"></i></button>
      <button class="pillars-nav pillars-nav-next" aria-label="Next"><i class="fas fa-angle-right"></i></button>
    </div>
  </section>

  <!-- DEVELOPER -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal" style="margin-bottom: 1rem;"><span class="section-label">Developer &amp;
          Partnership</span>
      </div>
      <div class="reveal" style="max-width:800px;margin:0 auto;text-align:center;">
        <img src="/assets/images/about/member-of-sintesa.webp" alt="Minahasa Permai Resort Development"
          style="max-width: 80%; height: auto; margin-bottom: 0rem;">
        <p style="color:var(--slate);max-width:650px;margin:0 auto;">Our team at Pulisanbay — SEZ Likupang consists of
          experienced professionals in the field of real estate development. With expertise in design, construction, and
          project management, PT Minahasa Permai Resort Development (MPRD), a proud member of the Sintesa Group, is
          ready to provide the best solutions for every client's needs.</p>
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="section section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Collaborations</span>
        <h2>Our Partners</h2>
        <p>Strategic partnerships that strengthen our commitment to sustainable development and world-class experiences.
        </p>
      </div>
      <div class="partners-grid reveal">
        <div class="partner-card">
          <img src="/assets/images/partnerships/yayasan_indonesia_biru-logo.webp" alt="Indonesia Biru Foundation"
            class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">Indonesia Biru Foundation</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/WCL.webp" alt="Wallace Conservation Licoupang" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">Wallace Conservation Licoupang</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/mitratel-logo.webp" alt="Mitratel" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">Mitratel</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/PJLEnviro-logo.webp" alt="PJLEnviro" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">PJLEnviro</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/cirad-logo.webp" alt="Cirad" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">Cirad</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/poralu-logo.webp" alt="Poralu Marine" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">Poralu Marine</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/kabupaten_minahasa_utara-logo.webp" alt="PemKab Minahasa Utara"
            class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">PemKab Minahasa Utara</span>
        </div>
        <div class="partner-card">
          <img src="/assets/images/partnerships/unsrat-logo-2-2.webp" alt="UNSRAT" class="partner-logo">
          <span style="font-weight:600;font-size:0.9rem;">UNSRAT</span>
        </div>
      </div>
    </div>
  </section>

  <!-- LOCATION & ACCESSIBILITY -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal" style="margin-bottom: 3rem;">
        <span class="section-label">Location</span>
        <h2>Find Us</h2>
        <p>Located in the heart of Likupang SEZ, Desa Pulisan, North Sulawesi. Pulisanbay is the gateway to Eastern Indonesia's natural wonders.</p>
      </div>
      
      <div class="reveal" style="overflow: hidden; box-shadow: 0 15px 35px rgba(0,0,0,0.08);">
        <iframe 
          src="https://maps.google.com/maps?q=KEK%20Pariwisata%20Likupang,%20North%20Sulawesi&t=k&z=14&ie=UTF8&iwloc=&output=embed" 
          width="100%" 
          height="500" 
          style="border:0; display: block; filter: grayscale(50%) contrast(95%); transition: filter 0.3s ease;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          onmouseover="this.style.filter='none'"
          onmouseout="this.style.filter='grayscale(15%) contrast(95%)'">
        </iframe>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script src="/assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
  <script src="/assets/<?= $isProd ? 'dist/js/carousel.min.js' : 'js/carousel.js' ?>"></script>
</body>

</html>
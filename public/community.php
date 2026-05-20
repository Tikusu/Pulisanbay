<?php $pageTitle = "Community — Empowering Local Lives | Pulisanbay";
$pageDescription = "Pulisanbay's community empowerment initiatives — 90% local employment, homestay programs, and ranger training in Desa Marinsow, Kinunang, and Pulisan.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="../assets/<?= $isProd ? 'dist/css/culture-enhanced.min.css' : 'css/culture-enhanced.css' ?>" />
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <?php
  $heroImage = '../assets/images/hero-community.png';
  $heroTitle = 'Community';
  $heroSubtitle = '"Si Tou Timou Tumou Tou" — People live to help others live. The Minahasa philosophy that guides everything we do.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal"><span class="section-label">Local Empowerment</span>
          <h2>Prosperity Through Partnership</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">At Pulisanbay, we believe that true regenerative tourism
            must uplift the communities that make it possible. Our development is anchored in the three villages —
            <strong>Desa Marinsow</strong>, <strong>Kinunang</strong>, and <strong>Pulisan</strong>.
          </p>
          <p style="color:var(--slate);margin-bottom:2rem;">Through employment, training, and partnerships, we ensure
            that the benefits of tourism flow directly to the people who have been the stewards of this land for
            generations.</p>
          <div
            style="display:inline-flex;align-items:center;gap:1rem;padding:1.25rem 2rem;background:linear-gradient(135deg,var(--oceanic-turquoise),var(--deep-sea));color:var(--white);">
            <span style="font-size:3rem;font-family:'Cormorant Garamond',serif;font-weight:600;">90%</span><span
              style="font-size:0.95rem;line-height:1.3;">of all employees<br>are local residents</span>
          </div>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img src="../assets/images/hero-community.png"
              alt="Local Community" class="img-cover" style="height:460px;"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Our Initiatives</span>
        <h2>Building Futures Together</h2>
      </div>
      <div class="grid-2 reveal">
        <div class="card reveal-delay-1">
          <div class="card-body" style="padding:2.5rem;">
            <div
              style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,var(--forest-green),#22C55E);display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
              <i class="fas fa-binoculars" style="color:var(--white);font-size:1.2rem;"></i>
            </div>
            <h3>Local Ranger Training</h3>
            <p style="color:var(--slate);">We train local villagers as certified nature rangers and conservation guides
              — transforming community members into environmental stewards.</p>
          </div>
        </div>
        <div class="card reveal-delay-2">
          <div class="card-body" style="padding:2.5rem;">
            <div
              style="width:56px;height:56px;border-radius:50%;background:linear-gradient(135deg,var(--savanna-gold),#B8860B);display:flex;align-items:center;justify-content:center;margin-bottom:1.5rem;">
              <i class="fas fa-graduation-cap" style="color:var(--white);font-size:1.2rem;"></i>
            </div>
            <h3>Skills Development</h3>
            <p style="color:var(--slate);">From hospitality training to marine conservation science — comprehensive
              skill-building programs for meaningful careers.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-dark">
    <div class="container">
      <div class="section-header reveal"><span class="section-label" style="color:var(--savanna-gold);">Partner
          Villages</span>
        <h2>The Heart of Pulisanbay</h2>
      </div>
      <div class="grid-3 reveal">
        <div class="cult-echoes__card" style="text-align: center;">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, var(--oceanic-turquoise), var(--deep-sea)); display: block; margin: 0 auto 1rem;">
            <i class="fas fa-home"></i>
          </div>
          <h3>Desa Marinsow</h3>
          <p>The welcoming gateway village — home to our homestay families and local staff.</p>
        </div>
        <div class="cult-echoes__card reveal-delay-1" style="text-align: center;">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, var(--savanna-gold), #b8860b); display: block; margin: 0 auto 1rem;">
            <i class="fas fa-anchor"></i>
          </div>
          <h3>Kinunang</h3>
          <p>A fishing village whose sustainable practices inspire our sea-to-table philosophy.</p>
        </div>
        <div class="cult-echoes__card reveal-delay-2" style="text-align: center;">
          <div class="cult-echoes__icon"
            style="background-image: linear-gradient(135deg, var(--forest-green), #22c55e); display: block; margin: 0 auto 1rem;">
            <i class="fas fa-mountain"></i>
          </div>
          <h3>Pulisan</h3>
          <p>The namesake village where community traditions and cultural ceremonies continue to thrive.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
<?php $pageTitle = "Culture — Living Heritage of Minahasa | Pulisanbay";
$pageDescription = "Discover the living heritage of Minahasa at Pulisanbay — Gitar Mama, Waruga monuments, and the Echoes of Minahasa exhibition celebrating culture reborn.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

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

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="reveal"><span class="section-label">Musical Heritage</span>
          <h2>Gitar Mama</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Standing at an awe-inspiring two meters tall, the Gitar
            Mama is more than a musical instrument — it is a cultural monument. This traditional Minahasa creation
            produces deep, resonant melodies that have echoed through the hills of North Sulawesi for generations.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">At Pulisanbay, the Gitar Mama is not simply displayed — it
            is played, taught, and celebrated. Guests are invited to experience live performances by local musicians and
            even try their hand at coaxing melodies from this magnificent instrument during interactive cultural
            workshops.</p>
          <!-- <a href="contact.php" class="btn-cta-dark">Book a Cultural Session <i
              class="fas fa-arrow-right"></i></a> -->
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img src="../assets/images/hero-culture.png"
              alt="Gitar Mama" class="img-cover" style="height:460px;"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal reveal-delay-1" style="order:1;">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img src="../assets/images/hero-culture.png"
              alt="Waruga Heritage" class="img-cover" style="height:420px;"></div>
        </div>
        <div class="reveal" style="order:2;"><span class="section-label">Ancient Heritage</span>
          <h2>Waruga &amp; Heritage</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">The Waruga are ancient Minahasa stone sarcophagi — carved
            burial monuments that stand as silent sentinels of a civilization that revered both its ancestors and the
            natural world.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Our guided heritage tours explore the cultural significance
            of these remarkable monuments, connecting visitors with the spiritual beliefs, artistic traditions, and
            community values that have shaped Minahasa society for centuries.</p>
          <!-- <a href="contact.php"
            class="btn-cta-dark">Join a Heritage Tour <i class="fas fa-arrow-right"></i></a> -->
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-dark">
    <div class="container">
      <div class="section-header reveal"><span class="section-label" style="color:var(--savanna-gold);">Art Exhibition
          by WCL</span>
        <h2>Echoes of Minahasa:<br>From Forgotten to Reborn</h2>
        <p>A groundbreaking art exhibition by the Wallace Conservation Licoupang — celebrating the masterpieces of
          Minahasa culture that time nearly erased.</p>
      </div>
      <div class="grid-3 reveal">
        <div class="pillar-card">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--savanna-gold),#B8860B);"><i
              class="fas fa-masks-theater"></i></div>
          <h3>Tarian Kabasaran</h3>
          <p>The fierce and sacred Kabasaran war dance — once performed by Minahasa warriors before battle. This
            powerful tradition is being revived and celebrated as a living art form.</p>
        </div>
        <div class="pillar-card reveal-delay-1">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--savanna-gold),#B8860B);"><i
              class="fas fa-scroll"></i></div>
          <h3>Kain Tenun Minahasa</h3>
          <p>The nearly-lost art of Minahasa hand-weaving — intricate textiles with patterns that encode ancestral
            wisdom, social status, and spiritual protection.</p>
        </div>
        <div class="pillar-card reveal-delay-2">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--savanna-gold),#B8860B);"><i
              class="fas fa-palette"></i></div>
          <h3>Living Art</h3>
          <p>Beyond preservation, this exhibition breathes new life into forgotten traditions — commissioning
            contemporary Minahasa artists to reinterpret ancestral motifs.</p>
        </div>
      </div>
    </div>
  </section>

  <?php $ctaTitle = "Experience the Soul of Minahasa";
  $ctaText = "Culture at Pulisanbay is not a performance — it is an invitation to connect with the living heartbeat of a people and their land.";
  $ctaLabel = "Plan Your Cultural Journey";
  $ctaGradient = "linear-gradient(135deg,var(--savanna-gold),#B8860B)";
  include __DIR__ . '/../includes/cta-banner.php'; ?>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="../assets/js/main.js"></script>
</body>

</html>
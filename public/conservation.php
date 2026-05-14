<?php $pageTitle = "Conservation — Protecting Wallacea | Pulisanbay";
$pageDescription = "Learn about Pulisanbay's conservation programs — Wallace Conservation Licoupang (WCL) and 3R waste management initiatives protecting North Sulawesi's biodiversity.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <section class="hero">
    <div class="hero-bg" style="background-image:url('../assets/images/hero-conservation.png')"></div>
    <div class="hero-content">
      <h1>Conservation</h1>
      <p>At Pulisanbay, conservation isn't a side project — it is the very foundation upon which everything is built.
      </p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section" style="align-items: start;">
        <div class="reveal"><span class="section-label">Research &amp; Education</span>
          <h2>Wallace Conservation Licoupang</h2>
          <p style="color:var(--slate);margin-bottom:1.5rem;">Named in honor of Alfred Russel Wallace — the naturalist
            who first documented the extraordinary biodiversity of this region — the Wallace Conservation Licoupang
            (WCL) serves as Pulisanbay's dedicated center for ecosystem education and regional biodiversity research.
          </p>
          <p style="color:var(--slate);margin-bottom:1.5rem;">WCL conducts field studies on endemic species, hosts
            educational programs for visitors and local students, and collaborates with international conservation
            organizations to protect the Wallacea bioregion's unique ecological heritage.</p>
          <p style="color:var(--slate);margin-bottom:2rem;">Guests are invited to participate in guided conservation
            walks, attend wildlife briefings, and even contribute to citizen science projects during their stay.</p>
          <a target="_blank" href="https://indonesiabiru.org/our-projects#e850b215-d1bb-4628-bcfe-7fb9dd046fc8"
            class="btn-cta-dark" style="background: var(--forest-green);">More About WCL <i
              class="fas fa-arrow-right"></i></a>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="overlap-gallery">
            <div class="overlap-img overlap-main">
              <img src="../assets/images/conservation/WCL-rangers.webp" alt="WCL Rangers">
            </div>
            <div class="overlap-img overlap-sub1">
              <img src="../assets/images/conservation/hidden-camera.webp" alt="Tree Tagging">
            </div>
            <div class="overlap-img overlap-sub2">
              <img src="../assets/images/conservation/tree-tagging.webp" alt="Hidden Camera">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Sustainability</span>
        <h2>3R Initiatives</h2>
        <p>Reduce. Reuse. Recycle. Our comprehensive approach to environmental stewardship ensures that every aspect of
          Pulisanbay's operation treads lightly on the earth.</p>
      </div>
      <div class="grid-3 reveal">
        <div class="pillar-card">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--forest-green),#22C55E);"><i
              class="fas fa-arrows-down-to-line"></i></div>
          <h3>Reduce</h3>
          <p>Minimizing waste generation through thoughtful procurement, eliminating single-use plastics, and adopting
            sustainable building materials.</p>
        </div>
        <div class="pillar-card reveal-delay-1">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--oceanic-turquoise),var(--deep-sea));">
            <i class="fas fa-rotate"></i>
          </div>
          <h3>Reuse</h3>
          <p>Implementing creative reuse programs — from composting organic waste for resort gardens to repurposing
            construction materials.</p>
        </div>
        <div class="pillar-card reveal-delay-2">
          <div class="pillar-icon" style="background:linear-gradient(135deg,var(--savanna-gold),#B8860B);"><i
              class="fas fa-recycle"></i></div>
          <h3>Recycle</h3>
          <p>State-of-the-art waste processing facilities ensure that recyclable materials are properly sorted,
            processed, and reintroduced into the supply chain.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-dark">
    <div class="container">
      <div class="split-section">
        <div class="reveal reveal-delay-1">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img src="../assets/images/hero-about.png"
              alt="Forest Preservation" class="img-cover" style="height:400px;"></div>
        </div>
        <div class="reveal"><span class="section-label" style="color:var(--savanna-gold);">Forest Stewardship</span>
          <h2>Protecting the Protected Forest</h2>
          <p style="margin-bottom:1.5rem;">Pulisanbay's development is intrinsically linked to the preservation of the
            surrounding protected forest — a vital habitat for endemic species and a crucial carbon sink for the region.
          </p>
          <p style="margin-bottom:2rem;">Through active reforestation programs, anti-poaching patrols with trained local
            rangers, and partnerships with international conservation bodies, we ensure that our presence enhances —
            rather than diminishes — the ecological integrity of this irreplaceable landscape.</p><a href="contact.php"
            class="btn-cta-outline">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <?php $ctaTitle = "Join the Conservation Movement";
  $ctaText = "Your visit to Pulisanbay directly supports the preservation of one of Earth's most precious ecosystems.";
  $ctaLabel = "Get Involved";
  $ctaGradient = "linear-gradient(135deg,var(--forest-green),var(--deep-sea))";
  include __DIR__ . '/../includes/cta-banner.php'; ?>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="../assets/js/main.js"></script>
</body>

</html>
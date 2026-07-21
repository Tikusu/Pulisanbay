<?php
/**
 * navbar.php — Shared navigation bar
 * 
 * Set $navStyle before including to control the initial state:
 *   $navStyle = ""         → transparent (default, for pages with hero)
 *   $navStyle = "scrolled" → white background (for pages without hero, e.g. contact)
 */
$navClass = !empty($navStyle) ? "navbar $navStyle" : "navbar";
?>
<nav class="<?= $navClass ?>" id="navbar">

  <!-- LEFT: Logo -->
  <a href="/" class="logo">
    <img src="/assets/images/logo/pulisanbay-sez-logo-white.webp" alt="Pulisanbay Logo" class="logo-white">
    <img src="/assets/images/logo/pulisanbay-sez-logo-dark.webp" alt="Pulisanbay Logo" class="logo-dark">
  </a>

  <!-- CENTER: Semi-circular fan menu (absolutely centered) -->
  <div class="fan-menu" id="fanMenu" aria-label="Navigation Menu">

    <!-- Trigger: icon image -->
    <button class="fan-trigger" id="fanTrigger" aria-expanded="false" aria-haspopup="true">
      <img src="/assets/images/logo/icon-full.webp" alt="Menu" class="fan-trigger-icon">
    </button>

    <!-- Fan blades (5 items in semi-circular arc) -->
    <div class="fan-items" id="fanItems" role="menu">

      <!-- Blade 0: Home (far left, 180°) -->
      <div class="fan-item" data-index="0" role="none">
        <a href="/" class="fan-link" role="menuitem">
          <span class="fan-icon"><i class="fas fa-home"></i></span>
          <span class="fan-label">Home</span>
        </a>
      </div>

      <!-- Blade 1: Accommodation (upper-left, 135°) -->
      <div class="fan-item fan-item--has-sub" data-index="1" role="none">
        <button class="fan-link fan-sub-toggle" aria-expanded="false" role="menuitem">
          <span class="fan-icon"><i class="fas fa-bed"></i></span>
          <span class="fan-label">Stay</span>
        </button>
        <div class="fan-subdropdown" role="menu" aria-label="Accommodation">
          <a href="/the-pulisan" role="menuitem">The Pulisan</a>
          <a href="/noma-campsite" role="menuitem">NOMA Campsite</a>
        </div>
      </div>

      <!-- Blade 2: Experiences (bottom center, 90°) -->
      <div class="fan-item fan-item--has-sub" data-index="2" role="none">
        <button class="fan-link fan-sub-toggle" aria-expanded="false" role="menuitem">
          <span class="fan-icon"><i class="fas fa-compass"></i></span>
          <span class="fan-label">Explore</span>
        </button>
        <div class="fan-subdropdown" role="menu" aria-label="Experiences">
          <a href="/activities" role="menuitem">Activities</a>
          <a href="/conservation" role="menuitem">Conservation</a>
          <a href="/culture" role="menuitem">Culture</a>
          <a href="/gastronomy" role="menuitem">Gastronomy</a>
        </div>
      </div>

      <!-- Blade 3: What's On (upper-right, 45°) -->
      <div class="fan-item fan-item--has-sub" data-index="3" role="none">
        <button class="fan-link fan-sub-toggle" aria-expanded="false" role="menuitem">
          <span class="fan-icon"><i class="fas fa-calendar-alt"></i></span>
          <span class="fan-label">What's On</span>
        </button>
        <div class="fan-subdropdown" role="menu" aria-label="What's On">
          <a href="/community" role="menuitem">Community</a>
          <a href="/development" role="menuitem">Development</a>
        </div>
      </div>

      <!-- Blade 4: About (far right, 0°) -->
      <div class="fan-item" data-index="4" role="none">
        <a href="/about" class="fan-link" role="menuitem">
          <span class="fan-icon"><i class="fas fa-leaf"></i></span>
          <span class="fan-label">About</span>
        </a>
      </div>

    </div><!-- /.fan-items -->
  </div><!-- /.fan-menu -->

  <!-- RIGHT: CTA + Hamburger (mobile) -->
  <div class="navbar-right">
    <a href="/contact" class="btn-cta">Inquire Now</a>
    <button class="hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>

</nav>

<!-- Mobile slide-out nav (for ≤1024px) -->
<ul class="nav-links" id="navLinks">
  <li><a href="/">Home</a></li>
  <li><a href="/about">About Us</a></li>
  <li class="mobile-dropdown">
    <a href="#" class="dropdown-toggle">Accommodation <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
    <div class="dropdown-menu">
      <a href="/the-pulisan">The Pulisan</a>
      <a href="/noma-campsite">NOMA Campsite</a>
    </div>
  </li>
  <li class="mobile-dropdown">
    <a href="#" class="dropdown-toggle">Experiences <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
    <div class="dropdown-menu">
      <a href="/activities">Activities</a>
      <a href="/conservation">Conservation</a>
      <a href="/culture">Culture</a>
      <a href="/gastronomy">Gastronomy</a>
    </div>
  </li>
  <li class="mobile-dropdown">
    <a href="#" class="dropdown-toggle">What's On <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
    <div class="dropdown-menu">
      <a href="/community">Community</a>
      <a href="/development">Development</a>
    </div>
  </li>
  <li><a href="/contact" class="btn-cta">Inquire Now</a></li>
</ul>
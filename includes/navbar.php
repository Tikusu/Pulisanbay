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
  <a href="/" class="logo">
    <img src="../assets/images/logo/pulisanbay-sez-logo-white.webp" alt="Pulisanbay Logo" class="logo-white">
    <img src="../assets/images/logo/pulisanbay-sez-logo-dark.webp" alt="Pulisanbay Logo" class="logo-dark">
  </a>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links" id="navLinks">
    <li><a href="/">Home</a></li>
    <li><a href="/about">About Us</a></li>
    <li>
      <a href="#" class="dropdown-toggle">Accommodation <i class="fas fa-chevron-down"
          style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="/the-pulisan">The Pulisan</a>
        <a href="/noma-campsite">NOMA Campsite</a>
      </div>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">Experiences <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="/activities">Activities</a>
        <a href="/conservation">Conservation</a>
        <a href="/culture">Culture</a>
        <a href="/gastronomy">Gastronomy</a>
      </div>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">What's On <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="/community">Community</a>
        <a href="/development">Development</a>
      </div>
    </li>
    <li><a href="/contact" class="btn-cta">Inquire Now</a></li>
  </ul>
</nav>
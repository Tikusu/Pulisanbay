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
  <a href="index.php" class="logo">
    <img src="../assets/images/logo/pulisanbay-sez-logo-white.webp" alt="Pulisanbay Logo" class="logo-white">
    <img src="../assets/images/logo/pulisanbay-sez-logo-dark.webp" alt="Pulisanbay Logo" class="logo-dark">
  </a>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
  <ul class="nav-links" id="navLinks">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li>
      <a href="#" class="dropdown-toggle">Accommodation <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="the-pulisan.php">The Pulisan</a>
        <a href="noma-campsite.php">NOMA Campsite</a>
      </div>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">Experiences <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="activities.php">Activities</a>
        <a href="conservation.php">Conservation</a>
        <a href="culture.php">Culture</a>
        <a href="gastronomy.php">Gastronomy</a>
      </div>
    </li>
    <li>
      <a href="#" class="dropdown-toggle">What's On <i class="fas fa-chevron-down" style="font-size:0.65rem"></i></a>
      <div class="dropdown-menu">
        <a href="community.php">Community</a>
        <a href="development.php">Development</a>
      </div>
    </li>
    <li><a href="contact.php" class="btn-cta">Inquire Now</a></li>
  </ul>
</nav>

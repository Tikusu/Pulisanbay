<?php $pageTitle = "Upper Bungalow — The Pulisan | Pulisanbay";
$pageDescription = "The Upper Bungalow at The Pulisan — elevated hillside retreat with panoramic ocean views at Pulisanbay, KEK Likupang.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/the-pulisan/upper-bungalow/upper-bungalow-hero.webp';
  $heroTitle = 'Upper Bungalow';
  $heroSubtitle = 'Elevated among the hillside canopy — where every sunrise feels like it was painted just for you.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Gallery</span>
        <h2>Your Perch Above Paradise</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><img src="../assets/images/room-upper-bungalow.png" alt="Upper Bungalow Exterior">
        </div>
        <div class="gallery-item"><img src="../assets/images/room-minahasa-suite.png" alt="Upper Bungalow Interior">
        </div>
        <div class="gallery-item"><img src="../assets/images/hero-accommodation.png" alt="Upper Bungalow View"></div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal inclusions--teal"><span class="section-label">What's Included</span>
          <h2>Your Stay Includes</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">The Upper Bungalow offers a premium hillside experience with
            panoramic views and elevated luxury.</p>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-bed"></i></div>
            <div>
              <h4>King Bed with Ocean View</h4>
              <p>Luxurious king bed with premium linens and ocean-facing orientation.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-mountain-sun"></i></div>
            <div>
              <h4>Private Balcony</h4>
              <p>A spacious private balcony with stunning views of Pulisan Bay and the surrounding hills.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-utensils"></i></div>
            <div>
              <h4>All-Day Meals &amp; Snacks</h4>
              <p>Breakfast, lunch, and dinner for 2 persons; and two times snacks for 2 persons.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-mug-hot"></i></div>
            <div>
              <h4>Free-Flow Refreshments</h4>
              <p>Complimentary mineral water, house coffee, and house tea throughout your stay.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-car-side"></i></div>
            <div>
              <h4>Complimentary Airport Transfer</h4>
              <p>Return airport transfer with minimum 8-night stay. Private car, max 4 persons.</p>
            </div>
          </div>

          <!-- More Amenities -->
          <div class="more-amenities" id="moreAmenitiesUpper" style="display:none;">
            <div class="amenities-grid">
              <div class="amenity-chip"><i class="fas fa-expand"></i><span>60 sqm</span></div>
              <div class="amenity-chip"><i class="fas fa-snowflake"></i><span>AC</span></div>
              <div class="amenity-chip"><i class="fas fa-wind"></i><span>Hair Dryer</span></div>
              <div class="amenity-chip"><i class="fas fa-faucet"></i><span>Hot/Cold Water</span></div>
              <div class="amenity-chip"><i class="fas fa-shower"></i><span>Shower</span></div>
              <div class="amenity-chip"><i class="fas fa-tv"></i><span>Smart TV</span></div>
              <div class="amenity-chip"><i class="fas fa-wifi"></i><span>Wifi Access</span></div>
            </div>
          </div>
          <button class="btn-more-amenities" id="toggleAmenitiesUpper"
            data-panel="moreAmenitiesUpper">
            <span class="toggle-label">More...</span>
          </button>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/room-upper-bungalow.png" alt="Upper Bungalow" class="img-cover"
              style="height:500px;"></div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $policyAccent = 'var(--oceanic-turquoise)';
  $termsExtra = 'Elevated location — involves stairs and hillside walkways';
  $policyExtra = 'Non-smoking property';
  include __DIR__ . '/../includes/room-policies.php';
  ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <?php include __DIR__ . '/../includes/lightbox.php'; ?>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
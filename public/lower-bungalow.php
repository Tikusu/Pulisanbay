<?php $pageTitle = "Lower Bungalow — The Pulisan | Pulisanbay";
$pageDescription = "The Lower Bungalow at The Pulisan — an intimate tropical escape with private decks and garden views at Pulisanbay, KEK Likupang.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/the-pulisan/lower-bungalow/lower-bungalow-hero.webp';
  $heroTitle = 'Lower Bungalow';
  $heroSubtitle = 'Nestled among tropical gardens — an intimate escape where nature is your nearest neighbor.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Gallery</span>
        <h2>Where the Garden Meets the Sea</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><img src="../assets/images/room-lower-bungalow.png" alt="Lower Bungalow Exterior">
        </div>
        <div class="gallery-item"><img src="../assets/images/room-club.png" alt="Lower Bungalow Interior"></div>
        <div class="gallery-item"><img src="../assets/images/hero-accommodation.png" alt="Lower Bungalow View"></div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal inclusions--teal"><span class="section-label">What's Included</span>
          <h2>Your Stay Includes</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">Every Lower Bungalow stay is designed to offer the perfect
            balance of rustic charm and modern comfort.</p>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-bed"></i></div>
            <div>
              <h4>Premium Bedding</h4>
              <p>King-size bed or twin bed with luxury linens and handwoven local textile accents.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-chair"></i></div>
            <div>
              <h4>Private Outdoor Seating</h4>
              <p>Your own outdoor seating area surrounded by lush tropical gardens.</p>
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
          <div class="more-amenities" id="moreAmenitiesLower" style="display:none;">
            <div class="amenities-grid">
              <div class="amenity-chip"><i class="fas fa-expand"></i><span>50 sqm</span></div>
              <div class="amenity-chip"><i class="fas fa-snowflake"></i><span>AC</span></div>
              <div class="amenity-chip"><i class="fas fa-wind"></i><span>Hair Dryer</span></div>
              <div class="amenity-chip"><i class="fas fa-faucet"></i><span>Hot/Cold Water</span></div>
              <div class="amenity-chip"><i class="fas fa-shower"></i><span>Shower</span></div>
              <div class="amenity-chip"><i class="fas fa-tv"></i><span>Smart TV</span></div>
              <div class="amenity-chip"><i class="fas fa-wifi"></i><span>Wifi Access</span></div>
            </div>
          </div>
          <button class="btn-more-amenities" id="toggleAmenitiesLower"
            data-panel="moreAmenitiesLower">
            <span class="toggle-label">More...</span>
          </button>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/room-lower-bungalow.png" alt="Lower Bungalow" class="img-cover"
              style="height:500px;"></div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $policyAccent = 'var(--oceanic-turquoise)';
  $termsExtra = 'Bungalow features traditional wood construction';
  $policyExtra = 'Non-smoking property — designated areas available';
  include __DIR__ . '/../includes/room-policies.php';
  ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <?php include __DIR__ . '/../includes/lightbox.php'; ?>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
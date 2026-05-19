<?php $pageTitle = "Club Room — The Pulisan | Pulisanbay";
$pageDescription = "The Club Room at The Pulisan — modern elegance meets tropical warmth with garden views and premium amenities at Pulisanbay.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/the-pulisan/club-room/club-room-hero.webp';
  $heroTitle = 'Club Room';
  $heroSubtitle = 'Modern elegance meets tropical warmth — a refined retreat wrapped in the gentle embrace of nature.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Gallery</span>
        <h2>A Space Designed for Serenity</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><img src="../assets/images/room-club.png" alt="Club Room Interior"></div>
        <div class="gallery-item"><img src="../assets/images/hero-accommodation.png" alt="Club Room View"></div>
        <div class="gallery-item"><img src="../assets/images/room-lower-bungalow.png" alt="Club Room Details"></div>
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal inclusions--teal"><span class="section-label">What's Included</span>
          <h2>Your Stay Includes</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">Every Club Room reservation comes with everything you need
            for a comfortable, enriching stay at Pulisanbay.</p>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-bed"></i></div>
            <div>
              <h4>Premium Bedding</h4>
              <p>King-size bed or twin bed with luxurious linens and plush pillows.</p>
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
          <div class="more-amenities" id="moreAmenitiesClub" style="display:none;">
            <div class="amenities-grid">
              <div class="amenity-chip"><i class="fas fa-expand"></i><span>27 sqm</span></div>
              <div class="amenity-chip"><i class="fas fa-snowflake"></i><span>AC</span></div>
              <div class="amenity-chip"><i class="fas fa-wind"></i><span>Hair Dryer</span></div>
              <div class="amenity-chip"><i class="fas fa-faucet"></i><span>Hot/Cold Water</span></div>
              <div class="amenity-chip"><i class="fas fa-shower"></i><span>Shower</span></div>
              <div class="amenity-chip"><i class="fas fa-tv"></i><span>Smart TV</span></div>
              <div class="amenity-chip"><i class="fas fa-wifi"></i><span>Wifi Access</span></div>
            </div>
          </div>
          <button class="btn-more-amenities" id="toggleAmenitiesClub"
            data-panel="moreAmenitiesClub">
            <span class="toggle-label">More...</span>
          </button>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img src="../assets/images/room-club.png"
              alt="Club Room" class="img-cover" style="height:500px;"></div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $policyAccent = 'var(--oceanic-turquoise)';
  $policyExtra = 'Non-smoking room — designated areas available';
  include __DIR__ . '/../includes/room-policies.php';
  ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <?php include __DIR__ . '/../includes/lightbox.php'; ?>
  <script src="../assets/js/main.js"></script>
</body>

</html>
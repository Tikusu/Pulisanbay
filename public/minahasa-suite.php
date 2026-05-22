<?php $pageTitle = "Minahasa Suite — The Pulisan | Pulisanbay";
$pageDescription = "The Minahasa Suite — the pinnacle of Pulisanbay luxury with a private terrace, freestanding bathtub, and breathtaking ocean panoramas.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '../assets/images/the-pulisan/minahasa-suite/minahasa-suite-hero.webp';
  $heroTitle = 'Minahasa Suite';
  $heroSubtitle = 'The pinnacle of Pulisanbay luxury — a grand suite inspired by Minahasa heritage, where opulence and tradition converge.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Gallery</span>
        <h2>The Crown Jewel of The Pulisan</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-bedroom.webp" alt="Minahasa Suite Master Bedroom"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-bedroom2.webp" alt="Minahasa Suite Elegant Bedding"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-living-room.webp" alt="Minahasa Suite Living Room"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-living-room2.webp" alt="Minahasa Suite Lounge Area"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-dining-area.webp" alt="Minahasa Suite Dining Area"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-balcony.webp" alt="Minahasa Suite Panoramic Balcony"></div>
        <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-bathroom.webp" alt="Minahasa Suite Luxury Bathroom"></div>
        <!-- <div class="gallery-item"><img src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-hero.webp" alt="Minahasa Suite Heritage View"></div> -->
      </div>
    </div>
  </section>

  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="split-section">
        <div class="reveal"><span class="section-label">What's Included</span>
          <h2>The Ultimate Pulisanbay Experience</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">The Minahasa Suite is our most prestigious accommodation —
            every detail curated for the discerning traveler.</p>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-bed"></i></div>
            <div>
              <h4>Grand King Bed</h4>
              <p>Premium king bed with the finest linens, handcrafted headboard, and luxury pillows.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-bath"></i></div>
            <div>
              <h4>Freestanding Bathtub</h4>
              <p>A statement bathtub positioned to frame the ocean view through floor-to-ceiling windows.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-utensils"></i></div>
            <div>
              <h4>In-Suite Dining</h4>
              <p>In-suite dining available with our full sea-to-table menu.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-mug-hot"></i></div>
            <div>
              <h4>All-Day Meals &amp; Snacks</h4>
              <p>Breakfast, lunch, and dinner for 2 persons; and two times snacks for 2 persons.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon feature-icon--hollow"><i class="fas fa-droplet"></i></div>
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
          <div class="more-amenities" id="moreAmenitiesMinahasa" style="display:none;">
            <div class="amenities-grid">
              <div class="amenity-chip"><i class="fas fa-expand"></i><span>120 sqm</span></div>
              <div class="amenity-chip"><i class="fas fa-snowflake"></i><span>AC</span></div>
              <div class="amenity-chip"><i class="fas fa-wind"></i><span>Hair Dryer</span></div>
              <div class="amenity-chip"><i class="fas fa-faucet"></i><span>Hot/Cold Water</span></div>
              <div class="amenity-chip"><i class="fas fa-shower"></i><span>Shower</span></div>
              <div class="amenity-chip"><i class="fas fa-tv"></i><span>Smart TV</span></div>
              <div class="amenity-chip"><i class="fas fa-wifi"></i><span>Wifi Access</span></div>
              <div class="amenity-chip"><i class="fas fa-door-open"></i><span>Balcony</span></div>
              <div class="amenity-chip"><i class="fas fa-couch"></i><span>TV Area / Living Room</span></div>
            </div>
          </div>
          <button class="btn-more-amenities" id="toggleAmenitiesMinahasa"
            data-panel="moreAmenitiesMinahasa">
            <span class="toggle-label">More...</span>
          </button>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/the-pulisan/minahasa-suite/minahasa-suite-bedroom.webp" alt="Minahasa Suite Cozy Stay" class="img-cover"
              style="height:560px;"></div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $policyAccent = 'var(--savanna-gold)';
  $termsExtra = 'Suite features separate living area and bedroom';
  $policyExtra = 'Non-smoking suite — private terrace is an option';
  include __DIR__ . '/../includes/room-policies.php';
  ?>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <?php include __DIR__ . '/../includes/lightbox.php'; ?>
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
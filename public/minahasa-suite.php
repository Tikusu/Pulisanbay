<?php $pageTitle = "Minahasa Suite — The Pulisan | Pulisanbay";
$pageDescription = "The Minahasa Suite — the pinnacle of Pulisanbay luxury with a private terrace, freestanding bathtub, and breathtaking ocean panoramas.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <section class="hero">
    <div class="hero-bg"
      style="background-image:url('../assets/images/the-pulisan/minahasa-suite/minahasa-suite-hero.webp')"></div>
    <div class="hero-content">
      <h1>Minahasa Suite</h1>
      <p>The pinnacle of Pulisanbay luxury — a grand suite inspired by Minahasa heritage, where opulence and tradition
        converge.</p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Gallery</span>
        <h2>The Crown Jewel of The Pulisan</h2>
      </div>
      <div class="gallery-grid reveal">
        <div class="gallery-item"><img src="../assets/images/room-minahasa-suite.png" alt="Minahasa Suite Interior">
        </div>
        <div class="gallery-item"><img src="../assets/images/room-upper-bungalow.png" alt="Minahasa Suite Terrace">
        </div>
        <div class="gallery-item"><img src="../assets/images/hero-accommodation.png" alt="Minahasa Suite View"></div>
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
          <button class="btn-more-amenities" id="toggleAmenitiesMinahasa" onclick="toggleAmenities('moreAmenitiesMinahasa','toggleAmenitiesMinahasa')">
            <span class="toggle-label">More...</span>
          </button>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/room-minahasa-suite.png" alt="Minahasa Suite" class="img-cover"
              style="height:560px;"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="grid-2">
        <div class="reveal" style="padding:2.5rem;background:var(--earthy-sand);border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-file-contract"
              style="color:var(--savanna-gold);margin-right:8px;"></i>Terms of Service</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
            <li>✦ Check-in time: 14:00 | Check-out time: 12:00</li>
            <li>✦ Advance booking required (min. 14 days prior)</li>
            <li>✦ Minimum stay of 3 nights during peak season</li>
            <li>✦ Maximum 1 additional person per room (charges apply)</li>
            <li>✦ Suite features separate living area and bedroom</li>
            <li style="margin-top:1rem;"><a href="terms-and-conditions.php" style="color:var(--savanna-gold);text-decoration:none;font-weight:600;font-size:0.85rem;">View Full Terms & Conditions →</a></li>
          </ul>
        </div>
        <div class="reveal reveal-delay-1"
          style="padding:2.5rem;background:var(--earthy-sand);border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-shield-halved"
              style="color:var(--savanna-gold);margin-right:8px;"></i>Policy</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
            <li>✦ 50% non-refundable deposit required to secure booking</li>
            <li>✦ No cancellations accepted less than 14 days before arrival</li>
            <li>✦ No refunds for no-shows or early check-outs</li>
            <li>✦ Date changes permitted up to 14 days before arrival (once only)</li>
            <li>✦ Non-smoking suite — private terrace is an option</li>
            <li>✦ Pets are not permitted</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="display: none;"
    style="background:linear-gradient(135deg,var(--savanna-gold),#B8860B);text-align:center;color:var(--white);">
    <div class="container reveal">
      <h2 style="color:var(--white);margin-bottom:1rem;">Reserve the Minahasa Suite</h2>
      <p style="color:rgba(255,255,255,0.9);max-width:500px;margin:0 auto 2rem;">An unparalleled experience awaits —
        where heritage luxury meets ocean horizons.</p>
      <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;"><a href="contact.php"
          class="btn-cta-outline">Inquire Now</a><a href="the-pulisan.php" class="btn-cta-outline"
          style="border-color:rgba(255,255,255,0.3);">← Back to All Rooms</a></div>
    </div>
  </section>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <div class="lightbox" id="lightbox"><button class="lightbox-close">&times;</button><img src="" alt=""></div>
  <script src="../assets/js/main.js"></script>
</body>

</html>
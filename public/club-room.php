<?php $pageTitle = "Club Room — The Pulisan | Pulisanbay";
$pageDescription = "The Club Room at The Pulisan — modern elegance meets tropical warmth with garden views and premium amenities at Pulisanbay.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <section class="hero">
    <div class="hero-bg" style="background-image:url('../assets/images/the-pulisan/club-room/club-room-hero.webp')">
    </div>
    <div class="hero-content">
      <h1>Club Room</h1>
      <p>Modern elegance meets tropical warmth — a refined retreat wrapped in the gentle embrace of nature.</p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>

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
          <button class="btn-more-amenities" id="toggleAmenitiesClub" onclick="toggleAmenities('moreAmenitiesClub','toggleAmenitiesClub')">
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

  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="grid-2">
        <div class="reveal" style="padding:2.5rem;background:var(--earthy-sand);border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-file-contract"
              style="color:var(--oceanic-turquoise);margin-right:8px;"></i>Terms of Service</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
            <li>✦ Check-in time: 14:00 | Check-out time: 12:00</li>
            <li>✦ Valid government-issued ID required at check-in</li>
            <li>✦ Maximum occupancy: 2 adults per room</li>
            <li>✦ Extra bed available upon request (subject to availability)</li>
            <li>✦ Rates are subject to applicable taxes and service charges</li>
            <li>✦ Special requests accommodated based on availability</li>
          </ul>
        </div>
        <div class="reveal reveal-delay-1"
          style="padding:2.5rem;background:var(--earthy-sand);border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-shield-halved"
              style="color:var(--oceanic-turquoise);margin-right:8px;"></i>Policy</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:2;list-style:none;">
            <li>✦ Free cancellation up to 7 days before check-in</li>
            <li>✦ 50% charge for cancellations within 3–7 days</li>
            <li>✦ Full charge for cancellations within 48 hours</li>
            <li>✦ No-show: full charge applies</li>
            <li>✦ Non-smoking room — designated areas available</li>
            <li>✦ Pets are not permitted in guest rooms</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section" style="display: none;"
    style="background:linear-gradient(135deg,var(--oceanic-turquoise),var(--deep-sea));text-align:center;color:var(--white);">
    <div class="container reveal">
      <h2 style="color:var(--white);margin-bottom:1rem;">Reserve Your Club Room</h2>
      <p style="color:rgba(255,255,255,0.85);max-width:500px;margin:0 auto 2rem;">Submit an inquiry and our team will
        help you plan the perfect stay.</p>
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
<?php $pageTitle = "Lower Bungalow — The Pulisan | Pulisanbay";
$pageDescription = "The Lower Bungalow at The Pulisan — an intimate tropical escape with private decks and garden views at Pulisanbay, KEK Likupang.";
$navStyle = ""; ?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>
  <section class="hero">
    <div class="hero-bg"
      style="background-image:url('../assets/images/the-pulisan/lower-bungalow/lower-bungalow-hero.webp')"></div>
    <div class="hero-content">
      <h1>Lower Bungalow</h1>
      <p>Nestled among tropical gardens — an intimate escape where nature is your nearest neighbor.</p>
    </div>
    <div class="hero-scroll-indicator"><span></span></div>
  </section>
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
        <div class="reveal"><span class="section-label">What's Included</span>
          <h2>Your Stay Includes</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">Every Lower Bungalow stay is designed to offer the perfect
            balance of rustic charm and modern comfort.</p>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-bed"></i></div>
            <div>
              <h4>Premium Bedding</h4>
              <p>King-size bed with luxury linens and handwoven local textile accents.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-mug-hot"></i></div>
            <div>
              <h4>Daily Breakfast</h4>
              <p>Complimentary breakfast with local and international selections.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-door-open"></i></div>
            <div>
              <h4>Private Deck</h4>
              <p>Your own outdoor seating area surrounded by lush tropical gardens.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-shower"></i></div>
            <div>
              <h4>Outdoor Shower</h4>
              <p>A unique semi-outdoor rain shower among tropical foliage.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-van-shuttle"></i></div>
            <div>
              <h4>Airport Transfer</h4>
              <p>Round-trip shuttle from Sam Ratulangi International Airport.</p>
            </div>
          </div>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="img-rounded" style="box-shadow:var(--shadow-lg);"><img
              src="../assets/images/room-lower-bungalow.png" alt="Lower Bungalow" class="img-cover"
              style="height:500px;"></div>
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
            <li>✦ Check-in: 14:00 | Check-out: 12:00</li>
            <li>✦ Valid government-issued ID required at check-in</li>
            <li>✦ Maximum occupancy: 2 adults + 1 child</li>
            <li>✦ Rates are subject to applicable taxes and service charges</li>
            <li>✦ Bungalow features traditional wood construction</li>
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
            <li>✦ Non-smoking property — designated areas available</li>
            <li>✦ Pets are not permitted</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="display: none;"
    style="background:linear-gradient(135deg,var(--oceanic-turquoise),var(--deep-sea));text-align:center;color:var(--white);">
    <div class="container reveal">
      <h2 style="color:var(--white);margin-bottom:1rem;">Reserve Your Lower Bungalow</h2>
      <p style="color:rgba(255,255,255,0.85);max-width:500px;margin:0 auto 2rem;">Wake up to the sound of birdsong and
        the scent of tropical blooms.</p>
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
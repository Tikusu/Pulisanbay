<?php
$pageTitle = "The Pulisan — Luxury Accommodation | Pulisanbay";
$pageDescription = "Discover The Pulisan's exclusive rooms and bungalows — Club Room, Lower Bungalow, Upper Bungalow, and Minahasa Suite. Luxury meets nature at Pulisanbay.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '/assets/images/the-pulisan/main-page/the-pulisan-hero.webp';
  $heroTitle = 'The Pulisan';
  $heroSubtitle = 'An exclusive collection of bungalows and suites where traditional Minahasa architecture meets modern luxury — perched between emerald hills and the turquoise sea.';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- ROOM TYPES -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Our Rooms</span>
        <h2>Choose Your Sanctuary</h2>
        <p>Each space has been thoughtfully designed to immerse you in the natural beauty of Pulisan Bay while providing
          the comfort and luxury you deserve.</p>
      </div>
      <div class="grid-2">
        <a href="/the-pulisan/club-room" class="room-card reveal">
          <div class="room-card__img-wrapper">
            <img src="/assets/images/the-pulisan/club-room/club-room-hero.webp" alt="Club Room"
              class="room-card__img">
          </div>
          <div class="room-card__content">
            <span class="room-card__tag">Club House • Shared Den</span>
            <h3 class="room-card__title">Club Room</h3>
            <p class="room-card__desc">Modern elegance meets tropical warmth. Our Club Rooms offer a refined retreat
              with garden views, premium amenities, and the gentle sounds of nature as your constant companion.</p>
            <ul class="room-card__amenities">
              <li><i class="fas fa-bed"></i> King / Twin Bed</li>
              <li><i class="fas fa-utensils"></i> All-Day F&amp;B</li>
              <li><i class="fas fa-wifi"></i> WiFi</li>
              <li><i class="fas fa-snowflake"></i> AC</li>
            </ul>
            <div class="room-card__footer">
              <span class="room-card__link">View Details <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <a href="/the-pulisan/lower-bungalow" class="room-card reveal reveal-delay-1">
          <div class="room-card__img-wrapper">
            <img src="/assets/images/the-pulisan/lower-bungalow/lower-bungalow-hero.webp" alt="Lower Bungalow"
              class="room-card__img">
          </div>
          <div class="room-card__content">
            <span class="room-card__tag">Bungalow • Private Deck</span>
            <h3 class="room-card__title">Lower Bungalow</h3>
            <p class="room-card__desc">Nestled among tropical gardens, our Lower Bungalows offer an intimate escape with
              private decks, handcrafted furnishings, and seamless indoor-outdoor living.</p>
            <ul class="room-card__amenities">
              <li><i class="fas fa-chair"></i> Private Deck</li>
              <li><i class="fas fa-bed"></i> King / Twin Bed</li>
              <li><i class="fas fa-utensils"></i> All-Day F&amp;B</li>
              <li><i class="fas fa-vector-square"></i> 50 sqm</li>
            </ul>
            <div class="room-card__footer">
              <span class="room-card__link">View Details <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <a href="/the-pulisan/upper-bungalow" class="room-card reveal">
          <div class="room-card__img-wrapper">
            <img src="/assets/images/the-pulisan/upper-bungalow/upper-bungalow-hero.webp" alt="Upper Bungalow"
              class="room-card__img">
          </div>
          <div class="room-card__content">
            <span class="room-card__tag">Bungalow • Hillside Sanctuary</span>
            <h3 class="room-card__title">Upper Bungalow</h3>
            <p class="room-card__desc">Elevated among the hillside canopy, our Upper Bungalows command panoramic ocean
              views — where every sunrise feels like it was painted just for you.</p>
            <ul class="room-card__amenities">
              <li><i class="fas fa-water"></i> Ocean View</li>
              <li><i class="fas fa-door-open"></i> Private Balcony</li>
              <li><i class="fas fa-bed"></i> King Bed</li>
              <li><i class="fas fa-vector-square"></i> 60 sqm</li>
            </ul>
            <div class="room-card__footer">
              <span class="room-card__link">View Details <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>

        <a href="/the-pulisan/minahasa-suite" class="room-card reveal reveal-delay-1">
          <div class="room-card__img-wrapper">
            <img src="/assets/images/the-pulisan/minahasa-suite/minahasa-suite-hero.webp" alt="Minahasa Suite"
              class="room-card__img">
          </div>
          <div class="room-card__content">
            <span class="room-card__tag">Suite • Heritage Luxury</span>
            <h3 class="room-card__title">Minahasa Suite</h3>
            <p class="room-card__desc">The pinnacle of Pulisanbay luxury. A grand suite inspired by Minahasa heritage —
              featuring a private terrace, freestanding bathtub, and breathtaking ocean panoramas.</p>
            <ul class="room-card__amenities">
              <li><i class="fas fa-bath"></i> Freestanding Bathtub</li>
              <li><i class="fas fa-couch"></i> Living Room</li>
              <li><i class="fas fa-concierge-bell"></i> In-Suite Dining</li>
              <li><i class="fas fa-vector-square"></i> 120 sqm</li>
            </ul>
            <div class="room-card__footer">
              <span class="room-card__link">View Details <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- AMENITIES -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal"><span class="section-label">Resort Amenities</span>
        <h2>Everything You Need, Nothing You Don't</h2>
      </div>
      <div class="grid-3 grid-3-dense reveal">
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-van-shuttle"></i></div>
          <h3>Airport Transfer</h3>
          <p>Complimentary return airport transfer *T&C apply</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-wifi"></i></div>
          <h3>Connectivity</h3>
          <p>High-speed WiFi and Smart TV</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-person-hiking"></i></div>
          <h3>Guided Tours</h3>
          <p>Guided land exploration</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-shirt"></i></div>
          <h3>Laundry</h3>
          <p>Laundry services available</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fas fa-utensils"></i></div>
          <h3>Restaurant</h3>
          <p>Sea-To-Table dining with panoramic bay views</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OFFERS -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="split-section">
        <div class="">
          <span class="section-label reveal reveal-delay-1">Special Offers</span>
          <h2 class="reveal reveal-delay-2">Enhance Your Stay</h2>
          <p style="color:var(--slate);margin-bottom:2rem;">Make your Pulisanbay experience even more extraordinary with
            our curated add-on packages.</p>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-people-roof"></i></div>
            <div>
              <h4>Rent-A-Resort</h4>
              <p>Exclusive Private Stay</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-champagne-glasses"></i></div>
            <div>
              <h4>Resort Plus</h4>
              <p>Indulge in a delightful BBQ experience!</p>
            </div>
          </div>
          <a href="https://www.thepulisan.com/index.php/rates/#:~:text=RENT-,%2DA%2D,-RESORT%0A(EXCLUSIVE%20PRIVATE" target="_blank" class="btn-cta-dark"
            style="background: var(--oceanic-turquoise);font-size:1rem;padding:0.85rem 2.5rem;margin-top:3rem;">
            Learn More <i class="fas fa-arrow-right" style="margin-left:4px;"></i>
          </a>
        </div>
        <div class="reveal reveal-delay-2">
          <div class="section-img" style="box-shadow:var(--shadow-lg);"><img
              src="/assets/images/the-pulisan/main-page/the-pulisan-offers.webp" alt="The Pulisan" class="img-cover"
              style="height:450px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $ctaTitle = "Ready to Reserve Your Sanctuary?";
  $ctaText = "Submit an inquiry and our team will craft the perfect stay for you.";
  $ctaLabel = "Inquire Now";
  include __DIR__ . '/../includes/cta-banner.php'; ?>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="/assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
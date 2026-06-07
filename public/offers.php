<?php
$pageTitle = "Special Offers — The Pulisan | Pulisanbay";
$pageDescription = "Exclusive special offers at The Pulisan including Rent-A-Resort and Resort Plus BBQ experience.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head><?php include __DIR__ . '/../includes/head.php'; ?></head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <?php
  $heroImage = '/assets/images/the-pulisan/main-page/the-pulisan-offers.webp';
  $heroTitle = 'Special Offers';
  $heroSubtitle = 'Enhance your Pulisanbay experience with our curated add-on packages and exclusive retreats.';
  $heroPosition = 'bottom';
  include __DIR__ . '/../includes/hero.php';
  ?>

  <!-- RENT-A-RESORT -->
  <section class="section-lg section-bg-white">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Exclusive</span>
        <h2>Rent-A-Resort</h2>
        <p>The Pulisan is a private retreat designed for small and intimate gatherings, offering an exclusive experience
          with only 11 available rooms.</p>
      </div>

      <div class="split-section" style="margin-top: 3rem;">
        <div class="reveal">
          <h3 style="margin-bottom:2rem;">Package Details</h3>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-home"></i></div>
            <div>
              <h4>Full Resort Reservation</h4>
              <p>Reserve the entire resort for your family and friends, accommodating up to 22 guests at IDR 33,000,000
                per night.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-users"></i></div>
            <div>
              <h4>Larger Groups</h4>
              <p>For groups of up to 26 guests, we can add 4 extra beds at a total cost of IDR 36,000,000 per night.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-utensils"></i></div>
            <div>
              <h4>Inclusive Amenities</h4>
              <p>Rental cost includes breakfast, lunch, and dinner, two snacks per day, free-flow mineral water, house
                coffee, tea, and complimentary 2 pieces of laundry per person per day* (*An additional 100% surcharge
                for express laundry service).</p>
            </div>
          </div>
        </div>
        <div class="reveal reveal-delay-1"
          style="padding:2.5rem;background:var(--earthy-sand);border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-file-contract"
              style="color:var(--oceanic-turquoise);margin-right:8px;"></i>Terms & Conditions</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:1.8;list-style:none;padding-left:0;">
            <li style="margin-bottom:0.5rem;">✦ <strong>Advance Booking:</strong> 45 days in advance required for
              availability.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Check-In/Check-Out:</strong> 14:00 check-in, 12:00 check-out.
            </li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Private Functions:</strong> Arranged for an additional charge.
            </li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Confirmation:</strong> Issued after confirmation letter and
              deposit.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Exclusive Use:</strong> Guaranteed private use without
              interruption.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Additional Services:</strong> Extra charge, subject to
              availability.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Guest Limit:</strong> Strict adherence to agreed-upon guest
              count.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Non-Staying Guests:</strong> Details required 14 days before
              event.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Noise Curfew:</strong> 10:00 pm strict curfew.</li>
            <li style="margin-bottom:0.5rem;">✦ <strong>Cancellation:</strong> No refund after confirmation.</li>
          </ul>
          <p style="font-size:0.85rem;color:var(--slate);margin-top:1rem;font-style:italic;">Reservations shall not be
            binding until a written acceptance and confirmation have been received from the resort and the deposit has
            been received.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RESORT PLUS -->
  <section class="section-lg section-bg-sand">
    <div class="container">
      <div class="section-header reveal">
        <span class="section-label">Culinary</span>
        <h2>Resort Plus BBQ</h2>
        <p>Indulge in a delightful BBQ experience starting at just IDR 450,000 nett per person!</p>
      </div>

      <div class="split-section" style="margin-top: 3rem;">
        <div class="reveal">
          <p style="color:var(--slate);margin-bottom:2rem;font-size:1.1rem;line-height:1.6;">There’s no better way to
            wrap up your stay at Pulisan than by igniting a BBQ fire and enjoying the freshest local catch of the day
            under a starry sky.</p>
          <p style="color:var(--slate);font-style:italic;">*This exclusive service is reserved for our in-house guests.
          </p>
        </div>
        <div class="reveal reveal-delay-1"
          style="padding:2.5rem;background:var(--white);border-radius:var(--radius-lg);box-shadow:var(--shadow-sm);">
          <h3 style="margin-bottom:1.25rem;"><i class="fas fa-file-contract"
              style="color:var(--oceanic-turquoise);margin-right:8px;"></i>Terms & Conditions</h3>
          <ul style="color:var(--slate);font-size:0.9rem;line-height:1.8;list-style:none;padding-left:0;">
            <li style="margin-bottom:0.5rem;">✦ The BBQ venue will be subject to a venue change depending on the
              weather.</li>
            <li style="margin-bottom:0.5rem;">✦ A minimum of 2 guests is required to initiate the BBQ.</li>
            <li style="margin-bottom:0.5rem;">✦ To secure your spot, please make a reservation at least 72 hours in
              advance.</li>
            <li style="margin-bottom:0.5rem;">✦ Cancellations made less than 24 hours before your scheduled date are
              non-cancelable.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="/assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
</body>

</html>
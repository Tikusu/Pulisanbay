<?php
$pageTitle = "Terms & Conditions — The Pulisan | Pulisanbay";
$pageDescription = "The Pulisan's terms and policies for all room types, including reservation, cancellation, and resort policies.";
$navStyle = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <style>
    .tnc-content h2 {
      margin-top: 3rem;
      margin-bottom: 1.5rem;
      font-family: 'Cormorant Garamond', serif;
      font-size: 2rem;
      color: var(--deep-sea);
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      padding-bottom: 0.5rem;
      scroll-margin-top: 120px;
    }

    .tnc-content h3 {
      margin-top: 2rem;
      margin-bottom: 1rem;
      font-size: 1.25rem;
      color: var(--charcoal);
    }

    .tnc-content p {
      margin-bottom: 1.25rem;
      color: var(--slate);
      line-height: 1.7;
    }

    .tnc-content ul,
    .tnc-content ol {
      margin-bottom: 1.5rem;
      padding-left: 1.5rem;
    }

    .tnc-content li {
      margin-bottom: 0.75rem;
      color: var(--slate);
      line-height: 1.6;
    }

    .tnc-content blockquote {
      background: var(--earthy-sand);
      padding: 1.5rem;
      border-left: 4px solid var(--savanna-gold);
      margin: 2rem 0;
      font-style: italic;
    }

    .tnc-content blockquote p {
      margin-bottom: 0;
    }

    .tnc-section {
      padding: 4rem 0 6rem;
    }

    @media (max-width: 1024px) {
      .tnc-content h2 {
        font-size: 1.75rem;
      }

      .tnc-content {
        padding: 0 1.5rem;
      }
    }

    .tnc-toc {
      background: var(--earthy-sand);
      padding: 1.5rem;
      border-left: 4px solid var(--oceanic-turquoise);
      margin: 2.5rem 0;
    }

    .tnc-toc .toc-title {
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: var(--charcoal);
      font-size: 1.1rem;
    }

    .tnc-toc ul {
      list-style: none;
      padding-left: 0;
      margin-bottom: 0;
      display: grid;
      grid-template-columns: 1fr;
      gap: 0.5rem;
    }

    @media (min-width: 768px) {
      .tnc-toc ul {
        grid-template-columns: 1fr 1fr;
      }
    }

    .tnc-toc li {
      margin-bottom: 0;
    }

    .tnc-toc a {
      color: var(--oceanic-turquoise);
      text-decoration: none;
      font-size: 0.95rem;
      transition: color 0.3s ease;
      font-weight: 500;
    }

    .tnc-toc a:hover {
      color: var(--deep-sea);
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <section class="hero" style="height: 50dvh; min-height: 300px;">
    <div class="hero-bg" style="background-image: url('../assets/images/tnc-hero.webp'); background-position: 50% 30%;">
    </div>
    <div class="hero-content" style="margin-top: 3rem;">
      <h1 class="reveal">Terms & Conditions</h1>
      <p class="reveal reveal-delay-2">Policies and guidelines for your stay at The Pulisan Resort.</p>
    </div>
  </section>

  <section class="tnc-section section-bg-white">
    <div class="container container-sm">
      <div class="tnc-content">
        <p class="reveal">Welcome to The Pulisan. These terms and conditions apply to all room types and services
          offered at our
          resort. By making a reservation, you agree to comply with the following policies.</p>

        <div class="tnc-toc">
          <p class="toc-title reveal reveal-delay-1">Table of Contents</p>
          <ul class="reveal reveal-delay-2">
            <li><a href="#room-rate">Room Rate Inclusions</a></li>
            <li><a href="#check-in-out">Check-In and Check-Out Policy</a></li>
            <li><a href="#reservation">Reservation Policy</a></li>
            <li><a href="#food-allergies">Food Allergies and Dietary Restrictions Policy</a></li>
            <li><a href="#season-policy">High and Peak Season Policy</a></li>
            <li><a href="#group-policy">Group Policy</a></li>
            <li><a href="#minimum-stay">Minimum Stay Policy</a></li>
            <li><a href="#additional-person">Additional Person Policy</a></li>
            <li><a href="#child-policy">Child Policy</a></li>
            <li><a href="#deposit-change">Deposit & Date Change Policy</a></li>
            <li><a href="#cancellation">Cancellation Policy</a></li>
            <li><a href="#submission">Reservation Submission and Policy</a></li>
            <li><a href="#day-use">Day Use Policy (08:00 – 16:00)</a></li>
          </ul>
        </div>

        <h2 id="room-rate">Room Rate Inclusions</h2>
        <ul>
          <li>Government tax and service charge</li>
          <li>Breakfast, lunch, and dinner for 2 persons</li>
          <li>Two times snacks for 2 persons</li>
          <li>Free-flow mineral water, house coffee, and house tea</li>
          <li>A 15% discount for laundry per stay</li>
          <li>Complimentary return airport transfer (minimum stay of 8 nights) *private car with a maximum of 4 persons
            per car. <b>*not valid for group bookings</b></li>
        </ul>
        <blockquote>
          <p><strong>Note:</strong> Booked in advance and get a Special Discount for the accommodation *Terms &
            Conditions Apply</p>
        </blockquote>

        <h2 id="check-in-out">Check-In and Check-Out Policy</h2>
        <p>Our standard check-in time starts from 14:00, and check-out is at noon.</p>

        <h2 id="reservation">Reservation Policy</h2>
        <p>We welcome guests to our resort by reservation only. Please note the following:</p>
        <ul>
          <li><strong>Advance Booking Required:</strong> All reservations must be made at least two weeks before
            arrival. Last-minute reservations are subject to availability.</li>
          <li><strong>No Walk-ins:</strong> We do not accept walk-in guests without a prior reservation, including those
            interested in site surveys or inspections.</li>
        </ul>

        <h2 id="food-allergies">Food Allergies and Dietary Restrictions Policy</h2>
        <p>We prioritise your health and comfort. Please inform us of any food allergies or dietary restrictions when
          making your booking. This enables us to tailor your meals to meet your needs.</p>
        <blockquote>
          <p><strong>Notes:</strong><br>
            We serve Local/Indonesian dishes subject to local ingredients.<br>
            <strong>LONG STAY RATES:</strong> Available for stays with a minimum of 8 nights.
          </p>
        </blockquote>

        <h2 id="season-policy">High and Peak Season Policy</h2>
        <p>A 20% surcharge applies from July to September, and from the 25th of December to the 5th of January.
          Reservations must be made at least 30 days in advance *subject to availability.</p>

        <h2 id="group-policy">Group Policy</h2>
        <p>Available for a booking with a minimum of 7 rooms of up to 14 persons, with a minimum stay of 5 nights. For
          inquiries, please email us at <a href="mailto:inquiry@thepulisan.com">inquiry@thepulisan.com</a>, or fill out
          our <a href="contact.php">inquiry form</a>.</p>

        <h2 id="minimum-stay">Minimum Stay Policy</h2>
        <p>A minimum stay of 3 nights is required during the Christmas and New Year period (December 20—January 5). No
          check-in or check-out is allowed on December 25th and 31st.</p>

        <h2 id="additional-person">Additional Person Policy</h2>
        <p>Maximum of 1 person additional per room:</p>
        <ul>
          <li>Without an extra bed (sharing the existing bed) is IDR 675,000 net/night *rate is valid until the 31st of
            March</li>
          <li>With an extra bed (subject to availability) is IDR 750,000 net/night *rate is valid until the 31st of
            March</li>
        </ul>

        <h2 id="child-policy">Child Policy</h2>
        <p>Up to 2 children per room:</p>
        <ul>
          <li>Infants up to 6 years old are free of charge when sharing the bed with parents.</li>
          <li>6 – 12 Years Old: 50% charge for the additional person.</li>
          <li>12 Years and above is considered an adult; thus, a full charge of an additional person will be applied.
          </li>
        </ul>

        <h2 id="deposit-change">Deposit & Date Change Policy</h2>
        <ol>
          <li>At least a 50% non-refundable deposit is required before the cut-off date stated in the invoice after the
            reservation is confirmed to secure the booking.</li>
          <li>The remaining balance, along with any other personal expenses (if any), can be settled upon checking out.
          </li>
          <li>Changes to the arrival date can be made no later than 2 weeks (14 days) before the initial arrival date.
            Only one change of arrival date is permitted, subject to availability on the new requested date.</li>
        </ol>

        <h2 id="cancellation">Cancellation Policy</h2>
        <p>We are a small resort operation; therefore, short-notice cancellations will affect us. Our Cancellation
          Policy is as follows:</p>
        <ol>
          <li><strong>Notifications:</strong> Any cancellations must be sent to The Pulisan in writing via email to <a
              href="mailto:reservation@thepulisan.com">reservation@thepulisan.com</a> or fill out our <a
              href="contact.php">contact form</a> at
            least 14 days before arrival.</li>
          <li><strong>Late Cancellations:</strong> No cancellations will be accepted less than 14 days (2 weeks) before
            the initial arrival date, except in cases of a force majeure event.</li>
          <li><strong>No Refunds:</strong> No refund will be given for cancellations made less than 14 days (2 weeks)
            before the arrival date, including no-shows or early check-outs, which are subject to full charge.</li>
        </ol>

        <h2 id="submission">Reservation Submission and Policy</h2>
        <ol>
          <li><strong>Reservation Submission:</strong> Fill out our <a href="contact.php">inquiry form</a> or submit
            manually to The Pulisan
            reservations department at <a href="mailto:reservation@thepulisan.com">reservation@thepulisan.com</a> and
            via WhatsApp only to <a href="https://wa.me/6282196659675">+62 821 9665 9675</a>. *All reservations are
            subject to availability.</li>
          <li><strong>Binding Confirmation:</strong> Reservations shall not be binding until written acceptance and
            confirmation have been received from the resort and the deposit has been received by The Pulisan.</li>
          <li><strong>Change of Guest Name:</strong> A change of guest name is considered a cancellation, and rebooking
            is mandatory, subject to availability at the time of the name change.</li>
        </ol>

        <h2 id="day-use">Day Use Policy (08:00 – 16:00)</h2>
        <ul>
          <li>Day-use is available by reservation only at IDR 350,000 net/person.
            <br><small>*It includes 1x snacks, free-flow mineral water, house coffee or tea, and the use of public
              bathrooms and the Pendopo area. Any requirement for lunch during your day use access is subject to an
              additional charge of IDR 250,000 net/person. To ensure the best services, all reservations are required,
              and no cancellations or requests for additional meals will be accepted on-site.</small>
          </li>
          <li>A 3-day reservation in advance is mandatory for day-use guests and is subject to limited capacity.</li>
          <li>For day-use reservations, please use our <a href="contact.php">inquiry form</a> or send us a WhatsApp text
            to <a href="https://wa.me/6282196659675">+62
              821 9665 9675</a>.</li>
        </ul>

        <p style="margin-top: 3rem;">We can also accommodate a small group gathering. For more information, please
          contact our team on WhatsApp at <a href="https://wa.me/6282196659675">+62 821 9665 9675</a>.</p>
      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>
  <script src="../assets/js/main.js"></script>
</body>

</html>
<?php
/**
 * careers.php — Careers Landing Page
 *
 * Section 1: Hero / Opening
 * Section 2: Job Opportunities (fetched from Supabase `jobs` table where available = true)
 * Section 3: Job Application Form (name, email, phone, prev position, division, salary, CV PDF)
 */

$pageTitle = "Careers — Join the Pulisanbay Team | North Sulawesi";
$pageDescription = "Build a career at Pulisanbay, a regenerative tourism sanctuary in KEK Likupang. Explore open positions and apply to be part of our mission to restore nature and empower communities.";
$navStyle = "scrolled";

// Fetch available jobs from Supabase
$availableJobs = [];
try {
    require_once __DIR__ . '/../config/db.php';
    $db = getDB();
    $stmt = $db->query("SELECT id, title, department, description FROM jobs WHERE available = true ORDER BY created_at ASC");
    $availableJobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    error_log('Failed to fetch jobs: ' . $e->getMessage());
    $availableJobs = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . '/../includes/head.php'; ?>
  <link rel="stylesheet" href="../assets/<?= $isProd ? 'dist/css/careers.min.css' : 'css/careers.css' ?>">
</head>

<body>
  <?php include __DIR__ . '/../includes/navbar.php'; ?>

  <!-- =========================================================
       SECTION 1: OPENING / HERO
       ========================================================= -->
  <section class="section-lg" style="background: var(--deep-sea); padding-top:7rem; padding-bottom: 6rem; position: relative; overflow: hidden;">
    <!-- Decorative background pattern -->
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle at 70% 50%, rgba(8,145,178,0.15) 0%, transparent 60%), radial-gradient(circle at 20% 80%, rgba(212,168,67,0.08) 0%, transparent 50%);pointer-events:none;"></div>

    <div class="container" style="position:relative;">
      <div class="split-section" style="gap: 5rem; align-items: center;">

        <!-- Left: Text block -->
        <div class="reveal" style="flex: 1.1;">
          <span class="section-label" style="color: var(--savanna-gold);">Work With Us</span>
          <h1 style="color: var(--white); font-size: clamp(2.4rem, 4.5vw, 3.6rem); margin-bottom: 1.5rem; line-height: 1.15;">
            Shape the Future of<br>Regenerative Tourism
          </h1>
          <p style="color: rgba(255,255,255,0.75); font-size: 1.1rem; line-height: 1.8; max-width: 520px; margin-bottom: 2.5rem;">
            At Pulisanbay, every role is a contribution to something larger — the restoration of the Coral Triangle, the empowerment of local communities, and the creation of truly conscious travel experiences at the edge of the world.
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <button onclick="scrollToForm()" class="btn-cta" style="font-size: 1rem; padding: 0.85rem 2.25rem;">
              Apply Now <i class="fas fa-arrow-down"></i>
            </button>
            <a href="#open-positions" class="btn-cta-outline" style="font-size: 1rem; padding: 0.85rem 2rem;">
              See Open Positions
            </a>
          </div>
        </div>

        <!-- Right: Stat Pillars -->
        <div class="reveal reveal-delay-1" style="flex: 0.9; display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius); padding: 2rem; text-align:center; backdrop-filter: blur(4px);">
            <div style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 500; color: var(--savanna-gold); line-height:1;">∞</div>
            <p style="color: rgba(255,255,255,0.65); font-size: 0.85rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Room to Grow</p>
          </div>
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius); padding: 2rem; text-align:center; backdrop-filter: blur(4px);">
            <div style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 500; color: var(--savanna-gold); line-height:1;">100%</div>
            <p style="color: rgba(255,255,255,0.65); font-size: 0.85rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Purpose-Driven</p>
          </div>
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius); padding: 2rem; text-align:center; backdrop-filter: blur(4px);">
            <div style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 500; color: var(--savanna-gold); line-height:1;">KEK</div>
            <p style="color: rgba(255,255,255,0.65); font-size: 0.85rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Likupang, Sulawesi</p>
          </div>
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: var(--radius); padding: 2rem; text-align:center; backdrop-filter: blur(4px);">
            <div style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 500; color: var(--savanna-gold); line-height:1;">4+</div>
            <p style="color: rgba(255,255,255,0.65); font-size: 0.85rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 0.1em;">Core Disciplines</p>
          </div>
        </div>

      </div>

      <!-- Values row -->
      <div class="reveal" style="margin-top: 5rem; display: flex; gap: 2.5rem; flex-wrap: wrap; padding-top: 3rem; border-top: 1px solid rgba(255,255,255,0.08);">
        <div style="display:flex; align-items:center; gap: 0.85rem; color: rgba(255,255,255,0.6); font-size: 0.9rem;">
          <i class="fas fa-leaf" style="color: var(--savanna-gold);"></i> Regenerative Mission
        </div>
        <div style="display:flex; align-items:center; gap: 0.85rem; color: rgba(255,255,255,0.6); font-size: 0.9rem;">
          <i class="fas fa-users" style="color: var(--savanna-gold);"></i> Community First
        </div>
        <div style="display:flex; align-items:center; gap: 0.85rem; color: rgba(255,255,255,0.6); font-size: 0.9rem;">
          <i class="fas fa-water" style="color: var(--savanna-gold);"></i> Coral Triangle Setting
        </div>
        <div style="display:flex; align-items:center; gap: 0.85rem; color: rgba(255,255,255,0.6); font-size: 0.9rem;">
          <i class="fas fa-graduation-cap" style="color: var(--savanna-gold);"></i> Continuous Learning
        </div>
        <div style="display:flex; align-items:center; gap: 0.85rem; color: rgba(255,255,255,0.6); font-size: 0.9rem;">
          <i class="fas fa-star" style="color: var(--savanna-gold);"></i> Luxury Standards
        </div>
      </div>

    </div>
  </section>

  <!-- =========================================================
       SECTION 2: OPEN POSITIONS
       ========================================================= -->
  <section class="section-lg section-bg-white" id="open-positions">
    <div class="container">

      <div class="reveal" style="max-width: 640px; margin-bottom: 0.5rem;">
        <span class="section-label">Open Positions</span>
        <h2 style="margin-bottom: 1rem;">Current Opportunities</h2>
        <p style="color: var(--slate); line-height: 1.75;">
          We are always seeking passionate, talented individuals who share our vision for regenerative tourism. Each role at Pulisanbay is an invitation to make a real difference.
        </p>
      </div>

      <?php if (!empty($availableJobs)): ?>
        <div class="jobs-grid">
          <?php foreach ($availableJobs as $job): ?>
            <div class="job-card reveal">
              <span class="job-card__dept">
                <i class="fas fa-tag" style="margin-right: 4px; font-size:0.65rem;"></i>
                <?= htmlspecialchars($job['department']) ?>
              </span>
              <h3 class="job-card__title"><?= htmlspecialchars($job['title']) ?></h3>
              <p class="job-card__desc"><?= htmlspecialchars($job['description']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>

      <?php else: ?>
        <!-- Empty state: no available positions -->
        <div class="jobs-empty-state reveal">
          <div class="jobs-empty-state__icon">
            <i class="fas fa-binoculars"></i>
          </div>
          <h3>No Open Positions Right Now</h3>
          <p>
            We don't have any active vacancies at the moment, but our team is always growing.
            Submit your application below and we'll keep your profile on file for future opportunities that match your skills.
          </p>
          <button onclick="scrollToForm()" class="jobs-empty-state__btn">
            Submit Open Application <i class="fas fa-arrow-down"></i>
          </button>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <!-- =========================================================
       SECTION 3: APPLICATION FORM
       ========================================================= -->
  <section class="section-lg" id="applicationFormSection" style="background: var(--earthy-sand);">
    <div class="container">
      <div class="split-section" style="gap: 5rem; align-items: flex-start;">

        <!-- Left: Intro copy -->
        <div class="reveal" style="flex: 0.9;">
          <span class="section-label">Join the Team</span>
          <h2 style="margin-bottom: 1.5rem;">Tell Us<br>About Yourself</h2>
          <p style="color: var(--slate); line-height: 1.8; margin-bottom: 2rem;">
            Whether you are applying for a listed role or submitting an open application for future consideration, we'd love to hear from you. Fill out the form and our HR team will review your application carefully.
          </p>

          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
            <div>
              <h4>Privacy & Security</h4>
              <p>Your information and CV are stored securely and will not be shared with third parties.</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-envelope-open-text"></i></div>
            <div>
              <h4>What Happens Next</h4>
              <p>If your profile matches an opening, we'll reach out via email to schedule an interview.</p>
            </div>
          </div>
        </div>

        <!-- Right: Form -->
        <div class="reveal reveal-delay-1" style="flex: 1.1;">
          <div class="careers-form-container">
            <h3 style="margin-bottom: 0.4rem;">Application Form</h3>
            <p style="color: var(--slate); font-size: 0.9rem; margin-bottom: 2.25rem;">All fields are required</p>

            <form id="applicationForm" enctype="multipart/form-data" novalidate>
              <!-- Honeypot field (hidden from real users, visible to bots) -->
              <div style="position: absolute; left: -9999px;" aria-hidden="true">
                <label for="website_url">Leave this field blank if you are human</label>
                <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
              </div>

              <div class="careers-form-grid">

                <!-- Name -->
                <div class="form-group">
                  <label for="applicantName">Full Name</label>
                  <input type="text" id="applicantName" name="name" placeholder="Your full name" required>
                </div>

                <!-- Email -->
                <div class="form-group">
                  <label for="applicantEmail">Email Address</label>
                  <input type="email" id="applicantEmail" name="email" placeholder="you@example.com" required>
                </div>

                <!-- Phone -->
                <div class="form-group">
                  <label for="applicantPhone">Phone Number</label>
                  <input type="tel" id="applicantPhone" name="phone" placeholder="+62 812 3456 7890" required>
                </div>

                <!-- Previous Position -->
                <div class="form-group">
                  <label for="applicantPrevPosition">Previous Position</label>
                  <input type="text" id="applicantPrevPosition" name="prev_position" placeholder="e.g. Junior Chef, Marketing Staff" required>
                </div>

                <!-- Division / Department -->
                <div class="form-group">
                  <label for="applicantDivision">Division / Department</label>
                  <input type="text" id="applicantDivision" name="division" placeholder="e.g. Food & Beverage, Housekeeping" required>
                </div>

                <!-- Expected Salary -->
                <div class="form-group">
                  <label for="applicantSalary">Expected Monthly Salary (Rp)</label>
                  <input type="number" id="applicantSalary" name="expected_salary" placeholder="e.g. 5000000" min="1" required>
                </div>

                <!-- CV Upload -->
                <div class="form-group full-width">
                  <label>Upload CV <span style="color: var(--slate); font-weight: 400;">(PDF only, max 3MB)</span></label>
                  <div class="file-upload-zone" id="uploadZone">
                    <input type="file" id="cvUpload" name="cv" class="file-upload-zone__input" accept=".pdf,application/pdf" required>
                    <div class="file-upload-zone__icon">
                      <i class="fas fa-file-pdf"></i>
                    </div>
                    <p class="file-upload-zone__text">Drag & drop your CV here, or click to browse</p>
                    <p class="file-upload-zone__subtext">PDF format only &bull; Maximum file size: 3MB</p>
                    <span class="file-upload-zone__filename" id="filenameDisplay">
                      <i class="fas fa-check-circle"></i>
                      <span id="selectedName"></span>
                    </span>
                  </div>
                </div>

              </div><!-- end .careers-form-grid -->

              <button type="submit" class="btn-cta-dark" id="submitBtn"
                style="width:100%; justify-content:center; font-size:1rem; padding: 1rem 2rem; margin-top: 0.5rem;">
                <span id="btnText">Submit Application</span>
                <i class="fas fa-paper-plane"></i>
              </button>

            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php include __DIR__ . '/../includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="../assets/<?= $isProd ? 'dist/js/main.min.js' : 'js/main.js' ?>"></script>
  <script src="../assets/<?= $isProd ? 'dist/js/careers.min.js' : 'js/careers.js' ?>"></script>
</body>

</html>

<?php
/* Template Name: New Career Page */
get_header();
?>
<style>
    :root{
    --space-1: 0.25rem;
    --space-2: 0.5rem;
    --space-3: 0.75rem;
    --space-4: 1rem;
    --space-5: 1.25rem;
    --space-6: 1.5rem;
    --space-8: 2rem;
    --space-10: 2.5rem;
    --space-12: 3rem;
    --space-16: 4rem;
    --space-20: 5rem;
    --space-24: 6rem;
    }
    .ams-njay{
        margin: 0 auto;
        padding: 80px 20px 0 20px;
        position: relative;
        z-index: 2;
    }
    .ams-prd-heading-wrapper {
        margin-bottom:1rem;
    }
    .ams-all-section{
        margin:0;
    }
    /* ════════════════════════════════
   CAREER MAIN LAYOUT
════════════════════════════════ */
.career-section {
  padding: var(--space-20) var(--space-4);
  background: var(--ams-bg-gray);
}
.career-container {
  max-width: 1100px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 420px;
  gap: var(--space-10);
  align-items: start;
}

/* ════════════════════════════════
   ABOUT / COMPANY PROFILE (LEFT)
════════════════════════════════ */
.about-block {
  display: flex;
  flex-direction: column;
  gap: var(--space-8);
}

.about-intro {
  background: #fff;
  border-radius: 16px;
  padding: var(--space-8) var(--space-8);
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 2px 16px rgba(15,44,95,0.06);
  position: relative;
  overflow: hidden;
}
.about-intro::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, var(--primary-yellow) 0%, var(--ams-blue-light) 100%);
}
.about-intro .kicker {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ams-blue-light);
  margin-bottom: var(--space-4);
}
.about-intro .kicker::before {
  content: '';
  width: 18px; height: 2px;
  background: var(--ams-blue-light);
  border-radius: 2px;
}
.about-intro h2 {
  font-size: clamp(1.3rem, 2.2vw, 1.75rem);
  font-weight: 800;
  color: var(--ams-blue-dark);
  line-height: 1.25;
  margin-bottom: var(--space-5);
}
.about-intro h2 span { color: var(--ams-blue-light); }
.about-intro p {
  font-size: 0.9rem;
  color: var(--ams-text-muted);
  line-height: 1.8;
}
.about-intro p strong { color: var(--ams-text-dark); font-weight: 600; }

/* Pillars grid */
.pillars-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.pillar-card {
  background: #fff;
  border-radius: 12px;
  padding: var(--space-5) var(--space-5);
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 2px 12px rgba(15,44,95,0.05);
  transition: transform 0.25s, box-shadow 0.25s;
}
.pillar-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 28px rgba(15,44,95,0.12);
}
.pillar-card .pillar-icon {
  width: 42px; height: 42px;
  border-radius: 10px;
  background: linear-gradient(135deg, rgba(0,155,224,0.12) 0%, rgba(44,76,126,0.12) 100%);
  display: flex; align-items: center; justify-content: center;
  margin-bottom: var(--space-3);
}
.pillar-card .pillar-icon i {
  font-size: 1.1rem;
  color: var(--ams-blue-light);
}
.pillar-card h4 {
  font-size: 0.875rem;
  font-weight: 700;
  color: var(--ams-blue-dark);
  margin-bottom: var(--space-2);
}
.pillar-card p {
  font-size: 0.8rem;
  color: var(--ams-text-muted);
  line-height: 1.65;
}

/* Services list */
.services-block {
  background: #fff;
  border-radius: 16px;
  padding: var(--space-8);
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 2px 16px rgba(15,44,95,0.06);
}
.services-block .section-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ams-blue-light);
  margin-bottom: var(--space-5);
}
.services-block .section-label::before {
  content: '';
  width: 18px; height: 2px;
  background: var(--ams-blue-light);
  border-radius: 2px;
}
.services-block h3 {
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--ams-blue-dark);
  margin-bottom: var(--space-5);
}
.services-list {
  list-style: none;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3) var(--space-4);
}
.services-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-2);
  font-size: 0.82rem;
  color: var(--ams-text-muted);
  line-height: 1.5;
}
.services-list li i {
  color: var(--primary-yellow);
  font-size: 0.75rem;
  margin-top: 3px;
  flex-shrink: 0;
}

/* ════════════════════════════════
   CV FORM (RIGHT)
════════════════════════════════ */
.cv-form-wrapper {
  position: sticky;
  top: 2rem;
}

.cv-form-card {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 32px rgba(15,44,95,0.12), 0 2px 8px rgba(15,44,95,0.06);
  border: 1px solid rgba(44,76,126,0.08);
}

.cv-form-header {
  background: linear-gradient(135deg, var(--ams-blue-dark) 0%, var(--primary-blue) 100%);
  padding: var(--space-6) var(--space-8);
  position: relative;
  overflow: hidden;
}
.cv-form-header::after {
  content: '';
  position: absolute;
  right: -20px; bottom: -20px;
  width: 120px; height: 120px;
  border-radius: 50%;
  border: 2px solid rgba(250,204,21,0.2);
}
.cv-form-header .kicker {
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--primary-yellow);
  display: block;
  margin-bottom: var(--space-2);
}
.cv-form-header h3 {
  font-size: 1.4rem;
  font-weight: 800;
  color: #fff;
}
.cv-form-header h3 span { color: var(--primary-yellow); }

.cv-form-body {
  padding: var(--space-6) var(--space-8);
}

.form-group {
  margin-bottom: var(--space-4);
}
.form-group label {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  font-size: 0.78rem;
  font-weight: 600;
  color: var(--ams-text-dark);
  margin-bottom: var(--space-2);
}
.form-group label i {
  color: var(--ams-blue-light);
  font-size: 0.75rem;
}
.form-group label .req { color: var(--ams-blue-light); margin-left: 2px; }

.form-group input,
.form-group textarea,
.form-group select {
  width: 100%;
  padding: 0.7rem 1rem;
  font-family: var(--font-body);
  font-size: 0.875rem;
  color: var(--ams-text-dark);
  background: var(--ams-bg-gray);
  border: 1.5px solid rgba(44,76,126,0.15);
  border-radius: 8px;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}
.form-group input::placeholder,
.form-group textarea::placeholder { color: #94a3b8; font-size: 0.83rem; }
.form-group input:focus,
.form-group textarea:focus,
.form-group select:focus {
  border-color: var(--ams-blue-light);
  background: #fff;
  box-shadow: 0 0 0 3px rgba(0,155,224,0.1);
}
.form-group textarea { resize: vertical; min-height: 110px; }

/* File upload */
.file-upload-wrapper {
  position: relative;
}
.file-upload-input {
  position: absolute;
  inset: 0;
  opacity: 0;
  cursor: pointer;
  z-index: 2;
  width: 100%;
  height: 100%;
}
.file-upload-display {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: 0.7rem 1rem;
  background: var(--ams-bg-gray);
  border: 1.5px dashed rgba(44,76,126,0.25);
  border-radius: 8px;
  cursor: pointer;
  transition: border-color 0.2s, background 0.2s;
}
.file-upload-display:hover {
  border-color: var(--ams-blue-light);
  background: rgba(0,155,224,0.04);
}
.file-upload-display .upload-icon {
  width: 34px; height: 34px;
  border-radius: 8px;
  background: rgba(0,155,224,0.12);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.file-upload-display .upload-icon i { color: var(--ams-blue-light); font-size: 0.9rem; }
.file-upload-display .upload-text p {
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--ams-text-dark);
}
.file-upload-display .upload-text span {
  font-size: 0.72rem;
  color: var(--ams-text-muted);
}
#file-name-display {
  font-size: 0.75rem;
  color: var(--ams-blue-light);
  margin-top: var(--space-1);
  font-weight: 500;
}

/* Submit btn */
.btn-submit {
  width: 100%;
  padding: 0.9rem 1.5rem;
  background: linear-gradient(135deg, var(--ams-blue-dark) 0%, var(--primary-blue) 100%);
  color: #fff;
  font-family: var(--font-body);
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-3);
  margin-top: var(--space-5);
  transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
}
.btn-submit:hover {
  opacity: 0.9;
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(15,44,95,0.25);
}
.btn-submit i { font-size: 0.85rem; }

.form-note {
  text-align: center;
  font-size: 0.72rem;
  color: var(--ams-text-muted);
  margin-top: var(--space-3);
}
.form-note i { color: var(--primary-yellow); margin-right: 4px; }

/* ════════════════════════════════
   RESPONSIVE
════════════════════════════════ */
@media (max-width: 960px) {
  .career-container {
    grid-template-columns: 1fr;
  }
  .cv-form-wrapper { position: static; }
  .about-block { order: 1; }
  .cv-form-wrapper { order: 0; }
}
@media (max-width: 600px) {
  .pillars-grid { grid-template-columns: 1fr; }
  .services-list { grid-template-columns: 1fr; }
  .cv-form-body { padding: var(--space-5); }
  .cv-form-header { padding: var(--space-5); }
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">Career</div>
    <span class="ams-prd-kicker">Join Our Diverse and Growing Team</span>
    <h2 class="ams-prd-title">CAREER</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="career-section">
  <div class="career-container">

    <!-- ── LEFT: ABOUT AMS ── -->
    <div class="about-block">

      <!-- Intro -->
      <div class="about-intro">
        <span class="kicker">About AMS</span>
        <h2>Setting The Standard In <span>Marine &amp; Offshore</span> Excellence</h2>
        <p>
          <strong>Advantage Marine Services (Malaysia) Sdn Bhd</strong> was established in March 2014 to provide top notch/high quality in water services for marine/shipping and offshore. We are committed to provide services that are identified with best-in-class safety, quality and cost effectiveness.
        </p>
        <br>
        <p>
          Our expertise encompasses a wide range of services that include full air/mixed gas commercial diving, special and intermediate surveys on ships and rigs, Class IWS, real time CCTV inspections, U/W ship maintenance including hull cleaning, propeller polishing/repairing, and underwater repairs.
        </p>
        <br>
        <p>
          Over the years, AMS has diversified into steel fabrication, accommodation upgrading, industrial rope access, engineering control and instrumentation to support the client's needs and operations.
        </p>
      </div>

      <!-- Pillars -->
      <div class="pillars-grid">
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-eye"></i></div>
          <h4>Our Vision</h4>
          <p>To be a leading world-class underwater inspection and steel fabrication specialist.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-bullseye"></i></div>
          <h4>Our Mission</h4>
          <p>To deliver safe, professional and efficient operations even for the most demanding jobs.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-handshake"></i></div>
          <h4>Our Commitment</h4>
          <p>Best-in-class diving equipment combined with OGP/IMCA standard practices and procedures.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-lightbulb"></i></div>
          <h4>Our Approach</h4>
          <p>Innovative and systematic approaches to ensure consistent delivery and satisfaction to our clients.</p>
        </div>
      </div>

      <!-- Services -->
      <div class="services-block">
        <span class="section-label">Our Businesses</span>
        <h3>What We Do</h3>
        <ul class="services-list">
          <li><i class="fa-solid fa-check"></i> CLASS Survey (ABS, DNV/GL, BV, LRS, NKK, etc)</li>
          <li><i class="fa-solid fa-check"></i> Ship Husbandry – Hull Cleaning, Propeller Polishing</li>
          <li><i class="fa-solid fa-check"></i> Afloat Repair Services – Underwater Hull Repairs</li>
          <li><i class="fa-solid fa-check"></i> NDT Works</li>
          <li><i class="fa-solid fa-check"></i> Fabrication, Piping &amp; Steel Renewal</li>
          <li><i class="fa-solid fa-check"></i> Accommodation Upgrading (Carpentry)</li>
          <li><i class="fa-solid fa-check"></i> Electric Repairs (Air Conditioning, Motor Rewinding)</li>
          <li><i class="fa-solid fa-check"></i> HVAC &amp; Control Solution</li>
        </ul>
      </div>

    </div><!-- /about-block -->

    <!-- ── RIGHT: CV FORM ── -->
    <div class="cv-form-wrapper">
      <div class="cv-form-card">
        <div class="cv-form-header">
          <span class="kicker">Career @ AMS</span>
          <h3>Submit Your <span>CV</span> Today</h3>
        </div>
        <div class="cv-form-body">
          <form id="cvForm" action="#" method="POST" enctype="multipart/form-data" novalidate>

            <div class="form-group">
              <label for="name">
                <i class="fa-solid fa-user"></i> Your Name <span class="req">*</span>
              </label>
              <input type="text" id="name" name="name" placeholder="Full Name" required>
            </div>

            <div class="form-group">
              <label for="email">
                <i class="fa-solid fa-envelope"></i> Your Email <span class="req">*</span>
              </label>
              <input type="email" id="email" name="email" placeholder="email@example.com" required>
            </div>
            <div class="form-group">
              <label for="message">
                <i class="fa-solid fa-message"></i> Your Message
              </label>
              <textarea id="message" name="message" placeholder="Tell us about yourself, your experience, and why you'd like to join AMS…"></textarea>
            </div>

            <div class="form-group">
              <label>
                <i class="fa-solid fa-paperclip"></i> Upload Resume <span class="req">*</span>
              </label>
              <div class="file-upload-wrapper">
                <input type="file" id="resume" name="resume" class="file-upload-input" accept=".pdf,.doc,.docx" required>
                <div class="file-upload-display" id="fileDisplay">
                  <div class="upload-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                  <div class="upload-text">
                    <p>Click to upload CV / Resume</p>
                    <span>PDF, DOC, DOCX — max 2MB</span>
                  </div>
                </div>
              </div>
              <div id="file-name-display"></div>
            </div>

            <button type="submit" class="btn-submit">
              <i class="fa-solid fa-paper-plane"></i>
              Send Application
            </button>

            <p class="form-note">
              <i class="fa-solid fa-lock"></i>
              Your information is kept confidential and will only be used for recruitment purposes.
            </p>
          </form>
        </div>
      </div>
    </div><!-- /cv-form-wrapper -->

  </div><!-- /career-container -->
</section>
<section class="ams-all-section">
    <div class="ams-all-background">
        <div class="ams-all-container">
            <div class="ams-all-stats">
                <div class="ams-all-stat-item">
                    <i class="fa-solid fa-user-gear"></i>
                    <div class="ams-all-stat-text">
                        <h4>10+</h4>
                        <p>Industry Expertise</p>
                    </div>
                </div>
                <div class="ams-all-stat-item">
                    <i class="fa-solid fa-gears"></i>
                    <div class="ams-all-stat-text">
                        <h4>10+</h4>
                        <p>Project Ongoing</p>
                    </div>
                </div>
                <div class="ams-all-stat-item">
                    <i class="fa-solid fa-industry"></i>
                    <div class="ams-all-stat-text">
                        <h4>10+</h4>
                        <p>Project Completed</p>
                    </div>
                </div>
                <div class="ams-all-stat-item">
                    <i class="fa-solid fa-globe"></i>
                    <div class="ams-all-stat-text">
                        <h4>10+</h4>
                        <p>CSR</p>
                    </div>
                </div>
            </div>

            <div class="ams-all-main-content">
                <div class="ams-all-watermark"><h1 style="font-size: 8rem; -webkit-text-stroke: 2px rgba(255, 255, 255, 0.148);">10+ YEARS</h1></div>
                
                <p class="ams-all-kicker">Comprehensive Marine & Offshore Solutions</p>
                <h2 class="ams-all-title">Setting New Standards In <span>Marine & Offshore</span> Services</h2>
                <p class="ams-all-desc">With over a decade of experience, Advantage Marine Services delivers high-quality underwater inspection, ship maintenance, and fabrication services that meet the most demanding industry standards.</p>
                
                <a href="#" class="ams-all-btn">
                    <span class="ams-all-btn-icon"><i class="fa-solid fa-play"></i></span>
                    <span class="ams-all-btn-text">More ABOUT</span>
                </a>
            </div>

        </div>
    </div>
</section>
<script>
document.getElementById('resume').addEventListener('change', function() {
  const display = document.getElementById('file-name-display');
  if (this.files.length > 0) {
    const file = this.files[0];
    const sizeMB = (file.size / 1024 / 1024).toFixed(2);
    display.innerHTML = '<i class="fa-solid fa-file-pdf"></i> ' + file.name + ' (' + sizeMB + ' MB)';
    document.getElementById('fileDisplay').style.borderColor = 'var(--ams-blue-light)';
    document.getElementById('fileDisplay').style.background = 'rgba(0,155,224,0.04)';
  }
});

document.getElementById('cvForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const btn = this.querySelector('.btn-submit');
  btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Application Sent!';
  btn.style.background = 'linear-gradient(135deg, #166534 0%, #15803d 100%)';
  btn.disabled = true;
});
</script>
<?php get_footer(); ?>
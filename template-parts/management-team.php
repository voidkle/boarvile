<?php
/* Template Name: New Management Team Page */
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
    .ams-all-section{
        margin:0;
    }
    /* ─────────────────────────────────────
   LEADERSHIP SECTION
───────────────────────────────────── */
.leadership-section {
  padding: var(--space-5) var(--space-4);
  background: #fff;
}

.leadership-container {
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-6);
}

/* ─────────────────────────────────────
   MEMBER CARD
───────────────────────────────────── */
.member-card {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 0;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 4px 24px rgba(15,44,95,0.10), 0 1px 4px rgba(15,44,95,0.06);
  background: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid rgba(44,76,126,0.08);
}

.member-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 48px rgba(15,44,95,0.16), 0 2px 8px rgba(15,44,95,0.08);
}

.member-card__content {
  padding: var(--space-10) var(--space-10);
  display: flex;
  flex-direction: column;
  justify-content: center;
  position: relative;
}

.member-card__content::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 4px;
  background: var(--primary-yellow);
}

.member-card__role-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--ams-blue-light);
  margin-bottom: var(--space-3);
}

.member-card__role-tag::before {
  content: '';
  width: 20px;
  height: 2px;
  background: var(--ams-blue-light);
  border-radius: 2px;
}

.member-card__name {
  font-size: clamp(1.5rem, 2.5vw, 2rem);
  font-weight: 800;
  color: var(--ams-blue-dark);
  line-height: 1.15;
  margin-bottom: var(--space-2);
}

.member-card__title {
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--ams-text-muted);
  margin-bottom: var(--space-5);
  padding-bottom: var(--space-5);
  border-bottom: 1px solid rgba(44,76,126,0.1);
}

.member-card__title strong {
  color: var(--primary-blue);
}

.member-card__bio {
  font-size: 0.9rem;
  color: var(--ams-text-muted);
  line-height: 1.75;
  margin-bottom: var(--space-6);
}

.member-card__bio strong {
  color: var(--ams-text-dark);
  font-weight: 600;
}

.member-card__quote {
  background: linear-gradient(135deg, rgba(44,76,126,0.05) 0%, rgba(0,155,224,0.05) 100%);
  border-left: 3px solid var(--primary-yellow);
  padding: var(--space-4) var(--space-5);
  border-radius: 0 8px 8px 0;
  margin-top: auto;
}

.member-card__quote i {
  color: var(--primary-yellow);
  font-size: 1.2rem;
  margin-bottom: var(--space-2);
  display: block;
}

.member-card__quote p {
  font-size: 0.875rem;
  color: var(--ams-text-dark);
  line-height: 1.65;
  font-style: italic;
  font-weight: 500;
  margin-bottom: var(--space-2);
}

.member-card__quote cite {
  font-size: 0.75rem;
  color: var(--ams-blue-light);
  font-weight: 600;
  font-style: normal;
  letter-spacing: 0.04em;
}

/* Photo side */
.member-card__visual {
  position: relative;
  background: linear-gradient(160deg, var(--dark-blue) 0%, var(--primary-blue) 60%, var(--ams-blue-light) 100%);
  overflow: hidden;
  min-height: 420px;
}

.member-card__visual::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    45deg,
    rgba(255,255,255,0.03) 0px,
    rgba(255,255,255,0.03) 1px,
    transparent 1px,
    transparent 12px
  );
}

.member-card__photo {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center;
  filter: mix-blend-mode: normal;
  position: relative;
  z-index: 1;
}

/* Styling khusus untuk gambar profile di dalam placeholder */
.member-card__photo-placeholder img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;       /* Memastikan gambar proporsional memenuhi area */
  object-position: top;    /* Fokus pemotongan ke bagian atas/wajah */
  z-index: 1;              /* Menutupi background dan icon, tapi tetap di bawah badge */
}

/* Pastikan icon placeholder sembunyi jika tertutup gambar */
.member-card__photo-placeholder i {
  position: relative;
  z-index: 0; 
}

.member-card__exp-badge {
  position: absolute;
  bottom: var(--space-5);
  right: var(--space-5);
  background: rgba(15,44,95,0.9);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(250,204,21,0.3);
  border-radius: 12px;
  padding: var(--space-4) var(--space-5);
  text-align: center;
  z-index: 2;
  min-width: 100px;
}

.member-card__exp-badge h4 {
  font-size: 1.75rem;
  font-weight: 800;
  color: var(--primary-yellow);
  line-height: 1;
}

.member-card__exp-badge p {
  font-size: 0.7rem;
  color: rgba(255,255,255,0.75);
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  margin-top: 4px;
}
.ams-njay{
    margin: 0 auto;
    padding: 80px 20px 0 20px;
    position: relative;
    z-index: 2;
}

    @media (max-width: 900px) {
  .member-card {
    grid-template-columns: 1fr;
  }

  .member-card__visual {
    min-height: 280px;
    order: -1;
  }
}

@media (max-width: 480px) {
  .member-card__content {
    padding: var(--space-6) var(--space-5);
  }
}
</style>
<!-- LEADERSHIP SECTION -->
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">TEAM</div>
    <span class="ams-prd-kicker">Leadership</span>
    <h2 class="ams-prd-title">AMS MANAGEMENT TEAM</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="leadership-section">
  <div class="leadership-container">

    <!-- Mr. Andrew Teow -->
    <article class="member-card">
      <div class="member-card__content">
        <span class="member-card__role-tag">Managing Director</span>
        <h2 class="member-card__name">Mr. Andrew Teow</h2>
        <p class="member-card__title"><strong>Managing</strong> Director</p>
        <p class="member-card__bio">
          Mr. Andrew Teow joined AMS in April 2016. He graduated with Bachelor Degree (Honours) and Master Degree in Petroleum Engineering from University of Technology Malaysia, Johor Bahru, Malaysia. He has over 15 years of experiences in oil and gas encompassing the drilling operations, solids control and waste management, sales and marketing and business development with different International Service Companies. <strong>With his leadership, experiences and networking, AMS has diversified and expanded into steel fabrication, accommodation upgrading, engineering controls and solutions to support clients' needs and operations.</strong>
        </p>
        <blockquote class="member-card__quote">
          <i class="fa-solid fa-quote-left"></i>
          <p>"Behind every successful project is a dedicated team. We are proud to empower our people, build lasting client relationships, and deliver services that make a real difference."</p>
          <cite>Mr Andrew Teow, MD</cite>
        </blockquote>
      </div>
      <div class="member-card__visual">
        <div class="member-card__photo-placeholder">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/management-team/andrew_teow.jpg">
        </div>
        <div class="member-card__exp-badge">
          <h4>15+</h4>
          <p>Years Experience</p>
        </div>
      </div>
    </article>

    <!-- Mr. Victor Wong -->
    <article class="member-card">
      <div class="member-card__content">
        <span class="member-card__role-tag">Director</span>
        <h2 class="member-card__name">Mr. Victor Wong</h2>
        <p class="member-card__title"><strong>Director</strong></p>
        <p class="member-card__bio">
          Mr. Victor Wong graduated in 1985 with a Degree in Business Administration and has worked in the financial industry in Singapore for 10 years before entering the marine industry in 2002. He has been in a management role in a leading marine company helping grow the business from start up to a company with excess of 100 permanent staff. He has also been involved in starting up new businesses in Malaysia and Singapore.
        </p>
        <blockquote class="member-card__quote">
          <i class="fa-solid fa-quote-left"></i>
          <p>"Our journey is driven by people, strengthened by experience, and guided by a commitment to deliver solutions that support our clients' operations today and into the future."</p>
          <cite>Mr Victor Wong, Director</cite>
        </blockquote>
      </div>
      <div class="member-card__visual">
        <div class="member-card__photo-placeholder">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/management-team/victor_wong.jpeg">
        </div>
        <div class="member-card__exp-badge">
          <h4>10+</h4>
          <p>Years Experience</p>
        </div>
      </div>
    </article>

    <!-- Mr. Dean Chapman -->
    <article class="member-card">
      <div class="member-card__content">
        <span class="member-card__role-tag">Operation Director</span>
        <h2 class="member-card__name">Mr. Dean Chapman</h2>
        <p class="member-card__title"><strong>Operation</strong> Director</p>
        <p class="member-card__bio">
          Mr. Chapman, a seasoned oil and gas professional with over 40 years of experience since 1983, has progressed from operational roles to Rig Management and, since 2007, has held key supervisory and leadership positions including Site/Construction Manager, Project Manager, Operations Manager, COO, and CTO. He brings a strong international background in drilling operations, brownfield and greenfield projects, subsea engineering, hazardous materials handling, system design, and fabrication, with a proven track record from FEED and detailed design through to offshore construction and commissioning.
        </p>
        <blockquote class="member-card__quote">
          <i class="fa-solid fa-quote-left"></i>
          <p>"Every project is an opportunity to innovate. By combining experience, commitment, and strong partnerships, we create outcomes that truly matter."</p>
          <cite>Mr Dean Chapman, Operation Director</cite>
        </blockquote>
      </div>
      <div class="member-card__visual">
        <div class="member-card__photo-placeholder">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/management-team/dean_chapman.jpeg">
        </div>
        <div class="member-card__exp-badge">
          <h4>40+</h4>
          <p>Years Experience</p>
        </div>
      </div>
    </article>

  </div>
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
<?php get_footer(); ?>
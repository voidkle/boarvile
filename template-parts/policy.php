<?php
/* Template Name: New Policy Page */
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
    .policy-section { padding: 1.5rem 1.5rem 5rem; background: var(--ams-bg-gray); }
.policy-container { margin: 0 auto; display: flex; flex-direction: column; gap: 2.5rem; }

/* STATEMENT CARD */
.statement-card {
  background: #fff; border-radius: 16px; overflow: hidden;
  box-shadow: 0 4px 24px rgba(15,44,95,0.08), 0 1px 4px rgba(15,44,95,0.05);
  border: 1px solid rgba(44,76,126,0.08);
}
.statement-card__header {
  background: linear-gradient(135deg, var(--ams-blue-dark) 0%, var(--primary-blue) 100%);
  padding: 1.75rem 2.5rem;
  display: flex; align-items: center; gap: 1rem;
}
.statement-card__header .header-icon {
  width: 48px; height: 48px; border-radius: 12px;
  background: rgba(250,204,21,0.15); border: 1px solid rgba(250,204,21,0.3);
  display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.statement-card__header .header-icon i { color: var(--primary-yellow); font-size: 1.25rem; }
.statement-card__header h2 { font-size: 1.1rem; font-weight: 700; color: #fff; }
.statement-card__header h2 span { color: var(--primary-yellow); }
.statement-card__body { padding: 2.5rem; }
.statement-card__body p {
  font-size: 0.9rem; color: var(--ams-text-muted);
  line-height: 1.85; margin-bottom: 1rem;
}
.statement-card__body p:last-child { margin-bottom: 0; }
.statement-card__body p strong { color: var(--ams-text-dark); font-weight: 600; }

/* MISSION PILLARS */
.mission-block { display: flex; flex-direction: column; gap: 1.5rem; }
.section-label {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--ams-blue-light);
  display: inline-flex; align-items: center; gap: 0.5rem;
}
.section-label::before { content: ''; width: 18px; height: 2px; background: var(--ams-blue-light); border-radius: 2px; }
.mission-block h2 { font-size: clamp(1.25rem, 2.2vw, 1.6rem); font-weight: 800; color: var(--ams-blue-dark); }

.pillars-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 1rem;
}
.pillar-card {
  background: #fff; border-radius: 14px; padding: 1.5rem 1.25rem;
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 2px 12px rgba(15,44,95,0.05);
  display: flex; flex-direction: column; gap: 0.75rem;
  position: relative; overflow: hidden;
  transition: transform 0.25s, box-shadow 0.25s;
}
.pillar-card::before {
  content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: linear-gradient(90deg, var(--primary-yellow), var(--ams-blue-light));
  transform: scaleX(0); transform-origin: left; transition: transform 0.3s ease;
}
.pillar-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(15,44,95,0.12); }
.pillar-card:hover::before { transform: scaleX(1); }
.pillar-card .pillar-icon {
  width: 44px; height: 44px; border-radius: 10px;
  background: linear-gradient(135deg, rgba(0,155,224,0.1) 0%, rgba(44,76,126,0.1) 100%);
  display: flex; align-items: center; justify-content: center;
}
.pillar-card .pillar-icon i { color: var(--ams-blue-light); font-size: 1.1rem; }
.pillar-card h4 {
  font-size: 0.78rem; font-weight: 700; color: var(--ams-blue-dark);
  text-transform: uppercase; letter-spacing: 0.06em;
}
.pillar-card p { font-size: 0.8rem; color: var(--ams-text-muted); line-height: 1.65; }

/* VISION + QUOTE */
.vision-card {
  background: #fff; border-radius: 16px; padding: 2.5rem;
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 4px 24px rgba(15,44,95,0.07);
  display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;
}
.vision-card__left .label {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--ams-blue-light);
  display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;
}
.vision-card__left .label::before { content: ''; width: 18px; height: 2px; background: var(--ams-blue-light); border-radius: 2px; }
.vision-card__left h2 { font-size: clamp(1.3rem, 2.2vw, 1.75rem); font-weight: 800; color: var(--ams-blue-dark); line-height: 1.3; margin-bottom: 1rem; }
.vision-card__left p { font-size: 0.9rem; color: var(--ams-text-muted); line-height: 1.8; }

.quote-block {
  background: linear-gradient(135deg, rgba(44,76,126,0.04) 0%, rgba(0,155,224,0.04) 100%);
  border-radius: 14px; padding: 2rem;
  border-left: 4px solid var(--primary-yellow);
}
.quote-block .quote-icon { font-size: 2.5rem; color: var(--primary-yellow); opacity: 0.45; line-height: 1; margin-bottom: 1rem; display: block; }
.quote-block p { font-size: 0.95rem; font-style: italic; color: var(--ams-text-dark); line-height: 1.75; font-weight: 500; margin-bottom: 1.25rem; }
.quote-block cite { display: flex; align-items: center; gap: 0.75rem; font-style: normal; }
.quote-block cite .avatar {
  width: 40px; height: 40px; border-radius: 50%;
  background: linear-gradient(135deg, var(--ams-blue-dark), var(--ams-blue-light));
  display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.quote-block cite .avatar i { color: #fff; font-size: 1rem; }
.quote-block cite .cite-info strong { display: block; font-size: 0.82rem; font-weight: 700; color: var(--ams-blue-dark); }
.quote-block cite .cite-info span { font-size: 0.73rem; color: var(--ams-blue-light); font-weight: 500; }
.ams-njay{
    margin: 0 auto;
    padding: 80px 20px 0 20px;
    position: relative;
    z-index: 2;
}
.ams-prd-heading-wrapper {
    margin-bottom:1rem;
}

/* RESPONSIVE */
@media (max-width: 1024px) { .pillars-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 768px) {
  .vision-card { grid-template-columns: 1fr; gap: 1.5rem; }
  .pillars-grid { grid-template-columns: repeat(2, 1fr); }
  .statement-card__body { padding: 1.5rem; }
  .statement-card__header { padding: 1.25rem 1.5rem; }
}
@media (max-width: 480px) {
  .pillars-grid { grid-template-columns: 1fr; }
  .vision-card { padding: 1.5rem; }
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">Policy</div>
    <span class="ams-prd-kicker">Statement of Policy</span>
    <h2 class="ams-prd-title">AMS Policy</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="policy-section">
  <div class="policy-container">

    <!-- Statement -->
    <div class="statement-card">
      <div class="statement-card__header">
        <div class="header-icon"><i class="fa-solid fa-file-shield"></i></div>
        <h2>Statement of <span>Policy</span></h2>
      </div>
      <div class="statement-card__body">
        <p>
          <strong>Advantage Marine Services (Malaysia) Sdn Bhd</strong>'s management shall consistently pursue a high degree of excellence to achieve customer satisfaction and even exceed their expectations by continuously improving and updating the employee's skills and resources. We will establish and continually improve our management and performance of Quality, Occupational Health and Safety for all workers, suppliers, contractors, visitors and other stakeholders.
        </p>
        <p>
          It is AMS's policy to act positively to prevent injury, ill health, damage, and loss arising from its operations, and to comply with all applicable legislation, regulation, statutory requirements and other safety and health measures required by law. AMS believes that all work related injuries, illnesses, and property losses are preventable with the commitment from management and good safety system in place.
        </p>
        <p>
          The most important factor in the undertaking of anyone's job is the prevention of injury or ill health to any employees. We will minimize the hazard by managing the risk as low as is reasonably practicable.
        </p>
      </div>
    </div>

    <!-- Mission Pillars -->
    <div class="mission-block">
      <span class="section-label">Our Mission</span>
      <h2>Our Core Mission Values</h2>
      <div class="pillars-grid">
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-earth-asia"></i></div>
          <h4>Global Partner</h4>
          <p>Build and sustain global partnership through collaboration and long-term value creation.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-handshake"></i></div>
          <h4>Trusted</h4>
          <p>Empower clients by providing innovative solutions that enhance their operational performance.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-medal"></i></div>
          <h4>Excellence</h4>
          <p>Consistently delivering operational excellence through safety, reliability, integrity and continuous improvement.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-gears"></i></div>
          <h4>Integrated Solutions</h4>
          <p>Deliver integrated solutions that simplify complexity with professional engineering and project management.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-icon"><i class="fa-solid fa-leaf"></i></div>
          <h4>Environment</h4>
          <p>Commit to the highest standards of health, safety and environmental stewardship in all operations.</p>
        </div>
      </div>
    </div>

    <!-- Vision + Quote -->
    <div class="vision-card">
      <div class="vision-card__left">
        <span class="label">Our Vision</span>
        <h2>A Trusted Global Partner Delivering Excellence</h2>
        <p>To be a trusted global partner delivering integrated solutions with excellence and confidence. AMS strives to set the benchmark in marine and offshore services through innovation, integrity, and an unwavering commitment to client satisfaction across every project and every region we serve.</p>
      </div>
      <div class="vision-card__right">
        <div class="quote-block">
          <i class="fa-solid fa-quote-left quote-icon"></i>
          <p>"Behind every successful project is a dedicated team. We are proud to empower our people, build lasting client relationships, and deliver services that make a real difference."</p>
          <cite>
            <div class="avatar"><i class="fa-solid fa-user-tie"></i></div>
            <div class="cite-info">
              <strong>Mr Andrew Teow</strong>
              <span>Director, Advantage Marine Services</span>
            </div>
          </cite>
        </div>
      </div>
    </div>

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
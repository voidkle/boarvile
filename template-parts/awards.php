<?php
/* Template Name: New Awards Page */
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
    .awards-section { padding: 5rem 1.5rem; background: var(--ams-bg-gray); }
.awards-container { max-width: 1060px; margin: 0 auto; display: flex; flex-direction: column; gap: 3rem; }

/* ── INTRO BLOCK ── */
.intro-block {
  display: grid; grid-template-columns: 1fr 420px; gap: 3rem; align-items: start;
}
.intro-block__text .section-label {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--ams-blue-light);
  display: inline-flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;
}
.intro-block__text .section-label::before {
  content: ''; width: 18px; height: 2px; background: var(--ams-blue-light); border-radius: 2px;
}
.intro-block__text h2 {
  font-size: clamp(1.4rem, 2.5vw, 2rem); font-weight: 800;
  color: var(--ams-blue-dark); line-height: 1.2; margin-bottom: 1.25rem;
}
.intro-block__text h2 span { color: var(--ams-blue-light); }
.intro-block__text p {
  font-size: 0.9rem; color: var(--ams-text-muted); line-height: 1.8; margin-bottom: 1rem;
}
.intro-block__text p:last-child { margin-bottom: 0; }

.quote-block {
  background: #fff; border-radius: 14px; padding: 1.75rem 2rem;
  border-left: 4px solid var(--primary-yellow);
  box-shadow: 0 4px 20px rgba(15,44,95,0.07);
  border-top: 1px solid rgba(44,76,126,0.08);
  border-right: 1px solid rgba(44,76,126,0.08);
  border-bottom: 1px solid rgba(44,76,126,0.08);
}
.quote-block .quote-icon { font-size: 2rem; color: var(--primary-yellow); opacity: 0.45; line-height: 1; margin-bottom: 1rem; display: block; }
.quote-block p { font-size: 0.9rem; font-style: italic; color: var(--ams-text-dark); line-height: 1.75; font-weight: 500; margin-bottom: 1.25rem; }
.quote-block cite { display: flex; align-items: center; gap: 0.75rem; font-style: normal; }
.quote-block cite .avatar {
  width: 38px; height: 38px; border-radius: 50%;
  background: linear-gradient(135deg, var(--ams-blue-dark), var(--ams-blue-light));
  display: flex; align-items: center; justify-content: center; flex-shrink: 0;
}
.quote-block cite .avatar i { color: #fff; font-size: 0.9rem; }
.quote-block cite strong { display: block; font-size: 0.8rem; font-weight: 700; color: var(--ams-blue-dark); }
.quote-block cite span { font-size: 0.72rem; color: var(--ams-blue-light); font-weight: 500; }

/* ── BANNER SECTION ── */
.banner-block {
  background: linear-gradient(135deg, #1a1200 0%, #2d1f00 40%, #1a1a1a 100%);
  border-radius: 20px; overflow: hidden; position: relative;
  box-shadow: 0 16px 48px rgba(0,0,0,0.35);
}
.banner-block::before {
  content: '';
  position: absolute; inset: 0;
  background: radial-gradient(ellipse at 30% 50%, rgba(250,204,21,0.12) 0%, transparent 60%),
              radial-gradient(ellipse at 80% 50%, rgba(250,204,21,0.08) 0%, transparent 50%);
}
.banner-header {
  text-align: center; padding: 2.5rem 2rem 1.5rem;
  position: relative; z-index: 1;
}
.banner-header .banner-kicker {
  display: inline-flex; align-items: center; gap: 0.5rem;
  font-size: 0.65rem; font-weight: 700; letter-spacing: 0.25em;
  text-transform: uppercase; color: rgba(250,204,21,0.7); margin-bottom: 0.75rem;
}
.banner-header .banner-kicker i { font-size: 0.7rem; }
.banner-header h3 {
  font-size: clamp(1.5rem, 3vw, 2.25rem); font-weight: 800;
  color: var(--primary-yellow); letter-spacing: 0.05em;
  text-shadow: 0 0 40px rgba(250,204,21,0.3); margin-bottom: 0.25rem;
}
.banner-header p { font-size: 0.78rem; color: rgba(255,255,255,0.5); letter-spacing: 0.1em; }

/* Award showcase inside banner */
.banner-awards {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 1px; background: rgba(255,255,255,0.06);
  border-top: 1px solid rgba(250,204,21,0.15);
  position: relative; z-index: 1;
}
.banner-award-item {
  padding: 1.75rem 1.5rem 2rem;
  text-align: center;
  background: rgba(0,0,0,0.2);
  transition: background 0.3s;
  position: relative; overflow: hidden;
}
.banner-award-item::before {
  content: '';
  position: absolute; top: 0; left: 50%; transform: translateX(-50%);
  width: 60%; height: 2px;
  background: linear-gradient(90deg, transparent, var(--primary-yellow), transparent);
  opacity: 0; transition: opacity 0.3s;
}
.banner-award-item:hover { background: rgba(250,204,21,0.06); }
.banner-award-item:hover::before { opacity: 1; }
.banner-award-item .trophy-icon {
  font-size: 2.25rem; margin-bottom: 0.75rem;
  background: linear-gradient(180deg, var(--primary-yellow), #d97706);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.banner-award-item h4 {
  font-size: 0.82rem; font-weight: 700;
  color: #fff; line-height: 1.4; letter-spacing: 0.02em;
}
.banner-award-item p {
  font-size: 0.7rem; color: rgba(255,255,255,0.45);
  margin-top: 0.35rem; letter-spacing: 0.05em;
}

/* ── PHOTO GALLERY (Swiper) ── */
.gallery-block { display: flex; flex-direction: column; gap: 1.25rem; }
.gallery-block .section-label {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--ams-blue-light);
  display: inline-flex; align-items: center; gap: 0.5rem;
}
.gallery-block .section-label::before { content: ''; width: 18px; height: 2px; background: var(--ams-blue-light); border-radius: 2px; }
.gallery-block h3 { font-size: 1.3rem; font-weight: 800; color: var(--ams-blue-dark); }

.gallery-swiper-wrapper { position: relative; }
.gallery-swiper {
  border-radius: 16px;
  overflow: hidden;
}
.gallery-swiper .swiper-slide { border-radius: 12px; overflow: hidden; }
.gallery-slide-inner {
  position: relative; aspect-ratio: 16/9; overflow: hidden;
  background: var(--ams-blue-dark);
}
.gallery-slide-inner img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.gallery-swiper .swiper-slide:hover img { transform: scale(1.04); }
.gallery-slide-caption {
  position: absolute; bottom: 0; left: 0; right: 0;
  padding: 1.25rem 1.5rem 1rem;
  background: linear-gradient(to top, rgba(15,44,95,0.9) 0%, transparent 100%);
}
.gallery-slide-caption .cap-tag {
  display: inline-block; font-size: 0.6rem; font-weight: 700;
  letter-spacing: 0.15em; text-transform: uppercase;
  color: var(--primary-yellow); margin-bottom: 0.25rem;
}
.gallery-slide-caption h4 { font-size: 1rem; font-weight: 700; color: #fff; line-height: 1.3; }
.gallery-slide-caption p { font-size: 0.78rem; color: rgba(255,255,255,0.65); margin-top: 0.2rem; }

.gallery-swiper .swiper-button-next,
.gallery-swiper .swiper-button-prev {
  width: 44px; height: 44px;
  background: rgba(15,44,95,0.85); backdrop-filter: blur(8px);
  border-radius: 50%; border: 1px solid rgba(250,204,21,0.25);
  color: #fff; transition: background 0.2s;
}
.gallery-swiper .swiper-button-next::after,
.gallery-swiper .swiper-button-prev::after { font-size: 0.85rem; font-weight: 700; }
.gallery-swiper .swiper-button-next:hover,
.gallery-swiper .swiper-button-prev:hover { background: var(--ams-blue-dark); }
.gallery-swiper .swiper-pagination-bullet { background: var(--primary-blue); opacity: 0.4; }
.gallery-swiper .swiper-pagination-bullet-active { background: var(--primary-yellow); opacity: 1; }

/* ── AWARD LOGOS GRID ── */
.logos-block { display: flex; flex-direction: column; gap: 1.5rem; }
.logos-block .section-label {
  font-size: 0.68rem; font-weight: 700; letter-spacing: 0.2em;
  text-transform: uppercase; color: var(--ams-blue-light);
  display: inline-flex; align-items: center; gap: 0.5rem;
}
.logos-block .section-label::before { content: ''; width: 18px; height: 2px; background: var(--ams-blue-light); border-radius: 2px; }
.logos-block h3 { font-size: 1.3rem; font-weight: 800; color: var(--ams-blue-dark); }

.award-logos-grid {
  display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;
}
.award-logo-card {
  background: #fff; border-radius: 16px; padding: 2rem 1.5rem 1.75rem;
  border: 1px solid rgba(44,76,126,0.08);
  box-shadow: 0 2px 16px rgba(15,44,95,0.06);
  display: flex; flex-direction: column; gap: 1.25rem;
  transition: transform 0.25s, box-shadow 0.25s;
  position: relative; overflow: hidden;
}
.award-logo-card::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; height: 3px;
  background: linear-gradient(90deg, var(--primary-yellow), var(--ams-blue-light));
}
.award-logo-card:hover { transform: translateY(-4px); box-shadow: 0 12px 36px rgba(15,44,95,0.13); }

.award-logo-card .logo-box {
  height: 80px; display: flex; align-items: center; justify-content: center;
  background: var(--ams-bg-gray); border-radius: 10px; padding: 1rem;
}
.award-logo-card .logo-box .logo-icon {
  font-size: 3rem;
  background: linear-gradient(135deg, var(--primary-yellow), #d97706);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.award-logo-card .logo-name {
  font-size: 0.78rem; font-weight: 700; color: var(--ams-blue-dark);
  text-align: center; line-height: 1.4;
}
.award-logo-card .logo-year {
  display: inline-block; font-size: 0.65rem; font-weight: 700;
  letter-spacing: 0.1em; text-transform: uppercase;
  color: var(--primary-yellow);
  background: rgba(250,204,21,0.1); border-radius: 20px;
  padding: 0.2rem 0.6rem; margin: 0 auto;
  text-align: center;
}
.award-logo-card .award-list { list-style: none; display: flex; flex-direction: column; gap: 0.5rem; border-top: 1px solid rgba(44,76,126,0.08); padding-top: 1rem; }
.award-logo-card .award-list li {
  display: flex; align-items: flex-start; gap: 0.5rem;
  font-size: 0.8rem; color: var(--ams-text-muted); line-height: 1.45;
}
.award-logo-card .award-list li i { color: var(--primary-yellow); font-size: 0.7rem; margin-top: 3px; flex-shrink: 0; }

/* RESPONSIVE */
@media (max-width: 900px) {
  .intro-block { grid-template-columns: 1fr; }
  .award-logos-grid { grid-template-columns: 1fr; }
  .banner-awards { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .banner-awards { grid-template-columns: 1fr; }
  .award-logos-grid { grid-template-columns: 1fr; }
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">AWARDS</div>
    <span class="ams-prd-kicker">Recognizing Excellence and Industry Leadership</span>
    <h2 class="ams-prd-title">AWARDS</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="awards-section">
  <div class="awards-container">

    <!-- INTRO -->
    <div class="intro-block">
      <div class="intro-block__text">
        <span class="section-label">Our Achievements</span>
        <h2>A Legacy of <span>Excellence</span> &amp; Recognition</h2>
        <p>At Advantage Marine Services (AMS), every achievement is a testament to our unwavering commitment to excellence, safety, and innovation. Since our establishment in 2014, our journey has been driven by the pursuit of quality and professionalism in every underwater and offshore operation we undertake.</p>
        <p>Over the years, our dedication to high standards, client satisfaction, and continuous improvement has earned us recognition from leading industry bodies and partners. Our awards and certifications reflect not only our technical capabilities but also our steadfast adherence to ethical practices and international offshore standards. Each recognition serves as a reminder of our responsibility to maintain trust, deliver value, and uphold the principles that define our organization.</p>
      </div>
      <div class="quote-block">
        <i class="fa-solid fa-quote-left quote-icon"></i>
        <p>"These recognitions represent more than achievements, they reaffirm our responsibility to deliver safe, efficient and high-quality services that meet and exceed client expectations. At AMS, we remain committed to maintaining the standards that define our success and to strengthening our position as a preferred partner in the marine and offshore industry."</p>
        <cite>
          <div class="avatar"><i class="fa-solid fa-user-tie"></i></div>
          <div>
            <strong>Mr Andrew Teow</strong>
            <span>Director, Advantage Marine Services</span>
          </div>
        </cite>
      </div>
    </div>

    <!-- BANNER -->
    <div class="banner-block">
      <div class="banner-header">
        <div class="banner-kicker"><i class="fa-solid fa-trophy"></i> Hall of Excellence</div>
        <h3>Awards &amp; Recognition 2025</h3>
        <p>Advantage Marine Services</p>
      </div>
      <div class="banner-awards">
        <div class="banner-award-item">
          <div class="trophy-icon"><i class="fa-solid fa-award"></i></div>
          <h4>Asia-Pacific Enterprise Awards (APEA)</h4>
          <p>2025</p>
        </div>
        <div class="banner-award-item">
          <div class="trophy-icon"><i class="fa-solid fa-trophy"></i></div>
          <h4>Golden Bull Award</h4>
          <p>2025</p>
        </div>
        <div class="banner-award-item">
          <div class="trophy-icon"><i class="fa-solid fa-medal"></i></div>
          <h4>ShangHai International Prestige Business Awards (SHIPBA)</h4>
          <p>2025</p>
        </div>
      </div>
    </div>

    <!-- PHOTO GALLERY -->
    <div class="gallery-block">
      <span class="section-label">Award Gallery</span>
      <h3>Moments of Recognition</h3>
      <div class="gallery-swiper-wrapper">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="https://picsum.photos/seed/apea-award/1200/675" alt="APEA Award Ceremony" loading="lazy" width="1200" height="675">
                <div class="gallery-slide-caption">
                  <span class="cap-tag">APEA 2025</span>
                  <h4>Asia-Pacific Enterprise Awards</h4>
                  <p>Master Entrepreneur Award &amp; Fast Enterprise Award</p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="https://picsum.photos/seed/golden-bull/1200/675" alt="Golden Bull Award" loading="lazy" width="1200" height="675">
                <div class="gallery-slide-caption">
                  <span class="cap-tag">Golden Bull Award 2025</span>
                  <h4>Golden Bull Award Ceremony</h4>
                  <p>Super Golden Bull Award &amp; Inspirational Entrepreneur Award</p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="https://picsum.photos/seed/shipba-award/1200/675" alt="SHIPBA Award" loading="lazy" width="1200" height="675">
                <div class="gallery-slide-caption">
                  <span class="cap-tag">SHIPBA 2025</span>
                  <h4>ShangHai International Prestige Business Awards</h4>
                  <p>Outstanding Entrepreneur of The Year &amp; Signature Outstanding Business</p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="gallery-slide-inner">
                <img src="https://picsum.photos/seed/ams-team-award/1200/675" alt="AMS Team at Awards" loading="lazy" width="1200" height="675">
                <div class="gallery-slide-caption">
                  <span class="cap-tag">AMS Team</span>
                  <h4>AMS Leadership at Award Ceremonies</h4>
                  <p>Proud moments of recognition with the full AMS team</p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- AWARD LOGOS -->
    <div class="logos-block">
      <span class="section-label">Award Bodies</span>
      <h3>Our Recognised Awards</h3>
      <div class="award-logos-grid">

        <div class="award-logo-card">
          <div class="logo-box">
            <span class="logo-icon"><i class="fa-solid fa-award"></i></span>
          </div>
          <div class="logo-name">Asia-Pacific Enterprise Awards (APEA)</div>
          <div class="logo-year">2025</div>
          <ul class="award-list">
            <li><i class="fa-solid fa-star"></i> Master Entrepreneur Award</li>
            <li><i class="fa-solid fa-star"></i> Fast Enterprise Award</li>
          </ul>
        </div>

        <div class="award-logo-card">
          <div class="logo-box">
            <span class="logo-icon"><i class="fa-solid fa-trophy"></i></span>
          </div>
          <div class="logo-name">Golden Bull Award (金牛奖)</div>
          <div class="logo-year">2025</div>
          <ul class="award-list">
            <li><i class="fa-solid fa-star"></i> Super Golden Bull Award</li>
            <li><i class="fa-solid fa-star"></i> Inspirational Entrepreneur Award</li>
          </ul>
        </div>

        <div class="award-logo-card">
          <div class="logo-box">
            <span class="logo-icon"><i class="fa-solid fa-medal"></i></span>
          </div>
          <div class="logo-name">ShangHai International Prestige Business Awards (SHIPBA)</div>
          <div class="logo-year">2025</div>
          <ul class="award-list">
            <li><i class="fa-solid fa-star"></i> Outstanding Entrepreneur of The Year</li>
            <li><i class="fa-solid fa-star"></i> Signature Outstanding Business</li>
          </ul>
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
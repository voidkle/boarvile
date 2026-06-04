<?php
/* Template Name: New Trading Others Page */
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
    .main-section{padding:2rem 1.5rem 5rem}
.wrap{margin:0 auto;display:flex;flex-direction:column;gap:4rem}

/* ══ SERVICES GRID ══ */
.section-heading{display:flex;flex-direction:column;gap:.4rem; margin-bottom: 2rem;}
.section-heading .slabel{
  font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--ams-blue-light);display:inline-flex;align-items:center;gap:.5rem;
}
.section-heading .slabel::before{content:'';width:18px;height:2px;background:var(--ams-blue-light);border-radius:2px}
.section-heading h3{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;color:var(--ams-blue-dark)}

.methods-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

.method-card {
    background: #fff; border-radius: 16px; padding: 2rem;
    box-shadow: 0 4px 20px rgba(15,44,95,.05); border: 1px solid rgba(44,76,126,.08);
}
.method-card__header {
    display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;
    padding-bottom: 1.25rem; border-bottom: 1px solid rgba(44,76,126,.08);
}
.method-card__header .icon-badge {
    width: 48px; height: 48px; border-radius: 12px;
    background: rgba(0,155,224,.1); color: var(--ams-blue-light);
    display: flex; align-items: center; justify-content: center;
    font-size: 1.25rem; flex-shrink: 0; border: 1px solid rgba(0,155,224,.2);
}
.method-card__header h4 {
    font-size: 1.2rem; font-weight: 800; color: var(--ams-blue-dark); line-height: 1.3;
}
.method-card__header h4 span { color: var(--ams-blue-light); }

.service-list {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;
}
.service-item{
  display:flex;align-items:flex-start;gap:.75rem;
  padding:1rem 1.25rem;background:var(--ams-bg-gray);border-radius:10px;
  border:1px solid rgba(44,76,126,.07);
  font-size:.88rem;color:var(--ams-text-muted);line-height:1.6;
  transition:background .2s, border-color .2s;
}
.service-item:hover{background:#e2f0fb; border-color:rgba(0,155,224,.25);}
.service-item i{color:var(--ams-blue-light);font-size:1rem;margin-top:3px;flex-shrink:0}

/* ══ GALLERY GRID / SWIPER (10 Small Images) ══ */
.gallery-grid{
  display:grid;grid-template-columns:repeat(5,1fr);gap:1rem;
}
.gallery-swiper-wrap{display:none}

.gallery-item{
  border-radius:12px;overflow:hidden;aspect-ratio:4/3;
  box-shadow:0 2px 12px rgba(15,44,95,.08);
  position:relative;cursor:pointer; background:var(--ams-blue-dark);
}
.gallery-item img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease}
.gallery-item:hover img{transform:scale(1.08)}
.gallery-item .goverlay{
  position:absolute;inset:0;background:rgba(15,44,95,.5);
  display:flex;align-items:center;justify-content:center;
  opacity:0;transition:opacity .3s;
}
.gallery-item:hover .goverlay{opacity:1}
.gallery-item .goverlay i{color:var(--primary-yellow);font-size:1.5rem}

/* ══ SWIPER SHARED ══ */
.swiper-pagination-bullet{background:var(--primary-blue);opacity:.4}
.swiper-pagination-bullet-active{background:var(--primary-yellow);opacity:1}

/* ══ RESPONSIVE ══ */
@media (max-width:960px){
  .service-list { grid-template-columns: 1fr; }
  .gallery-grid{grid-template-columns:repeat(3,1fr)}
}
@media (max-width:640px){
  .gallery-grid{display:none}
  .gallery-swiper-wrap{display:block;padding-bottom:2.5rem}
  .page-header h1 { font-size: 1.8rem; }
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">TRADING</div>
    <span class="ams-prd-kicker">Trading & Others</span>
    <h2 class="ams-prd-title">Trading</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- METHODS & SERVICES -->
    <div>
        <div class="section-heading">
            <span class="slabel">Capabilities</span>
            <h3>Comprehensive Support Solutions</h3>
        </div>
        
        <div class="methods-grid">
            
            <!-- TRADING -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="icon-badge"><i class="fa-solid fa-handshake"></i></div>
                    <h4>Trading <span>Services</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Involved in all stages of the supply chain from development and purchasing of raw materials to delivery.</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Processing, distribution, and sale, providing services with high added value.</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Hydrography Survey</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Multibeam Survey</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Side Scan Sonar Survey</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Sub Bottom Profiling Survey</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Rental of fenders</div>
                </div>
            </div>

            <!-- OTHER SERVICES -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="icon-badge"><i class="fa-solid fa-toolbox"></i></div>
                    <h4>Other <span>Specialized Services</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Accommodation upgrading / Carpentry work</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>High Pressure Water Blasting and painting (Rope Access and Ground work) HVAC</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Control Solution / Automation (Calibration for all sensors and gauges - such as fire, gas, wind speed, humidity, pressure and etc)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Testing and commissioning of machinery and another newly installed facility such as lifeboats, HVAC</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Jetty Construction activities by diver</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Tank Cleaning</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Duct Cleaning</div>
                </div>
            </div>

        </div>
    </div>

    <!-- GALLERY SECTION (Small Images) -->
    <div>
      <div class="section-heading">
        <span class="slabel">Portfolio</span>
        <h3>Operations Gallery</h3>
      </div>
      <!-- Desktop grid 5×2 -->
      <div class="gallery-grid">
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g1/400/300" alt="Job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g2/400/300" alt="Job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g3/400/300" alt="Job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g4/400/300" alt="Job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g5/400/300" alt="Job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g6/400/300" alt="Job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g7/400/300" alt="Job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g8/400/300" alt="Job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g9/400/300" alt="Job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/trade-g10/400/300" alt="Job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
      </div>

      <!-- Mobile swiper -->
      <div class="gallery-swiper-wrap">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g1/400/300" alt="Job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g2/400/300" alt="Job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g3/400/300" alt="Job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g4/400/300" alt="Job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g5/400/300" alt="Job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g6/400/300" alt="Job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g7/400/300" alt="Job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g8/400/300" alt="Job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g9/400/300" alt="Job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item"><img src="https://picsum.photos/seed/trade-g10/400/300" alt="Job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

  </div><!-- /wrap -->
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
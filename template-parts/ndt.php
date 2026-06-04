<?php
/* Template Name: New NDT Service Page */
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
    /* ══ MAIN WRAPPER ══ */
.main-section{padding:5rem 1.5rem}
.wrap{margin:0 auto;display:flex;flex-direction:column;gap:4rem}

/* ══ INTRO BLOCK ══ */
.intro-card{
  background:#fff;border-radius:18px;overflow:hidden;
  box-shadow:0 4px 24px rgba(15,44,95,.06);border:1px solid rgba(44,76,126,.08);
}
.intro-card__header{
  background:linear-gradient(135deg,var(--ams-blue-dark),var(--primary-blue));
  padding:1.6rem 2.2rem;display:flex;align-items:center;gap:1rem;
}
.intro-card__header .hico{
  width:48px;height:48px;border-radius:12px;
  background:rgba(250,204,21,.15);border:1px solid rgba(250,204,21,.3);
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.intro-card__header .hico i{color:var(--primary-yellow);font-size:1.25rem}
.intro-card__header h2{font-size:1.1rem;font-weight:700;color:#fff}
.intro-card__header h2 span{color:var(--primary-yellow)}
.intro-card__body{padding:2.2rem;display:grid;grid-template-columns:1fr;gap:1.5rem;}
.intro-card__body p{font-size:.95rem;color:var(--ams-text-muted);line-height:1.85;}
.intro-card__body p strong{color:var(--ams-text-dark);}

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
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}
/* Make the last few items span full width if needed */
.methods-grid > .full-width {
    grid-column: 1 / -1;
}

.method-card {
    background: #fff; border-radius: 16px; padding: 2rem;
    box-shadow: 0 4px 20px rgba(15,44,95,.05); border: 1px solid rgba(44,76,126,.08);
    height: 100%;
}
.method-card__header {
    display: flex; align-items: center; gap: 1rem; margin-bottom: 1.25rem;
    padding-bottom: 1rem; border-bottom: 1px solid rgba(44,76,126,.08);
}
.method-card__header .letter-badge {
    width: 36px; height: 36px; border-radius: 8px;
    background: rgba(0,155,224,.1); color: var(--ams-blue-light);
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 1.1rem; flex-shrink: 0;
}
.method-card__header h4 {
    font-size: 1rem; font-weight: 700; color: var(--ams-blue-dark); line-height: 1.3;
}
.method-card__header h4 span { color: var(--ams-blue-light); }
.method-card__desc {
    font-size: 0.85rem; color: var(--ams-text-muted); margin-bottom: 1.25rem; line-height: 1.7;
}

.service-list {
    display: grid; grid-template-columns: 1fr; gap: 0.6rem;
}
.full-width .service-list {
    grid-template-columns: repeat(2, 1fr);
}
.service-item{
  display:flex;align-items:flex-start;gap:.65rem;
  padding:.7rem .9rem;background:var(--ams-bg-gray);border-radius:10px;
  border:1px solid rgba(44,76,126,.07);
  font-size:.82rem;color:var(--ams-text-muted);line-height:1.5;
  transition:background .2s;
}
.service-item:hover{background:#e2f0fb; border-color:rgba(0,155,224,.25);}
.service-item i{color:var(--ams-blue-light);font-size:.75rem;margin-top:3px;flex-shrink:0}

/* ══ PHOTO GRID / SWIPER (3 Large Images) ══ */
.photo-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.photo-swiper-wrap{display:none}

.photo-card{
  border-radius:16px;overflow:hidden;
  box-shadow:0 4px 20px rgba(15,44,95,.1);border:1px solid rgba(44,76,126,.08);
  position:relative;background:var(--ams-blue-dark);
}
.photo-card__img{aspect-ratio:3/4;overflow:hidden}
.photo-card__img img{width:100%;height:100%;object-fit:cover;object-position:center;transition:transform .5s ease}
.photo-card:hover .photo-card__img img{transform:scale(1.06)}
.photo-card__overlay{
  position:absolute;bottom:0;left:0;right:0;
  padding:1.25rem 1.25rem 1rem;
  background:linear-gradient(to top,rgba(15,44,95,.85) 0%,transparent 100%);
  display:flex;align-items:center;gap:.5rem;
}
.photo-card__overlay i{color:var(--primary-yellow);font-size:.8rem}
.photo-card__overlay span{font-size:.8rem;font-weight:600;color:#fff}

/* ══ GALLERY GRID / SWIPER (10 Small Images) ══ */
.gallery-grid{
  display:grid;grid-template-columns:repeat(5,1fr);gap:1rem;
}
.gallery-swiper-wrap{display:none}

.gallery-item{
  border-radius:12px;overflow:hidden;aspect-ratio:1;
  box-shadow:0 2px 12px rgba(15,44,95,.08);
  position:relative;cursor:pointer;
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
.swiper-button-next,.swiper-button-prev{
  width:42px;height:42px;border-radius:50%;
  background:rgba(15,44,95,.85);backdrop-filter:blur(8px);
  border:1px solid rgba(250,204,21,.25);color:#fff;
}
.swiper-button-next::after,.swiper-button-prev::after{font-size:.8rem;font-weight:700}


/* ══ RESPONSIVE ══ */
@media (max-width:960px){
  .methods-grid { grid-template-columns: 1fr; }
  .full-width .service-list { grid-template-columns: 1fr; }
  .gallery-grid{grid-template-columns:repeat(3,1fr)}
}
@media (max-width:640px){
  .photo-grid{display:none}
  .photo-swiper-wrap{display:block;padding-bottom:2.5rem}
  .gallery-grid{display:none}
  .gallery-swiper-wrap{display:block;padding-bottom:2.5rem}
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">NDT</div>
    <span class="ams-prd-kicker">NON-DESTRUCTIVE TESTING</span>
    <h2 class="ams-prd-title">NDT</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- INTRO CARD -->
    <div class="intro-card">
      <div class="intro-card__header">
        <div class="hico"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
        <h2>About Our <span>NDT Inspection</span> Services</h2>
      </div>
      <div class="intro-card__body">
        <p><strong>Advantage Marine Services (AMS)</strong> provides a comprehensive range of Non-Destructive Testing (NDT) inspection services globally, adhering strictly to international standards such as API, ASME, AWS, and EN. Our typical scopes include structural assessment, pipeline inspection, storage tank surveys, hull structure evaluation, and crane components testing.</p>
        <p>AMS emphasizes quality and safety. We deploy competent personnel, advanced equipment, and strictly follow approved procedures. Our IRATA-certified NDT technicians are capable of accessing and inspecting difficult-to-reach areas, minimizing downtime and optimizing operational efficiency.</p>
      </div>
    </div>

    <!-- METHODS & SERVICES -->
    <div>
        <div class="section-heading">
            <span class="slabel">Testing &amp; Inspection</span>
            <h3>Comprehensive NDT Methods</h3>
        </div>
        
        <div class="methods-grid">
            
            <!-- Method A -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">A</div>
                    <h4>Tubular &amp; Heat Exchanger <span>Inspection Methods</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Internal Rotary Inspection System (IRIS)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Remote Visual Inspection (RVI)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Magnetic Flux Leakage Testing (MFL)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Eddy Current Testing (ECT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Acoustic Emission Testing (AET)</div>
                </div>
            </div>

            <!-- Method B -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">B</div>
                    <h4>Material Characterization <span>/ Property Testing</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Positive Material Identification (PMI) - XRF/OES</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Hardness Testing (HT) - Portable &amp; Benchtop</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Ferrite Testing (FT) - Ferrite Content Measurement</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Microstructure Replica / Metallography</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Coating Thickness Measurement</div>
                </div>
            </div>

            <!-- Method C -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">C</div>
                    <h4>Leak &amp; Pressure <span>Testing Methods</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Vacuum Box Testing (VBT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Ultrasonic Leak Testing (ULT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Hydrostatic Testing (HT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Pressure Decay Testing</div>
                </div>
            </div>

            <!-- Method D -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">D</div>
                    <h4>Radiographic <span>Inspection &amp; Testing Services</span></h4>
                </div>
                <p class="method-card__desc">Radiographic Testing (RT) is a non-destructive testing (NDT) method used to inspect the internal structure of manufactured components, utilizing short-wavelength electromagnetic radiation to penetrate materials and identify hidden flaws.</p>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Conventional Radiography</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Computed Radiography (CR)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Digital Radiography (DR)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Direct Radiography (DR)</div>
                </div>
            </div>

            <!-- Method E -->
            <div class="method-card full-width">
                <div class="method-card__header">
                    <div class="letter-badge">E</div>
                    <h4>Impressed Current <span>Cathodic Protection</span></h4>
                </div>
                <p class="method-card__desc">Advantage Marine Services provides complete Impressed Current Cathodic Protection (ICCP) and Sacrificial Anode Systems to combat corrosion on underwater structures. Our proactive approach ensures that your assets operate reliably while extending their lifespan, optimizing performance, and reducing operational costs across marine environments.</p>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>ICCP System Installation &amp; Commissioning</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Sacrificial Anode Installation (SACP)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>CP System Maintenance &amp; Troubleshooting</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Background Survey &amp; Potential Monitoring</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Post Installation Survey &amp; Inspection</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Cathodic Protection (CP) Retrofit &amp; System Upgrade</div>
                </div>
            </div>

        </div>
    </div>


    <!-- PHOTO SECTION (Large Images) -->
    <div class="photo-block">
      <div class="section-heading">
        <span class="slabel">In Action</span>
        <h3>NDT Operations</h3>
      </div>

      <!-- Desktop grid -->
      <div class="photo-grid">
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt1/600/800" alt="NDT Operation 1" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Pipeline Inspection</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt2/600/800" alt="NDT Operation 2" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Offshore Structural Check</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt3/600/800" alt="NDT Operation 3" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Rope Access NDT</span></div>
        </div>
      </div>

      <!-- Mobile swiper -->
      <div class="photo-swiper-wrap">
        <div class="swiper photo-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt1/600/800" alt="Pipeline Inspection" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Pipeline Inspection</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt2/600/800" alt="Offshore Structural Check" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Offshore Structural Check</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt3/600/800" alt="Rope Access NDT" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Rope Access NDT</span></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>


    <!-- GALLERY SECTION (Small Images) -->
    <div>
      <div class="section-heading">
        <span class="slabel">Portfolio</span>
        <h3>Testing &amp; Inspection Gallery</h3>
      </div>

      <!-- Desktop grid 5×2 -->
      <div class="gallery-grid">
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g1/400/400" alt="NDT job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g2/400/400" alt="NDT job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g3/400/400" alt="NDT job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g4/400/400" alt="NDT job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g5/400/400" alt="NDT job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g6/400/400" alt="NDT job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g7/400/400" alt="NDT job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g8/400/400" alt="NDT job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g9/400/400" alt="NDT job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-g10/400/400" alt="NDT job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
      </div>

      <!-- Mobile swiper -->
      <div class="gallery-swiper-wrap">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g1/400/400" alt="NDT job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g2/400/400" alt="NDT job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g3/400/400" alt="NDT job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g4/400/400" alt="NDT job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g5/400/400" alt="NDT job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g6/400/400" alt="NDT job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g7/400/400" alt="NDT job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g8/400/400" alt="NDT job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g9/400/400" alt="NDT job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-g10/400/400" alt="NDT job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
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
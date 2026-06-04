<?php
/* Template Name: New Conventional NDT Page */
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
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

.method-card {
    background: #fff; border-radius: 16px; padding: 2rem;
    box-shadow: 0 4px 20px rgba(15,44,95,.05); border: 1px solid rgba(44,76,126,.08);
}
.method-card__header {
    display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;
    padding-bottom: 1.25rem; border-bottom: 1px solid rgba(44,76,126,.08);
}
.method-card__header .letter-badge {
    width: 42px; height: 42px; border-radius: 10px;
    background: rgba(0,155,224,.1); color: var(--ams-blue-light);
    display: flex; align-items: center; justify-content: center;
    font-weight: 800; font-size: 1.25rem; flex-shrink: 0;
}
.method-card__header h4 {
    font-size: 1.15rem; font-weight: 800; color: var(--ams-blue-dark); line-height: 1.3;
}
.method-card__header h4 span { color: var(--ams-blue-light); }

.service-list {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.8rem;
}
.service-item{
  display:flex;align-items:flex-start;gap:.65rem;
  padding:.8rem 1rem;background:var(--ams-bg-gray);border-radius:10px;
  border:1px solid rgba(44,76,126,.07);
  font-size:.85rem;color:var(--ams-text-muted);line-height:1.5;
  transition:background .2s, border-color .2s;
}
.service-item:hover{background:#e2f0fb; border-color:rgba(0,155,224,.25);}
.service-item i{color:var(--ams-blue-light);font-size:.85rem;margin-top:2px;flex-shrink:0}

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

/* ══ RESPONSIVE ══ */
@media (max-width:960px){
  .service-list { grid-template-columns: 1fr; }
  .gallery-grid{grid-template-columns:repeat(3,1fr)}
}
@media (max-width:640px){
  .photo-grid{display:none}
  .photo-swiper-wrap{display:block;padding-bottom:2.5rem}
  .gallery-grid{display:none}
  .gallery-swiper-wrap{display:block;padding-bottom:2.5rem}
  .page-header h1 { font-size: 1.8rem; }
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">NDT</div>
    <span class="ams-prd-kicker">CONVENTIONAL NDT METHODS & ADVANCED NDT METHODS</span>
    <h2 class="ams-prd-title">NDT</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- INTRO CARD -->
    <div class="intro-card">
      <div class="intro-card__header">
        <div class="hico"><i class="fa-solid fa-microscope"></i></div>
        <h2>Structured <span>NDT Solutions</span></h2>
      </div>
      <div class="intro-card__body">
        <p>Advantage Marine Services (AMS) offers a structured range of NDT solutions combining established inspection practices with advanced technologies to suit varying project requirements and economic reality. The selection of method is based on inspection objectives, material type, component geometry, and applicable standards.</p>
        <p>All NDT activities are carried out by <strong>qualified and certified personnel</strong> using approved procedures and calibrated equipment, ensuring consistent inspection outcomes, accurate reporting, and full traceability in accordance with relevant codes, standards, and client specifications.</p>
      </div>
    </div>

    <!-- METHODS & SERVICES -->
    <div>
        <div class="section-heading">
            <span class="slabel">Methodologies</span>
            <h3>Our Inspection Capabilities</h3>
        </div>
        
        <div class="methods-grid">
            
            <!-- Method A: Conventional -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">A</div>
                    <h4>Conventional <span>NDT Methods</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Visual Testing (VT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Radiographic Testing (RT) – Film Radiography (X-ray, Gamma ray)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Ultrasonic Testing (UT) – Thickness Gauging, Flaw Detection</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Magnetic Particle Testing (MT/MPI)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Liquid/Dye Penetrant Testing (PT/DPI)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Eddy Current Testing (ECT) [basic level]</div>
                </div>
            </div>

            <!-- Method B: Advanced -->
            <div class="method-card">
                <div class="method-card__header">
                    <div class="letter-badge">B</div>
                    <h4>Advanced <span>NDT Methods</span></h4>
                </div>
                <div class="service-list">
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Phased Array Ultrasonic Testing (PAUT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Time of Flight Diffraction (TOFD)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Digital Radiography Testing (DRT) – Computed Radiography (CR), Digital Detector Array (DDA)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Guided Wave Testing (GWT/LRUT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Shear Wave Ultrasound (SWUT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Acoustic Emission Testing (AET)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Infrared Thermography (IRT)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Computed Tomography (CT Scanning)</div>
                    <div class="service-item"><i class="fa-solid fa-check-circle"></i>Electromagnetic Acoustic Transducer (EMAT)</div>
                </div>
            </div>

        </div>
    </div>

    <!-- PHOTO SECTION (Large Images) -->
    <div class="photo-block">
      <div class="section-heading">
        <span class="slabel">In Action</span>
        <h3>Field Operations</h3>
      </div>

      <!-- Desktop grid -->
      <div class="photo-grid">
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt-meth1/600/800" alt="NDT Operation 1" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Conventional Inspection</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt-meth2/600/800" alt="NDT Operation 2" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Advanced Testing</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/ndt-meth3/600/800" alt="NDT Operation 3" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Rope Access Setup</span></div>
        </div>
      </div>

      <!-- Mobile swiper -->
      <div class="photo-swiper-wrap">
        <div class="swiper photo-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt-meth1/600/800" alt="Conventional Inspection" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Conventional Inspection</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt-meth2/600/800" alt="Advanced Testing" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Advanced Testing</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/ndt-meth3/600/800" alt="Rope Access Setup" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Rope Access Setup</span></div>
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
        <h3>Methods Gallery</h3>
      </div>

      <!-- Desktop grid 5×2 -->
      <div class="gallery-grid">
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g1/400/400" alt="NDT job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g2/400/400" alt="NDT job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g3/400/400" alt="NDT job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g4/400/400" alt="NDT job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g5/400/400" alt="NDT job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g6/400/400" alt="NDT job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g7/400/400" alt="NDT job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g8/400/400" alt="NDT job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g9/400/400" alt="NDT job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/ndt-m-g10/400/400" alt="NDT job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
      </div>

      <!-- Mobile swiper -->
      <div class="gallery-swiper-wrap">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g1/400/400" alt="NDT job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g2/400/400" alt="NDT job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g3/400/400" alt="NDT job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g4/400/400" alt="NDT job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g5/400/400" alt="NDT job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g6/400/400" alt="NDT job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g7/400/400" alt="NDT job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g8/400/400" alt="NDT job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g9/400/400" alt="NDT job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/ndt-m-g10/400/400" alt="NDT job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
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
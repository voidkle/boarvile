<?php
/* Template Name: New Engineering Steelwork Page */
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

.service-list {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.8rem;
}
.service-item{
  display:flex;align-items:flex-start;gap:.75rem;
  padding:1rem 1.25rem;background:#fff;border-radius:12px;
  border:1px solid rgba(44,76,126,.08); box-shadow:0 2px 12px rgba(15,44,95,.03);
  font-size:.88rem;color:var(--ams-text-muted);line-height:1.6;
  transition:background .2s, border-color .2s, transform .2s, box-shadow .2s;
}
.service-item:hover{
  background:#f4f9fd; border-color:rgba(0,155,224,.25);
  transform:translateY(-2px); box-shadow:0 6px 16px rgba(15,44,95,.06);
}
.service-item i{color:var(--ams-blue-light);font-size:1rem;margin-top:3px;flex-shrink:0}

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
    <div class="ams-prd-watermark-top">STEELWORK</div>
    <span class="ams-prd-kicker">Leadership</span>
    <h2 class="ams-prd-title">Engineering & Steelwork</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- INTRO CARD -->
    <div class="intro-card">
      <div class="intro-card__header">
        <div class="hico"><i class="fa-solid fa-helmet-safety"></i></div>
        <h2>Comprehensive <span>Engineering Solutions</span></h2>
      </div>
      <div class="intro-card__body">
        <p>Advantage Marine Services (AMS) offers a comprehensive range of engineering and steelwork solutions designed to meet diverse project requirements across the marine, offshore, and industrial sectors. Our Engineering &amp; Steelwork team is dedicated to providing expertise and quality of works that meet and exceed client expectations and satisfaction.</p>
        <p>Our scope covers a wide range of services including Engineering Design, Analysis, Structure and Pipe fabrication, Structure and Pipe Repair works, Blasting and Painting Works, as well as Mechanical and Electrical Works. Our engineering and steelwork department frequently collaborates with other departments to deliver full-range scopes such as Special Periodical Survey (SPS) and Engineering Procurement and Construction (EPC).</p>
      </div>
    </div>

    <!-- SERVICES LIST -->
    <div>
        <div class="section-heading">
            <span class="slabel">Capabilities</span>
            <h3>We Offer the Following Services:</h3>
        </div>
        
        <div class="service-list">
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Providing complete set of Project Management Team (PMT) in managing wide range scope of project such as SPS and EPC.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Aluminium Boat And Small Craft fabrication.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Engineering Design, Fabrication Design, Engineering Analysis and FEA for Marine and Offshore Structure.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Shop Fabrication and Site Installation for Major &amp; Minor Structure, Hull Plates, Piping and Instrumentation for Marine and Offshore.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Providing service for Marine and Offshore Special Periodical Survey Services.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Marine &amp; Offshore Repair and Maintenance.</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Mechanical &amp; Electrical Repair &amp; Service.</div>
        </div>
    </div>

    <!-- PHOTO SECTION (Large Images) -->
    <div class="photo-block">
      <div class="section-heading">
        <span class="slabel">In Action</span>
        <h3>Engineering &amp; Steelwork Job Photo Gallery</h3>
      </div>

      <!-- Desktop grid -->
      <div class="photo-grid">
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/steel1/600/800" alt="Steel Fabrication 1" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Pipe Fabrication</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/steel2/600/800" alt="Steel Fabrication 2" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>On-site Welding</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/steel3/600/800" alt="Steel Fabrication 3" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Structure Repair</span></div>
        </div>
      </div>

      <!-- Mobile swiper -->
      <div class="photo-swiper-wrap">
        <div class="swiper photo-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/steel1/600/800" alt="Pipe Fabrication" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Pipe Fabrication</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/steel2/600/800" alt="On-site Welding" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>On-site Welding</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/steel3/600/800" alt="Structure Repair" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Structure Repair</span></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- GALLERY SECTION (Small Images) -->
    <div>
      <!-- Desktop grid 5×2 -->
      <div class="gallery-grid">
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g1/400/400" alt="Engineering job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g2/400/400" alt="Engineering job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g3/400/400" alt="Engineering job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g4/400/400" alt="Engineering job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g5/400/400" alt="Engineering job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g6/400/400" alt="Engineering job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g7/400/400" alt="Engineering job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g8/400/400" alt="Engineering job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g9/400/400" alt="Engineering job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/eng-g10/400/400" alt="Engineering job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
      </div>

      <!-- Mobile swiper -->
      <div class="gallery-swiper-wrap">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g1/400/400" alt="Engineering job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g2/400/400" alt="Engineering job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g3/400/400" alt="Engineering job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g4/400/400" alt="Engineering job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g5/400/400" alt="Engineering job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g6/400/400" alt="Engineering job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g7/400/400" alt="Engineering job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g8/400/400" alt="Engineering job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g9/400/400" alt="Engineering job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/eng-g10/400/400" alt="Engineering job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
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
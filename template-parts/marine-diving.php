<?php
/* Template Name: New Marine/Diving Page */
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
.main-section{padding:2rem 1.5rem 5rem}
.wrap{margin:0 auto;display:flex;flex-direction:column;gap:3rem}

/* ══ INTRO BLOCK ══ */
.intro-card{
  background:#fff;border-radius:18px;overflow:hidden;
  box-shadow:0 4px 24px rgba(15,44,95,.08);border:1px solid rgba(44,76,126,.08);
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
.intro-card__body{padding:2.2rem;display:grid;grid-template-columns:1fr 1fr;gap:2.5rem;align-items:start}
.intro-body__left p{font-size:.9rem;color:var(--ams-text-muted);line-height:1.85;margin-bottom:1rem}
.intro-body__left p:last-child{margin-bottom:0}
.intro-body__right .services-label{
  font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--ams-blue-light);display:inline-flex;align-items:center;gap:.5rem;margin-bottom:.9rem;
}
.intro-body__right .services-label::before{content:'';width:18px;height:2px;background:var(--ams-blue-light);border-radius:2px}
.services-grid{display:grid;grid-template-columns:1fr;gap:.6rem}
.service-item{
  display:flex;align-items:flex-start;gap:.65rem;
  padding:.7rem .9rem;background:var(--ams-bg-gray);border-radius:10px;
  border:1px solid rgba(44,76,126,.07);
  font-size:.82rem;color:var(--ams-text-muted);line-height:1.5;
  transition:background .2s;
}
.service-item:hover{background:#e2f0fb}
.service-item i{color:var(--ams-blue-light);font-size:.75rem;margin-top:3px;flex-shrink:0}

/* ══ QUOTE ══ */
.quote-block{
  background:#fff;border-radius:14px;padding:1.8rem 2rem;
  border-left:4px solid var(--primary-yellow);
  box-shadow:0 4px 20px rgba(15,44,95,.07);
  border-top:1px solid rgba(44,76,126,.08);
  border-right:1px solid rgba(44,76,126,.08);
  border-bottom:1px solid rgba(44,76,126,.08);
}
.quote-block .qicon{font-size:2rem;color:var(--primary-yellow);opacity:.45;margin-bottom:.7rem;display:block}
.quote-block p{font-size:.9rem;font-style:italic;color:var(--ams-text-dark);line-height:1.8;margin-bottom:1rem}
.quote-block cite{display:flex;align-items:center;gap:.75rem;font-style:normal}
.quote-block .avatar{
  width:38px;height:38px;border-radius:50%;
  background:linear-gradient(135deg,var(--ams-blue-dark),var(--ams-blue-light));
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.quote-block .avatar i{color:#fff;font-size:.9rem}
.quote-block .cite-info strong{display:block;font-size:.8rem;color:var(--ams-blue-dark)}
.quote-block .cite-info span{font-size:.72rem;color:var(--ams-blue-light);font-weight:500}

/* ══ SECTION HEADING ══ */
.section-heading{display:flex;flex-direction:column;gap:.4rem}
.section-heading .slabel{
  font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
  color:var(--ams-blue-light);display:inline-flex;align-items:center;gap:.5rem;
}
.section-heading .slabel::before{content:'';width:18px;height:2px;background:var(--ams-blue-light);border-radius:2px}
.section-heading h3{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;color:var(--ams-blue-dark)}

/* ══ EQUIPMENT GRID / SWIPER ══ */
/* Desktop: 3-col grid */
.equip-block{}
.equip-grid{
  display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;
}
/* Mobile swiper hidden by default on desktop */
.equip-swiper-wrap{display:none}

.equip-card{
  background:#fff;border-radius:14px;overflow:hidden;
  box-shadow:0 2px 16px rgba(15,44,95,.08);border:1px solid rgba(44,76,126,.08);
  transition:transform .25s,box-shadow .25s;
}
.equip-card:hover{transform:translateY(-4px);box-shadow:0 12px 32px rgba(15,44,95,.13)}
.equip-card__img{aspect-ratio:4/3;overflow:hidden;background:var(--ams-blue-dark)}
.equip-card__img img{width:100%;height:100%;object-fit:cover;transition:transform .5s ease}
.equip-card:hover .equip-card__img img{transform:scale(1.06)}
.equip-card__caption{padding:.9rem 1rem;display:flex;align-items:center;gap:.6rem}
.equip-card__caption i{color:var(--primary-yellow);font-size:.8rem;flex-shrink:0}
.equip-card__caption span{font-size:.82rem;font-weight:600;color:var(--ams-text-dark)}

/* ══ FEATURED BOAT ══ */
.boat-card{
  border-radius:18px;overflow:hidden;position:relative;
  box-shadow:0 8px 32px rgba(15,44,95,.15);
}
.boat-card__img{aspect-ratio:21/9;overflow:hidden;background:var(--ams-blue-dark)}
.boat-card__img img{width:100%;height:100%;object-fit:cover}
.boat-card__overlay{
  position:absolute;bottom:0;left:0;right:0;
  padding:2rem 2.5rem 1.75rem;
  background:linear-gradient(to top,rgba(15,44,95,.92) 0%,transparent 100%);
}
.boat-card__overlay .badge-tag{
  display:inline-block;font-size:.65rem;font-weight:700;letter-spacing:.15em;
  text-transform:uppercase;color:var(--primary-yellow);margin-bottom:.4rem;
}
.boat-card__overlay h4{font-size:1.2rem;font-weight:800;color:#fff;margin-bottom:.3rem}
.boat-card__overlay p{font-size:.8rem;color:rgba(255,255,255,.7)}

/* ══ GALLERY GRID / SWIPER ══ */
/* Desktop: 5-col grid, 2 rows */
.gallery-grid{
  display:grid;grid-template-columns:repeat(5,1fr);gap:1rem;
}
/* Mobile swiper hidden */
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
.swiper-button-next,.swiper-button-prev{
  width:42px;height:42px;border-radius:50%;
  background:rgba(15,44,95,.85);backdrop-filter:blur(8px);
  border:1px solid rgba(250,204,21,.25);color:#fff;
}
.swiper-button-next::after,.swiper-button-prev::after{font-size:.8rem;font-weight:700}
.swiper-pagination-bullet{background:var(--primary-blue);opacity:.4}
.swiper-pagination-bullet-active{background:var(--primary-yellow);opacity:1}

/* ══ RESPONSIVE ══ */
@media (max-width:960px){
  .intro-card__body{grid-template-columns:1fr}
  .equip-grid{grid-template-columns:repeat(2,1fr)}
  .gallery-grid{grid-template-columns:repeat(3,1fr)}
  .boat-card__img{aspect-ratio:16/9}
}
@media (max-width:640px){
  /* hide grid, show swiper */
  .equip-grid{display:none}
  .equip-swiper-wrap{display:block;padding-bottom:2.5rem}
  .gallery-grid{display:none}
  .gallery-swiper-wrap{display:block;padding-bottom:2.5rem}
  .boat-card__overlay{padding:1.25rem 1.5rem 1.25rem}
  .boat-card__overlay h4{font-size:1rem}
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">DIVING</div>
    <span class="ams-prd-kicker">Commercial Marine & Diving Services</span>
    <h2 class="ams-prd-title">Marine / Diving</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- INTRO CARD -->
    <div class="intro-card">
      <div class="intro-card__header">
        <div class="hico"><i class="fa-solid fa-anchor"></i></div>
        <h2>About Our <span>Marine / Diving</span> Division</h2>
      </div>
      <div class="intro-card__body">
        <div class="intro-body__left">
          <p>AMS has more than 10 years experience in the commercial diving industry. Our excellent track records allow us to expand significantly in a short period. In terms of facilities, our warehouse facility in Johor has 4630 sqm. We are well equipped with all the necessary diving equipments to get the job done.</p>
          <p>Brushkarts for UW hull cleaning, Power pack, dive control, offshore IMCA standards depressurised chamber, control panel, high quality UW CCTV camera and much more.</p>
        </div>
        <div class="intro-body__right">
          <span class="services-label">Our Services</span>
          <div class="services-grid">
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Hull cleaning &amp; propeller polishing using hydraulic power-pack and brush-kart</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Class in-water surveys/UIWLDs, rudder pintle clearances, tail shaft wear-down measurements</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Full range of other underwater maintenance services</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Underwater hull repairs using cofferdams</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Salvage works</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>Rudder pintle clearance and tail shaft wear-down measurements</div>
            <div class="service-item"><i class="fa-solid fa-circle-check"></i>SBM (Single Buoy Mooring) inspection and maintenance</div>
          </div>
        </div>
      </div>
    </div>

    <!-- QUOTE -->
    <div class="quote-block">
      <i class="fa-solid fa-quote-left qicon"></i>
      <p>"Behind every successful project is a dedicated team. We are proud to empower our people, build lasting client relationships, and deliver services that make a real difference."</p>
      <cite>
        <div class="avatar"><i class="fa-solid fa-user-tie"></i></div>
        <div class="cite-info">
          <strong>Mr Andrew Teow</strong>
          <span>Director, Advantage Marine Services</span>
        </div>
      </cite>
    </div>

    <!-- EQUIPMENT GRID -->
    <div class="equip-block">
      <div class="section-heading" style="margin-bottom:1.25rem">
        <span class="slabel">Equipment &amp; Facilities</span>
        <h3>Our Diving Equipment</h3>
      </div>

      <!-- Desktop grid -->
      <div class="equip-grid">
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/umbilical/600/450" alt="Umbilical Racks" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Umbilical Racks</span></div>
        </div>
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/brushkart/600/450" alt="AMS Brushkart for HC" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>AMS Brushkart for HC</span></div>
        </div>
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/divecontrol/600/450" alt="Dive control panel" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Dive Control Panel</span></div>
        </div>
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/cctv-setup/600/450" alt="CCTV set-up" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>CCTV Set-up</span></div>
        </div>
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/pneumatic/600/450" alt="Pneumatic gauge" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Pneumatic Gauge</span></div>
        </div>
        <div class="equip-card">
          <div class="equip-card__img"><img src="https://picsum.photos/seed/ams-container/600/450" alt="AMS Container" loading="lazy"></div>
          <div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>AMS Container</span></div>
        </div>
      </div>

      <!-- Mobile swiper -->
      <div class="equip-swiper-wrap">
        <div class="swiper equip-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/umbilical/600/450" alt="Umbilical Racks" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Umbilical Racks</span></div></div></div>
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/brushkart/600/450" alt="AMS Brushkart" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>AMS Brushkart for HC</span></div></div></div>
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/divecontrol/600/450" alt="Dive control panel" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Dive Control Panel</span></div></div></div>
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/cctv-setup/600/450" alt="CCTV set-up" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>CCTV Set-up</span></div></div></div>
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/pneumatic/600/450" alt="Pneumatic gauge" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>Pneumatic Gauge</span></div></div></div>
            <div class="swiper-slide"><div class="equip-card"><div class="equip-card__img"><img src="https://picsum.photos/seed/ams-container/600/450" alt="AMS Container" loading="lazy"></div><div class="equip-card__caption"><i class="fa-solid fa-circle-dot"></i><span>AMS Container</span></div></div></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- FEATURED BOAT -->
    <div>
      <div class="section-heading" style="margin-bottom:1.25rem">
        <span class="slabel">Fleet</span>
        <h3>Our Diving Vessel</h3>
      </div>
      <div class="boat-card">
        <div class="boat-card__img">
          <img src="https://picsum.photos/seed/ams-diving-boat/1400/600" alt="AMS Diving Boat – Advantage Satu" loading="lazy">
        </div>
        <div class="boat-card__overlay">
          <span class="badge-tag"><i class="fa-solid fa-ship"></i> AMS Fleet</span>
          <h4>AMS Diving Boat – Advantage Satu</h4>
          <p>Technical Specification &amp; Equipment certificate are all available upon request.</p>
        </div>
      </div>
    </div>

    <!-- PHOTO GALLERY -->
    <div>
      <div class="section-heading" style="margin-bottom:1.25rem">
        <span class="slabel">Portfolio</span>
        <h3>Diving Job Photo Gallery</h3>
      </div>

      <!-- Desktop grid 5×2 -->
      <div class="gallery-grid">
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g1/400/400" alt="Diving job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g2/400/400" alt="Diving job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g3/400/400" alt="Diving job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g4/400/400" alt="Diving job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g5/400/400" alt="Diving job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g6/400/400" alt="Diving job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g7/400/400" alt="Diving job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g8/400/400" alt="Diving job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g9/400/400" alt="Diving job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
        <div class="gallery-item"><img src="https://picsum.photos/seed/dive-g10/400/400" alt="Diving job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div>
      </div>

      <!-- Mobile swiper -->
      <div class="gallery-swiper-wrap">
        <div class="swiper gallery-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g1/400/400" alt="Diving job 1" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g2/400/400" alt="Diving job 2" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g3/400/400" alt="Diving job 3" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g4/400/400" alt="Diving job 4" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g5/400/400" alt="Diving job 5" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g6/400/400" alt="Diving job 6" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g7/400/400" alt="Diving job 7" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g8/400/400" alt="Diving job 8" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g9/400/400" alt="Diving job 9" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
            <div class="swiper-slide"><div class="gallery-item" style="aspect-ratio:4/3"><img src="https://picsum.photos/seed/dive-g10/400/400" alt="Diving job 10" loading="lazy"><div class="goverlay"><i class="fa-solid fa-magnifying-glass-plus"></i></div></div></div>
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
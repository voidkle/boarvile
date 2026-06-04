<?php
/* Template Name: New Rope Access Page */
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
    /* ══ MAIN ══ */
    .main-section{padding:2rem 1.5rem 5rem}
    .wrap{margin:0 auto;display:flex;flex-direction:column;gap:3rem}

    /* ══ IRATA BADGE ══ */
    .irata-badge{
    display:inline-flex;align-items:center;gap:.6rem;
    background:rgba(0,155,224,.1);border:1px solid rgba(0,155,224,.25);
    border-radius:999px;padding:.45rem 1rem .45rem .6rem;
    font-size:.75rem;font-weight:700;color:var(--primary-blue);
    }
    .irata-badge i{color:var(--ams-blue-light);font-size:.85rem}

    /* ══ INTRO CARD ══ */
    .intro-card{
    background:#fff;border-radius:18px;overflow:hidden;
    box-shadow:0 4px 28px rgba(15,44,95,.08);border:1px solid rgba(44,76,126,.08);
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

    .intro-body__left p{font-size:.9rem;color:var(--ams-text-muted);line-height:1.87;margin-bottom:1rem}
    .intro-body__left p:last-child{margin-bottom:0}
    .intro-body__left p strong{color:var(--ams-text-dark);font-weight:600}

    .slabel{
    font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;
    color:var(--ams-blue-light);display:inline-flex;align-items:center;gap:.5rem;margin-bottom:.9rem;
    }
    .slabel::before{content:'';width:18px;height:2px;background:var(--ams-blue-light);border-radius:2px}

    .services-grid{display:grid;grid-template-columns:1fr;gap:.65rem}
    .service-item{
    display:flex;align-items:flex-start;gap:.65rem;
    padding:.75rem 1rem;background:var(--ams-bg-gray);border-radius:10px;
    border:1px solid rgba(44,76,126,.07);
    font-size:.83rem;color:var(--ams-text-muted);line-height:1.5;
    transition:background .2s,border-color .2s;
    }
    .service-item:hover{background:#dff0fb;border-color:rgba(0,155,224,.25)}
    .service-item i{color:var(--ams-blue-light);font-size:.8rem;margin-top:2px;flex-shrink:0}

    /* ══ HIGHLIGHT STRIP ══ */
    .highlight-strip{
    background:linear-gradient(135deg,var(--ams-blue-dark) 0%,var(--primary-blue) 100%);
    border-radius:18px;padding:2rem 2.5rem;
    display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;
    position:relative;overflow:hidden;
    }
    .highlight-strip::before{
    content:'IRATA';position:absolute;font-size:8rem;font-weight:900;
    color:rgba(255,255,255,.04);right:1rem;bottom:-1rem;
    letter-spacing:.1em;pointer-events:none;user-select:none;
    }
    .hl-item{text-align:center;position:relative;z-index:1}
    .hl-item i{font-size:1.6rem;color:var(--primary-yellow);margin-bottom:.6rem}
    .hl-item strong{display:block;font-size:.85rem;font-weight:700;color:#fff;margin-bottom:.25rem}
    .hl-item span{font-size:.75rem;color:rgba(255,255,255,.65)}

    /* ══ PHOTO SECTION ══ */
    .photo-block{display:flex;flex-direction:column;gap:1.25rem}
    .section-heading{display:flex;flex-direction:column;gap:.35rem}
    .section-heading .slabel{margin-bottom:0}
    .section-heading h3{font-size:clamp(1.2rem,2.5vw,1.7rem);font-weight:800;color:var(--ams-blue-dark)}

    /* Desktop 3-col grid */
    .photo-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
    /* Mobile swiper hidden on desktop */
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

    /* ══ CERT BANNER ══ */
    .cert-banner{
    background:#fff;border-radius:16px;padding:1.75rem 2rem;
    border:1px solid rgba(44,76,126,.08);
    box-shadow:0 2px 16px rgba(15,44,95,.06);
    display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;
    }
    .cert-banner .cert-icon{
    width:56px;height:56px;border-radius:14px;
    background:linear-gradient(135deg,rgba(0,155,224,.12),rgba(44,76,126,.12));
    display:flex;align-items:center;justify-content:center;flex-shrink:0;
    }
    .cert-banner .cert-icon i{font-size:1.5rem;color:var(--ams-blue-light)}
    .cert-banner .cert-text strong{display:block;font-size:.95rem;font-weight:700;color:var(--ams-blue-dark);margin-bottom:.25rem}
    .cert-banner .cert-text p{font-size:.85rem;color:var(--ams-text-muted);line-height:1.65;max-width:72ch}

    /* ══ SWIPER SHARED ══ */
    .swiper-pagination-bullet{background:var(--primary-blue);opacity:.4}
    .swiper-pagination-bullet-active{background:var(--primary-yellow);opacity:1}

    /* ══ RESPONSIVE ══ */
    @media (max-width:880px){
    .intro-card__body{grid-template-columns:1fr}
    .highlight-strip{grid-template-columns:repeat(2,1fr)}
    }
    @media (max-width:640px){
    .photo-grid{display:none}
    .photo-swiper-wrap{display:block;padding-bottom:2.5rem}
    .highlight-strip{grid-template-columns:repeat(2,1fr);padding:1.5rem}
    .cert-banner{flex-direction:column;align-items:flex-start;gap:1rem}
}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">ROPE ACCESS</div>
    <span class="ams-prd-kicker">ROPE ACCESS SERVICE & MAINTENANCE</span>
    <h2 class="ams-prd-title">ROPE ACCESS</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="main-section">
  <div class="wrap">

    <!-- IRATA BADGE -->
    <div>
      <span class="irata-badge">
        <i class="fa-solid fa-certificate"></i>
        IRATA Member Company – Certified Rope Access Operations
      </span>
    </div>

    <!-- INTRO CARD -->
    <div class="intro-card">
      <div class="intro-card__header">
        <div class="hico"><i class="fa-solid fa-person-falling-burst"></i></div>
        <h2>About Our <span>Rope Access</span> Division</h2>
      </div>
      <div class="intro-card__body">
        <div class="intro-body__left">
          <p>Advantage Marine Services (AMS) is an <strong>IRATA Member Company</strong> specializing in safe and efficient rope access operations for inspection, repair, mechanical, rigging, and maintenance scopes across both onshore and offshore environments.</p>
          <p>Our certified rope access technicians are trained to perform complex tasks at height and in difficult-to-reach locations, ensuring minimal disruption and maximum safety. Whether for routine surveys, structural inspections, or precision maintenance work, <strong>AMS delivers cost-effective and reliable access solutions that meet stringent industry standards and client expectations.</strong></p>
          <p style="margin-top:.5rem;font-size:.82rem;color:var(--ams-text-muted)">Specifically, providing as below scopes with rope access method (IRATA member Operation):</p>
        </div>
        <div class="intro-body__right">
          <span class="slabel">Scope of Services</span>
          <div class="services-grid">
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>NDT Inspection</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Annual survey (DROPS, Derrick API 4G, LGI, Drilling tools)</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Rigging &amp; Lifting Support</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Blasting &amp; Painting</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Maintenance &amp; Repair</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Confined Space &amp; High-Level Cleaning</div>
            <div class="service-item"><i class="fa-solid fa-check-circle"></i>Installation Work</div>
          </div>
        </div>
      </div>
    </div>

    <!-- HIGHLIGHT STRIP -->
    <div class="highlight-strip">
      <div class="hl-item">
        <i class="fa-solid fa-shield-halved"></i>
        <strong>Safety First</strong>
        <span>IRATA certified technicians for every job</span>
      </div>
      <div class="hl-item">
        <i class="fa-solid fa-bolt"></i>
        <strong>Minimal Downtime</strong>
        <span>No scaffolding — faster mobilization</span>
      </div>
      <div class="hl-item">
        <i class="fa-solid fa-earth-asia"></i>
        <strong>Onshore &amp; Offshore</strong>
        <span>Operations across any environment</span>
      </div>
      <div class="hl-item">
        <i class="fa-solid fa-award"></i>
        <strong>IRATA Member</strong>
        <span>International standards, every time</span>
      </div>
    </div>

    <!-- PHOTO SECTION -->
    <div class="photo-block">
      <div class="section-heading">
        <span class="slabel">In Action</span>
        <h3>Rope Access Work at Height</h3>
      </div>

      <!-- Desktop grid -->
      <div class="photo-grid">
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/rope-offshore1/600/800" alt="Rope access offshore 1" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Offshore Structural Inspection</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/rope-offshore2/600/800" alt="Rope access offshore 2" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>High-Level Maintenance &amp; Repair</span></div>
        </div>
        <div class="photo-card">
          <div class="photo-card__img">
            <img src="https://picsum.photos/seed/rope-offshore3/600/800" alt="Rope access offshore 3" loading="lazy">
          </div>
          <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Blasting &amp; Painting Operations</span></div>
        </div>
      </div>

      <!-- Mobile swiper -->
      <div class="photo-swiper-wrap">
        <div class="swiper photo-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/rope-offshore1/600/800" alt="Offshore Structural Inspection" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Offshore Structural Inspection</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/rope-offshore2/600/800" alt="High-Level Maintenance" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>High-Level Maintenance &amp; Repair</span></div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="photo-card">
                <div class="photo-card__img"><img src="https://picsum.photos/seed/rope-offshore3/600/800" alt="Blasting & Painting" loading="lazy"></div>
                <div class="photo-card__overlay"><i class="fa-solid fa-circle-dot"></i><span>Blasting &amp; Painting Operations</span></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- CERT BANNER -->
    <div class="cert-banner">
      <div class="cert-icon"><i class="fa-solid fa-certificate"></i></div>
      <div class="cert-text">
        <strong>IRATA International Certified Operations</strong>
        <p>All rope access work is performed strictly in accordance with IRATA International standards. Our technicians are fully certified and trained to execute safe, efficient operations at height — offshore and onshore. Technical specifications and personnel certificates are available upon request.</p>
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
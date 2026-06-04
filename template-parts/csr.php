<?php
/* Template Name: New CSR Page */
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
    .section{padding:2rem 1.5rem 5rem}
.container{margin:0 auto;display:grid;gap:2rem}
.editorial{display:grid;grid-template-columns:1fr 340px;gap:1.5rem;align-items:start}
.story-card,.quote-card,.impact-card,.action-card{background:#fff;border:1px solid rgba(44,76,126,.08);border-radius:18px;box-shadow:0 4px 24px rgba(15,44,95,.07)}
.story-card{padding:2.2rem 2.2rem 2rem;position:relative;overflow:hidden}
.story-card:before{content:'';position:absolute;inset:0 0 auto 0;height:4px;background:linear-gradient(90deg,var(--primary-yellow),var(--ams-blue-light))}
.section-label{display:inline-flex;align-items:center;gap:.5rem;font-size:.68rem;font-weight:700;letter-spacing:.2em;text-transform:uppercase;color:var(--ams-blue-light);margin-bottom:.9rem}
.section-label:before{content:'';width:18px;height:2px;background:var(--ams-blue-light);border-radius:2px}
.story-card h2{font-size:clamp(1.4rem,2.8vw,2.2rem);font-weight:800;color:var(--ams-blue-dark);line-height:1.15;margin-bottom:1rem}
.story-card h2 span{color:var(--ams-blue-light)}
.story-card p{font-size:.93rem;color:var(--ams-text-muted);line-height:1.9;margin-bottom:1rem;max-width:82ch}
.story-meta{display:flex;gap:.75rem;flex-wrap:wrap;margin-top:1.5rem}
.pill{display:inline-flex;align-items:center;gap:.45rem;padding:.55rem .8rem;border-radius:999px;background:rgba(0,155,224,.08);color:var(--ams-blue-dark);font-size:.75rem;font-weight:600}
.pill i{color:var(--ams-blue-light)}
.side-stack{display:flex;flex-direction:column;gap:1rem}
.impact-card{padding:1.25rem 1.25rem 1rem;background:linear-gradient(135deg,var(--ams-blue-dark),var(--primary-blue));color:#fff;position:relative;overflow:hidden}
.impact-card:after{content:'CSR';position:absolute;right:-.2rem;bottom:-.2rem;font-size:5rem;font-weight:900;color:rgba(255,255,255,.05);line-height:1}
.impact-card h3{font-size:.78rem;letter-spacing:.16em;text-transform:uppercase;color:rgba(255,255,255,.7);margin-bottom:.35rem}
.impact-card p{font-size:.92rem;line-height:1.7;color:rgba(255,255,255,.92)}
.badge-row{display:grid;grid-template-columns:repeat(2,1fr);gap:.8rem}
.badge{background:#fff;border-radius:16px;padding:1rem;border:1px solid rgba(44,76,126,.08);box-shadow:0 2px 12px rgba(15,44,95,.05);text-align:center}
.badge i{font-size:1.15rem;color:var(--primary-yellow);margin-bottom:.55rem}
.badge strong{display:block;color:var(--ams-blue-dark);font-size:.86rem;margin-bottom:.2rem}
.badge span{font-size:.72rem;color:var(--ams-text-muted)}
.quote-card{padding:1.7rem 1.8rem;border-left:4px solid var(--primary-yellow)}
.quote-card .qicon{font-size:2.2rem;color:var(--primary-yellow);opacity:.45;margin-bottom:.7rem;display:block}
.quote-card p{font-size:.92rem;color:var(--ams-text-dark);line-height:1.8;font-style:italic;margin-bottom:1rem}
.quote-card cite{display:flex;align-items:center;gap:.75rem;font-style:normal}
.avatar{width:38px;height:38px;border-radius:50%;background:linear-gradient(135deg,var(--ams-blue-dark),var(--ams-blue-light));display:flex;align-items:center;justify-content:center;flex-shrink:0}
.avatar i{color:#fff;font-size:.95rem}
.cite-info strong{display:block;font-size:.82rem;color:var(--ams-blue-dark)}
.cite-info span{font-size:.72rem;color:var(--ams-blue-light);font-weight:500}
.quick-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem}
.quick-card{background:#fff;border:1px solid rgba(44,76,126,.08);border-radius:16px;padding:1.2rem;box-shadow:0 2px 12px rgba(15,44,95,.05);transition:transform .25s,box-shadow .25s}
.quick-card:hover{transform:translateY(-3px);box-shadow:0 10px 28px rgba(15,44,95,.12)}
.quick-card i{font-size:1.1rem;color:var(--ams-blue-light);margin-bottom:.75rem}
.quick-card h4{font-size:.85rem;color:var(--ams-blue-dark);margin-bottom:.35rem}
.quick-card p{font-size:.78rem;color:var(--ams-text-muted);line-height:1.7}
.cta-strip{background:linear-gradient(135deg,var(--ams-blue-dark) 0%,var(--primary-blue) 100%);padding:2rem;border-radius:18px;color:#fff;position:relative;overflow:hidden}
.cta-strip:before{content:'';position:absolute;inset:0;background:radial-gradient(circle at 20% 20%,rgba(250,204,21,.1),transparent 30%),radial-gradient(circle at 80% 80%,rgba(0,155,224,.1),transparent 30%)}
.cta-strip-inner{position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;gap:1rem;flex-wrap:wrap}
.cta-strip h3{font-size:1.1rem;font-weight:800}
.cta-strip p{font-size:.86rem;color:rgba(255,255,255,.75);max-width:62ch}
.cta-btn{display:inline-flex;align-items:center;gap:.55rem;background:var(--primary-yellow);color:#1f2937;font-weight:800;font-size:.8rem;letter-spacing:.08em;text-transform:uppercase;padding:.9rem 1.2rem;border-radius:10px;text-decoration:none}
@media (max-width:960px){.editorial{grid-template-columns:1fr}.quick-grid{grid-template-columns:1fr 1fr}}
@media (max-width:620px){.quick-grid,.badge-row{grid-template-columns:1fr}}
</style>
<section class="ams-njay">
<div class="ams-prd-heading-wrapper">
    <div class="ams-prd-watermark-top">CSR</div>
    <span class="ams-prd-kicker">Corporate Social Responsibility</span>
    <h2 class="ams-prd-title">CSR</h2>    
    <div class="ams-prd-title-line"></div>
</div>
</section>
<section class="section">
  <div class="container">
    <div class="editorial">
      <div class="story-card">
        <span class="section-label">Our Commitment</span>
        <h2>Responsible business practice with a focus on <span>people</span>, <span>planet</span>, and community</h2>
        <p>At Advantage Marine Services (AMS), we believe that responsible business practices extend beyond operational excellence. Our commitment to Corporate Social Responsibility (CSR) reflects our dedication to making a positive impact on the communities and environments in which we operate.</p>
        <p>We uphold the highest standards of safety, integrity, and environmental stewardship in every aspect of our business. Through our CSR initiatives, AMS actively supports community development programs, promotes marine conservation, and engages in educational and welfare projects aimed at improving lives and fostering sustainable growth.</p>
        <p>Our ongoing efforts include minimizing ecological footprints, adhering to green operation standards, and contributing to awareness programs that encourage environmental care among our employees, partners, and local communities.</p>
        <div class="story-meta">
          <div class="pill"><i class="fa-solid fa-leaf"></i> Environmental care</div>
          <div class="pill"><i class="fa-solid fa-people-group"></i> Community support</div>
          <div class="pill"><i class="fa-solid fa-shield-heart"></i> Safety & integrity</div>
        </div>
      </div>
      <div class="side-stack">
        <div class="impact-card">
          <h3>What CSR Means at AMS</h3>
          <p>It is not an obligation; it is a core value that shapes how we work, how we lead, and how we contribute to a better future.</p>
        </div>
        <div class="badge-row">
          <div class="badge"><i class="fa-solid fa-recycle"></i><strong>Green Standards</strong><span>Reduce footprint</span></div>
          <div class="badge"><i class="fa-solid fa-seedling"></i><strong>Sustainable Growth</strong><span>Long-term impact</span></div>
        </div>
        <div class="quote-card">
          <i class="fa-solid fa-quote-left qicon"></i>
          <p>Our responsibility extends beyond the success of our operations. It is our duty to protect the environment, uplift the communities we serve, and uphold the highest standards of integrity.</p>
          <cite>
            <div class="avatar"><i class="fa-solid fa-user-tie"></i></div>
            <div class="cite-info"><strong>Mr Andrew Teow</strong><span>Director, Advantage Marine Services</span></div>
          </cite>
        </div>
      </div>
    </div>
    <div class="quick-grid">
      <div class="quick-card"><i class="fa-solid fa-water"></i><h4>Marine Conservation</h4><p>Supporting efforts that protect marine ecosystems and encourage responsible offshore practices.</p></div>
      <div class="quick-card"><i class="fa-solid fa-graduation-cap"></i><h4>Education & Welfare</h4><p>Contributing to programs that improve skills, awareness, and social well-being in local communities.</p></div>
      <div class="quick-card"><i class="fa-solid fa-hands-holding-child"></i><h4>Community Impact</h4><p>Partnering with stakeholders to deliver meaningful initiatives that create lasting value.</p></div>
    </div>
    <div class="cta-strip">
      <div class="cta-strip-inner">
        <div>
          <h3>Building a sustainable future through responsible action</h3>
          <p>AMS remains committed to integrating ethical practices, social awareness, and environmental care into the foundation of our operations.</p>
        </div>
        <a class="cta-btn" href="#"><i class="fa-solid fa-arrow-right"></i> Learn More</a>
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
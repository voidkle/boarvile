<?php
/* Template Name: New About Us Page */
get_header();
?>
<style>
        /* --- RESET & VARIABLES --- */
        :root {
            --ams-aboutpg-blue-dark: #0f2c5f;
            --ams-aboutpg-blue-light: #00a0df; 
            --ams-aboutpg-yellow: #facc15;
            --ams-aboutpg-text-dark: #1e293b;
            --ams-aboutpg-text-muted: #475569;
            --ams-aboutpg-bg-light: #f8fafc;
            --ams-aboutpg-white: #ffffff;
        }

        .ams-aboutpg-container {
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        /* =========================================
           1. HERO & INTRO SECTION (SPLIT LAYOUT)
           ========================================= */
        .ams-aboutpg-hero {
            padding: 0 0 60px 0;
            position: relative;
            background-color: var(--ams-aboutpg-white);
            overflow: hidden;
        }

        /* Watermark Raksasa di Belakang Judul */
        .ams-aboutpg-watermark {
            position: absolute;
            top: 60px;
            left: 20px;
            font-size: clamp(5rem, 12vw, 10rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 2px #f1f5f9;
            letter-spacing: 5px;
            z-index: 1;
            user-select: none;
            line-height: 1;
        }

        .ams-aboutpg-grid-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: flex-start;
            position: relative;
            z-index: 2;
        }

        /* Bagian Kiri (Teks Intro) */
        .ams-aboutpg-intro-content {
            padding-top: 40px;
        }

        .ams-aboutpg-kicker {
            color: var(--ams-aboutpg-blue-light);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
            display: block;
        }

        .ams-aboutpg-title {
            color: var(--ams-aboutpg-blue-dark);
            font-size: clamp(2rem, 3.5vw, 2.8rem);
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .ams-aboutpg-title span {
            color: var(--ams-aboutpg-blue-light);
        }

        .ams-aboutpg-desc {
            color: var(--ams-aboutpg-text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Bagian Kanan (Gambar + Quote) */
        .ams-aboutpg-visual-box {
            position: relative;
            width: 100%;
            margin-top: 20px;
        }

        .ams-aboutpg-image-wrapper {
            border-radius: 8px; /* Permintaan: border-radius 8px */
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .ams-aboutpg-image-wrapper img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }

        /* Quote Overlapping Card */
        .ams-aboutpg-quote-card {
            position: absolute;
            bottom: -40px;
            left: -40px;
            background: var(--ams-aboutpg-white);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 15px 35px rgba(15, 44, 95, 0.15);
            border-left: 4px solid var(--ams-aboutpg-blue-light);
            width: 85%;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            z-index: 5;
        }

        .ams-aboutpg-quote-card i {
            font-size: 2.5rem;
            color: #bae6fd;
            margin-top: -5px;
        }

        .ams-aboutpg-quote-text {
            color: var(--ams-aboutpg-blue-dark);
            font-weight: 600;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .ams-aboutpg-quote-author {
            color: var(--ams-aboutpg-blue-light);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }


        /* =========================================
           2. CORE PILLARS SECTION (SWIPER / GRID)
           ========================================= */
        .ams-aboutpg-pillars {
            padding: 80px 0 100px 0;
            background-color: var(--ams-aboutpg-bg-light);
        }

        /* Swiper Wrapper & Cards */
        .ams-aboutpg-swiper {
            width: 100%;
            padding-bottom: 50px; /* Ruang untuk pagination */
        }

        /* Membuat semua kartu sama tinggi berdasarkan konten terbanyak */
        .ams-aboutpg-swiper .swiper-wrapper {
            align-items: stretch; 
        }

        .ams-aboutpg-swiper .swiper-slide {
            height: auto; 
        }

        .ams-aboutpg-card {
            background: var(--ams-aboutpg-white);
            border-radius: 8px; /* Permintaan: border-radius 8px */
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            height: 100%;
            display: flex;
            flex-direction: column;
            border-top: 4px solid var(--ams-aboutpg-blue-dark);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: grab;
        }

        .ams-aboutpg-card:active {
            cursor: grabbing;
        }

        .ams-aboutpg-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            border-color: var(--ams-aboutpg-blue-light);
        }

        .ams-aboutpg-card-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(0, 160, 223, 0.1);
            color: var(--ams-aboutpg-blue-light);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .ams-aboutpg-card h3 {
            color: var(--ams-aboutpg-blue-dark);
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .ams-aboutpg-card p {
            color: var(--ams-aboutpg-text-muted);
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        /* Custom Bullet List Premium */
        .ams-aboutpg-list {
            list-style: none;
            margin-top: 10px;
        }

        .ams-aboutpg-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 12px;
            font-size: 0.85rem;
            color: var(--ams-aboutpg-text-muted);
            line-height: 1.6;
        }

        .ams-aboutpg-list li strong {
            color: var(--ams-aboutpg-blue-dark);
            font-weight: 700;
        }

        .ams-aboutpg-list li::before {
            content: "\f00c"; /* FontAwesome Check icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: var(--ams-aboutpg-blue-light);
            font-size: 0.9rem;
        }
        .ams-all-section{
            margin:0;
        }
    
        /* Pagination custom */
        .ams-aboutpg-pagination {
            bottom: 0 !important;
        }
        .swiper-pagination-bullet { background: #cbd5e1; opacity: 1; }
        .swiper-pagination-bullet-active { background: var(--ams-aboutpg-blue-light); width: 24px; border-radius: 12px; transition: all 0.3s ease;}


        /* =========================================
           RESPONSIVE DESIGN
           ========================================= */
        @media (max-width: 1024px) {
            .ams-aboutpg-quote-card {
                left: -20px;
                width: 95%;
                padding: 20px;
            }
        }

        @media (max-width: 768px) {
            .ams-aboutpg-hero, .ams-aboutpg-pillars {
                padding: 60px 0;
            }
            .ams-aboutpg-grid-top {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .ams-aboutpg-watermark {
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            /* Penyesuaian Quote Card di Mobile (Stack vertikal) */
            .ams-aboutpg-quote-card {
                position: relative;
                bottom: 0;
                left: 0;
                width: 100%;
                margin-top: -30px; /* Menumpuk sedikit ke gambar */
                flex-direction: column;
                gap: 10px;
            }
            .ams-aboutpg-image-wrapper img {
                height: 350px;
            }
            .ams-aboutpg-quote-card i {
                margin-top: 0;
            }
        }
    </style>
    <section class="ams-aboutpg-hero">
        <div class="ams-aboutpg-watermark">ABOUT US</div>
        
        <div class="ams-aboutpg-container">
            <div class="ams-aboutpg-grid-top">
                
                <div class="ams-aboutpg-intro-content">
                    <span class="ams-aboutpg-kicker">Who We Are And What We Can</span>
                    <h1 class="ams-aboutpg-title">We Are The <span>Best</span> Always In This Industry...</h1>
                    
                    <p class="ams-aboutpg-desc"><strong>Advantage Marine Services (Malaysia) Sdn Bhd</strong> was established in March, 2014 to provide top notch/high quality in water services for marine/shipping and offshore.</p>
                    
                    <p class="ams-aboutpg-desc">We are committed to provide services that are identified with best-in-class safety, quality and cost effectiveness. Our expertise encompassed a wide range of services that include full air/mixed gas commercial diving, Special and Intermediate surveys on ships and rigs, Class IWS, real time CCTV inspections, U/W ship maintenance includes hull cleaning, propeller polishing/repairing, underwater repairs.</p>
                    
                    <p class="ams-aboutpg-desc">Over the years, AMS has diversified into, steel fabrication, accommodation upgrading, industrial rope access, engineering control and instrumentation to support the client's needs/operations.</p>
                </div>

                <div class="ams-aboutpg-visual-box">
                    <div class="ams-aboutpg-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/abou-us.jpg" alt="AMS Headquarters Building">
                    </div>

                    <div class="ams-aboutpg-quote-card">
                        <i class="fa-solid fa-quote-left"></i>
                        <div>
                            <p class="ams-aboutpg-quote-text">Behind every successful project is a dedicated team. We are proud to empower our people, build lasting client relationships, and deliver services that make a real difference</p>
                            <span class="ams-aboutpg-quote-author">Mr Andrew Teow, Director</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ams-aboutpg-pillars">
        <div class="ams-aboutpg-container">
            
            <div class="swiper ams-aboutpg-swiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="ams-aboutpg-card">
                            <div class="ams-aboutpg-card-icon"><i class="fa-regular fa-eye"></i></div>
                            <h3>Our Vision</h3>
                            <p>To be a trusted global partner delivering integrated solutions with excellence and confidence.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-aboutpg-card">
                            <div class="ams-aboutpg-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                            <h3>Our Commitment</h3>
                            <p>To provide best-in-class diving equipment combined with OGP/IMCA standard, practices and procedures.</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-aboutpg-card">
                            <div class="ams-aboutpg-card-icon"><i class="fa-solid fa-bullseye"></i></div>
                            <h3>Our Mission</h3>
                            <ul class="ams-aboutpg-list">
                                <li><strong>Global Partner</strong> – Build and sustain global partnership through collaboration and long-term value creation.</li>
                                <li><strong>Trusted</strong> – Empower clients by providing innovative solutions that enhance their operational performance.</li>
                                <li><strong>Excellence</strong> – Consistently delivering operational excellence through safety, reliability, integrity and continuous improvement.</li>
                                <li><strong>Integrated Solutions</strong> – Deliver integrated solutions that simplify complexity with professional engineering and project management.</li>
                                <li><strong>Environment</strong> – Commit to the highest standards of health, safety and environmental stewardship in all operations.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-aboutpg-card">
                            <div class="ams-aboutpg-card-icon"><i class="fa-solid fa-briefcase"></i></div>
                            <h3>Our Businesses</h3>
                            <ul class="ams-aboutpg-list">
                                <li>CLASS Survey (ABS, DNV/GL, BV, LRS, NKK, etc)</li>
                                <li>Ship Husbandry Services – Hull Cleaning, Propeller Polishing, etc</li>
                                <li>Afloat Repair Services – Underwater Hull Repairs</li>
                                <li>NDT Works</li>
                                <li>Fabrication, Piping & Steel Renewal</li>
                                <li>Accommodation Upgrading (Carpentry / Architectural work)</li>
                                <li>Electric Repairs (Air Conditioning, Motor Rewinding)</li>
                                <li>HVAC, Control Solution</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination ams-aboutpg-pagination"></div>
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
<?php
/* Template Name: New Services Page */
get_header();
?>
<style>
        /* --- RESET & VARIABLES --- */
        :root {
            --ams-srvpg-blue-dark: #0f2c5f;
            --ams-srvpg-blue-light: #00a0df; 
            --ams-srvpg-yellow: #facc15; 
            --ams-srvpg-text-dark: #1e293b;
            --ams-srvpg-text-muted: #64748b;
            --ams-srvpg-bg-light: #f8fafc;
            --ams-srvpg-white: #ffffff;
        }

        .ams-srvpg-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        /* =========================================
           1. HEADER & INTRO SECTION
           ========================================= */
        .ams-srvpg-header-section {
            padding: 100px 0 60px 0;
            position: relative;
            text-align: center;
        }

        .ams-srvpg-watermark {
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            font-size: clamp(5rem, 12vw, 10rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 2px rgba(0, 0, 0, 0.1); 
            letter-spacing: 5px;
            z-index: 1;
            user-select: none;
            line-height: 1;
            white-space: nowrap;
        }

        .ams-srvpg-header-content {
            position: relative;
            z-index: 2;
        }

        .ams-srvpg-kicker {
            color: var(--ams-srvpg-blue-light);
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .ams-srvpg-title {
            color: var(--ams-srvpg-blue-dark);
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 25px;
        }

        .ams-srvpg-desc {
            color: var(--ams-srvpg-text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            max-width: 900px;
            margin: 0 auto;
        }

        /* =========================================
           2. IMAGE GALLERY (SWIPER 1) DENGAN EFEK HOVER
           ========================================= */
        .ams-srvpg-gallery-section {
            padding: 0 0 80px 0;
        }

        .ams-srvpg-gallery-swiper {
            width: 100%;
            padding-bottom: 20px;
        }

        .ams-srvpg-gallery-item {
            position: relative;
            border-radius: 8px; 
            overflow: hidden;
            aspect-ratio: 4 / 5; 
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            cursor: grab;
            /* Pastikan efek hover tidak nyangkut keluar batas */
            transform: translateZ(0); 
        }
        
        .ams-srvpg-gallery-item:active {
            cursor: grabbing;
        }

        .ams-srvpg-gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .ams-srvpg-gallery-item:hover img {
            transform: scale(1.08); 
        }

        /* OVERLAY GELAP SAAT HOVER */
        .ams-srvpg-gallery-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(15, 44, 95, 0.85); /* Biru tua transparan */
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            z-index: 2;
            
            /* Sembunyikan secara default */
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease-in-out;
        }

        .ams-srvpg-gallery-item:hover .ams-srvpg-gallery-overlay {
            opacity: 1;
            visibility: visible;
        }

        /* BINGKAI KURUNG SIKU [ ] PADA OVERLAY */
        .ams-srvpg-gallery-frame {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            
            /* Animasi naik dari bawah */
            transform: translateY(20px);
            transition: transform 0.4s ease-in-out;

            /* Trik CSS murni untuk membuat sudut siku tanpa gambar */
            background: 
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) top left / 25px 2px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) top left / 2px 25px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) top right / 25px 2px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) top right / 2px 25px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) bottom left / 25px 2px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) bottom left / 2px 25px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) bottom right / 25px 2px no-repeat,
                linear-gradient(var(--ams-srvpg-white), var(--ams-srvpg-white)) bottom right / 2px 25px no-repeat;
        }

        .ams-srvpg-gallery-item:hover .ams-srvpg-gallery-frame {
            transform: translateY(0);
        }

        .ams-srvpg-gallery-frame h3 {
            color: var(--ams-srvpg-white);
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 8px;
            text-transform: capitalize;
        }

        .ams-srvpg-gallery-frame p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.85rem;
            line-height: 1.5;
        }


        /* =========================================
           3. SERVICE CARDS (SWIPER 2)
           ========================================= */
        .ams-srvpg-cards-section {
            padding: 40px 0 100px 0;
            background-color: var(--ams-srvpg-bg-light);
        }

        .ams-srvpg-cards-swiper {
            width: 100%;
            padding-top: 50px; 
            padding-bottom: 60px; 
        }

        .ams-srvpg-cards-swiper .swiper-wrapper {
            align-items: stretch;
        }

        .ams-srvpg-cards-swiper .swiper-slide {
            height: auto;
        }

        .ams-srvpg-card {
            background: var(--ams-srvpg-white);
            border-radius: 8px; 
            padding: 50px 30px 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-bottom: 4px solid transparent;
            transition: all 0.3s ease;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            cursor: grab; 
        }

        .ams-srvpg-card:active {
            cursor: grabbing;
        }

        .ams-srvpg-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-bottom: 4px solid var(--ams-srvpg-blue-dark);
        }

        .ams-srvpg-card-icon {
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 60px;
            background-color: var(--ams-srvpg-blue-light);
            color: var(--ams-srvpg-white);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            border-radius: 4px; 
            box-shadow: 0 10px 20px rgba(0, 160, 223, 0.3);
            transition: background-color 0.3s ease;
        }

        .ams-srvpg-card:hover .ams-srvpg-card-icon {
            background-color: var(--ams-srvpg-blue-dark);
            box-shadow: 0 10px 20px rgba(15, 44, 95, 0.3);
        }

        .ams-srvpg-card h3 {
            color: var(--ams-srvpg-blue-dark);
            font-size: 1.25rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .ams-srvpg-card p {
            color: var(--ams-srvpg-text-muted);
            font-size: 0.85rem;
            line-height: 1.8;
            margin-bottom: 25px;
            flex-grow: 1; 
        }

        .ams-srvpg-read-more {
            color: var(--ams-srvpg-blue-dark);
            font-size: 0.85rem;
            font-weight: 700;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            display: inline-block;
            margin-top: auto;
        }

        .ams-srvpg-read-more:hover {
            color: var(--ams-srvpg-blue-light);
        }

        /* Pagination Dots Global */
        .swiper-pagination-bullet { background: #cbd5e1; opacity: 1; }
        .swiper-pagination-bullet-active { background: var(--ams-srvpg-blue-light); width: 24px; border-radius: 12px; transition: all 0.3s ease;}
        .ams-srvpg-cards-pagination { bottom: 0 !important; }

        /* =========================================
           RESPONSIVE DESIGN
           ========================================= */
        @media (max-width: 768px) {
            .ams-srvpg-header-section {
                padding: 80px 0 40px 0;
            }
            .ams-srvpg-watermark {
                top: 40px;
            }
            .ams-srvpg-gallery-section {
                padding: 0 0 50px 0;
            }
            .ams-srvpg-cards-section {
                padding: 40px 0 60px 0;
            }
            .ams-srvpg-card {
                padding: 50px 20px 30px 20px;
            }

            /* Paksa overlay selalu muncul di HP karena tidak ada kursor hover */
            .ams-srvpg-gallery-overlay {
                opacity: 1;
                visibility: visible;
                background: rgba(15, 44, 95, 0.6); /* Lebih transparan agar gambar tetap terlihat */
            }
            .ams-srvpg-gallery-frame {
                transform: translateY(0);
            }
        }
        .ams-all-section{
            margin:0;
        }
    </style>
<section class="ams-srvpg-header-section">
        <div class="ams-srvpg-watermark">SERVICE</div>
        
        <div class="ams-srvpg-container">
            <div class="ams-srvpg-header-content">
                <span class="ams-srvpg-kicker">What We Provide</span>
                <h2 class="ams-srvpg-title">We Offering Best Service</h2>
                
                <p class="ams-srvpg-desc">Our expertise encompasses a wide range of services that include full air commercial diving, Special and Intermediate surveys on ships and rigs, Class IWS, real time CCTV inspections, U/W ship maintenance includes hull cleaning, propeller polishing/repairing, underwater repairs. This year, AMS has diversified into steel fabrication, accommodation upgrading, industrial rope access, engineering control and instrumentation to support the client's needs/operations.</p>
            </div>
        </div>
    </section>

    <section class="ams-srvpg-gallery-section">
        <div class="ams-srvpg-container">
            
            <div class="swiper ams-srvpg-gallery-swiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="ams-srvpg-gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/photo-0.png" alt="Underwater Welding">
                            
                            <div class="ams-srvpg-gallery-overlay">
                                <div class="ams-srvpg-gallery-frame">
                                    <h3>Underwater Welding</h3>
                                    <p>High quality underwater fabrication & repair.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="ams-srvpg-gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/photo-1.png" alt="Rope Access Maintenance">
                            
                            <div class="ams-srvpg-gallery-overlay">
                                <div class="ams-srvpg-gallery-frame">
                                    <h3>Rope Access</h3>
                                    <p>Safe & efficient industrial rope access solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-srvpg-gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/photo-2.jpg" alt="Offshore Rig">
                            
                            <div class="ams-srvpg-gallery-overlay">
                                <div class="ams-srvpg-gallery-frame">
                                    <h3>Offshore Rig Survey</h3>
                                    <p>Comprehensive rig inspection and maintenance.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-srvpg-gallery-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/photo-3.jpg" alt="Marine Vessel">
                            
                            <div class="ams-srvpg-gallery-overlay">
                                <div class="ams-srvpg-gallery-frame">
                                    <h3>Other Services</h3>
                                    <p>Engineering, industrial & marine services.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="ams-srvpg-cards-section">
        <div class="ams-srvpg-container">
            
            <div class="swiper ams-srvpg-cards-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ams-srvpg-card">
                            <div class="ams-srvpg-card-icon"><i class="fa-solid fa-bell"></i></div>
                            <h3>Marine Diving</h3>
                            <p>AMS has more than 10 years experience in the commercial diving industry. Our excellent track records allow us to expand significantly in a short period. In terms of facilities, our  warehouse facility in Johor has 4630 sqm.</p>
                            <a href="#" class="ams-srvpg-read-more">Read More</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-srvpg-card">
                            <div class="ams-srvpg-card-icon"><i class="fa-solid fa-bell"></i></div>
                            <h3>NDT</h3>
                            <p>We provide Non-Destructive Examination (eg: Dye pen, MPI, Eddy Current, UT and etc), Lifting Gear Inspection (LGI), Drop Surveys, Pressure Relief Valve & Critical Gauge Calibration, Welding Inspection and Failure Analysis & Mechanical Testing (Metallurgical testing, petrographic testing, corrosion testing and etc.)</p>
                            <a href="#" class="ams-srvpg-read-more">Read More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-srvpg-card">
                            <div class="ams-srvpg-card-icon"><i class="fa-solid fa-industry"></i></div>
                            <h3>Steel Fabrication</h3>
                            <p>AMS also has a steelwork department. For the last few years, we have successfully completed various kinds of steelwork jobs both inshore and offshore.</p>
                            <a href="#" class="ams-srvpg-read-more">Read More</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-srvpg-card">
                            <div class="ams-srvpg-card-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <h3>Other Services</h3>
                            <p>We also provide other services such as Accommodation upgrading / Carpentry work, High Pressure Water Blasting and painting (Rope Access and Ground work) HVAC, Control Solution / Automation (Calibration for all sensors and gauges - such as fire, gas, wind speed, humidity, pressure and etc), Testing and commissioning on machinery and other newly installed facility such as lifeboat, HVAC, Jetty Construction activities by diver, Trading, Logistic and Automation.</p>
                            <a href="#" class="ams-srvpg-read-more">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination ams-srvpg-cards-pagination"></div>
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
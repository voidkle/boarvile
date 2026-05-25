<?php
get_header();
?>
<style>
        :root {
            --ams-prj-blue-dark: #0f2c5f;
            --ams-prj-blue-light: #00a0df; 
            --ams-prj-text-dark: #1e293b;
            --ams-prj-text-muted: #64748b;
            --ams-prj-bg-light: #f8fafc;
            --ams-prj-white: #ffffff;
            --ams-prj-yellow: #facc15; 
        }
        .ams-prj-container {
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }
        .ams-prj-hero-section {
            padding: 80px 0 80px 0;
            position: relative;
            background-color: var(--ams-prj-white);
            overflow: hidden;
        }
        .ams-prj-watermark {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: clamp(4rem, 10vw, 8rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 1.5px #f1f5f9;
            letter-spacing: 5px;
            z-index: 1;
            user-select: none;
        }
        .ams-prj-header {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 50px;
        }
        .ams-prj-kicker {
            color: var(--ams-prj-blue-light);
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }
        .ams-prj-title {
            color: var(--ams-prj-blue-dark);
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            text-transform: uppercase;
            margin-bottom: 30px;
        }
        .ams-prj-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center; 
            position: relative;
            z-index: 2;
            margin-bottom: 50px; 
        }
        .ams-prj-desc {
            color: var(--ams-prj-text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
        }
        .ams-prj-quote {
            background: var(--ams-prj-bg-light);
            border-left: 4px solid var(--ams-prj-blue-light);
            padding: 25px 30px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            border-radius: 0 8px 8px 0;
        }
        .ams-prj-quote i {
            font-size: 2.5rem;
            color: #bae6fd;
        }
        .ams-prj-quote-text {
            color: var(--ams-prj-blue-dark);
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.5;
            margin-bottom: 10px;
        }
        .ams-prj-quote-author {
            color: var(--ams-prj-text-muted);
            font-size: 0.85rem;
            font-weight: 500;
        }
        .ams-prj-hero-video-wrapper {
            width: 100%;
        }
        .ams-prj-main-video {
            position: relative;
            width: 100%;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            aspect-ratio: 16/9;
        }
        .ams-prj-main-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        .ams-prj-video-caption {
            text-align: center;
            font-weight: 700;
            color: var(--ams-prj-blue-dark);
            margin-top: 15px;
            font-size: 0.95rem;
        }
        .ams-prj-video-swiper {
            width: 100%;
            padding-bottom: 40px;
            position: relative;
            z-index: 2;
        }
        .ams-prj-small-video {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            aspect-ratio: 16/9;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }
        .ams-prj-small-video iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        .ams-prj-small-video-title {
            margin-top: 15px;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--ams-prj-blue-dark);
            text-align: center;
        }
        .ams-prj-news-section {
            padding: 80px 0;
            background-color: var(--ams-prj-bg-light);
        }
        .ams-prj-news-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        .ams-prj-news-content h2 {
            color: var(--ams-prj-blue-dark);
            font-size: 2rem;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 25px;
            text-transform: uppercase;
        }
        .ams-prj-news-content p {
            color: var(--ams-prj-text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .ams-prj-collage {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 15px;
        }
        .ams-prj-collage-img {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .ams-prj-collage-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .ams-prj-collage-tall {
            grid-column: 1 / -1; 
            height: 400px;
        }
        .ams-prj-collage-small {
            height: 200px;
        }
        .ams-prj-cases-section {
            padding: 100px 0;
            background-color: var(--ams-prj-white);
        }
        .ams-prj-cases-header {
            text-align: center;
            margin-bottom: 60px;
        }
        .ams-prj-cases-swiper {
            padding-bottom: 50px;
        }
        .ams-prj-case-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 320px; 
            display: flex;
            align-items: flex-end;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .ams-prj-case-card:hover {
            transform: translateY(-5px);
        }
        .ams-prj-case-card img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            transition: transform 0.5s ease;
        }
        .ams-prj-case-card:hover img {
            transform: scale(1.05);
        }
        .ams-prj-case-info {
            position: relative;
            z-index: 2;
            background: var(--ams-prj-white);
            margin: 20px; 
            padding: 20px;
            width: calc(100% - 40px);
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-left: 3px solid var(--ams-prj-blue-light);
        }
        .ams-prj-case-info h3 {
            color: var(--ams-prj-blue-dark);
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.4;
            margin: 0;
            text-transform: uppercase;
        }
        .swiper-pagination-bullet { background: #cbd5e1; opacity: 1; }
        .swiper-pagination-bullet-active { background: var(--ams-prj-blue-light); width: 24px; border-radius: 12px; transition: all 0.3s ease;}
        @media (max-width: 992px) {
            .ams-prj-hero-grid,
            .ams-prj-news-grid {
                grid-template-columns: 1fr; 
            }
            .ams-prj-hero-grid {
                gap: 40px;
                margin-bottom: 30px;
            }
            .ams-prj-collage-tall {
                height: 300px;
            }
        }
        @media (max-width: 768px) {
            .ams-prj-hero-section, .ams-prj-news-section, .ams-prj-cases-section {
                padding: 60px 0;
            }
            .ams-prj-quote {
                flex-direction: column;
                gap: 10px;
                border-radius: 8px;
            }
            .ams-prj-news-content h2 {
                font-size: 1.6rem;
            }
            .ams-prj-collage-small {
                height: 150px;
            }
            .ams-prj-case-card {
                height: 280px;
            }
        }
        .ams-all-section {
            margin-top: 0;
        }
</style>
    <section class="ams-prj-hero-section">
        <div class="ams-prj-watermark">PROJECTS</div>
        <div class="ams-prj-container">
            <div class="ams-prj-header">
                <span class="ams-prj-kicker">Advantage Marine Services</span>
                <h2 class="ams-prj-title">Explore Recent Projects</h2>
            </div>
            <div class="ams-prj-hero-grid">
                <div class="ams-prj-hero-content">
                    <p class="ams-prj-desc"><span style="font-weight: bold;">Advantage Marine Services (AMS)</span> is a trusted and dynamic provider of marine, offshore, and industrial solutions, proudly serving the region and beyond. With over a decade of experience, AMS has established a strong reputation for delivering high-quality, safety-driven, and technologically advanced services across multiple sectors. Our team of certified professionals and engineers are trained to meet the demands of challenging offshore environments while ensuring operational efficiency and environmental responsibility.</p>
                    <div class="ams-prj-quote">
                        <i class="fa-solid fa-quote-left"></i>
                        <div>
                            <p class="ams-prj-quote-text">Behind every successful project is a dedicated team. We are proud to empower our people, build lasting client relationships, and deliver services that make a real difference</p>
                            <span class="ams-prj-quote-author">Mr Andrew Teow, Director</span>
                        </div>
                    </div>
                </div>
                <div class="ams-prj-hero-video-wrapper">
                    <div class="ams-prj-main-video">
                        <iframe src="https://www.youtube.com/embed/PqwsAlRbZts" 
                                title="AMS Corporate Video (2023)" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    <p class="ams-prj-video-caption">AMS Corporate Video (2023)</p>
                </div>
            </div>
            <div class="swiper ams-prj-video-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ams-prj-small-video">
                            <iframe src="https://www.youtube.com/embed/QdUkNwhRza8" 
                                    title="AMS using Chasing M2 Mini ROV" 
                                    frameborder="0" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <p class="ams-prj-small-video-title">AMS using Chasing M2 Mini ROV</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-small-video">
                            <iframe src="https://www.youtube.com/embed/Ut1ba1EWOPM" 
                                    title="Jack Up Rig - Structural Steel Repair" 
                                    frameborder="0" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <p class="ams-prj-small-video-title">Jack Up Rig - Structural Steel Repair</p>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-small-video">
                            <iframe src="https://www.youtube.com/embed/Gfpp1po0f2k" 
                                    title="Jack Up Rig - UWILD Special Survey" 
                                    frameborder="0" 
                                    allowfullscreen>
                            </iframe>
                        </div>
                        <p class="ams-prj-small-video-title">Jack Up Rig - UWILD Special Survey</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="ams-prj-news-section">
        <div class="ams-prj-container">
            <div class="ams-prj-news-grid">
                <div class="ams-prj-news-content">
                    <span class="ams-prj-kicker">A Remarkable Achievement Worth Sharing</span>
                    <h2>Latest News: AMS Leads Velesto's Rig Naga 6 SPS Works</h2>
                    <p>We are proud to be associated in a news release in The Edge Malaysia, and grateful for the confidence from Velesto Energy Berhad for appointing AMS as the Main Contractor for one of their major SPS project, the Rig Naga 6, conducted at the Labuan Shipyard.</p>
                    <p>Awarded in July 2024, AMS had successfully completed the underwater SPS UWILD and other related maintenance works (i.e. Repair & Overhaul, Living Quarter Upgrade, Painting, Tank Cleaning and etc) on schedule and within client's budget. In preparation for the Naga 6 works, AMS worked closely with Velesto Energy Berhad and its Project Management Team, as well as suppliers, subcontractors and stakeholders during the bidding and planning stage.</p>
                    <p>This achievement is a significant milestone and it propels AMS to be a preferred one-stop solution provider to our valued clients in Malaysia and in the ASEAN region for the marine, oil and gas industry.</p>
                </div>
                <div class="ams-prj-collage">
                    <div class="ams-prj-collage-img ams-prj-collage-tall">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Photo-1.jpeg" alt="Rig Naga 6">
                    </div>
                    <div class="ams-prj-collage-img ams-prj-collage-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Photo-2.jpeg" alt="AMS Team">
                    </div>
                    <div class="ams-prj-collage-img ams-prj-collage-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Photo-3.jpeg" alt="Rig at Sunset">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ams-prj-cases-section">
        <div class="ams-prj-container">
            <div class="ams-prj-cases-header">
                <span class="ams-prj-kicker">Our Case Study</span>
                <h2 class="ams-prj-title" style="color: var(--ams-prj-blue-dark); text-transform: none;">Latest AMS Case Study</h2>
            </div>
            <div class="swiper ams-prj-cases-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-01.jpg" alt="Case 1">
                            <div class="ams-prj-case-info">
                                <h3>Perisai Pacific 101 Seawater Piping Changeout</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-02.jpg" alt="Case 2">
                            <div class="ams-prj-case-info">
                                <h3>Perisai Pacific 101 Tank Cleaning Case Study</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-03.jpg" alt="Case 3">
                            <div class="ams-prj-case-info">
                                <h3>Borr Drilling LGI Drop Survey and PRV</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-04.jpg" alt="Case 4">
                            <div class="ams-prj-case-info">
                                <h3>Jack-Up Rig Steel Work Repair</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-05.jpg" alt="Case 5">
                            <div class="ams-prj-case-info">
                                <h3>Hengyuan Refinery HRC Pipe Composite Repair</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-prj-case-card">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/blog-06.jpg" alt="Case 6">
                            <div class="ams-prj-case-info">
                                <h3>Jack-Up Rig Structural Steel Repair</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
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
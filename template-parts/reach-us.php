<?php
/* Template Name: New Reach Us Page */
get_header();
?>
<style>
    :root {
            --ams-contact-blue-dark: #0f2c5f;
            --ams-contact-blue-light: #00a0df; 
            --ams-contact-yellow: #facc15; 
            --ams-contact-text-dark: #1e293b;
            --ams-contact-text-muted: #64748b;
            --ams-contact-bg-light: #f8fafc;
            --ams-contact-white: #ffffff;
        }
        .ams-contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
        }

        /* =========================================
           1. HEADER SECTION
           ========================================= */
        .ams-contact-header-section {
            padding: 100px 0 40px 0;
            position: relative;
            text-align: center;
        }

        .ams-contact-watermark {
            position: absolute;
            top: 60px;
            left: 50%;
            transform: translateX(-50%);
            font-size: clamp(4rem, 12vw, 9rem);
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 2px rgba(0, 0, 0, 0.1); /* Outline kuning transparan */
            letter-spacing: 5px;
            z-index: 1;
            user-select: none;
            line-height: 1;
            white-space: nowrap;
        }

        .ams-contact-header-content {
            position: relative;
            z-index: 2;
        }

        .ams-contact-kicker {
            color: var(--ams-contact-blue-light);
            font-size: 0.9rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 10px;
            display: block;
        }

        .ams-contact-title {
            color: var(--ams-contact-blue-dark);
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 25px;
            text-transform: uppercase;
        }
        
        .ams-contact-title span {
            color: var(--ams-contact-blue-light);
        }

        .ams-contact-desc {
            color: var(--ams-contact-text-muted);
            font-size: 0.95rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        /* =========================================
           2. LOCATIONS (MAPS) CARDS
           ========================================= */
        .ams-contact-locations-section {
            padding: 20px 0 80px 0;
        }

        .ams-contact-loc-swiper {
            width: 100%;
            padding-bottom: 50px;
        }

        .ams-contact-loc-card {
            position: relative;
            display: flex;
            flex-direction: column;
            cursor: grab;
        }

        .ams-contact-loc-card:active {
            cursor: grabbing;
        }

        /* Bagian Peta */
        .ams-contact-map-img {
            width: 100%;
            height: 220px;
            border-radius: 8px; /* Permintaan: Radius 8px */
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .ams-contact-map-img iframe {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Bagian Info (Overlap ke atas peta) */
        .ams-contact-loc-info {
            background: var(--ams-contact-white);
            border-radius: 8px; /* Permintaan: Radius 8px */
            padding: 40px 25px 25px 25px;
            margin: -40px 15px 0 15px; /* Margin negatif untuk efek menumpuk */
            box-shadow: 0 15px 30px rgba(0,0,0,0.08);
            position: relative;
            z-index: 2;
            text-align: center;
            height: 100%;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .ams-contact-loc-card:hover .ams-contact-loc-info {
            transform: translateY(-5px);
            border-bottom-color: var(--ams-contact-blue-dark);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }

        .ams-contact-loc-icon {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background-color: var(--ams-contact-blue-light);
            color: var(--ams-contact-white);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.2rem;
            border-radius: 4px; /* Permintaan: Radius 4px */
            box-shadow: 0 8px 15px rgba(0, 160, 223, 0.3);
        }

        .ams-contact-loc-info h3 {
            color: var(--ams-contact-blue-dark);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ams-contact-loc-info p {
            color: var(--ams-contact-text-muted);
            font-size: 0.8rem;
            line-height: 1.6;
        }

        /* =========================================
           3. CONTACT PERSON CARDS
           ========================================= */
        .ams-contact-persons-section {
            padding: 60px 0 60px 0;
            background-color: var(--ams-contact-bg-light);
        }

        .ams-contact-section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .ams-contact-section-title h2 {
            color: var(--ams-contact-blue-dark);
            font-size: 2rem;
            font-weight: 800;
            text-transform: uppercase;
            display: inline-block;
            position: relative;
        }

        /* Garis bawah biru pada judul */
        .ams-contact-section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background-color: var(--ams-contact-blue-light);
        }

        .ams-contact-person-swiper {
            width: 100%;
            padding-top: 40px; /* Ruang icon melayang */
            padding-bottom: 50px;
        }

        .ams-contact-person-card {
            background: var(--ams-contact-white);
            border-radius: 8px; /* Permintaan: Radius 8px */
            padding: 45px 25px 25px 25px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            text-align: center;
            position: relative;
            cursor: grab;
            transition: transform 0.3s ease;
        }

        .ams-contact-person-card:hover {
            transform: translateY(-5px);
        }

        .ams-contact-person-icon {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 55px;
            height: 55px;
            background-color: var(--ams-contact-blue-light);
            color: var(--ams-contact-white);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.4rem;
            border-radius: 4px; /* Permintaan: Radius 4px */
            box-shadow: 0 8px 15px rgba(0, 160, 223, 0.3);
        }

        .ams-contact-person-card h4 {
            color: var(--ams-contact-text-dark);
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .ams-contact-person-card .role {
            color: var(--ams-contact-text-muted);
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .ams-contact-person-card .phone {
            color: var(--ams-contact-blue-dark);
            font-size: 0.9rem;
            font-weight: 600;
        }

        /* General Email Text */
        .ams-contact-email-banner {
            text-align: center;
            margin-top: 30px;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--ams-contact-text-dark);
        }

        .ams-contact-email-banner a {
            color: var(--ams-contact-blue-dark);
            font-weight: 700;
            text-decoration: none;
            position: relative;
        }
        .ams-contact-email-banner a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--ams-contact-blue-light);
        }

        /* =========================================
           4. FORM SECTION
           ========================================= */
        .ams-contact-form-intro {
            padding: 80px 0 40px 0;
            text-align: center;
        }

        .ams-contact-form-wrapper {
            background-color: var(--ams-contact-blue-dark);
            padding: 80px 20px;
            color: var(--ams-contact-white);
        }

        .ams-contact-form-inner {
            max-width: 800px;
            margin: 0 auto;
        }

        .ams-contact-form-inner .form-kicker {
            color: var(--ams-contact-blue-light);
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            display: block;
        }

        .ams-contact-form-inner h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 40px;
        }

        .ams-contact-form-inner h2 span {
            color: var(--ams-contact-blue-light);
        }

        /* Minimalist Input Style */
        .ams-contact-input-group {
            margin-bottom: 30px;
            position: relative;
        }

        .ams-contact-input {
            width: 100%;
            background: transparent;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            color: var(--ams-contact-white);
            font-size: 0.95rem;
            padding: 10px 0;
            transition: all 0.3s ease;
            font-family: 'Poppins', sans-serif;
        }

        .ams-contact-input:focus {
            outline: none;
            border-bottom-color: var(--ams-contact-white);
        }

        .ams-contact-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        textarea.ams-contact-input {
            resize: vertical;
            min-height: 80px;
        }

        .ams-contact-btn {
            background-color: transparent;
            color: var(--ams-contact-white);
            border: none;
            font-size: 0.95rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            padding: 10px 0;
            margin-top: 20px;
            position: relative;
            transition: color 0.3s ease;
            width:100%;
            border-radius: 4px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        .ams-contact-btn:hover {
            color: var(--ams-contact-blue-light);
        }

        /* Garis bawah pada tombol submit */
        .ams-contact-form-footer {
            display: flex;
            justify-content: center;
        }

        /* Pagination Global */
        .swiper-pagination-bullet { background: #cbd5e1; opacity: 1; }
        .swiper-pagination-bullet-active { background: var(--ams-contact-blue-light); width: 24px; border-radius: 12px; transition: all 0.3s ease;}

        /* =========================================
           RESPONSIVE DESIGN
           ========================================= */
        @media (max-width: 768px) {
            .ams-contact-header-section { padding: 80px 0 20px 0; }
            .ams-contact-watermark { top: 40px; }
            .ams-contact-loc-info { margin: -30px 10px 0 10px; padding: 40px 15px 20px 15px; }
            .ams-contact-form-inner h2 { font-size: 2rem; }
        }
    .ams-all-section{
        margin:0;
    }
</style>
<section class="ams-contact-header-section">
        <div class="ams-contact-watermark">REACH US</div>
        
        <div class="ams-contact-container">
            <div class="ams-contact-header-content">
                <span class="ams-contact-kicker">Advantage Marine Services</span>
                <h2 class="ams-contact-title">Connect With <span>Our Team</span></h2>
                
                <p class="ams-contact-desc">Have a question, need a quote or want to learn more about our services? Our team is ready to assist you. Reach out and we'll respond promptly.</p>
            </div>
        </div>
    </section>

    <section class="ams-contact-locations-section">
        <div class="ams-contact-container">
            
            <div class="swiper ams-contact-loc-swiper">
                <div class="swiper-wrapper">
                    
                 <div class="swiper-slide">
                        <div class="ams-contact-loc-card">
                            <div class="ams-contact-map-img">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d510519.5820139625!2d103.578989!3d1.509229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da75071b085049%3A0xf2a4f6eebdd671aa!2sAdvantage%20Marine%20Services!5e0!3m2!1sen!2sus!4v1779697211136!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="ams-contact-loc-info">
                                <div class="ams-contact-loc-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <h3>Main Office</h3>
                                <p>ADVANTAGE MARINE SERVICES (MALAYSIA) SDN BHD<br>No. 18, Jalan Laman Setia 7/4, Taman Laman Setia, 81550 Gelang Patah, Johor, Malaysia</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ams-contact-loc-card">
                            <div class="ams-contact-map-img">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127288.31403038379!2d114.00319583593748!3d4.455713726206455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x321f4fda83a6ef59%3A0x739fc8e7b8f8655!2sSeaocean%20Diving%20%26%20Marine%20Services%20Sdn%20Bhd!5e0!3m2!1sen!2sus!4v1779697151308!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="ams-contact-loc-info">
                                <div class="ams-contact-loc-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <h3>Miri Branch Office</h3>
                                <p>SEADOCAN DIVING & MARINE SERVICES SDN BHD<br>Lot 2215, Jalan Piasau Utara 1, Premier Industrial Park, Piasau, 98000 Miri, Sarawak, Malaysia</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-contact-loc-card">
                            <div class="ams-contact-map-img">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127476.63669262563!2d101.69342750781253!3d3.1877197037933116!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d433378a57%3A0x4e3a7233f4dc0a89!2sSpaces%20Menara%20Prestige!5e0!3m2!1sen!2sus!4v1779697184717!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="ams-contact-loc-info">
                                <div class="ams-contact-loc-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <h3>KL Branch Office</h3>
                                <p>ADVANTAGE MARINE SERVICES (MALAYSIA) SDN BHD<br>Unit H10-1 (Ground Floor), Plaza Kelana Jaya, Jalan SS7/13A, Kelana Jaya, 47301 Selangor, Malaysia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section class="ams-contact-persons-section">
        <div class="ams-contact-container">
            
            <div class="ams-contact-section-title">
                <h2>Contact Info</h2>
            </div>

            <div class="swiper ams-contact-person-swiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="ams-contact-person-card">
                            <div class="ams-contact-person-icon"><i class="fa-solid fa-address-card"></i></div>
                            <h4>Contact: Andrew Teow</h4>
                            <p class="role">(Managing Director)</p>
                            <p class="phone">Tel: +65 8393 3227 | +60 16 448 8052</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-contact-person-card">
                            <div class="ams-contact-person-icon"><i class="fa-solid fa-address-card"></i></div>
                            <h4>Contact: Dharmendra Varshney</h4>
                            <p class="role">(Business Development Manager)</p>
                            <p class="phone">Tel: +60 19 768 0816</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="ams-contact-person-card">
                            <div class="ams-contact-person-icon"><i class="fa-solid fa-address-card"></i></div>
                            <h4>Contact: Victor Wong</h4>
                            <p class="role">(Director)</p>
                            <p class="phone">Tel: +65 9789 3633 | +60 19 731 0016</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="ams-contact-email-banner">
                Email : <a href="mailto:sales@advantagemarine.com.my">sales@advantagemarine.com.my</a>
            </div>

        </div>
    </section>

    <section class="ams-contact-form-intro">
        <div class="ams-contact-container">
            <span class="ams-contact-kicker">Advantage Marine Services</span>
            <div class="ams-contact-section-title">
                <h2 style="margin-bottom: 20px;">Reach Us Via Email</h2>
            </div>
            <p class="ams-contact-desc">For business inquiries, service requests, or further information, please contact us via email. Our team will respond promptly.</p>
        </div>
    </section>

    <section class="ams-contact-form-wrapper">
        <div class="ams-contact-form-inner">
            <span class="form-kicker">We Are Waiting</span>
            <h2>Request A <span>Quote</span></h2>

            <form action="#" method="POST">
                <div class="ams-contact-input-group">
                    <input type="text" class="ams-contact-input" placeholder="Your Name *" required>
                </div>
                
                <div class="ams-contact-input-group">
                    <input type="email" class="ams-contact-input" placeholder="Your Email *" required>
                </div>

                <div class="ams-contact-input-group">
                    <input type="text" class="ams-contact-input" placeholder="Subject">
                </div>

                <div class="ams-contact-input-group">
                    <textarea class="ams-contact-input" placeholder="Your Message" required></textarea>
                </div>

                <div class="ams-contact-form-footer">
                    <button type="submit" class="ams-contact-btn">Send</button>
                </div>
            </form>
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
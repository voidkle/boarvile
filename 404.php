<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header(); ?>

<style>
    /* --- RESET & VARIABLES --- */
    :root {
        --ams-404-blue-dark: #0f2c5f;
        --ams-404-blue-light: #0f2c5f; 
        --ams-404-text-dark: #1e293b;
        --ams-404-text-muted: #64748b;
        --ams-404-white: #ffffff;
    }

    .ams-404 {
        position: relative;
        background: linear-gradient(135deg, var(--ams-404-blue-dark) 0%, #0a1f44 100%);
        min-height: 100vh; /* Memastikan memenuhi tinggi layar */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }

    /* Watermark Raksasa di Background */
    .ams-404-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: clamp(8rem, 25vw, 25rem);
        font-weight: 800;
        color: transparent;
        -webkit-text-stroke: 2px rgba(255, 255, 255, 0.04);
        z-index: 1;
        user-select: none;
        pointer-events: none;
        line-height: 1;
    }

    .ams-404__section {
        position: relative;
        z-index: 2;
        padding: 4rem 1.5rem;
        width: 100%;
    }

    .ams-404__container {
        max-width: 700px;
        margin: 0 auto;
    }

    /* Kotak Utama 404 */
    .ams-404__box {
        background: var(--ams-404-white);
        border-radius: 8px; /* Konsisten: Card Radius 8px */
        padding: 4rem 3rem;
        text-align: center;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        border-top: 4px solid var(--ams-404-blue-light); /* Aksen garis atas */
    }

    .ams-404__kicker {
        display: inline-block;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--ams-404-blue-light);
        margin-bottom: 1rem;
    }

    .ams-404__title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        line-height: 1.2;
        font-weight: 800;
        color: var(--ams-404-blue-dark);
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .ams-404__text {
        font-size: 0.95rem;
        line-height: 1.8;
        color: var(--ams-404-text-muted);
        margin-bottom: 2.5rem;
    }

    /* Area Form Pencarian (Targeting standar WordPress) */
    .ams-404__search {
        margin-bottom: 2.5rem;
    }

    .ams-404__search form {
        display: flex;
        gap: 10px;
        justify-content: center;
    }

    /* Sembunyikan label bawaan WP untuk estetika modern */
    .ams-404__search .screen-reader-text,
    .ams-404__search label {
        display: none; 
    }

    .ams-404__search input[type="search"],
    .ams-404__search input[type="text"] {
        flex: 1;
        height: 50px;
        border: 1px solid #dbe4ee;
        border-radius: 4px; /* Konsisten: Input Radius 4px */
        padding: 0 1.2rem;
        background: #f8fafc;
        color: var(--ams-404-text-dark);
        font-size: 0.95rem;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
    }

    .ams-404__search input[type="search"]:focus,
    .ams-404__search input[type="text"]:focus {
        outline: none;
        border-color: var(--ams-404-blue-light);
        background: var(--ams-404-white);
        box-shadow: 0 0 0 3px rgba(0, 160, 223, 0.1);
    }

    .ams-404__search button,
    .ams-404__search input[type="submit"] {
        height: 50px;
        padding: 0 2rem;
        border: none;
        border-radius: 4px; /* Konsisten: Button Radius 4px */
        background: var(--ams-404-blue-light);
        color: var(--ams-404-white);
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .ams-404__search button:hover,
    .ams-404__search input[type="submit"]:hover {
        background: var(--ams-404-blue-dark);
        transform: translateY(-2px);
    }

    /* Tombol Aksi Bawah */
    .ams-404__actions {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .ams-404__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 48px;
        padding: 0 1.8rem;
        border-radius: 4px; /* Konsisten: Button Radius 4px */
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .ams-404__btn--primary {
        background: var(--ams-404-blue-light);
        color: var(--ams-404-white);
        box-shadow: 0 5px 15px rgba(0, 160, 223, 0.2);
    }

    .ams-404__btn--primary:hover {
        background: var(--ams-404-blue-dark);
        color: var(--ams-404-white);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(15, 44, 95, 0.2);
    }

    .ams-404__btn--ghost {
        background: transparent;
        color: var(--ams-404-blue-dark);
        border: 2px solid #e2e8f0;
    }

    .ams-404__btn--ghost:hover {
        background: #f8fafc;
        border-color: var(--ams-404-blue-dark);
        transform: translateY(-2px);
    }

    /* =========================================
       RESPONSIVE DESIGN (MOBILE)
       ========================================= */
    @media (max-width: 640px) {
        .ams-404__section {
            padding: 2rem 1rem;
        }

        .ams-404__box {
            padding: 3rem 1.5rem;
        }

        .ams-404__search form {
            flex-direction: column;
            gap: 10px;
        }

        .ams-404__search input[type="search"],
        .ams-404__search input[type="text"],
        .ams-404__search button,
        .ams-404__search input[type="submit"] {
            width: 100%;
        }

        .ams-404__actions {
            flex-direction: column;
            gap: 10px;
        }

        .ams-404__btn {
            width: 100%;
        }
    }
</style>

<main class="ams-404">
    
    <div class="ams-404-watermark">404</div>

    <section class="ams-404__section">
        <div class="ams-404__container">

            <div class="ams-404__box">
                <span class="ams-404__kicker">Error 404</span>

                <h1 class="ams-404__title">Page not found</h1>

                <p class="ams-404__text">
                    The page you are looking for may have been moved, deleted, or the URL may be incorrect. Try searching below or return to the homepage.
                </p>

                <div class="ams-404__search">
                    <?php get_search_form(); ?>
                </div>

                <div class="ams-404__actions">
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="ams-404__btn ams-404__btn--primary">
                        Back to Home
                    </a>

                    <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="ams-404__btn ams-404__btn--ghost">
                        Contact Us
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
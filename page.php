<?php get_header(); ?>
<style>
/* ===== PAGE HERO ===== */
.page-hero {
    background:
        linear-gradient(rgba(11, 57, 107, 0.58), rgba(11, 57, 107, 0.58)),
        url('https://www.advantagemarine.com.my/wp-content/uploads/2022/09/call-to.jpg') center/cover no-repeat;
    color: #fff;
    text-align: center;
    padding: 70px 5%;
}

.page-hero__title {
    font-size: clamp(2rem, 4vw, 2.8rem);
    font-weight: 700;
    margin-bottom: 12px;
    line-height: 1.2;
}

.page-breadcrumb {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
    color: #cbd5e1;
    font-size: 0.9rem;
}

.page-breadcrumb a {
    color: #f5b018;
    text-decoration: none;
}

.page-breadcrumb a:hover {
    text-decoration: underline;
}

/* ===== PAGE CONTENT ===== */
.page-content-wrap {
    max-width: 1100px;
    margin: 40px auto;
    padding: 0 5%;
}

.page-content-card {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    padding: 35px;
}

.page-featured-image {
    margin-bottom: 28px;
}

.page-featured-image img {
    width: 100%;
    display: block;
    border-radius: 10px;
    height: auto;
}

.page-content-entry {
    color: #475569;
    line-height: 1.8;
    font-size: 1rem;
}

.page-content-entry h2,
.page-content-entry h3,
.page-content-entry h4 {
    color: #0b396b;
    margin: 28px 0 14px;
    line-height: 1.3;
}

.page-content-entry p {
    margin-bottom: 18px;
}

.page-content-entry ul,
.page-content-entry ol {
    margin: 0 0 18px 22px;
}

.page-content-entry li {
    margin-bottom: 8px;
}

.page-content-entry a {
    color: #0b396b;
    text-decoration: none;
}

.page-content-entry a:hover {
    color: #f5b018;
}

.page-content-entry img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 20px 0;
}

.page-content-entry table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.page-content-entry th,
.page-content-entry td {
    border: 1px solid #e9ecef;
    padding: 12px;
    text-align: left;
}

.page-content-entry blockquote {
    border-left: 4px solid #f5b018;
    padding-left: 18px;
    margin: 24px 0;
    color: #334155;
    font-style: italic;
}

@media (max-width: 768px) {
    .page-content-card {
        padding: 22px;
    }

    .page-content-wrap {
        margin: 30px auto;
    }
}
</style>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (has_post_thumbnail()) : ?>
    <div class="page-featured-image">
        <?php the_post_thumbnail('large'); ?>
    </div>
<?php endif; ?>
<?php the_content(); ?>
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
<?php endwhile; endif; ?>

<?php get_footer(); ?>
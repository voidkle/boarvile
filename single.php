<?php get_header(); ?>
<style>
.single-hero {
    background:
        linear-gradient(rgba(11, 57, 107, 0.55), rgba(11, 57, 107, 0.55)),
        url('https://www.advantagemarine.com.my/wp-content/uploads/2022/09/call-to.jpg') center/cover no-repeat;
    color: #fff;
    padding: 70px 5%;
    text-align: center;
}
.single-hero__title {
    font-size: clamp(1.6rem, 3.5vw, 2.5rem);
    font-weight: 700;
    margin-bottom: 14px;
    line-height: 1.25;
}
.single-breadcrumb {
    font-size: 0.9rem;
    color: #cbd5e1;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.single-breadcrumb a {
    color: #f5b018;
    text-decoration: none;
}
.single-breadcrumb a:hover {
    text-decoration: underline;
}
.single-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 5%;
    display: grid;
    grid-template-columns: 2.5fr 1fr;
    gap: 40px;
}
.post-card {
    background: #fff;
    border-radius: 12px;
    padding: 35px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}
.post-img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 25px;
    object-fit: cover;
}
.post-title {
    font-size: 2rem;
    color: #0b396b;
    margin-bottom: 15px;
    line-height: 1.3;
}
.post-meta {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 25px;
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 15px;
}
.post-meta i {
    color: #0b396b;
    margin-right: 6px;
}
.share-buttons i {
    color: #fff;
    margin-right: 0;
}
.post-content {
    color: #475569;
    line-height: 1.8;
}
.post-content p {
    margin-bottom: 18px;
    text-align: justify;
}
.post-content img {
    margin: 25px 0;
    border-radius: 8px;
    width: 100%;
}
.post-content h2,
.post-content h3,
.post-content h4 {
    color: #0b396b;
    margin: 28px 0 14px;
}
.share-buttons {
    display: flex;
    gap: 12px;
    margin-top: 35px;
    flex-wrap: wrap;
}
.share-btn {
    width: 38px;
    height: 38px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1rem;
    text-decoration: none;
    transition: transform 0.2s, opacity 0.2s;
}
.share-btn:hover {
    transform: translateY(-3px);
    opacity: 0.88;
    color: #fff;
}
.share-btn.fb  { background: #1877F2; }
.share-btn.tw  { background: #1DA1F2; }
.share-btn.li  { background: #0A66C2; }
.share-btn.wa  { background: #25D366; }
.share-btn.mail { background: #64748b; }
@media (max-width: 992px) {
    .single-container {
        grid-template-columns: 1fr;
        gap: 30px;
        margin: 30px auto;
    }
}
@media (max-width: 576px) {
    .post-card { padding: 20px; }
    .post-title { font-size: 1.5rem; }
}
</style>
<?php get_header(); ?>
<section class="single-hero">
    <div class="single-hero__inner">
        <h1 class="single-hero__title"><?php the_title(); ?></h1>
        <div class="single-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span><i class="fas fa-angle-right"></i></span>
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">News</a>
            <span><i class="fas fa-angle-right"></i></span>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</section>
<div class="single-container">
    <main class="single-main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post-card">
                <?php if (has_post_thumbnail()) : ?>
                    <img
                        src="<?php the_post_thumbnail_url('large'); ?>"
                        alt="<?php the_title_attribute(); ?>"
                        class="post-img"
                    >
                <?php endif; ?>
                <h2 class="post-title"><?php the_title(); ?></h2>
                <div class="post-meta">
                    <span><i class="far fa-calendar-alt"></i> <?php echo esc_html(get_the_date()); ?></span>
                    <span><i class="far fa-user"></i> <?php echo esc_html(get_the_author()); ?></span>
                   <span><i class="far fa-comment-dots"></i>
                    <?php echo comments_open() ? get_comments_number_text('0 Comments', '1 Comment', '% Comments') : 'Comments Off'; ?>
                    </span>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"
                       class="share-btn fb" target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                       class="share-btn tw" target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"
                       class="share-btn li" target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_the_permalink()); ?>"
                       class="share-btn wa" target="_blank" rel="noopener noreferrer" aria-label="Share on WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="mailto:?subject=<?php echo rawurlencode(get_the_title()); ?>&body=<?php echo rawurlencode(get_the_permalink()); ?>"
                       class="share-btn mail" aria-label="Share via Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="post-comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </article>
        <?php endwhile; endif; ?>
    </main>
    <aside class="news-sidebar">
        <div class="widget">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <input
                    type="search"
                    class="search-input"
                    placeholder="Search..."
                    value="<?php echo get_search_query(); ?>"
                    name="s"
                    required
                />
                <button type="submit" class="search-btn" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="widget">
            <h3 class="widget-title">Archives</h3>
            <ul>
                <?php wp_get_archives(['type' => 'monthly']); ?>
            </ul>
        </div>
        <div class="widget">
            <h3 class="widget-title">Recent Post</h3>
            <?php
            $recent_posts = get_posts([
                'numberposts' => 4,
                'post_status' => 'publish',
            ]);
            ?>
            <?php foreach ($recent_posts as $rpost) : ?>
                <div class="recent-post">
                    <a href="<?php echo esc_url(get_permalink($rpost->ID)); ?>" class="recent-post__thumb">
                        <?php if (has_post_thumbnail($rpost->ID)) : ?>
                            <?php echo get_the_post_thumbnail($rpost->ID, 'thumbnail'); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/65x65?text=Post" alt="<?php echo esc_attr($rpost->post_title); ?>">
                        <?php endif; ?>
                    </a>
                    <div class="recent-post__content">
                        <h4><a href="<?php echo esc_url(get_permalink($rpost->ID)); ?>"><?php echo esc_html($rpost->post_title); ?></a></h4>
                        <span><?php echo esc_html(get_the_date('F j, Y', $rpost->ID)); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul>
                <?php wp_list_categories(['title_li' => '']); ?>
            </ul>
        </div>
        <div class="widget">
            <h3 class="widget-title">Meta</h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </div>
        <div class="widget">
            <h3 class="widget-title">Calendar</h3>
            <?php get_calendar(); ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>
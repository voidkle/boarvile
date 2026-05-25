<?php get_header(); ?>
<style>
.news-hero {
  background:
    linear-gradient(rgba(11, 57, 107, 0.55), rgba(11, 57, 107, 0.55)),
    url('https://www.advantagemarine.com.my/wp-content/uploads/2022/09/call-to.jpg') center/cover no-repeat;
  color: #fff;
  padding: 70px 5%;
  text-align: center;
}

.news-hero__title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 12px;
}

.news-breadcrumb {
  font-size: 0.9rem;
  color: #cbd5e1;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  flex-wrap: wrap;
}

.news-breadcrumb a {
  color: #f5b018;
  text-decoration: none;
}

.news-container {
  max-width: 1200px;
  margin: 40px auto;
  padding: 0 5%;
  display: grid;
  grid-template-columns: 2.5fr 1fr;
  gap: 40px;
}

.news-card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  margin-bottom: 30px;
}

.news-card__img {
  width: 100%;
  display: block;
  object-fit: cover;
}

.news-card__body {
  padding: 25px;
}

.news-card__title {
  font-size: 1.4rem;
  line-height: 1.35;
  margin-bottom: 12px;
}

.news-card__title a {
  color: #0b396b;
  text-decoration: none;
}

.news-card__title a:hover {
  color: #f5b018;
}

.news-card__meta {
  display: flex;
  flex-wrap: wrap;
  gap: 18px;
  font-size: 0.9rem;
  color: #6c757d;
  margin-bottom: 18px;
}

.news-card__meta i {
  color: #0b396b;
  margin-right: 6px;
}

.news-card__excerpt {
  color: #475569;
  margin-bottom: 20px;
}

.news-card__button {
  display: inline-block;
  padding: 10px 18px;
  border: 1px solid #e9ecef;
  border-radius: 6px;
  color: #0b396b;
  text-decoration: none;
  transition: all 0.3s ease;
}

.news-card__button:hover {
  background: #0b396b;
  color: #fff;
  border-color: #0b396b;
}

.news-sidebar .widget {
  background: #fff;
  border-radius: 12px;
  padding: 25px;
  margin-bottom: 30px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.widget-title {
  font-size: 1.15rem;
  font-weight: 600;
  color: #0b396b;
  margin-bottom: 20px;
  border-bottom: 2px solid #e9ecef;
  padding-bottom: 12px;
  position: relative;
}

.widget-title::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  width: 40px;
  height: 2px;
  background: #f5b018;
}

.widget ul li a {
    display: block;
    width: 100%;
    box-sizing: border-box;
    color: #333;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}
.search-form {
  display: flex;
}

.search-input {
  flex: 1;
  padding: 12px 15px;
  border: 1px solid #e9ecef;
  border-radius: 6px 0 0 6px;
  outline: none;
}

.search-input:focus {
  border-color: #0b396b;
}

.search-btn {
  background: #0b396b;
  color: #fff;
  border: none;
  padding: 12px 18px;
  border-radius: 0 6px 6px 0;
  cursor: pointer;
}

.search-btn:hover {
  background: #07264a;
}

.news-sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.news-sidebar ul li {
  padding: 10px 0;
  border-bottom: 1px dashed #e9ecef;
}

.news-sidebar ul li:last-child {
  border-bottom: none;
}

.news-sidebar ul li a {
  color: #2c3e50;
  text-decoration: none;
}

.news-sidebar ul li a:hover {
  color: #0b396b;
}

.recent-post {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px dashed #e9ecef;
}

.recent-post:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}

.recent-post img {
  width: 65px;
  height: 65px;
  object-fit: cover;
  border-radius: 6px;
}

.recent-post__content h4 {
  font-size: 0.95rem;
  line-height: 1.3;
  margin: 0 0 5px;
}

.recent-post__content h4 a {
  color: #2c3e50;
  text-decoration: none;
}

.recent-post__content h4 a:hover {
  color: #0b396b;
}

.recent-post__content span {
  font-size: 0.8rem;
  color: #6c757d;
}

.news-pagination {
  display: flex;
  justify-content: center;
  gap: 8px;
  margin-top: 10px;
  flex-wrap: wrap;
}

.news-pagination .page-numbers {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 38px;
  height: 38px;
  padding: 0 12px;
  border-radius: 6px;
  background: #fff;
  color: #0b396b;
  text-decoration: none;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.news-pagination .page-numbers.current,
.news-pagination .page-numbers:hover {
  background: #0b396b;
  color: #fff;
}

@media (max-width: 992px) {
  .news-container {
    grid-template-columns: 1fr;
    gap: 30px;
    margin: 30px auto;
  }
}

@media (max-width: 576px) {
  .news-hero__title {
    font-size: 2rem;
  }

  .news-card__body,
  .news-sidebar .widget {
    padding: 20px;
  }
}
</style>
<section class="news-hero">
    <div class="news-hero__inner">
        <h1 class="news-hero__title">News</h1>
        <div class="news-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span><i class="fas fa-angle-right"></i></span>
            <span>News</span>
        </div>
    </div>
</section>

<div class="news-container">
    <main class="news-main">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('news-card'); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="news-card__image">
                            <?php the_post_thumbnail('large', ['class' => 'news-card__img']); ?>
                        </a>
                    <?php endif; ?>

                    <div class="news-card__body">
                        <h2 class="news-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="news-card__meta">
                            <span><i class="far fa-calendar-alt"></i> <?php echo esc_html(get_the_date()); ?></span>
                            <span><i class="far fa-user"></i> <?php echo esc_html(get_the_author()); ?></span>
                           <span><i class="far fa-comment-dots"></i>
                            <?php echo comments_open() ? get_comments_number_text('0 Comments', '1 Comment', '% Comments') : 'Comments Off'; ?>
                            </span>

                        <div class="news-card__excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="news-card__button">Details</a>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="news-pagination">
                <?php
                echo paginate_links([
                    'mid_size'  => 1,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;',
                ]);
                ?>
            </div>
        <?php else : ?>
            <article class="news-card">
                <div class="news-card__body">
                    <h2 class="news-card__title">No news found</h2>
                    <p class="news-card__excerpt">There are no posts available yet.</p>
                </div>
            </article>
        <?php endif; ?>
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
                <?php wp_get_archives([
                    'type'            => 'monthly',
                    'show_post_count' => false,
                ]); ?>
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

            <?php foreach ($recent_posts as $post) : setup_postdata($post); ?>
                <div class="recent-post">
                    <a href="<?php the_permalink(); ?>" class="recent-post__thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/65x65?text=Post" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                    </a>
                    <div class="recent-post__content">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <span><?php echo esc_html(get_the_date()); ?></span>
                    </div>
                </div>
            <?php endforeach; wp_reset_postdata(); ?>
        </div>

        <div class="widget">
            <h3 class="widget-title">Categories</h3>
            <ul>
                <?php
                wp_list_categories([
                    'title_li' => '',
                ]);
                ?>
            </ul>
        </div>
    </aside>
</div>

<?php get_footer(); ?>
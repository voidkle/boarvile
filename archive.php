<?php
/**
 * Archive Template — categories, tags, dates, authors
 * Matches AMS design system (Poppins, ams-prj tokens)
 */
get_header(); ?>

<main class="ams-archive">

    <!-- PAGE HEADER -->
    <section class="ams-archive__header">
        <div class="ams-archive__container">

            <?php if ( is_category() ) : ?>
                <span class="ams-archive__kicker">Category</span>
                <h1 class="ams-archive__title"><?php single_cat_title(); ?></h1>
                <?php if ( category_description() ) : ?>
                    <p class="ams-archive__desc"><?php echo category_description(); ?></p>
                <?php endif; ?>

            <?php elseif ( is_tag() ) : ?>
                <span class="ams-archive__kicker">Tag</span>
                <h1 class="ams-archive__title"><?php single_tag_title(); ?></h1>

            <?php elseif ( is_author() ) : ?>
                <span class="ams-archive__kicker">Author</span>
                <h1 class="ams-archive__title">
                    <?php the_author_meta( 'display_name', get_queried_object_id() ); ?>
                </h1>
                <?php
                $author_bio = get_the_author_meta( 'description', get_queried_object_id() );
                if ( $author_bio ) : ?>
                    <p class="ams-archive__desc"><?php echo esc_html( $author_bio ); ?></p>
                <?php endif; ?>

            <?php elseif ( is_year() ) : ?>
                <span class="ams-archive__kicker">Year Archive</span>
                <h1 class="ams-archive__title"><?php the_time('Y'); ?></h1>

            <?php elseif ( is_month() ) : ?>
                <span class="ams-archive__kicker">Monthly Archive</span>
                <h1 class="ams-archive__title"><?php the_time('F Y'); ?></h1>

            <?php elseif ( is_day() ) : ?>
                <span class="ams-archive__kicker">Daily Archive</span>
                <h1 class="ams-archive__title"><?php the_time('F j, Y'); ?></h1>

            <?php elseif ( is_tax() ) : ?>
                <span class="ams-archive__kicker">Archive</span>
                <h1 class="ams-archive__title"><?php single_term_title(); ?></h1>

            <?php else : ?>
                <span class="ams-archive__kicker">Archive</span>
                <h1 class="ams-archive__title">All Posts</h1>
            <?php endif; ?>

        </div>
    </section>

    <!-- POST GRID -->
    <section class="ams-archive__content">
        <div class="ams-archive__container">

            <?php if ( have_posts() ) : ?>

                <div class="ams-archive__grid">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class('ams-archive__card'); ?>>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="ams-archive__card-thumb">
                                    <?php the_post_thumbnail( 'medium_large', [
                                        'alt'     => esc_attr( get_the_title() ),
                                        'loading' => 'lazy',
                                    ] ); ?>
                                </a>
                            <?php endif; ?>

                            <div class="ams-archive__card-body">

                                <!-- Category badge -->
                                <?php
                                $cats = get_the_category();
                                if ( $cats ) : ?>
                                    <span class="ams-archive__badge">
                                        <?php echo esc_html( $cats[0]->name ); ?>
                                    </span>
                                <?php endif; ?>

                                <!-- Title -->
                                <h2 class="ams-archive__card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <!-- Excerpt -->
                                <p class="ams-archive__card-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20, '…' ); ?>
                                </p>

                                <!-- Meta -->
                                <div class="ams-archive__card-meta">
                                    <span class="ams-archive__card-date">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>" class="ams-archive__read-more">
                                        Read More
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                    </a>
                                </div>

                            </div>
                        </article>

                    <?php endwhile; ?>
                </div>

                <!-- PAGINATION -->
                <nav class="ams-archive__pagination" aria-label="Archive navigation">
                    <?php
                    the_posts_pagination( [
                        'mid_size'           => 2,
                        'prev_text'          => '&larr; Previous',
                        'next_text'          => 'Next &rarr;',
                        'screen_reader_text' => ' ',
                    ] );
                    ?>
                </nav>

            <?php else : ?>

                <!-- EMPTY STATE -->
                <div class="ams-archive__empty">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    <h2>No posts found</h2>
                    <p>There are no posts in this archive yet. Check back later or explore other categories.</p>
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="ams-archive__btn">
                        Back to Home
                    </a>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
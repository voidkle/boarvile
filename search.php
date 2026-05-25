<?php
/**
 * Search Results Template
 */
get_header(); ?>

<main class="ams-search">

    <!-- Header -->
    <section class="ams-search__header">
        <div class="ams-search__container">
            <span class="ams-search__kicker">Site Search</span>
            <h1 class="ams-search__title">
                Search results for: “<?php echo esc_html( get_search_query() ); ?>”
            </h1>
            <p class="ams-search__desc">
                <?php echo absint( $wp_query->found_posts ); ?> result(s) found.
            </p>
        </div>
    </section>

    <!-- Search form -->
    <section class="ams-search__form-wrap">
        <div class="ams-search__container">
            <div class="ams-search__form-box">
                <?php get_search_form(); ?>
            </div>
        </div>
    </section>

    <!-- Results -->
    <section class="ams-search__content">
        <div class="ams-search__container">

            <?php if ( have_posts() ) : ?>
                <div class="ams-search__grid">

                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('ams-search__card'); ?>>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="ams-search__thumb">
                                    <?php the_post_thumbnail( 'medium_large', [
                                        'alt'     => esc_attr( get_the_title() ),
                                        'loading' => 'lazy',
                                    ] ); ?>
                                </a>
                            <?php endif; ?>

                            <div class="ams-search__body">

                                <?php
                                $post_type_obj = get_post_type_object( get_post_type() );
                                if ( $post_type_obj ) : ?>
                                    <span class="ams-search__badge">
                                        <?php echo esc_html( $post_type_obj->labels->singular_name ); ?>
                                    </span>
                                <?php endif; ?>

                                <h2 class="ams-search__card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <p class="ams-search__excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 24, '…' ); ?>
                                </p>

                                <div class="ams-search__meta">
                                    <span class="ams-search__date"><?php echo esc_html( get_the_date() ); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="ams-search__readmore">
                                        Read More
                                    </a>
                                </div>

                            </div>
                        </article>
                    <?php endwhile; ?>

                </div>

                <nav class="ams-search__pagination" aria-label="Search results navigation">
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

                <div class="ams-search__empty">
                    <h2>No results found</h2>
                    <p>
                        We couldn’t find anything matching “<?php echo esc_html( get_search_query() ); ?>”.
                        Try a different keyword or broader phrase.
                    </p>
                    <div class="ams-search__empty-form">
                        <?php get_search_form(); ?>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
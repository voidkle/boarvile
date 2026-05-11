<?php

get_header();

$aquacore_post_id       = get_the_ID();
$aquacore_tpl           = get_page_template_slug( $aquacore_post_id );
$aquacore_is_canvas     = ( $aquacore_tpl === 'elementor_canvas' );
$aquacore_is_fullwidth  = ( $aquacore_tpl === 'elementor_header_footer' );

$aquacore_built_with_el = (
    did_action( 'elementor/loaded' ) &&
    get_post_meta( $aquacore_post_id, '_elementor_edit_mode', true ) === 'builder'
);

$aquacore_el_has_single = (
    function_exists( 'elementor_theme_do_location' ) &&
    elementor_theme_do_location( 'single' )
);
?>

<?php if ( $aquacore_is_canvas ) : ?>

    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php elseif ( $aquacore_el_has_single ) : ?>

<?php elseif ( $aquacore_built_with_el ) : ?>

<div id="elementor-page-wrap" class="<?php echo $aquacore_is_fullwidth ? 'el-fullwidth' : 'el-default'; ?>" style="min-height:60vh;">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php else :  ?>

<?php

$has_thumb = has_post_thumbnail();
$hero_bg   = $has_thumb ? get_the_post_thumbnail_url( null, 'aquacore-hero' ) : '';
?>

<section class="page-hero">
    <?php if ( $hero_bg ) : ?>
        <div class="page-hero__bg" style="background-image: url('<?php echo esc_url($hero_bg); ?>');" aria-hidden="true"></div>
    <?php endif; ?>
    <div class="page-hero__overlay" aria-hidden="true"></div>
    <div class="page-hero__pattern" aria-hidden="true"></div>

    <div class="page-hero__content">
        <div class="container">
            <div class="page-hero__eyebrow">
                <?php esc_html_e( get_bloginfo('name'), 'aquacore' ); ?>
            </div>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>

            <div class="page-hero__breadcrumb">
                <?php aquacore_breadcrumb(); ?>
            </div>
        </div>
    </div>
</section>

<section class="page-layout">
    <div class="container">

        <?php

        $has_sidebar = is_active_sidebar('sidebar-primary');
        $layout_cls  = $has_sidebar ? 'page-layout__inner' : 'page-layout__inner page-layout--no-sidebar';
        ?>

        <div class="<?php echo esc_attr($layout_cls); ?>">

            
            <div class="page-content">
                <?php
                while ( have_posts() ) :
                    the_post();
                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php

                        if ( $has_thumb && ! $hero_bg ) :
                        ?>
                            <div class="page-featured-image">
                                <?php the_post_thumbnail('aquacore-card', ['alt' => get_the_title()]); ?>
                            </div>
                        <?php endif; ?>

                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages( [
                                'before'      => '<nav class="page-links"><span>' . __( 'Pages:', 'aquacore' ) . '</span>',
                                'after'       => '</nav>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                            ] );
                            ?>
                        </div>

                    </article>

                <?php endwhile; ?>

                
                <?php
                if ( comments_open() || get_comments_number() ) {
                    echo '<div class="page-comments">';
                    comments_template();
                    echo '</div>';
                }
                ?>

            </div>

            
            <?php if ( $has_sidebar ) : ?>
            <aside id="secondary" class="page-sidebar" role="complementary" aria-label="<?php esc_attr_e('Sidebar','aquacore'); ?>">

                
                <?php if ( ! is_active_sidebar('sidebar-primary') ) : ?>
                <div class="widget widget--contact">
                    <h4 class="widget__title"><?php esc_html_e('Get A Quote', 'aquacore'); ?></h4>
                    <p><?php esc_html_e('Need underwater maintenance or inspection services? Contact our experts today.', 'aquacore'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn--primary" style="width:100%;justify-content:center;">
                        <i class="fa fa-paper-plane"></i>
                        <?php esc_html_e('Contact Us','aquacore'); ?>
                    </a>
                </div>

                <div class="widget">
                    <h4 class="widget__title"><?php esc_html_e('Our Services','aquacore'); ?></h4>
                    <ul class="sidebar-services">
                        <?php
                        $services = [
                            __('Hull Inspection & Cleaning',   'aquacore') => '/services/hull-inspection',
                            __('Underwater Welding',           'aquacore') => '/services/underwater-welding',
                            __('Propeller Repair & Polishing', 'aquacore') => '/services/propeller-repair',
                            __('Pipeline & Structure Repair',  'aquacore') => '/services/pipeline-repair',
                            __('Cathodic Protection',          'aquacore') => '/services/cathodic-protection',
                            __('CCTV Inspection',              'aquacore') => '/services/cctv-inspection',
                        ];
                        foreach ($services as $svc => $path) {
                            echo '<li class="sidebar-services__item">';
                            echo '<a href="' . esc_url(home_url($path)) . '" class="sidebar-services__link">';
                            echo esc_html($svc);
                            echo '<i class="fa fa-chevron-right"></i>';
                            echo '</a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="widget">
                    <h4 class="widget__title"><?php esc_html_e('Certifications','aquacore'); ?></h4>
                    <div class="sidebar-certs">
                        <span class="sidebar-cert">ISO 9001</span>
                        <span class="sidebar-cert">IMCA</span>
                        <span class="sidebar-cert">OGP/OGUK</span>
                        <span class="sidebar-cert">IRATA</span>
                        <span class="sidebar-cert">CSWIP 3.2U</span>
                    </div>
                </div>

                <?php else : ?>
                    <?php dynamic_sidebar('sidebar-primary'); ?>
                <?php endif; ?>

            </aside>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php endif;  ?>

<?php
get_footer();
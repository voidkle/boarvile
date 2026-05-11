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

<style>
    

    
    .page-hero {
        position: relative;
        min-height: 320px;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
        background: linear-gradient(135deg, #060e1c 0%, var(--clr-bg-card) 100%);
    }
    .page-hero__bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: brightness(.35) saturate(.8);
        transition: transform 8s ease;
    }
    .page-hero:hover .page-hero__bg { transform: scale(1.04); }
    .page-hero__overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(6,14,28,.95) 0%, rgba(6,14,28,.4) 60%, transparent 100%);
    }
    .page-hero__pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 20% 50%, rgba(240,168,0,.06) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(16,64,128,.15) 0%, transparent 50%);
    }
    .page-hero__content {
        position: relative;
        z-index: 2;
        padding: 48px 0;
        width: 100%;
    }
    .page-hero__eyebrow {
        font-family: var(--font-display);
        font-size: .8rem;
        font-weight: 700;
        letter-spacing: .18em;
        text-transform: uppercase;
        color: var(--clr-accent);
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .page-hero__eyebrow::before {
        content: '';
        width: 32px; height: 2px;
        background: var(--clr-accent);
        display: inline-block;
    }
    .page-hero__title {
        font-family: var(--font-display);
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 800;
        color: var(--clr-white);
        line-height: 1.1;
        margin-bottom: 16px;
    }
    .page-hero__title span { color: var(--clr-accent); }
    .page-hero__breadcrumb { margin-top: 20px; }

    
    .page-layout {
        padding: 72px 0;
    }
    .page-layout__inner {
        display: grid;
        grid-template-columns: 1fr 340px;
        gap: 52px;
        align-items: start;
    }
    .page-layout--no-sidebar .page-layout__inner {
        grid-template-columns: 1fr;
        max-width: 900px;
        margin-inline: auto;
    }

    
    .page-content {
        min-width: 0;
    }
    .page-content .entry-title {
        display: none; 
    }
    .entry-content {
        color: var(--clr-text);
        line-height: 1.85;
    }

    
    .entry-content h1,
    .entry-content h2,
    .entry-content h3,
    .entry-content h4,
    .entry-content h5,
    .entry-content h6 {
        font-family: var(--font-display);
        font-weight: 700;
        color: var(--clr-white);
        line-height: 1.25;
        margin: 2em 0 .6em;
    }
    .entry-content h2 { font-size: clamp(1.5rem, 3vw, 2.25rem); }
    .entry-content h3 { font-size: clamp(1.2rem, 2.5vw, 1.75rem); }
    .entry-content h4 { font-size: 1.25rem; }

    .entry-content p {
        margin-bottom: 1.4em;
        color: var(--clr-text);
    }

    .entry-content a { color: var(--clr-accent); text-decoration: underline; text-underline-offset: 3px; }
    .entry-content a:hover { color: var(--clr-accent-dark); }

    .entry-content ul,
    .entry-content ol {
        margin: 0 0 1.4em 1.5em;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .entry-content li { color: var(--clr-text); }

    .entry-content ul li { list-style: none; position: relative; padding-left: 20px; }
    .entry-content ul li::before {
        content: '';
        position: absolute;
        left: 0; top: .65em;
        width: 8px; height: 8px;
        background: var(--clr-accent);
        border-radius: 50%;
    }

    .entry-content blockquote {
        border-left: 3px solid var(--clr-accent);
        background: var(--clr-bg-card);
        margin: 2em 0;
        padding: 20px 28px;
        border-radius: 0 var(--radius-md) var(--radius-md) 0;
        font-style: italic;
        color: var(--clr-muted);
        font-size: 1.05rem;
    }
    .entry-content blockquote p { margin: 0; color: inherit; }

    .entry-content img {
        border-radius: var(--radius-md);
        box-shadow: var(--shadow-card);
        margin: 1.5em 0;
    }

    .entry-content table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1.5em;
        font-size: .9rem;
    }
    .entry-content th {
        background: var(--clr-bg-card);
        color: var(--clr-accent);
        font-family: var(--font-display);
        font-weight: 700;
        letter-spacing: .05em;
        text-transform: uppercase;
        padding: 12px 16px;
        text-align: left;
        border-bottom: 2px solid var(--clr-accent);
    }
    .entry-content td {
        padding: 12px 16px;
        border-bottom: 1px solid var(--clr-border);
        color: var(--clr-text);
    }
    .entry-content tr:hover td { background: var(--clr-bg-card); }

    .entry-content pre {
        background: #060e1c;
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-md);
        padding: 20px;
        overflow-x: auto;
        font-size: .85rem;
        color: #9ae6b4;
        margin-bottom: 1.5em;
    }
    .entry-content code {
        background: rgba(240,168,0,.1);
        color: var(--clr-accent);
        padding: 2px 6px;
        border-radius: 3px;
        font-size: .88em;
    }
    .entry-content pre code { background: none; color: inherit; padding: 0; }

    
    .page-featured-image {
        margin-bottom: 36px;
        border-radius: var(--radius-md);
        overflow: hidden;
    }
    .page-featured-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
        margin: 0;
    }

    
    .page-sidebar {
        position: sticky;
        top: calc(var(--header-h) + 24px);
    }

    
    .widget {
        background: var(--clr-bg-card);
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-md);
        padding: 28px;
        margin-bottom: 28px;
    }
    .widget:last-child { margin-bottom: 0; }

    
    .widget--contact {
        background: linear-gradient(135deg, #0d2240 0%, var(--clr-bg-card) 100%);
        border-color: rgba(240,168,0,.2);
    }
    .widget--contact .widget__title { color: var(--clr-accent); }
    .widget--contact p { color: var(--clr-muted); font-size: .9rem; margin-bottom: 16px; }

    
    .sidebar-services { list-style: none; display: flex; flex-direction: column; }
    .sidebar-services__item { border-bottom: 1px solid var(--clr-border); }
    .sidebar-services__item:last-child { border-bottom: none; }
    .sidebar-services__link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 0;
        color: var(--clr-text);
        font-size: .9rem;
        font-weight: 500;
        transition: all var(--transition);
    }
    .sidebar-services__link:hover {
        color: var(--clr-accent);
        padding-left: 6px;
    }
    .sidebar-services__link i { font-size: .65rem; color: var(--clr-accent); opacity: .6; }

    
    .sidebar-certs { display: flex; flex-wrap: wrap; gap: 8px; }
    .sidebar-cert {
        background: rgba(240,168,0,.08);
        border: 1px solid rgba(240,168,0,.2);
        color: var(--clr-accent);
        border-radius: var(--radius-sm);
        padding: 4px 10px;
        font-size: .75rem;
        font-weight: 700;
        letter-spacing: .06em;
        font-family: var(--font-display);
    }

    
    .post-navigation {
        border-top: 1px solid var(--clr-border);
        padding-top: 36px;
        margin-top: 48px;
    }
    .post-nav__inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }
    .post-nav__link {
        background: var(--clr-bg-card);
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-md);
        padding: 20px;
        transition: all var(--transition);
    }
    .post-nav__link:hover {
        border-color: var(--clr-accent);
        transform: translateY(-3px);
    }
    .post-nav__dir {
        font-size: .75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: var(--clr-accent);
        margin-bottom: 6px;
        font-family: var(--font-display);
    }
    .post-nav__title { color: var(--clr-white); font-weight: 600; font-size: .95rem; }

    
    .not-found {
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 80px 0;
    }
    .not-found__code {
        font-family: var(--font-display);
        font-size: clamp(6rem, 15vw, 12rem);
        font-weight: 800;
        color: var(--clr-accent);
        opacity: .15;
        line-height: 1;
        margin-bottom: -60px;
    }
    .not-found__title {
        font-family: var(--font-display);
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        font-weight: 800;
        color: var(--clr-white);
        margin-bottom: 16px;
    }
    .not-found__text { color: var(--clr-muted); margin-bottom: 32px; }

    
    @media (max-width: 1024px) {
        .page-layout__inner { grid-template-columns: 1fr; }
        .page-sidebar { position: static; }
    }
    @media (max-width: 640px) {
        .page-layout { padding: 48px 0; }
        .page-hero { min-height: 240px; }
        .post-nav__inner { grid-template-columns: 1fr; }
    }
</style>

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
                <?php aquacore_breadcrumbs(); ?>
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
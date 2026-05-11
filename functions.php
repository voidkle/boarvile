<?php

function aquacore_setup() {
    load_theme_textdomain( 'aquacore', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'custom-background', [
        'default-color' => '0a1628',
    ] );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'align-wide' );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'aquacore' ),
        'footer'  => __( 'Footer Navigation',  'aquacore' ),
        'topbar'  => __( 'Top Bar Links',       'aquacore' ),
    ] );

    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'aquacore_setup' );

function aquacore_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'aquacore_content_width', 1200 );
}
add_action( 'after_setup_theme', 'aquacore_content_width', 0 );

function aquacore_enqueue_assets() {
    // $ver = wp_get_theme()->get( 'Version' );
    $ver = time();
    $uri = get_template_directory_uri();

    wp_enqueue_style(
        'aquacore-fonts',
        'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Nunito+Sans:wght@300;400;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );

    wp_enqueue_style(
        'aquacore-style',
        get_stylesheet_uri(),
        [ 'aquacore-fonts', 'font-awesome' ],
        $ver
    );

    $main_js = get_template_directory() . '/assets/js/main.js';
    if ( file_exists( $main_js ) ) {
        wp_enqueue_script(
            'aquacore-main',
            $uri . '/assets/js/main.js',
            [ 'jquery' ],
            $ver,
            true
        );
        wp_localize_script( 'aquacore-main', 'AquaCore', [
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'aquacore_nonce' ),
            'homeUrl' => home_url( '/' ),
        ] );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'aquacore_enqueue_assets' );

function aquacore_register_sidebars() {
    $defaults = [
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ];

    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Main Sidebar', 'aquacore' ),
        'id'   => 'sidebar-main',
    ] ) );

    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer Column 1', 'aquacore' ),
        'id'   => 'footer-1',
    ] ) );

    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer Column 2', 'aquacore' ),
        'id'   => 'footer-2',
    ] ) );

    register_sidebar( array_merge( $defaults, [
        'name' => __( 'Footer Column 3', 'aquacore' ),
        'id'   => 'footer-3',
    ] ) );
}
add_action( 'widgets_init', 'aquacore_register_sidebars' );

function aquacore_option( $key, $default = '' ) {
    $options = get_option( 'aquacore_options', [] );
    return isset( $options[ $key ] ) ? $options[ $key ] : $default;
}

function aquacore_logo() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="site-logo__text">'
            . esc_html( get_bloginfo( 'name' ) )
            . '</a>';
    }
}

class AquaCore_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="nav__dropdown">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes   = empty( $item->classes ) ? [] : (array) $item->classes;
        $has_child = in_array( 'menu-item-has-children', $classes, true );
        $is_active = in_array( 'current-menu-item', $classes, true )
                  || in_array( 'current-menu-ancestor', $classes, true );

        if ( $depth === 0 ) {
            $output .= '<li class="nav__item' . ( $has_child ? ' nav__item--parent' : '' ) . '">';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="nav__link'
                     . ( $is_active ? ' nav__link--active' : '' ) . '">';
            $output .= esc_html( $item->title );
            if ( $has_child ) {
                $output .= '<i class="fa fa-chevron-down nav__arrow"></i>';
            }
            $output .= '</a>';
        } else {
            $output .= '<li class="nav__item">';
            $output .= '<a href="' . esc_url( $item->url ) . '" class="nav__link--sub">'
                     . esc_html( $item->title )
                     . '</a>';
        }
    }

    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

function aquacore_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'aquacore_excerpt_length' );

function aquacore_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'aquacore_excerpt_more' );

function aquacore_register_post_types() {

    register_post_type( 'post_portfolio', [
        'labels'      => [
            'name'          => __( 'Portfolio',     'aquacore' ),
            'singular_name' => __( 'Portfolio Item', 'aquacore' ),
            'add_new_item'  => __( 'Add Portfolio Item', 'aquacore' ),
        ],
        'public'      => true,
        'has_archive' => true,
        'supports'    => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'   => 'dashicons-portfolio',
        'rewrite'     => [ 'slug' => 'portfolio' ],
        'show_in_rest' => true,
    ] );

    register_post_type( 'post_service', [
        'labels'      => [
            'name'          => __( 'Services', 'aquacore' ),
            'singular_name' => __( 'Service',  'aquacore' ),
            'add_new_item'  => __( 'Add Service', 'aquacore' ),
        ],
        'public'      => true,
        'has_archive' => true,
        'supports'    => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'   => 'dashicons-admin-tools',
        'rewrite'     => [ 'slug' => 'services' ],
        'show_in_rest' => true,
    ] );

    register_post_type( 'post_event', [
        'labels'      => [
            'name'          => __( 'Events', 'aquacore' ),
            'singular_name' => __( 'Event',  'aquacore' ),
            'add_new_item'  => __( 'Add Event', 'aquacore' ),
        ],
        'public'      => true,
        'has_archive' => true,
        'supports'    => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
        'menu_icon'   => 'dashicons-calendar-alt',
        'rewrite'     => [ 'slug' => 'events' ],
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'aquacore_register_post_types' );

function aquacore_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'is-singular';
    }
    if ( ! is_active_sidebar( 'sidebar-main' ) ) {
        $classes[] = 'no-sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'aquacore_body_classes' );

function aquacore_pagination() {
    $args = [
        'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Prev', 'aquacore' ),
        'next_text' => __( 'Next', 'aquacore' ) . ' <i class="fa fa-chevron-right"></i>',
        'type'      => 'list',
    ];
    echo paginate_links( $args );
}

function aquacore_section_heading( $title = '', $subtitle = '', $center = false ) {
    $cls = 'section-heading' . ( $center ? ' section-heading--center' : '' );
    echo '<div class="' . esc_attr( $cls ) . '">';
    echo '<h2 class="section-heading__title">' . wp_kses_post( $title ) . '</h2>';
    if ( $subtitle ) {
        echo '<p class="section-heading__sub">' . esc_html( $subtitle ) . '</p>';
    }
    echo '</div>';
}

function aquacore_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }
    echo '<nav class="breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'aquacore' ) . '">';
    echo '<ol class="breadcrumb__list">';
    echo '<li class="breadcrumb__item"><a href="' . esc_url( home_url( '/' ) ) . '">'
         . esc_html__( 'Home', 'aquacore' ) . '</a></li>';
    echo '<li class="breadcrumb__sep" aria-hidden="true"><i class="fa fa-chevron-right"></i></li>';

    if ( is_singular() ) {
        if ( is_singular( 'post_portfolio' ) ) {
            echo '<li class="breadcrumb__item"><a href="' . esc_url( get_post_type_archive_link( 'post_portfolio' ) ) . '">'
                 . esc_html__( 'Portfolio', 'aquacore' ) . '</a></li>';
            echo '<li class="breadcrumb__sep" aria-hidden="true"><i class="fa fa-chevron-right"></i></li>';
        }
        echo '<li class="breadcrumb__item breadcrumb__item--current" aria-current="page">'
             . esc_html( get_the_title() ) . '</li>';
    } elseif ( is_archive() ) {
        echo '<li class="breadcrumb__item breadcrumb__item--current">'
             . esc_html( get_the_archive_title() ) . '</li>';
    } elseif ( is_search() ) {
        echo '<li class="breadcrumb__item breadcrumb__item--current">'
             . esc_html__( 'Search Results', 'aquacore' ) . '</li>';
    } elseif ( is_404() ) {
        echo '<li class="breadcrumb__item breadcrumb__item--current">404</li>';
    }

    echo '</ol>';
    echo '</nav>';
}

function aquacore_handle_contact() {
    check_ajax_referer( 'aquacore_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name']    ?? '' );
    $email   = sanitize_email(      $_POST['email']   ?? '' );
    $subject = sanitize_text_field( $_POST['subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( ! $name || ! is_email( $email ) || ! $message ) {
        wp_send_json_error( [ 'message' => __( 'Please fill in all required fields.', 'aquacore' ) ] );
    }

    $to      = get_option( 'admin_email' );
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $name . ' <' . $email . '>',
        'Reply-To: ' . $email,
    ];

    $body  = 'Name: '    . $name    . "\n\n";
    $body .= 'Email: '   . $email   . "\n\n";
    $body .= 'Subject: ' . $subject . "\n\n";
    $body .= 'Message: ' . "\n" . $message;

    $sent = wp_mail( $to, '[AMS] ' . $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( [ 'message' => __( "Your message has been sent. We'll be in touch shortly!", 'aquacore' ) ] );
    } else {
        wp_send_json_error( [ 'message' => __( 'Something went wrong. Please try again.', 'aquacore' ) ] );
    }
}
add_action( 'wp_ajax_aquacore_contact',        'aquacore_handle_contact' );
add_action( 'wp_ajax_nopriv_aquacore_contact', 'aquacore_handle_contact' );

function aquacore_elementor_init() {

    add_action( 'elementor/theme/register_locations', function( $manager ) {
        $manager->register_location( 'header'  );
        $manager->register_location( 'footer'  );
        $manager->register_location( 'single'  );
        $manager->register_location( 'archive' );
    } );

    add_action( 'wp_enqueue_scripts', function() {
        $css = '

.elementor-section.elementor-section-boxed > .elementor-container,
.elementor-container { max-width: var(--container, 1200px); }

.elementor-section,
.e-con { --e-global-color-primary: #f0a800; }

.site-header { z-index: 1000; }
.elementor-popup-modal,
.dialog-widget { z-index: 9999 !important; }

.elementor-widget-heading .elementor-heading-title { font-family: var(--font-display); }
.elementor-widget-text-editor { font-family: var(--font-body); color: var(--clr-text); }

.elementor-button {
    font-family: var(--font-display);
    letter-spacing: .06em;
    text-transform: uppercase;
}

.elementor-field-group input,
.elementor-field-group textarea,
.elementor-field-group select {
    background: var(--clr-bg-card) !important;
    border-color: var(--clr-border) !important;
    color: var(--clr-text) !important;
    border-radius: var(--radius-sm) !important;
}

.elementor-field-group input::placeholder,
.elementor-field-group textarea::placeholder { color: var(--clr-muted) !important; }

.elementor-widget-divider .elementor-divider-separator { border-color: var(--clr-border); }

.elementor-page-template-full_width .page-layout,
.elementor-template-full-width .page-layout { padding: 0; }
.elementor-page-template-full_width .page-layout .container,
.elementor-template-full-width .page-layout .container { max-width: none; padding: 0; }

body.elementor-page-template-canvas .site-header,
body.elementor-page-template-canvas .site-footer,
body.elementor-page-template-canvas .topbar,
body.elementor-page-template-canvas #scroll-top { display: none !important; }
';

        if ( wp_style_is( 'aquacore-style', 'enqueued' ) ) {
            wp_add_inline_style( 'aquacore-style', $css );
        }
    }, 20 );

    add_action( 'elementor/editor/after_enqueue_scripts', function() {

        if ( wp_script_is( 'aquacore-main', 'registered' ) ) {
            wp_add_inline_script(
                'aquacore-main',
                'window.__aquacoreEditorMode = true;',
                'before'
            );
        }
    } );

    if ( class_exists( '\ElementorPro\Plugin' ) ) {
        add_action(
            'elementor/element/kit/section_settings-global-colors/before_section_end',
            function( $element, $args ) {
                if ( ! defined( '\Elementor\Controls_Manager::RAW_HTML' ) ) {
                    return;
                }
                $element->add_control( 'aquacore_palette_notice', [
                    'type' => \Elementor\Controls_Manager::RAW_HTML,
                    'raw'  => '<strong>AquaCore Palette</strong><br>
                               Navy: <code>#0a1628</code><br>
                               Card: <code>#122035</code><br>
                               Gold: <code>#f0a800</code>',
                    'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
                ] );
            },
            10,
            2
        );
    }
}

add_action( 'elementor/init', 'aquacore_elementor_init' );

add_action( 'elementor/theme/register_locations', function( $manager ) {
    $manager->register_location( 'header'  );
    $manager->register_location( 'footer'  );
    $manager->register_location( 'single'  );
    $manager->register_location( 'archive' );
} );

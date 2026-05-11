<?php

$aquacore_tpl           = get_page_template_slug();
$aquacore_is_canvas     = ( $aquacore_tpl === 'elementor_canvas' );
$aquacore_el_has_header = function_exists( 'elementor_theme_do_location' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( $aquacore_is_canvas ) : ?>

<?php elseif ( $aquacore_el_has_header && elementor_theme_do_location( 'header' ) ) : ?>
    <?php else :  ?>

<div class="topbar">
    <div class="container">
        <div class="topbar__inner">
            <div class="topbar__contacts">
                <?php if ( $phone = aquacore_option('phone') ) : ?>
                <a href="tel:<?php echo esc_attr( preg_replace('/\D/', '', $phone) ); ?>" class="topbar__link">
                    <i class="fa fa-phone"></i>
                    <?php echo esc_html( $phone ); ?>
                </a>
                <?php endif; ?>

                <?php if ( $email = aquacore_option('email') ) : ?>
                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="topbar__link">
                    <i class="fa fa-envelope"></i>
                    <?php echo esc_html( $email ); ?>
                </a>
                <?php endif; ?>

                <?php if ( $addr = aquacore_option('address') ) : ?>
                <span class="topbar__link">
                    <i class="fa fa-map-marker-alt"></i>
                    <?php echo esc_html( $addr ); ?>
                </span>
                <?php endif; ?>
            </div>

            <div class="topbar__social">
                <?php if ( $li = aquacore_option('linkedin') ) : ?>
                <a href="<?php echo esc_url( $li ); ?>" class="topbar__social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <?php endif; ?>

                <?php if ( $yt = aquacore_option('youtube') ) : ?>
                <a href="<?php echo esc_url( $yt ); ?>" class="topbar__social-link" target="_blank" rel="noopener" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<header id="site-header" class="site-header" role="banner">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'aquacore' ); ?>">

            <div class="site-logo">
                <?php aquacore_logo(); ?>
            </div>

            <div class="nav">
                <?php
                wp_nav_menu( [
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav__list',
                    'walker'         => new AquaCore_Nav_Walker(),
                    'fallback_cb'    => function() {
                        echo '<ul class="nav__list">';
                        echo '<li class="nav__item"><a href="' . esc_url( home_url('/') ) . '" class="nav__link">Home</a></li>';
                        echo '<li class="nav__item"><a href="' . esc_url( home_url('/about-us') ) . '" class="nav__link">About Us</a></li>';
                        echo '<li class="nav__item"><a href="' . esc_url( home_url('/services') ) . '" class="nav__link">Services</a></li>';
                        echo '<li class="nav__item"><a href="' . esc_url( home_url('/projects') ) . '" class="nav__link">Projects</a></li>';
                        echo '<li class="nav__item"><a href="' . esc_url( home_url('/contact') ) . '" class="nav__link">Contact Us</a></li>';
                        echo '</ul>';
                    },
                ] );
                ?>

                <div class="nav__cta">
                    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
                        <i class="fa fa-paper-plane"></i>
                        <?php esc_html_e( 'Get In Touch', 'aquacore' ); ?>
                    </a>
                </div>
            </div>

            <button class="hamburger" id="hamburger-btn" aria-label="<?php esc_attr_e('Toggle menu','aquacore'); ?>" aria-expanded="false" aria-controls="mobile-nav">
                <span class="hamburger__bar"></span>
                <span class="hamburger__bar"></span>
                <span class="hamburger__bar"></span>
            </button>

        </nav>
    </div>
</header>

<div id="mobile-nav" class="mobile-nav" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Mobile menu','aquacore'); ?>">

    <?php
    wp_nav_menu( [
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'mobile-nav__list',
        'depth'          => 2,
        'fallback_cb'    => function() {
            echo '<ul class="mobile-nav__list">';
            $links = [
                'Home'       => '/',
                'About Us'   => '/about-us',
                'Services'   => '/services',
                'Projects'   => '/projects',
                'Contact Us' => '/contact',
            ];
            foreach ( $links as $label => $path ) {
                echo '<li class="mobile-nav__item"><a href="' . esc_url( home_url($path) ) . '" class="mobile-nav__link">' . esc_html($label) . '</a></li>';
            }
            echo '</ul>';
        },
        'items_wrap' => '<ul class="mobile-nav__list">%3$s</ul>',
        'walker'     => new class extends Walker_Nav_Menu {
            public function start_lvl( &$output, $depth = 0, $args = null ) {
                $output .= '<ul class="mobile-nav__sub">';
            }
            public function end_lvl( &$output, $depth = 0, $args = null ) {
                $output .= '</ul>';
            }
            public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
                $classes   = (array) $item->classes;
                $has_child = in_array( 'menu-item-has-children', $classes );
                $link_cls  = $depth === 0 ? 'mobile-nav__link' : 'mobile-nav__sub-link';
                $output   .= '<li class="' . ( $depth === 0 ? 'mobile-nav__item' : '' ) . '">';
                $output   .= '<a href="' . esc_url( $item->url ) . '" class="' . $link_cls . '">';
                $output   .= esc_html( $item->title );
                if ( $has_child && $depth === 0 ) $output .= '<i class="fa fa-chevron-down" style="font-size:.7rem"></i>';
                $output   .= '</a>';
            }
            public function end_el( &$output, $item, $depth = 0, $args = null ) {
                $output .= '</li>';
            }
        },
    ] );
    ?>

    <div class="mobile-nav__cta">
        <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary" style="width:100%;justify-content:center;">
            <i class="fa fa-paper-plane"></i>
            <?php esc_html_e('Get In Touch', 'aquacore'); ?>
        </a>
    </div>

    <div class="mobile-nav__contacts">
        <?php if ( $phone = aquacore_option('phone') ) : ?>
        <a href="tel:<?php echo esc_attr( preg_replace('/\D/','', $phone) ); ?>" class="mobile-nav__contact">
            <i class="fa fa-phone"></i> <?php echo esc_html( $phone ); ?>
        </a>
        <?php endif; ?>
        <?php if ( $email = aquacore_option('email') ) : ?>
        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="mobile-nav__contact">
            <i class="fa fa-envelope"></i> <?php echo esc_html( $email ); ?>
        </a>
        <?php endif; ?>
    </div>

</div>

<script>
(function(){
    var CLOSE_DELAY = 120; // ms — tweak between 80-150 if needed

    var hdr = document.getElementById('site-header');
    window.addEventListener('scroll', function(){
        hdr && hdr.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    var btn    = document.getElementById('hamburger-btn');
    var mNav   = document.getElementById('mobile-nav');
    var isOpen = false;

    function toggleMenu(open){
        isOpen = open;
        btn  && btn.classList.toggle('is-active', open);
        mNav && mNav.classList.toggle('is-open',  open);
        btn  && btn.setAttribute('aria-expanded', String(open));
        document.body.style.overflow = open ? 'hidden' : '';
    }

    btn && btn.addEventListener('click', function(){ toggleMenu(!isOpen); });

    document.addEventListener('keydown', function(e){
        if ( e.key === 'Escape' && isOpen ) toggleMenu(false);
    });

    mNav && mNav.querySelectorAll('a').forEach(function(a){
        a.addEventListener('click', function(){ toggleMenu(false); });
    });

    mNav && mNav.querySelectorAll('.mobile-nav__link').forEach(function(link){
        var sub = link.parentElement.querySelector('.mobile-nav__sub');
        if (!sub) return;
        link.addEventListener('click', function(e){
            e.preventDefault();
            sub.classList.toggle('is-open');
        });
    });

    document.querySelectorAll('.nav > .nav__list > .nav__item > .nav__dropdown').forEach(function(dd) {
        if (!dd.querySelector('.nav__dropdown-inner')) {
            var inner = document.createElement('div');
            inner.className = 'nav__dropdown-inner';
            while (dd.firstChild) { inner.appendChild(dd.firstChild); }
            dd.appendChild(inner);
        }
    });

    document.querySelectorAll('.nav__dropdown .nav__item').forEach(function(item) {
        var nestedDd = item.querySelector('.nav__dropdown');
        if (!nestedDd) return;

        item.classList.add('nav__item--has-sub');

        var parentLink = item.querySelector('.nav__link--sub');
        if (parentLink && !parentLink.querySelector('.nav__sub-arrow')) {
            var arrow = document.createElement('i');
            arrow.className = 'fa fa-chevron-right nav__sub-arrow';
            parentLink.appendChild(arrow);
        }

        if (!nestedDd.querySelector('.nav__dropdown-inner')) {
            var inner2 = document.createElement('div');
            inner2.className = 'nav__dropdown-inner';
            while (nestedDd.firstChild) { inner2.appendChild(nestedDd.firstChild); }
            nestedDd.appendChild(inner2);
        }

        function checkFlyoutEdge() {
            nestedDd.classList.remove('flyout-left');
            var rect = nestedDd.getBoundingClientRect();
            if (rect.right > window.innerWidth - 16) {
                nestedDd.classList.add('flyout-left');
            }
        }

        var nestedTimer;
        item.addEventListener('mouseenter', function() {
            clearTimeout(nestedTimer);
            item.classList.add('is-open');
            checkFlyoutEdge();
        });
        item.addEventListener('mouseleave', function() {
            nestedTimer = setTimeout(function() {
                item.classList.remove('is-open');
            }, CLOSE_DELAY);
        });
    });

    document.querySelectorAll('.nav > .nav__list > .nav__item').forEach(function(item) {
        var dd = item.querySelector('.nav__dropdown');
        if (!dd) return;

        var timer;

        item.addEventListener('mouseenter', function() {
            clearTimeout(timer);
            item.classList.add('is-open');
        });

        item.addEventListener('mouseleave', function() {
            timer = setTimeout(function() {
                item.classList.remove('is-open');
            }, CLOSE_DELAY);
        });
    });

})();
</script>

<?php endif;  ?>

<div id="page" class="site">
<main id="content" class="site-content" role="main">
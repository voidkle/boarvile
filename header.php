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

    <style>
        
        :root {
            --clr-bg:          #0a1628;
            --clr-bg-card:     #122035;
            --clr-bg-section:  #0d1e35;
            --clr-accent:      #f0a800;
            --clr-accent-dark: #c98900;
            --clr-accent-glow: rgba(240,168,0,.15);
            --clr-white:       #ffffff;
            --clr-text:        #d4dff0;
            --clr-muted:       #7a92b0;
            --clr-border:      rgba(255,255,255,.08);
            --clr-overlay:     rgba(10,22,40,.75);

            --font-display: 'Barlow Condensed', sans-serif;
            --font-body:    'Nunito Sans',      sans-serif;

            --radius-sm:   4px;
            --radius-md:   8px;
            --radius-lg:  16px;

            --shadow-card:  0 4px 24px rgba(0,0,0,.4);
            --shadow-glow:  0 0 32px rgba(240,168,0,.2);

            --transition: .3s ease;
            --container:  1200px;
            --header-h:   80px;
        }

        
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 16px; }
        body {
            font-family: var(--font-body);
            background-color: var(--clr-bg);
            color: var(--clr-text);
            line-height: 1.7;
            overflow-x: hidden;
        }
        img { max-width: 100%; height: auto; display: block; }
        a   { color: var(--clr-accent); text-decoration: none; transition: color var(--transition); }
        a:hover { color: var(--clr-accent-dark); }

        
        .container {
            width: 100%;
            max-width: var(--container);
            margin-inline: auto;
            padding-inline: 24px;
        }

        
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            font-family: var(--font-display);
            font-size: .95rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            border: 2px solid transparent;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: all var(--transition);
            white-space: nowrap;
        }
        .btn--primary {
            background: var(--clr-accent);
            color: var(--clr-bg);
            border-color: var(--clr-accent);
        }
        .btn--primary:hover {
            background: var(--clr-accent-dark);
            border-color: var(--clr-accent-dark);
            color: var(--clr-bg);
            box-shadow: var(--shadow-glow);
            transform: translateY(-2px);
        }
        .btn--outline {
            background: transparent;
            color: var(--clr-white);
            border-color: rgba(255,255,255,.5);
        }
        .btn--outline:hover {
            border-color: var(--clr-accent);
            color: var(--clr-accent);
            background: var(--clr-accent-glow);
        }

        
        .section-heading { margin-bottom: 48px; }
        .section-heading--center { text-align: center; }
        .section-heading__title {
            font-family: var(--font-display);
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--clr-white);
            line-height: 1.1;
            margin-bottom: 12px;
        }
        .section-heading__title span { color: var(--clr-accent); }
        .section-heading__sub {
            font-size: 1.05rem;
            color: var(--clr-muted);
            max-width: 600px;
            margin-inline: auto;
        }
        .section-heading::after {
            content: '';
            display: block;
            width: 56px;
            height: 3px;
            background: var(--clr-accent);
            margin-top: 20px;
        }
        .section-heading--center::after { margin-inline: auto; }

        
        .card {
            background: var(--clr-bg-card);
            border: 1px solid var(--clr-border);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: transform var(--transition), box-shadow var(--transition), border-color var(--transition);
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-card);
            border-color: var(--clr-accent);
        }

        
        .breadcrumb { padding: 12px 0; font-size: .85rem; color: var(--clr-muted); }
        .breadcrumb__list { display: flex; flex-wrap: wrap; align-items: center; gap: 6px; list-style: none; }
        .breadcrumb__item a { color: var(--clr-muted); }
        .breadcrumb__item a:hover { color: var(--clr-accent); }
        .breadcrumb__item--current { color: var(--clr-accent); font-weight: 600; }
        .breadcrumb__sep { color: var(--clr-border); font-size: .7rem; }

        
        .topbar {
            background: rgba(6,13,26,.95);
            border-bottom: 1px solid var(--clr-border);
            font-size: .82rem;
            padding: 8px 0;
        }
        .topbar__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .topbar__contacts { display: flex; gap: 24px; align-items: center; flex-wrap: wrap; }
        .topbar__link {
            color: var(--clr-muted);
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color var(--transition);
        }
        .topbar__link:hover { color: var(--clr-accent); }
        .topbar__link i { color: var(--clr-accent); font-size: .8rem; }
        .topbar__social { display: flex; gap: 12px; align-items: center; }
        .topbar__social-link {
            color: var(--clr-muted);
            width: 28px; height: 28px;
            display: flex; align-items: center; justify-content: center;
            border: 1px solid var(--clr-border);
            border-radius: 50%;
            font-size: .78rem;
            transition: all var(--transition);
        }
        .topbar__social-link:hover {
            color: var(--clr-bg);
            background: var(--clr-accent);
            border-color: var(--clr-accent);
        }

        
        .site-header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(10,22,40,.96);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--clr-border);
            transition: background var(--transition), box-shadow var(--transition);
        }
        .site-header.scrolled {
            background: rgba(6,13,26,.98);
            box-shadow: 0 4px 32px rgba(0,0,0,.5);
        }
        .navbar {
            height: var(--header-h);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        
        .site-logo { display: flex; align-items: center; flex-shrink: 0; }
        .site-logo img { height: 50px; width: auto; }
        .site-logo__text {
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--clr-white);
            letter-spacing: .04em;
            text-transform: uppercase;
        }
        .site-logo__text span { color: var(--clr-accent); }

        
        .nav { display: flex; align-items: center; }
        .nav__list {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
        }
        .nav__item { position: relative; }

        .nav__link {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 8px 14px;
            font-family: var(--font-display);
            font-size: .9rem;
            font-weight: 600;
            letter-spacing: .05em;
            text-transform: uppercase;
            color: var(--clr-text);
            border-radius: var(--radius-sm);
            transition: all var(--transition);
            white-space: nowrap;
        }
        .nav__link:hover,
        .nav__link--active { color: var(--clr-accent); }

        .nav__arrow { font-size: .6rem; transition: transform var(--transition); }
        .nav__item.is-open .nav__arrow { transform: rotate(180deg); }

        
        .nav__dropdown {
            display: none;
            position: absolute;
            top: 100%;           
            left: 0;
            min-width: 220px;
            padding-top: 8px;    
            background: transparent;
            z-index: 100;
        }

        .nav__item:hover > .nav__dropdown,
        .nav__item.is-open > .nav__dropdown { display: block; }

        
        .nav__dropdown-inner {
            background: var(--clr-bg-card);
            border: 1px solid var(--clr-border);
            border-top: 2px solid var(--clr-accent);
            border-radius: 0 0 var(--radius-md) var(--radius-md);
            box-shadow: var(--shadow-card);
            overflow: hidden;
            animation: dropIn .2s ease;
        }

        @keyframes dropIn {
            from { opacity: 0; transform: translateY(-6px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        
        .nav__link--sub {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 18px;
            font-size: .85rem;
            font-family: var(--font-body);
            text-transform: none;
            letter-spacing: 0;
            font-weight: 500;
            color: var(--clr-text);
            border-bottom: 1px solid var(--clr-border);
            border-radius: 0;
            transition: background var(--transition), color var(--transition), padding-left var(--transition);
            position: relative;
        }
        .nav__link--sub:last-child { border-bottom: none; }
        .nav__link--sub:hover {
            background: var(--clr-accent-glow);
            color: var(--clr-accent);
            padding-left: 24px;
        }

        
        .nav__sub-arrow {
            font-size: .6rem;
            color: var(--clr-muted);
            margin-left: auto;
            padding-left: 8px;
            flex-shrink: 0;
            transition: color var(--transition);
        }
        .nav__link--sub:hover .nav__sub-arrow { color: var(--clr-accent); }

        
        .nav__item--has-sub { position: relative; }

        .nav__dropdown .nav__dropdown {
            display: none;
            position: absolute;
            top: -3px;    
            left: 100%;   
            min-width: 220px;
            padding-top: 0;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .nav__dropdown .nav__dropdown .nav__dropdown-inner {
            border-top: 2px solid var(--clr-accent);
            border-radius: var(--radius-md);
            margin-left: 6px;
            box-shadow: var(--shadow-card);
        }

        .nav__item--has-sub:hover > .nav__dropdown,
        .nav__item--has-sub.is-open > .nav__dropdown {
            display: block;
            animation: dropRight .2s ease;
        }

        @keyframes dropRight {
            from { opacity: 0; transform: translateX(-8px); }
            to   { opacity: 1; transform: translateX(0); }
        }

        
        .nav__dropdown .nav__dropdown.flyout-left {
            left: auto;
            right: 100%;
        }
        .nav__dropdown .nav__dropdown.flyout-left .nav__dropdown-inner {
            margin-left: 0;
            margin-right: 6px;
        }

        
        .nav__cta { margin-left: 12px; }

        
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 6px;
            background: none;
            border: none;
            z-index: 110;
        }
        .hamburger__bar {
            width: 26px; height: 2px;
            background: var(--clr-white);
            border-radius: 2px;
            transition: all var(--transition);
            display: block;
        }
        .hamburger.is-active .hamburger__bar:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .hamburger.is-active .hamburger__bar:nth-child(2) { opacity: 0; }
        .hamburger.is-active .hamburger__bar:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        
        .mobile-nav {
            display: none;
            position: fixed;
            inset: 0;
            z-index: 999;
            background: rgba(6,13,26,.97);
            padding: 100px 32px 40px;
            overflow-y: auto;
            flex-direction: column;
        }
        .mobile-nav.is-open { display: flex; animation: fadeIn .25s ease; }
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        .mobile-nav__list { list-style: none; }
        .mobile-nav__item { border-bottom: 1px solid var(--clr-border); }
        .mobile-nav__link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
            font-family: var(--font-display);
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
            color: var(--clr-white);
        }
        .mobile-nav__link:hover { color: var(--clr-accent); }
        .mobile-nav__sub {
            display: none;
            list-style: none;
            padding: 0 0 12px 16px;
        }
        .mobile-nav__sub.is-open { display: block; }
        .mobile-nav__sub-link {
            display: block;
            padding: 8px 0;
            color: var(--clr-muted);
            font-size: .95rem;
        }
        .mobile-nav__sub-link:hover { color: var(--clr-accent); }
        .mobile-nav__cta { margin-top: 32px; }
        .mobile-nav__contacts { margin-top: 32px; display: flex; flex-direction: column; gap: 12px; }
        .mobile-nav__contact { color: var(--clr-muted); display: flex; align-items: center; gap: 8px; font-size: .9rem; }
        .mobile-nav__contact i { color: var(--clr-accent); }

        
        @media (max-width: 1024px) {
            .nav { display: none; }
            .hamburger { display: flex; }
            .topbar__contacts { gap: 12px; }
        }
        @media (max-width: 768px) {
            :root { --header-h: 70px; }
            .topbar__contacts .topbar__link:not(:first-child) { display: none; }
        }
        @media (max-width: 480px) {
            .container { padding-inline: 16px; }
            .topbar { display: none; }
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( $aquacore_is_canvas ) : ?>

<?php elseif ( $aquacore_el_has_header ) : ?>

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

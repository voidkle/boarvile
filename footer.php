</main>
</div>

<?php

$aquacore_tpl           = get_page_template_slug();
$aquacore_is_canvas     = ( $aquacore_tpl === 'elementor_canvas' );
$aquacore_el_has_footer = function_exists( 'elementor_theme_do_location' );
?>

<?php if ( $aquacore_is_canvas ) : ?>

<?php elseif ( $aquacore_el_has_footer && elementor_theme_do_location( 'footer' ) ) : ?>

<?php else :  ?>

<footer id="site-footer" class="site-footer" role="contentinfo">

    <style>
        
        .site-footer {
            background: #060e1c;
            border-top: 1px solid var(--clr-border);
            margin-top: auto;
        }

        
        .footer-cta {
            background: linear-gradient(135deg, var(--clr-bg-card) 0%, #0d2240 100%);
            border-bottom: 1px solid var(--clr-border);
            padding: 52px 0;
        }
        .footer-cta__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            flex-wrap: wrap;
        }
        .footer-cta__text h3 {
            font-family: var(--font-display);
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 800;
            color: var(--clr-white);
            line-height: 1.2;
        }
        .footer-cta__text h3 span { color: var(--clr-accent); }
        .footer-cta__text p {
            color: var(--clr-muted);
            margin-top: 8px;
            font-size: .95rem;
        }
        .footer-cta__actions { display: flex; gap: 16px; flex-wrap: wrap; }

        
        .footer-main {
            padding: 72px 0 40px;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 48px;
        }

        
        .footer-brand__logo { margin-bottom: 20px; }
        .footer-brand__logo img { height: 52px; width: auto; }
        .footer-brand__logo-text {
            font-family: var(--font-display);
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--clr-white);
            text-transform: uppercase;
            letter-spacing: .04em;
        }
        .footer-brand__logo-text span { color: var(--clr-accent); }
        .footer-brand__desc {
            color: var(--clr-muted);
            font-size: .9rem;
            line-height: 1.8;
            margin-bottom: 24px;
        }
        .footer-brand__social { display: flex; gap: 10px; }
        .footer-social-link {
            width: 38px; height: 38px;
            border: 1px solid var(--clr-border);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: var(--clr-muted);
            font-size: .85rem;
            transition: all var(--transition);
        }
        .footer-social-link:hover {
            background: var(--clr-accent);
            border-color: var(--clr-accent);
            color: var(--clr-bg);
            transform: translateY(-3px);
        }

        
        .footer-col__title {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--clr-white);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--clr-accent);
            display: inline-block;
        }

        
        .footer-nav { list-style: none; display: flex; flex-direction: column; gap: 10px; }
        .footer-nav__link {
            color: var(--clr-muted);
            font-size: .9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all var(--transition);
        }
        .footer-nav__link::before {
            content: '';
            width: 6px; height: 6px;
            background: var(--clr-accent);
            border-radius: 50%;
            flex-shrink: 0;
            opacity: .6;
            transition: opacity var(--transition);
        }
        .footer-nav__link:hover {
            color: var(--clr-accent);
            padding-left: 4px;
        }
        .footer-nav__link:hover::before { opacity: 1; }

        
        .footer-contact { list-style: none; display: flex; flex-direction: column; gap: 14px; }
        .footer-contact__item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: var(--clr-muted);
            font-size: .9rem;
        }
        .footer-contact__item i {
            color: var(--clr-accent);
            font-size: .9rem;
            margin-top: 3px;
            flex-shrink: 0;
            width: 16px;
        }
        .footer-contact__item a { color: var(--clr-muted); }
        .footer-contact__item a:hover { color: var(--clr-accent); }

        
        .widget__title {
            font-family: var(--font-display);
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .08em;
            color: var(--clr-white);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--clr-accent);
            display: inline-block;
        }

        
        .footer-divider {
            border: none;
            border-top: 1px solid var(--clr-border);
            margin: 0;
        }

        
        .footer-bottom {
            padding: 24px 0;
        }
        .footer-bottom__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
        }
        .footer-bottom__copy {
            color: var(--clr-muted);
            font-size: .82rem;
        }
        .footer-bottom__copy a { color: var(--clr-accent); }
        .footer-bottom__links {
            display: flex;
            gap: 20px;
            list-style: none;
        }
        .footer-bottom__links a {
            color: var(--clr-muted);
            font-size: .82rem;
            transition: color var(--transition);
        }
        .footer-bottom__links a:hover { color: var(--clr-accent); }

        
        .footer-certs {
            padding: 20px 0 32px;
            text-align: center;
        }
        .footer-certs__label {
            font-size: .78rem;
            text-transform: uppercase;
            letter-spacing: .1em;
            color: var(--clr-muted);
            margin-bottom: 12px;
        }
        .footer-certs__badges { display: flex; align-items: center; justify-content: center; gap: 24px; flex-wrap: wrap; }
        .footer-cert-badge {
            background: var(--clr-bg-card);
            border: 1px solid var(--clr-border);
            border-radius: var(--radius-sm);
            padding: 8px 16px;
            font-family: var(--font-display);
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .08em;
            color: var(--clr-muted);
            text-transform: uppercase;
        }

        
        .scroll-top {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 500;
            width: 44px; height: 44px;
            background: var(--clr-accent);
            color: var(--clr-bg);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .9rem;
            opacity: 0;
            transform: translateY(16px);
            transition: all var(--transition);
            box-shadow: 0 4px 16px rgba(240,168,0,.4);
        }
        .scroll-top.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .scroll-top:hover {
            background: var(--clr-accent-dark);
            transform: translateY(-3px);
        }

        
        @media (max-width: 1024px) {
            .footer-grid { grid-template-columns: 1fr 1fr; gap: 36px; }
            .footer-brand { grid-column: 1 / -1; }
        }

        @media (max-width: 640px) {
            .footer-grid { grid-template-columns: 1fr; gap: 32px; }
            .footer-cta__inner { flex-direction: column; text-align: center; }
            .footer-cta__actions { justify-content: center; }
            .footer-bottom__inner { flex-direction: column; text-align: center; }
            .footer-bottom__links { justify-content: center; flex-wrap: wrap; }
        }
    </style>

    
    <div class="footer-cta">
        <div class="container">
            <div class="footer-cta__inner">
                <div class="footer-cta__text">
                    <h3><?php esc_html_e( 'Ready to Start Your', 'aquacore' ); ?> <span><?php esc_html_e( 'Next Project?', 'aquacore' ); ?></span></h3>
                    <p><?php esc_html_e( 'Our certified diving and underwater engineering teams are standing by.', 'aquacore' ); ?></p>
                </div>
                <div class="footer-cta__actions">
                    <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="btn btn--primary">
                        <i class="fa fa-paper-plane"></i>
                        <?php esc_html_e( 'Contact Us', 'aquacore' ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url('/services') ); ?>" class="btn btn--outline">
                        <i class="fa fa-water"></i>
                        <?php esc_html_e( 'Our Services', 'aquacore' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                
                <div class="footer-col footer-brand">
                    <div class="footer-brand__logo">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<div class="footer-brand__logo-text">'
                                . esc_html( get_bloginfo('name') )
                                . '</div>';
                        }
                        ?>
                    </div>
                    <p class="footer-brand__desc">
                        <?php echo esc_html( get_bloginfo('description') ?: __( 'A world-class underwater inspection, maintenance, and steel fabrication specialist serving the marine, shipping, and offshore industries.', 'aquacore' ) ); ?>
                    </p>
                    <div class="footer-brand__social">
                        <?php if ( $li = aquacore_option('linkedin') ) : ?>
                        <a href="<?php echo esc_url($li); ?>" class="footer-social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <?php endif; ?>
                        <?php if ( $yt = aquacore_option('youtube') ) : ?>
                        <a href="<?php echo esc_url($yt); ?>" class="footer-social-link" target="_blank" rel="noopener" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <?php endif; ?>
                        <a href="#" class="footer-social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                
                <div class="footer-col">
                    <?php if ( is_active_sidebar('footer-1') ) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <h4 class="footer-col__title"><?php esc_html_e( 'Quick Links', 'aquacore' ); ?></h4>
                        <?php
                        wp_nav_menu( [
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'footer-nav',
                            'depth'          => 1,
                            'fallback_cb'    => function() {
                                $links = [
                                    __('Home',       'aquacore') => '/',
                                    __('About Us',   'aquacore') => '/about-us',
                                    __('Services',   'aquacore') => '/services',
                                    __('Projects',   'aquacore') => '/projects',
                                    __('News',       'aquacore') => '/news',
                                    __('Contact Us', 'aquacore') => '/contact',
                                ];
                                echo '<ul class="footer-nav">';
                                foreach ( $links as $label => $path ) {
                                    echo '<li><a href="' . esc_url(home_url($path)) . '" class="footer-nav__link">' . esc_html($label) . '</a></li>';
                                }
                                echo '</ul>';
                            },
                            'items_wrap' => '<ul class="footer-nav">%3$s</ul>',
                        ] );
                        ?>
                    <?php endif; ?>
                </div>

                
                <div class="footer-col">
                    <?php if ( is_active_sidebar('footer-2') ) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <h4 class="footer-col__title"><?php esc_html_e( 'Our Services', 'aquacore' ); ?></h4>
                        <ul class="footer-nav">
                            <?php
                            $services = [
                                __( 'Hull Inspection & Cleaning',   'aquacore' ),
                                __( 'Underwater Welding',           'aquacore' ),
                                __( 'Propeller Repair & Polishing', 'aquacore' ),
                                __( 'Pipeline & Structure Repair',  'aquacore' ),
                                __( 'Cathodic Protection',          'aquacore' ),
                                __( 'CCTV Inspection',              'aquacore' ),
                            ];
                            foreach ( $services as $svc ) {
                                echo '<li><a href="' . esc_url( home_url('/services') ) . '" class="footer-nav__link">' . esc_html($svc) . '</a></li>';
                            }
                            ?>
                        </ul>
                    <?php endif; ?>
                </div>

                
                <div class="footer-col">
                    <?php if ( is_active_sidebar('footer-3') ) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php else : ?>
                        <h4 class="footer-col__title"><?php esc_html_e( 'Contact Us', 'aquacore' ); ?></h4>
                        <ul class="footer-contact">
                            <?php if ( $phone = aquacore_option('phone') ) : ?>
                            <li class="footer-contact__item">
                                <i class="fa fa-phone"></i>
                                <a href="tel:<?php echo esc_attr( preg_replace('/\D/','', $phone) ); ?>"><?php echo esc_html($phone); ?></a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $email = aquacore_option('email') ) : ?>
                            <li class="footer-contact__item">
                                <i class="fa fa-envelope"></i>
                                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                            </li>
                            <?php endif; ?>

                            <?php if ( $addr = aquacore_option('address') ) : ?>
                            <li class="footer-contact__item">
                                <i class="fa fa-map-marker-alt"></i>
                                <span><?php echo esc_html($addr); ?></span>
                            </li>
                            <?php endif; ?>

                            <li class="footer-contact__item">
                                <i class="fa fa-clock"></i>
                                <span><?php esc_html_e( 'Mon – Fri: 8:00 AM – 6:00 PM', 'aquacore' ); ?></span>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    
    <div class="footer-certs">
        <div class="container">
            <p class="footer-certs__label"><?php esc_html_e( 'Certified & Compliant', 'aquacore' ); ?></p>
            <div class="footer-certs__badges">
                <span class="footer-cert-badge">ISO 9001:2015</span>
                <span class="footer-cert-badge">IMCA Certified</span>
                <span class="footer-cert-badge">OGP/OGUK</span>
                <span class="footer-cert-badge">IRATA Certified</span>
                <span class="footer-cert-badge">CSWIP 3.2U</span>
            </div>
        </div>
    </div>

    
    <hr class="footer-divider">
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <p class="footer-bottom__copy">
                    &copy; <?php echo esc_html( date('Y') ); ?>
                    <a href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo('name'); ?></a>.
                    <?php esc_html_e( 'All rights reserved.', 'aquacore' ); ?>
                    &mdash; <?php esc_html_e( 'Built with', 'aquacore' ); ?> <i class="fa fa-heart" style="color:var(--clr-accent);"></i> <?php esc_html_e( 'for underwater excellence.', 'aquacore' ); ?>
                </p>
                <ul class="footer-bottom__links">
                    <li><a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>"><?php esc_html_e( 'Privacy Policy', 'aquacore' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url('/terms') ); ?>"><?php esc_html_e( 'Terms of Use', 'aquacore' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url('/sitemap.xml') ); ?>"><?php esc_html_e( 'Sitemap', 'aquacore' ); ?></a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>

<?php endif;  ?>

<?php if ( get_page_template_slug() !== 'elementor_canvas' ) : ?>
<button id="scroll-top" class="scroll-top" aria-label="<?php esc_attr_e( 'Scroll to top', 'aquacore' ); ?>">
    <i class="fa fa-arrow-up"></i>
</button>
<script>
(function(){
    var btn = document.getElementById('scroll-top');
    if (!btn) return;
    window.addEventListener('scroll', function(){
        btn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    btn.addEventListener('click', function(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();
</script>
<?php endif; ?>
</body>
</html>
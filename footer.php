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
<?php wp_footer(); ?>
</body>
</html>
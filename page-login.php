<?php
/**
 * Template Name: Custom Login
 */

if ( is_user_logged_in() ) {
    wp_redirect( home_url( '/add-post/' ) );
    exit;
}

get_header();
?>

<style>
/* ── Custom Login Page — AquaCore Design System ──────────────────── */

.site-content {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: calc(100vh - var(--header-h, 80px) - 120px);
    padding: var(--space-10, 2.5rem) var(--space-4, 1rem);
}

/* ── Login card ───────────────────────────────────────────────────── */
.login-card {
    width: 100%;
    max-width: 440px;
    background: var(--clr-bg-card, #122035);
    border: 1px solid var(--clr-border, rgba(255,255,255,.08));
    border-radius: var(--radius-lg, 16px);
    box-shadow: var(--shadow-card, 0 4px 24px rgba(0,0,0,.4));
    padding: 48px 40px 44px;
    animation: loginFadeUp .45s cubic-bezier(.16,1,.3,1) both;
}

@keyframes loginFadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ── Brand lockup ─────────────────────────────────────────────────── */
.login-card__brand {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    margin-bottom: 32px;
    text-align: center;
}

.login-card__icon {
    width: 52px;
    height: 52px;
    border-radius: var(--radius-md, 8px);
    background: var(--clr-accent-glow, rgba(240,168,0,.15));
    border: 1px solid rgba(240,168,0,.3);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--clr-accent, #f0a800);
    font-size: 1.4rem;
}

.login-card__title {
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: 1.75rem;
    font-weight: 800;
    letter-spacing: .04em;
    text-transform: uppercase;
    color: var(--clr-white, #fff);
    margin: 0;
    line-height: 1.15;
}

.login-card__subtitle {
    font-size: .875rem;
    color: var(--clr-muted, #7a92b0);
    margin: 0;
    line-height: 1.5;
}

/* ── Accent divider ─────────────────────────────────────────────── */
.login-card__divider {
    width: 48px;
    height: 3px;
    background: var(--clr-accent, #f0a800);
    border-radius: 2px;
    margin: 0 auto 32px;
}

/* ── WP login form overrides ─────────────────────────────────────── */
#custom_login_form p {
    margin-bottom: 20px;
}

#custom_login_form .login-username,
#custom_login_form .login-password {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 20px;
}

/* Labels */
#custom_login_form label {
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: .82rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--clr-muted, #7a92b0);
}

/* Inputs */
#custom_login_form input[type="text"],
#custom_login_form input[type="password"] {
    width: 100%;
    padding: 12px 16px;
    background: var(--clr-bg-section, #0d1e35);
    border: 1px solid var(--clr-border, rgba(255,255,255,.08));
    border-radius: var(--radius-md, 8px);
    color: var(--clr-white, #fff);
    font-family: var(--font-body, 'Nunito Sans', sans-serif);
    font-size: .95rem;
    outline: none;
    transition: border-color .3s ease, box-shadow .3s ease;
}

#custom_login_form input[type="text"]::placeholder,
#custom_login_form input[type="password"]::placeholder {
    color: var(--clr-muted, #7a92b0);
    opacity: .6;
}

#custom_login_form input[type="text"]:focus,
#custom_login_form input[type="password"]:focus {
    border-color: var(--clr-accent, #f0a800);
    box-shadow: 0 0 0 3px var(--clr-accent-glow, rgba(240,168,0,.15));
}

/* Remember me row */
#custom_login_form .login-remember {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 24px;
}

#custom_login_form .login-remember label {
    font-size: .85rem;
    font-family: var(--font-body, 'Nunito Sans', sans-serif);
    text-transform: none;
    letter-spacing: 0;
    font-weight: 500;
    color: var(--clr-muted, #7a92b0);
    cursor: pointer;
}

/* Custom checkbox */
#custom_login_form input[type="checkbox"] {
    appearance: none;
    -webkit-appearance: none;
    width: 18px;
    height: 18px;
    border: 1.5px solid rgba(255,255,255,.2);
    border-radius: var(--radius-sm, 4px);
    background: var(--clr-bg-section, #0d1e35);
    cursor: pointer;
    position: relative;
    flex-shrink: 0;
    transition: border-color .3s ease, background .3s ease;
}

#custom_login_form input[type="checkbox"]:checked {
    background: var(--clr-accent, #f0a800);
    border-color: var(--clr-accent, #f0a800);
}

#custom_login_form input[type="checkbox"]:checked::after {
    content: '';
    position: absolute;
    left: 4px;
    top: 1px;
    width: 6px;
    height: 10px;
    border: 2px solid #0a1628;
    border-top: none;
    border-left: none;
    transform: rotate(45deg);
}

/* Submit button */
#custom_login_form .login-submit {
    margin-bottom: 0;
}

#custom_login_form input[type="submit"] {
    display: block;
    width: 100%;
    padding: 14px 28px;
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    background: var(--clr-accent, #f0a800);
    color: var(--clr-bg, #0a1628);
    border: 2px solid var(--clr-accent, #f0a800);
    border-radius: var(--radius-sm, 4px);
    cursor: pointer;
    transition: all .3s ease;
}

#custom_login_form input[type="submit"]:hover,
#custom_login_form input[type="submit"]:focus-visible {
    background: var(--clr-accent-dark, #c98900);
    border-color: var(--clr-accent-dark, #c98900);
    box-shadow: var(--shadow-glow, 0 0 32px rgba(240,168,0,.2));
    transform: translateY(-2px);
}

#custom_login_form input[type="submit"]:active {
    transform: translateY(0);
    box-shadow: none;
}

/* ── Forgot password link ─────────────────────────────────────────── */
.login-card__footer {
    margin-top: 22px;
    text-align: center;
    font-size: .82rem;
    color: var(--clr-muted, #7a92b0);
}

.login-card__footer a {
    color: var(--clr-accent, #f0a800);
    text-decoration: none;
    font-weight: 600;
    transition: color .3s ease;
}

.login-card__footer a:hover {
    color: var(--clr-accent-dark, #c98900);
    text-decoration: underline;
}

/* ── WP error / login messages ───────────────────────────────────── */
.login-card .login-error,
.login-card #login_error {
    background: rgba(161,44,123,.12);
    border: 1px solid rgba(161,44,123,.4);
    border-radius: var(--radius-md, 8px);
    color: #e07ec5;
    padding: 12px 16px;
    font-size: .875rem;
    margin-bottom: 20px;
    line-height: 1.5;
}

/* ── Responsive ───────────────────────────────────────────────────── */
@media (max-width: 480px) {
    .site-content {
        align-items: flex-start;
        padding-top: var(--space-8, 2rem);
    }
    .login-card {
        padding: 36px 24px 32px;
        border-radius: var(--radius-md, 8px);
    }
}
</style>

<div class="login-card">

    <!-- Brand lockup -->
    <div class="login-card__brand">
        <div class="login-card__icon" aria-hidden="true">
            <i class="fa fa-shield-alt"></i>
        </div>
        <h1 class="login-card__title"><?php esc_html_e( 'Staff Login', 'aquacore' ); ?></h1>
        <p class="login-card__subtitle"><?php esc_html_e( 'Sign in to access the staff portal', 'aquacore' ); ?></p>
    </div>

    <div class="login-card__divider" aria-hidden="true"></div>

    <?php if ( isset( $_GET['login'] ) && $_GET['login'] === 'failed' ) : ?>
        <div class="login-error" role="alert">
            <?php esc_html_e( 'Incorrect username or password. Please try again.', 'aquacore' ); ?>
        </div>
    <?php endif; ?>

    <?php
    $login_args = array(
        'redirect'       => home_url( '/add-post/' ),
        'form_id'        => 'custom_login_form',
        'label_username' => __( 'Username / Email', 'aquacore' ),
        'label_password' => __( 'Password', 'aquacore' ),
        'label_remember' => __( 'Remember Me', 'aquacore' ),
        'label_log_in'   => __( 'Masuk', 'aquacore' ),
        'value_remember' => false,
    );
    wp_login_form( $login_args );
    ?>

    <p class="login-card__footer">
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
            <?php esc_html_e( 'Forgot your password?', 'aquacore' ); ?>
        </a>
    </p>

</div><!-- /.login-card -->

<?php
get_footer();
?>
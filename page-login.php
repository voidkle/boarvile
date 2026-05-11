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
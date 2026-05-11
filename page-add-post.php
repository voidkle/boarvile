<?php
/**
 * Template Name: Frontend Add Post
 */

// Proteksi: Jika guest/belum login, tendang ke halaman login
if ( ! is_user_logged_in() ) {
    wp_redirect( home_url( '/login/' ) );
    exit;
}

get_header();
?>

<div class="fe-post-wrapper">

    <!-- Page heading -->
    <div class="fe-post-header">
        <h1 class="fe-post-header__title">
            <?php esc_html_e( 'Tambah', 'aquacore' ); ?>
            <span><?php esc_html_e( 'Post Baru', 'aquacore' ); ?></span>
        </h1>
        <p class="fe-post-header__sub">
            <?php esc_html_e( 'Terbitkan berita, portfolio, layanan, atau event langsung dari halaman ini.', 'aquacore' ); ?>
        </p>
    </div>

    <?php
    /* ── 1. Process form submission ───────────────────────────────── */
    if ( 'POST' === $_SERVER['REQUEST_METHOD']
        && isset( $_POST['fe_post_nonce'] )
        && wp_verify_nonce( $_POST['fe_post_nonce'], 'fe_post_action' )
    ) {
        $title     = sanitize_text_field( $_POST['post_title'] );
        $content   = wp_kses_post( $_POST['post_content'] );
        $post_type = sanitize_text_field( $_POST['post_type'] );

        $post_data = array(
            'post_title'   => $title,
            'post_content' => $content,
            'post_status'  => 'publish',
            'post_author'  => get_current_user_id(),
            'post_type'    => $post_type,
        );

        $post_id = wp_insert_post( $post_data );

        if ( ! is_wp_error( $post_id ) ) {
            printf(
                '<div class="fe-alert fe-alert--success" role="alert">
                    <i class="fa fa-check-circle"></i>
                    <span>%s <a href="%s">%s</a></span>
                </div>',
                esc_html__( 'Post berhasil diterbitkan!', 'aquacore' ),
                esc_url( get_permalink( $post_id ) ),
                esc_html__( 'Lihat Post →', 'aquacore' )
            );
        } else {
            printf(
                '<div class="fe-alert fe-alert--error" role="alert">
                    <i class="fa fa-exclamation-circle"></i>
                    <span>%s</span>
                </div>',
                esc_html__( 'Gagal menerbitkan post. Silakan coba lagi.', 'aquacore' )
            );
        }
    }
    ?>

    <!-- Form card -->
    <div class="fe-post-form-card">
        <form action="" method="POST" id="fe-add-post-form">
            <?php wp_nonce_field( 'fe_post_action', 'fe_post_nonce' ); ?>

            <!-- Kategori Post -->
            <div class="fe-form-group">
                <label for="post_type" class="fe-form-label">
                    <i class="fa fa-tag"></i>
                    <?php esc_html_e( 'Kategori Post', 'aquacore' ); ?>
                </label>
                <div class="fe-select-wrap">
                    <select name="post_type" id="post_type" class="fe-form-select">
                        <option value="post"><?php esc_html_e( 'News / Berita Utama', 'aquacore' ); ?></option>
                        <option value="post_portfolio"><?php esc_html_e( 'Portfolio Proyek', 'aquacore' ); ?></option>
                        <option value="post_service"><?php esc_html_e( 'Layanan (Service)', 'aquacore' ); ?></option>
                        <option value="post_event"><?php esc_html_e( 'Event', 'aquacore' ); ?></option>
                    </select>
                </div>
            </div>

            <!-- Judul -->
            <div class="fe-form-group">
                <label for="post_title" class="fe-form-label">
                    <i class="fa fa-heading"></i>
                    <?php esc_html_e( 'Judul', 'aquacore' ); ?>
                </label>
                <input
                    type="text"
                    name="post_title"
                    id="post_title"
                    class="fe-form-input"
                    placeholder="<?php esc_attr_e( 'Masukkan judul post...', 'aquacore' ); ?>"
                    required
                    autocomplete="off"
                >
            </div>

            <hr class="fe-form-divider">

            <!-- Isi Konten & Media -->
            <div class="fe-form-group">
                <label for="post_content" class="fe-form-label">
                    <i class="fa fa-align-left"></i>
                    <?php esc_html_e( 'Isi Konten & Media', 'aquacore' ); ?>
                </label>
                <div class="fe-editor-wrap">
                    <?php
                    wp_editor( '', 'post_content', array(
                        'textarea_rows' => 14,
                        'media_buttons' => true,
                        'quicktags'     => false,
                        'tinymce'       => array(
                            'toolbar1' => 'bold,italic,underline,separator,alignleft,aligncenter,alignright,separator,bullist,numlist,separator,link,unlink,separator,undo,redo',
                            'toolbar2' => '',
                        ),
                    ) );
                    ?>
                </div>
            </div>

            <!-- Actions -->
            <div class="fe-form-actions">
                <p class="fe-form-hint">
                    <i class="fa fa-info-circle"></i>
                    <?php esc_html_e( 'Post akan langsung tayang setelah diterbitkan.', 'aquacore' ); ?>
                </p>
                <button type="submit" class="fe-btn-submit">
                    <i class="fa fa-paper-plane"></i>
                    <?php esc_html_e( 'Terbitkan Sekarang', 'aquacore' ); ?>
                </button>
            </div>

        </form>
    </div><!-- /.fe-post-form-card -->

</div><!-- /.fe-post-wrapper -->

<?php get_footer(); ?>
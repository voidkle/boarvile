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

<style>
/* ── Frontend Add Post — AquaCore Design System ──────────────────── */

.site-content {
    padding: var(--space-10, 2.5rem) var(--space-4, 1rem);
}

/* ── Page wrapper ─────────────────────────────────────────────────── */
.fe-post-wrapper {
    width: 100%;
    max-width: 860px;
    margin-inline: auto;
}

/* ── Page heading ─────────────────────────────────────────────────── */
.fe-post-header {
    margin-bottom: 36px;
}

.fe-post-header__title {
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: clamp(1.75rem, 3vw, 2.5rem);
    font-weight: 800;
    letter-spacing: .04em;
    text-transform: uppercase;
    color: var(--clr-white, #fff);
    line-height: 1.1;
    margin-bottom: 8px;
}

.fe-post-header__title span {
    color: var(--clr-accent, #f0a800);
}

.fe-post-header__sub {
    font-size: .9rem;
    color: var(--clr-muted, #7a92b0);
}

.fe-post-header::after {
    content: '';
    display: block;
    width: 48px;
    height: 3px;
    background: var(--clr-accent, #f0a800);
    border-radius: 2px;
    margin-top: 16px;
}

/* ── Alert messages ───────────────────────────────────────────────── */
.fe-alert {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 14px 18px;
    border-radius: var(--radius-md, 8px);
    font-size: .9rem;
    margin-bottom: 28px;
    line-height: 1.5;
    animation: loginFadeUp .35s cubic-bezier(.16,1,.3,1) both;
}

.fe-alert i {
    flex-shrink: 0;
    font-size: 1rem;
    margin-top: 2px;
}

.fe-alert--success {
    background: rgba(67, 122, 34, .15);
    border: 1px solid rgba(67, 122, 34, .4);
    color: #8fd46a;
}

.fe-alert--error {
    background: rgba(161, 44, 123, .12);
    border: 1px solid rgba(161, 44, 123, .4);
    color: #e07ec5;
}

.fe-alert--success a,
.fe-alert--error a {
    color: var(--clr-accent, #f0a800);
    font-weight: 600;
    text-decoration: none;
    transition: color .3s ease;
}

.fe-alert--success a:hover,
.fe-alert--error a:hover {
    color: var(--clr-accent-dark, #c98900);
    text-decoration: underline;
}

/* ── Form card ────────────────────────────────────────────────────── */
.fe-post-form-card {
    background: var(--clr-bg-card, #122035);
    border: 1px solid var(--clr-border, rgba(255,255,255,.08));
    border-radius: var(--radius-lg, 16px);
    padding: 40px;
    box-shadow: var(--shadow-card, 0 4px 24px rgba(0,0,0,.4));
}

/* ── Form group ───────────────────────────────────────────────────── */
.fe-form-group {
    margin-bottom: 28px;
}

.fe-form-group:last-of-type {
    margin-bottom: 32px;
}

/* ── Labels ───────────────────────────────────────────────────────── */
.fe-form-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: .82rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--clr-muted, #7a92b0);
    margin-bottom: 8px;
}

.fe-form-label i {
    color: var(--clr-accent, #f0a800);
    font-size: .78rem;
}

/* ── Select & text input ──────────────────────────────────────────── */
.fe-form-select,
.fe-form-input {
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
    appearance: none;
    -webkit-appearance: none;
}

.fe-form-input::placeholder {
    color: var(--clr-muted, #7a92b0);
    opacity: .6;
}

.fe-form-select:focus,
.fe-form-input:focus {
    border-color: var(--clr-accent, #f0a800);
    box-shadow: 0 0 0 3px var(--clr-accent-glow, rgba(240,168,0,.15));
}

/* Select arrow */
.fe-select-wrap {
    position: relative;
}

.fe-select-wrap::after {
    content: '\f078';
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--clr-accent, #f0a800);
    font-size: .7rem;
    pointer-events: none;
}

.fe-form-select option {
    background: var(--clr-bg-card, #122035);
    color: var(--clr-white, #fff);
}

/* ── Editor area ──────────────────────────────────────────────────── */
.fe-editor-wrap {
    border: 1px solid var(--clr-border, rgba(255,255,255,.08));
    border-radius: var(--radius-md, 8px);
    overflow: hidden;
    transition: border-color .3s ease, box-shadow .3s ease;
}

.fe-editor-wrap:focus-within {
    border-color: var(--clr-accent, #f0a800);
    box-shadow: 0 0 0 3px var(--clr-accent-glow, rgba(240,168,0,.15));
}

/* Force TinyMCE/WP editor iframe & toolbar to blend in */
.fe-editor-wrap .wp-editor-container {
    border: none;
}

.fe-editor-wrap .mce-panel,
.fe-editor-wrap .mce-toolbar-grp,
.fe-editor-wrap .wp-editor-tabs {
    background: var(--clr-bg-section, #0d1e35) !important;
    border-color: var(--clr-border, rgba(255,255,255,.08)) !important;
}

.fe-editor-wrap .mce-btn button,
.fe-editor-wrap .mce-ico {
    color: var(--clr-text, #d4dff0) !important;
}

.fe-editor-wrap .wp-editor-tabs .wp-switch-editor {
    background: var(--clr-bg-section, #0d1e35);
    color: var(--clr-muted, #7a92b0);
    border-color: var(--clr-border, rgba(255,255,255,.08));
}

.fe-editor-wrap .wp-editor-tabs .wp-switch-editor.switch-tmce {
    color: var(--clr-accent, #f0a800);
}

/* ── Divider between form sections ───────────────────────────────── */
.fe-form-divider {
    border: none;
    border-top: 1px solid var(--clr-border, rgba(255,255,255,.08));
    margin: 32px 0;
}

/* ── Form actions row ─────────────────────────────────────────────── */
.fe-form-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
}

.fe-form-hint {
    font-size: .8rem;
    color: var(--clr-muted, #7a92b0);
    display: flex;
    align-items: center;
    gap: 6px;
}

.fe-form-hint i {
    color: var(--clr-accent, #f0a800);
    font-size: .75rem;
}

/* Submit button — reuses .btn--primary pattern */
.fe-btn-submit {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    font-family: var(--font-display, 'Barlow Condensed', sans-serif);
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    background: var(--clr-accent, #f0a800);
    color: var(--clr-bg, #0a1628);
    border: 2px solid var(--clr-accent, #f0a800);
    border-radius: var(--radius-sm, 4px);
    cursor: pointer;
    transition: all .3s ease;
    white-space: nowrap;
}

.fe-btn-submit:hover,
.fe-btn-submit:focus-visible {
    background: var(--clr-accent-dark, #c98900);
    border-color: var(--clr-accent-dark, #c98900);
    box-shadow: var(--shadow-glow, 0 0 32px rgba(240,168,0,.2));
    transform: translateY(-2px);
}

.fe-btn-submit:active {
    transform: translateY(0);
    box-shadow: none;
}

/* ── Responsive ───────────────────────────────────────────────────── */
@media (max-width: 640px) {
    .fe-post-form-card {
        padding: 28px 20px;
        border-radius: var(--radius-md, 8px);
    }

    .fe-form-actions {
        flex-direction: column-reverse;
        align-items: flex-start;
    }

    .fe-btn-submit {
        width: 100%;
        justify-content: center;
    }
}

@keyframes loginFadeUp {
    from { opacity: 0; transform: translateY(16px); }
    to   { opacity: 1; transform: translateY(0); }
}
</style>

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
<?php

function theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ]);
}
add_action('after_setup_theme', 'theme_setup');


function theme_enqueue_assets(): void {
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
        [],
        '10.0.0'
    );

    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/style.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
        [],
        '10.0.0',
        true
    );

    wp_enqueue_script(
        'theme-hero',
        get_template_directory_uri() . '/assets/js/hero.js',
        ['swiper-js'],
        '1.0.0',
        true
    );

    // DEV
    if ( defined('WP_DEBUG') && WP_DEBUG ) {
        wp_enqueue_script(
            'vite-client',
            'http://localhost:5173/@vite/client',
            [],
            null,
            false
        );
        wp_script_add_data('vite-client', 'type', 'module');

        wp_enqueue_script(
            'theme-app-dev',
            'http://localhost:5173/src/main.jsx',
            [],
            null,
            true
        );
        wp_script_add_data('theme-app-dev', 'type', 'module');

        return;
    }

    // PROD
    $manifest_path = get_theme_file_path('/dist/.vite/manifest.json');

    if ( ! file_exists( $manifest_path ) ) {
        return;
    }

    $manifest = json_decode( file_get_contents( $manifest_path ), true );
    $entry    = $manifest['src/main.jsx'] ?? null;

    if ( ! $entry || empty( $entry['file'] ) ) {
        return;
    }

    wp_enqueue_script(
        'theme-app',
        get_template_directory_uri() . '/dist/' . $entry['file'],
        [],
        null,
        true
    );
    wp_script_add_data('theme-app', 'type', 'module');

    if ( ! empty( $entry['css'] ) && is_array( $entry['css'] ) ) {
        foreach ( $entry['css'] as $i => $css ) {
            wp_enqueue_style(
                'theme-app-style-' . $i,
                get_template_directory_uri() . '/dist/' . $css,
                [],
                null
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    $module_handles = ['vite-client', 'theme-app-dev', 'theme-app'];

    if ( in_array($handle, $module_handles, true) ) {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}, 10, 3);
function theme_inject_wp_data(): void {
    $logo_url       = '';
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
        $logo_url  = $logo_data ? $logo_data[0] : '';
    }

    $data = [
        'site_url'   => get_site_url(),
        'site_name'  => get_bloginfo('name'),
        'tagline'    => get_bloginfo('description'),
        'ajax_url'   => admin_url('admin-ajax.php'),
        'theme_url'  => get_template_directory_uri(),
        'logo_url'   => $logo_url,
        'menu_items' => theme_get_menu_items('primary'),
    ];

    echo '<script>window.__WP__ = ' . wp_json_encode($data) . ';</script>' . "\n";
}
add_action('wp_head', 'theme_inject_wp_data');


function theme_get_menu_items(string $location): array {
    $locations = get_nav_menu_locations();

    if (empty($locations[$location])) return [];

    $menu  = wp_get_nav_menu_object($locations[$location]);
    $items = wp_get_nav_menu_items($menu->term_id);

    if (!$items) return [];

    // Build flat list first
    $flat = [];
    foreach ($items as $item) {
        $flat[$item->ID] = [
            'id'       => $item->ID,
            'title' => html_entity_decode($item->title, ENT_QUOTES, 'UTF-8'),
            'url'   => html_entity_decode($item->url, ENT_QUOTES, 'UTF-8'),
            'parent'   => (int) $item->menu_item_parent,
            'children' => [],
        ];
    }

    // Nest children into their parents recursively
    $tree = [];
    foreach ($flat as $id => &$item) {
        if ($item['parent'] && isset($flat[$item['parent']])) {
            $flat[$item['parent']]['children'][] = &$item;
        } else {
            $tree[] = &$item;
        }
    }

    return $tree;
}
add_action('wp_head', function () {
    if (defined('WP_DEBUG') && WP_DEBUG) {
        echo '<script type="module">
            import RefreshRuntime from "http://localhost:5173/@react-refresh"
            RefreshRuntime.injectIntoGlobalHook(window)
            window.$RefreshReg$ = () => {}
            window.$RefreshSig$ = () => (type) => type
            window.__vite_plugin_react_preamble_installed__ = true
        </script>' . "\n";
        echo '<script type="module" src="http://localhost:5173/@vite/client"></script>' . "\n";
        echo '<script type="module" src="http://localhost:5173/src/main.jsx"></script>' . "\n";
    }
});
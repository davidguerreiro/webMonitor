<?php

/**
 * Load theme styles.
 * 
 * @return void
 */
function webj_load_theme_styles()
{
    // load theme main style.css.
    wp_enqueue_style( '_theme-css', get_stylesheet_directory_uri() . '/style.css', [], false, 'all' );
}

add_action( 'wp_enqueue_scripts', 'webj_load_theme_styles' );

/**
 * Register site options
 * page.
 *
 * @return void
 */
function webj_register_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title'    => __('Página de opciones', 'txt_domain'),
            'menu_title'    => __('Página de opciones', 'txt_domain'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ]);
    }
}

add_action('init', 'webj_register_acf_options_page');

/**
 * Disable block editor for pages.
 * 
 * @param bool $curren_status
 * @param string $post_type
 * @return bool
 */
function webj_disable_block_editor_for_pages($current_status, $post_type)
{
    if ($current_status == 'page') {
        return false;
    }

    return $current_status;
}

add_filter('use_block_editor_for_post_type', 'webj_disable_block_editor_for_pages', 2, 10);

/**
 * Parse instagram url to get user name.
 *
 * @param string $url
 * @return string
 */
function webj_get_insta_user_name_from_url($url)
{
    $result = '';
    $path   = parse_url($url, PHP_URL_PATH);

    if (preg_match('/\/([a-zA-Z0-9_]+)\/?$/', $path, $matches)) {
        if (isset($matches[1])) {
            $result = $matches[1];
        }
    }

    return $result;
}
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
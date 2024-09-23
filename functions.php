<?php

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Theme Support
function theme_setup()
{
    add_theme_support('wp-block-styles');
    add_editor_style('style-editor.css');
    add_editor_style('style.css');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


// Enqueue Style
function theme_styles()
{
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Enqueue Scripts
function theme_scripts()
{
    wp_register_script(
        'menu_script',
        get_template_directory_uri() . '/assets/js/menu.js',
        array(),
        false,
        false, // in footer
    );
    wp_enqueue_script('menu_script');
}
add_action('wp_enqueue_scripts', 'theme_scripts');

// Small Thumbnails
function custom_sizes()
{
    add_image_size('blogthumb', 400, 0, false);
}
add_action('after_setup_theme', 'custom_sizes');

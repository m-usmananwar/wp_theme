<?php

function xvrThemeSupports()
{
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    register_nav_menus([
        'primary' => __('Primary Menu', 'XavorBlog'),
    ]);
    $args = [
        'default-image' => get_template_directory_uri() . '/assets/images/default-header.jpg',
    ];
    add_theme_support('custom-header', $args);
}
add_action('after_setup_theme', 'xvrThemeSupports');

//Function to add styles and scripts in our theme
function xvrStylesAndScripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'xvrStylesAndScripts');

function xvrWidgetsInit()
{
    register_sidebar([
        'name' => __('Primary Sidebar', 'primary'),
        'id' => 'sidebar1'
    ]);
    register_sidebar([
        'name' => __('Secondary Sidebar', 'primary'),
        'id' => 'sidebar2'
    ]);
    register_sidebar([
        'name' => __('Main Sidebar', 'primary'),
        'id' => 'sidebar3'
    ]);
}
add_action('widgets_init', 'xvrWidgetsInit');

function xvrExcerptLength($length)
{
    return 10;
}
add_filter('excerpt_length', 'xvrExcerptLength');

//Including the Custom Post Type
require get_template_directory() . '/Inc/services.php';

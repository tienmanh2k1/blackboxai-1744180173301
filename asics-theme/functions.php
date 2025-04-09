<?php
/**
 * ASICS Vietnam Theme functions and definitions
 */

function asics_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'asics'),
        'footer' => __('Footer Menu', 'asics')
    ));
}
add_action('after_setup_theme', 'asics_theme_setup');

// Enqueue styles and scripts
function asics_theme_scripts() {
    // Theme stylesheet
    wp_enqueue_style('asics-style', get_stylesheet_uri());
    
    // Tailwind CSS
    wp_enqueue_style('tailwind', 'https://cdn.tailwindcss.com');
    
    // Google Fonts
    wp_enqueue_style('asics-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
    
    // Custom JS
    wp_enqueue_script('asics-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'asics_theme_scripts');

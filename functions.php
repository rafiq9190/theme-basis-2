<?php

function html2wp_scripts() {
    
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js', array(), null, true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), null, true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'html2wp_scripts');

function html2wp_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_image_size('featured-image', 800, 600, array('center', 'center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'html2wp'),
    ));


}
add_action('after_setup_theme', 'html2wp_setup');
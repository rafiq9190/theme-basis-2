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
    add_image_size('signle-post', 580, 372, array('center', 'center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'html2wp'),
    ));


}
add_action('after_setup_theme', 'html2wp_setup');

function html2wp_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'html2wp'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'html2wp'),
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<header><h2 class="widget-title">',
        'after_title' => '</h2></header>',
    ));

        register_sidebar(array(
            'name' => __('Footer', 'html2wp'),
            'id' => 'footer-1',
            'description' => __('Add widgets here to appear in your footer.', 'html2wp'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title text-white">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('homeBanner', 'html2wp'),
            'id' => 'home-banner',
            'description' => __('Add widgets here to appear in your home banner.', 'html2wp'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title text-white">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('homeServices', 'html2wp'),
            'id' => 'home-services',
            'description' => __('Add widgets here to appear in your home services section.', 'html2wp'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title text-white">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('Footer', 'html2wp'),
            'id' => 'footer-2',
            'description' => __('Add widgets here to appear in your footer.', 'html2wp'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));
        register_sidebar(array(
            'name' => __('Footer', 'html2wp'),
            'id' => 'footer-3',
            'description' => __('Add widgets here to appear in your footer.', 'html2wp'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ));

}
add_action('widgets_init', 'html2wp_widgets_init');

//custom post type for projects
require get_template_directory() . '/inc/projects.php';

// kirki emmbeded
require get_template_directory() . '/inc/plugins/kirki/kirki.php';
require get_template_directory() . '/inc/kirki.config.php';
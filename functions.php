<?php


add_action('wp_enqueue_scripts', 'edu_theme_files');

function edu_theme_files() {

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], null);
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', [], null);
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css', [], null);
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', [], null);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.css', [], null);
    wp_enqueue_style('nice-number', get_template_directory_uri() . '/css/jquery.nice-number.min.css', [], null);
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', [], null);

    // custom css always last
    wp_enqueue_style('default', get_template_directory_uri() . '/css/default.css', [], null);
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', [], null);
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', [], null);
}


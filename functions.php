<?php


      // Enqueue Script & Styles

function lessonlms_theme_scripts(){

      // Add CSS
      wp_enqueue_style( 'style-css', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'responsive-css', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all' );
      wp_enqueue_style( 'slick-carousel', get_template_directory_uri().'/https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0', 'all' );
      wp_enqueue_style( 'lesson-theme-style', get_stylesheet_uri() );

      // Add JS
      wp_enqueue_script('jquery');
      wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', true );
      wp_enqueue_script('script', get_template_directory_uri().'/https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.9.0', true );

}

add_action('wp_enqueue_scripts','lessonlms_theme_scripts');
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


function lesson_theme_setup(){

      // Adding Support for Automatic Title-tag
      add_theme_support('title-tag');

      // Load Theme Text Domain
      load_theme_textdomain( 'mentor', get_template_directory() . '/languages' );

      //Generate automatic feed links on head
      add_theme_support('automatic-feed-links');

      //Enable Support for Post Thumbnails
      add_theme_support('post-thumbnails');

      // Menu Register
      register_nav_menu(array(
            'menu-1'    => esc_html__( 'Primary', 'mentor' ),
      ));
      
       add_theme_support(
        'html5',
        array(
          'search-form',
          'comment-form',
          'comment-list',
          'gallery',
          'caption',
        )
      );

}
add_action('after_setup_theme', 'lesson_theme_setup');
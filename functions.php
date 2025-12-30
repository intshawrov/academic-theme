<?php

// Enqueue/Link scripts and style
function lessonlms_theme_scripts()
{
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100..900&family=Poppins:wght@400;700&family=Sen:wght@400..800&display=swap', null);

    // Theme Style CSS
    wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/style.css');

    // Responsive CSS
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css');

    // Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0');

    // Boxicons
    wp_enqueue_style('boxicon-css', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.1.4');

    // Default Theme Stylesheet (style.css)
    wp_enqueue_style('lesson-theme-style', get_stylesheet_uri());

    // jQuery (included in WordPress)
    wp_enqueue_script('jquery');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

    // Main Theme JS
    wp_enqueue_script('main-js', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'lessonlms_theme_scripts');

function lessonlms_theme_registration()
{
    add_theme_support('custom-logo', array(
        'height' => 30,
        'weight' => 80
    ));
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'lessonlms'),
        'mobile_menu' => __('Mobile Menu', 'lessonlms'),
        'footer_menu_1' => __('Footer Menu 1', 'lessonlms'),
        'footer_menu_2' => __('Footer Menu 2', 'lessonlms'),
    ));
}
add_action('after_setup_theme', 'lessonlms_theme_registration');



function lessonlms_customaiz_register($wp_customize){

     // Blog Section Start Here
    $wp_customize->add_section('blog_settings', array(
        'title' => __('Blog Settings', 'lessonlms'),
        'priority' => 110,
    ));
    // Blog Heading Setting

    $wp_customize->add_setting('blog_heading', array(
        'default' => 'Our Blog',
    ));
    $wp_customize->add_control('blog_heading_control', array(
        'label' => __('Blog Section Title', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_heading',
        'type' => 'text',
    ) );

    // Blog Section Description

     $wp_customize->add_setting('blog_section_description', array(
        'default' => 'Build new skills with new trendy courses and shine for the next future career.',
    ));
    $wp_customize->add_control('blog_section_description_control', array(
        'label' => __('Blog Section Description', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_section_description',
        'type' => 'textarea',
    ) );

    //    $wp_customize->add_setting('blog_section_description', array(
    //     'default' => 'Build new skills with new trendy courses and shine for the next future career.',
    // ));
    // $wp_customize->add_control('blog_section_description_control', array(
    //     'label' => __('Blog Section Description', 'lessonlms'),
    //     'section' => 'blog_settings',
    //     'settings' => 'blog_section_description',
    //     'type' => 'textarea',
    // ) );

    // Blog section H Title
    $wp_customize->add_setting('blog_section_title', array(
        'default' => '',
    ));
    $wp_customize->add_control('blog_section_title_control', array(
        'label' => __('Blog Section A Title', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_section_title',
        'type' => 'text',
    ) );

    $wp_customize->add_setting('blog_section_title_b', array(
        'default' => '',
    ));
    $wp_customize->add_control('blog_section_title_b_control', array(
        'label' => __('Blog Section B Title', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_section_title_b',
        'type' => 'text',
    ) );

    $wp_customize->add_setting('blog_section_title_c', array(
        'default' => '',
    ));
    $wp_customize->add_control('blog_section_title_c_control', array(
        'label' => __('Blog Section C Title', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_section_title_c',
        'type' => 'text',
    ) );

     // Blog Section Image

    $wp_customize->add_setting('blog_right_image', array(
        'default' => '',
    )); 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_right_image_control', array(
        'label' => __('Blog Left Image', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_right_image',
    )));

    $wp_customize->add_setting('blog_middle_image', array(
        'default' => '',
    )); 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_middle_image_control', array(
        'label' => __('Blog Middle Image', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_middle_image',
    )));

    $wp_customize->add_setting('blog_left_image', array(
        'default' => '',
    )); 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_left_image_control', array(
        'label' => __('Blog Right Image', 'lessonlms'),
        'section' => 'blog_settings',
        'settings' => 'blog_left_image',
    )));


    

    // Footer Section Start Here
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'lessonlms'),
        'priority' => 120,
    ));

    $socials = ['facebook',  'instagram', 'linkedin', ];

    foreach ($socials as $social) {
        $wp_customize->add_setting('footer_' . $social, array(
            'default' => '',
        ));
        $wp_customize->add_control('footer_' . $social . '_control', array(
            'label' => __('Footer ' . $social, 'lessonlms'),
            'section' => 'footer_settings',
            'settings' => 'footer_' . $social,
            'type' => 'text',
        ) );
    }

    // About Text Setting
    $wp_customize->add_setting('footer_about_text', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_about_text_control', array(
        'label' => __('Footer About Text', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_about_text',
        'type' => 'textarea',
    ) );


        // About Menu 1
    $wp_customize->add_setting('footer_menu1', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_menu1_control', array(
        'label' => __('Footer Menu 1', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_menu1',
        'type' => 'text',
    ) );

        // About Menu 2
    $wp_customize->add_setting('footer_menu2', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_menu2_control', array(
        'label' => __('Footer Menu 2', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_menu2',
        'type' => 'text',
    ) );

        // About Menu 3
    $wp_customize->add_setting('footer_menu3', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_menu3_control', array(
        'label' => __('Footer Menu 3', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_menu3',
        'type' => 'text',
    ) );

        // Footer Location Description
    $wp_customize->add_setting('footer_location_description', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_location_description_control', array(
        'label' => __('Footer Location Description', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_location_description',
        'type' => 'text',
    ) );


         // Footer Email Description
    $wp_customize->add_setting('footer_email_description', array(
        'default' => '',
    ));
    $wp_customize->add_control('footer_email_description_control', array(
        'label' => __('Footer Email Description', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_email_description',
        'type' => 'text',
    ) );

         // Phone Number
    $wp_customize->add_setting('phone_number', array(
        'default' => '',
    ));
    $wp_customize->add_control('phone_number_control', array(
        'label' => __('Phone Number ', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'phone_number',
        'type' => 'text',
    ) );

    // Footer Image

    $wp_customize->add_setting('footer_image', array(
        'default' => '',
    )); 
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image_control', array(
        'label' => __('Footer Image', 'lessonlms'),
        'section' => 'footer_settings',
        'settings' => 'footer_image',
    )));

}

add_action('customize_register', 'lessonlms_customaiz_register');


function lessonlms_theme_widgets(){
    register_sidebar( array(
        'name'          => __( 'Sidebar Widget Area', 'lessonlms' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'lessonlms' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_post_type('lesson', array(
        'labels' => array(
            'name' => __('Lessons'),
            'singular_name' => __('Lesson')
        ),
        'public' => true,
        'has_archive' => true
    ));

    register_post_type('course', array(
        'labels' => array(
            'name' => __('Courses'),
            'singular_name' => __('Course')
        ),
        'public' => true,
        'has_archive' => true
    ));
}

add_action('widgets_init', 'lessonlms_theme_widgets');


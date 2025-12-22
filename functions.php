<?php




// Register Menus
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}     
add_action('init', 'register_my_menus');
// Add Bootstrap Classes to Menu Items
function add_bootstrap_classes($classes, $item, $args) {
    if ($args->theme_location == 'header-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_bootstrap_classes', 10, 3);
function add_bootstrap_link_classes($atts, $item, $args) {  
    if ($args->theme_location == 'header-menu') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_bootstrap_link_classes', 10, 3);
// Enable Featured Images
add_theme_support('post-thumbnails');                 
// Set Excerpt Length
function custom_excerpt_length($length) {
    return 20; // Set excerpt length to 20 words
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);
// Customize "Read More" Link
function custom_read_more_link($more) {
    return '... <a class="read-more" href="' . get_permalink() . '">Read More</a>';
}
add_filter('excerpt_more', 'custom_read_more_link');
// Register Widget Areas
function my_theme_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar Widget Area',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

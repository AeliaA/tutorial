<?php
// Adding extra css 
function theme_styles() {
    // Adding a bootstrap css

    // First way
    // wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
    // Second way
        wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );

    // Adding a google font
    wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Raleway:400,800,200%7cOpen+Sans' );
    // Adding a main css
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
// Makes the above work
add_action( 'wp_enqueue_scripts', 'theme_styles' );
// Adding extra js 
function theme_js() {
    global $wp_scripts;
// Adding bootstrap.js & main.js
    // wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), '', true );
    // wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap_js'), '', true );
}
// Makes the above work
add_action( 'wp_enqueue_scripts', 'theme_js' );
//Removes the user login bar at the top 
add_filter( 'show_admin_bar', '__return_false' );


// Register menu
register_nav_menus(
	array(
	'main-menu' => 'Main Menu'
	)
);


// Register aside sidebar
$aside_sidebar = array(
    'name'          => 'Aside',
    'id'            => 'aside',
    'description'   => 'Widgets placed here will go on the right hand side bar',
    'class'         => '',
    'before_widget' => '<div class="mywidget">',
    'after_widget'  => "</div>\n",
    'before_title'  => '<h3 class="mywidget">',
    'after_title'   => "</h3 >\n",
);
register_sidebar( $aside_sidebar );

// Register Thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 180, 180, true );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
    return '<a class="moretag" title="'. get_the_title($post->ID) . '" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>
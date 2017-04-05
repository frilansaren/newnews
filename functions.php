<?php 

require "bootstrap4-nav-walker.php";

add_filter( "show_admin_bar", "__return_false");

/*
Theme Setup
*/
function newnewsThemeSetup() {
    // Visa bara adminbar om den inloggade användaren får lov att redigera sidor
    if( current_user_can('edit_posts') ) {
        show_admin_bar(true);
} else {
    show_admin_bar(false);
}

function newnews_theme_setup() {
	/* Menu registration, låter dig lägga till och ta bort menu från adminmenu */
	register_nav_menu('headmenu', __('Primary Header Menu', 'newnews'));
}
add_action( 'after_setup_theme', 'newnews_theme_setup' );


    // Register our menus
register_nav_menus(
array(
    'header-menu' => __( 'Navbar menu' )
    )
);

    // adding custom image size to our theme
add_image_size( 'post-feature-image', 700, 9999 );

    // Lägg till stöd för featured images and post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, false );

    //

add_theme_support('post-formats', array('quote', 'image'));

}
add_action('after_setup_theme', 'newnewsThemeSetup');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function newnews_widgets_init() {

    // Footer sidebar
    register_sidebar( array(
        'name'          => 'Footer Area',
        'id'            => 'footer_area',
        'before_widget' => '<li class="list-inline-item float-right">',
        'after_widget'  => '</li>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
        ) );

    // Right sidebar on the page
register_sidebar( array(
    'name'          =>  'Sidebar',
    'id'            =>  'sidebar',
    'before_widget' =>  '<div>',
    'after_wdiget'  =>  '</div>',
    'before_title'  =>  '<h2>',
    'after_title'   =>  '</h2>'
    ) );

}
add_action( 'widgets_init', 'newnews_widgets_init' );

// bestämmer hur många ord som ska visas vid homepage
function wpdocs_custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Laddar in script och style
function add_theme_scripts() {
	wp_enqueue_style( 'newnews-bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' , array(), '4.0.0-alpha.6' );
	
	wp_enqueue_style( 'newnews-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' , array(), '4.7.0' );

	wp_enqueue_style( 'newnews-offcanvas', get_template_directory_uri() . '/assets/css/offcanvas.css', array('newnews-bootstrap4'));

	wp_enqueue_style( 'newnews-style', get_template_directory_uri() . '/style.css', array('newnews-bootstrap4', 'newnews-offcanvas'), '1.0.0');
	wp_enqueue_style( 'newnews-site', get_template_directory_uri() . '/assets/css/site.css', array('newnews-bootstrap4', 'newnews-style'), '1.0.0');

	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);

	wp_enqueue_script( 'newnews-tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true);

	wp_enqueue_script( 'newnews-searchbutton', get_template_directory_uri() . '/assets/js/search-button.js', array('jquery'), '1.0.0', true);

	wp_enqueue_script( 'newnews-offcanvasjs', get_template_directory_uri() . '/assets/js/offcanvas.js', array('jquery'), '1.0.0', true);

	wp_enqueue_script( 'newnews-bootstrap4alpha', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery','newnews-tether'), '4.0.0-alpha.06', true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

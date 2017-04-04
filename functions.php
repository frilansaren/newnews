<?php 

require "bootstrap4-nav-walker.php";

// bestämmer hur många ord som ska visas vid homepage
function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*
Theme Setup
*/
function newnews_theme_setup() {
    /* Menu registration, låter dig lägga till och ta bort menu från adminmenu */
    register_nav_menu('headmenu', __('Primary Header Menu', 'newnews'));
}
add_action( 'after_setup_theme', 'newnews_theme_setup' );
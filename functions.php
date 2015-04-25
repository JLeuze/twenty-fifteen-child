<?php // Functionality for Twenty Fifteen Child Theme

// Load stylesheet from parent theme
function jl_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'twentyfifteen-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentyfifteen-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentyfifteen-style' ) );
}
add_action( 'wp_enqueue_scripts', 'jl_parent_theme_enqueue_styles' );

// Setup child theme
function jl_twentyfifteen_child_setup() {
	// Change the post thumbnail size
	set_post_thumbnail_size( 825, 330, true );
}
add_action( 'after_setup_theme', 'jl_twentyfifteen_child_setup' );

// Load scripts for child theme
function jl_twentyfifteen_child_scripts() {
	// Add Google Font
	wp_enqueue_style( 'orbitron', 'http://fonts.googleapis.com/css?family=Orbitron:400,700,500,900' );

}
add_action( 'wp_enqueue_scripts', 'jl_twentyfifteen_child_scripts' );
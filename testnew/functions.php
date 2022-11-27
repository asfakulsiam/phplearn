<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function testnew_scripts() {
	wp_enqueue_style( 'testnew-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'testnew-boot', get_template_directory_uri().'./assets/css/bootstrap.min.css', 'rtl', 'replace' );

	wp_enqueue_script( 'testnew-navigation', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
     

    



}
add_action( 'wp_enqueue_scripts', 'testnew_scripts' );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo');



?>
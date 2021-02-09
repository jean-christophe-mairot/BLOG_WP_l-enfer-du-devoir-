<?php
// /**
// ** activation theme
// **/
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
//  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

// }

// add_action( 'wp_enqueue_scripts', 'theme_enqueue_script' );
// function theme_enqueue_script() {
//  wp_enqueue_script( 'parent-script', get_template_directory_uri() . '/js/suit.js' );

// }

function custom_enqueue_scripts() {
    //ajout pour js jquery
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/suit.js', array( 'jquery' ),  NULL, true);
		
	//Ajout des CSS
		wp_enqueue_style( 'custom', get_template_directory_uri() . '/style.css', array(), NULL, NULL);
	
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts', 101);
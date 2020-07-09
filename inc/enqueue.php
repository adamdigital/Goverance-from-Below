<?php

/**
 *
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'enqueue_govfrombelow_scripts', 99 );

function enqueue_govfrombelow_scripts() {
	// CSS
	wp_register_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'bootstrap-css' );

	wp_register_style( 'bootstrap-css-map', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css.map', array(), '4.3.1', 'all' );
	wp_enqueue_style( 'bootstrap-css-map' );

	wp_register_style( 'mod-css', get_stylesheet_directory_uri() . '/assets/css/mod.css', array(), '1.6.0', 'all' );
	wp_enqueue_style( 'mod-css' );

	// Third party vendor scripts
	wp_deregister_script( 'jquery' ); // This removes jquery shipped with WP so that we can add our own.
	wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.3.1' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'backstretch', get_stylesheet_directory_uri() . '/assets/js/jquery.backstretch.min.js', array( 'jquery' ), '2.1.17' );
	wp_enqueue_script( 'document-listing', get_stylesheet_directory_uri() . '/assets/js/document-listing.js', array( 'jquery' ), '1.0.0' );

	wp_enqueue_script( 'modernizer', get_stylesheet_directory_uri() . '/assets/js/modernizer.min.js' );
	wp_style_add_data( 'modernizer', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', get_stylesheet_directory_uri() . '/assets/js/respond.min.js' );
	wp_style_add_data( 'respond', 'conditional', 'lt IE 9' );
}

<?php

/*
 * Plugin Name: Demootje
 * Description: Een demo voor plugin voor fase 3
 */

/**
 * Register the "book" custom post type
 */
function demootje_setup_post_type() {
	register_post_type( 'book', ['public' => true ] ); 
    


} 

add_action( 'init', 'demootje_setup_post_type' );


/**
 * Activate the plugin.
 */
function demootje_activate() { 
	// Trigger our function that registers the custom post type plugin.
	demootje_setup_post_type(); 
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'demootje_activate' );
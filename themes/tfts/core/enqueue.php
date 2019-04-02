<?php
/**
 * TFTS enqueue functions and definitions
 *
 * @package TFTS
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Enqueue scripts and styles.
 */
function tfts_scripts() {
	
	// wp_enqueue_style( 'ali-custom', TFTS_CSS . '/custom.css');

	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );

	// wp_enqueue_script( 'ali-custom', TFTS_JS . '/custom.js', array( 'jquery' ), 'null', true );

}
add_action( 'wp_enqueue_scripts', 'tfts_scripts' );
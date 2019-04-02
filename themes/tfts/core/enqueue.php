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
    wp_enqueue_style( 'tfts-fontawesome-css', TFTS_ASSEST_URI . '/fontawesome/css/all.css');
    wp_enqueue_style( 'tfts-animate-css', TFTS_ASSEST_URI . '/wow/animate.css');
    wp_enqueue_style( 'tfts-bootstrap-css', TFTS_ASSEST_URI . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'tfts-slick-css', TFTS_ASSEST_URI . '/slick/slick/slick.css');
    wp_enqueue_style( 'tfts-slick-css', TFTS_ASSEST_URI . '/slick/slick/slick-theme.css');
    wp_enqueue_style( 'tfts-style-css', TFTS_ASSEST_URI . '/css/style.css');
	wp_enqueue_style( 'tfts-media-css', TFTS_ASSEST_URI . '/css/media.css');
	wp_enqueue_style( 'tfts-custom-css', TFTS_ASSEST_URI . '/css/custom.css');

	// Enqueue script starts
	// Remove default jQuery.
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'tfts-jquery', TFTS_ASSEST_URI . '/js/jquery.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'tfts-fontawesome-js', TFTS_ASSEST_URI . '/fontawesome/js/all.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'tfts-wow-js', TFTS_ASSEST_URI . '/wow/wow.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'tfts-bootstrap-js', TFTS_ASSEST_URI . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'tfts-slick-js', TFTS_ASSEST_URI . '/slick/slick/slick.js', array( 'jquery' ), 'null', true );
	wp_enqueue_script( 'tfts-custom-js', TFTS_ASSEST_URI . '/js/custom.js', array( 'jquery' ), 'null', true );

}
add_action( 'wp_enqueue_scripts', 'tfts_scripts' );
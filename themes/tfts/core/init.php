<?php
/**
 * TFTS functions and definitions
 *
 * @package TFTS
 * 
 * @since TFTS 1.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { 
 	exit; // disable direct access 
 }

/*
 * Load theme constants
 */
require trailingslashit( get_template_directory() ) . 'core/theme-constants.php';

/**
 * Theme setup functions
 */
require_once ( TFTS_CORE.'/theme-setup.php' );

/**
 * Register widget area and nav.
 */
require_once ( TFTS_CORE.'/theme-register.php' );

/**
 * Enqueue scripts and styles.
 */
require_once ( TFTS_CORE.'/enqueue.php' );

/**
 * Theme functions
 */
require_once ( TFTS_FUNCTION.'/theme-functions.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require_once ( TFTS_FUNCTION.'/extras.php' );

/**
 * Theme Hooks
 */
require_once ( TFTS_CORE.'/theme-hooks.php' );

/**
 * Aqua Resizer
 */
require_once ( TFTS_CORE.'/lib/aq_resizer.php' );

/**
 * Customizer additions.
 */
require_once( TFTS_CORE.'/lib/bs4navwalker.php');
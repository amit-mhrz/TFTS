<?php
/**
 * TFTS Template Hooks
 *
 * Action/filter hooks used for TFTS functions/templates
 *
 * @package 	TFTS
 *
 * @since     	TFTS 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*==================================================================================================
  Functions
  ==================================================================================================*/

if (!function_exists('tfts_output_header')){
	function tfts_output_header(){
		get_header();
	}
}

if (!function_exists('tfts_output_header_content')){
	function tfts_output_header_content(){
		get_template_part('template-parts/header/content', 'header');
	}
}

if (!function_exists('tfts_output_footer')){
	function tfts_output_footer(){
		get_footer();
	}
}

if (!function_exists('tfts_output_footer_content')){
	function tfts_output_footer_content(){
		get_template_part('template-parts/footer/content', 'footer');
	}
}

// TFTS Homepage Content Hooks

if (!function_exists('tfts_homepage_banner')){
	function tfts_homepage_banner(){
		get_template_part('template-parts/page/homepage/page', 'banner');
	}
}


/*==================================================================================================
  Hooks
  ==================================================================================================*/


/**
 * Metas and Links
 * @see  tfts_add_meta()
 * @see  tfts_add_links()
 */
add_action( 'tfts_meta', 'tfts_add_meta' );
add_action( 'tfts_links', 'tfts_add_links' );

/**
* Header / Footer Content
* @see tfts_output_header_content()
* @see tfts_output_footer_content()
*/
 add_action( 'tfts_header_content', 'tfts_output_header_content', 10);
 add_action( 'tfts_footer_content', 'tfts_output_footer_content', 10);

/**
 * Header / Footer  
 */
add_action( 'tfts_header', 'tfts_output_header');
add_action( 'tfts_footer', 'tfts_output_footer');

/**
 * Homepage Hook
 */
add_action( 'tfts_homepage_content', 'tfts_homepage_banner', 10 );

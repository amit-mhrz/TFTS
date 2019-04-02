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

if (!function_exists('tfts_homepage_we_are')){
	function tfts_homepage_we_are(){
		get_template_part('template-parts/page/homepage/page', 'who-we-are');
	}
}

if (!function_exists('tfts_homepage_services')){
	function tfts_homepage_services(){
		get_template_part('template-parts/page/homepage/page', 'services');
	}
}

if (!function_exists('tfts_homepage_process')){
	function tfts_homepage_process(){
		get_template_part('template-parts/page/homepage/page', 'our-process');
	}
}

if (!function_exists('tfts_clients_section')){
	function tfts_clients_section(){
		get_template_part('template-parts/page/common/page', 'clients');
	}
}


// TFTS About us Content Hooks
if (!function_exists('tfts_about_story')){
	function tfts_about_story(){
		get_template_part('template-parts/page/about/page', 'story');
	}
}

if (!function_exists('tfts_about_team')){
	function tfts_about_team(){
		get_template_part('template-parts/page/about/page', 'team');
	}
}

if (!function_exists('tfts_clients_section')){
	function tfts_clients_section(){
		get_template_part('template-parts/page/common/page', 'clients');
	}
}


// TFTS Services Content Hooks
if (!function_exists('tfts_services_section')){
	function tfts_services_section(){
		get_template_part('template-parts/page/services/page', 'services');
	}
}


// TFTS Projects Content Hooks
if (!function_exists('tfts_projects_section')){
	function tfts_projects_section(){
		get_template_part('template-parts/page/projects/page', 'projects');
	}
}


// TFTS Gallery Content Hooks
if (!function_exists('tfts_gallery_section')){
	function tfts_gallery_section(){
		get_template_part('template-parts/page/gallery/page', 'gallery');
	}
}

// TFTS Contact Content Hooks
if (!function_exists('tfts_contact_section')){
	function tfts_contact_section(){
		get_template_part('template-parts/page/contact/page', 'contact');
	}
}

// TFTS Careers Content Hooks
if (!function_exists('tfts_careers_section')){
	function tfts_careers_section(){
		get_template_part('template-parts/page/careers/page', 'careers');
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
 add_action( 'tfts_footer_content', 'tfts_output_footer_content', 20);

/**
 * Header / Footer  
 */
add_action( 'tfts_header', 'tfts_output_header');
add_action( 'tfts_footer', 'tfts_output_footer');

/**
 * Homepage Hook
 */
add_action( 'tfts_homepage_content', 'tfts_homepage_banner', 10 );
add_action( 'tfts_homepage_content', 'tfts_homepage_we_are', 20 );
add_action( 'tfts_homepage_content', 'tfts_homepage_services', 30 );
add_action( 'tfts_homepage_content', 'tfts_homepage_process', 40 );
add_action( 'tfts_homepage_content', 'tfts_clients_section', 50 );

add_action( 'tfts_about_us_content', 'tfts_about_story', 10 );
add_action( 'tfts_about_us_content', 'tfts_about_team', 20 );
add_action( 'tfts_about_us_content', 'tfts_clients_section', 30 );

add_action( 'tfts_services_content', 'tfts_services_section', 10 );
add_action( 'tfts_services_content', 'tfts_clients_section', 20 );

add_action( 'tfts_projects_content', 'tfts_projects_section', 10 );
add_action( 'tfts_projects_content', 'tfts_clients_section', 20 );

add_action( 'tfts_gallery_content', 'tfts_gallery_section', 10 );
add_action( 'tfts_gallery_content', 'tfts_clients_section', 20 );

add_action( 'tfts_contact_content', 'tfts_contact_section', 10 );

add_action( 'tfts_careers_content', 'tfts_careers_section', 10 );
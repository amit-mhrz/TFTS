<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package TFTS
 */


if( !function_exists( 'tfts_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function tfts_add_meta() { ?>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_bloginfo('name'); ?></title>
	<?php }
endif;

if ( !function_exists( 'tfts_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function tfts_add_links() { ?> 
	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');


function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'TFTS';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
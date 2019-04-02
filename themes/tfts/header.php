<?php
/**
 * Header Template
 * 
 * @package TFTS
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<?php 
	/**
	 * tfts_meta hook
	 *
	 * @hooked tfts_add_meta
	 */

	do_action('tfts_meta');

	/**
	 * tfts_links hook
	 *
	 * @hooked tfts_add_links
	 */
	do_action('tfts_links');

    // Keep it for plugins.
	wp_head(); ?> </head>


<body>

<?php

    /**
     * tfts_header_content hook
     *
     * @hooked tfts_output_header_content()
     *
     */
    do_action( 'tfts_header_content' );

    ?>
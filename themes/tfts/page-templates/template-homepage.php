<?php
/**
 * Template Name: Homepage Layout
 */

do_action('tfts_header'); ?>

	<?php 
        /**
         * tfts_homepage_content hook
         *
         */
        do_action( 'tfts_homepage_content' );
    ?>
    
<?php do_action('tfts_footer'); ?>
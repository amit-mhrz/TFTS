<?php
/**
 * Template Name: Gallery Layout
 */

do_action('tfts_header'); ?>

	<?php 
        /**
         * tfts_gallery_content hook
         *
         */
        do_action( 'tfts_gallery_content' );
    ?>
    
<?php do_action('tfts_footer'); ?>
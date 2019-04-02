<?php
/**
 * Template Name: Contact Layout
 */

do_action('tfts_header'); ?>

	<?php 
        /**
         * tfts_contact_content hook
         *
         */
        do_action( 'tfts_contact_content' );
    ?>
    
<?php do_action('tfts_footer'); ?>
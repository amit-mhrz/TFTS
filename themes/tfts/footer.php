<?php
/**
 * Footer Template
 *
 * @package TFTS
 */
?>

	<?php

	/**
	 * tfts_footer_content hook
	 *
	 * @hooked tfts_output_footer_content()
	 *
	 */
	do_action( 'tfts_footer_content' );

	wp_footer(); ?>

</body>
</html>
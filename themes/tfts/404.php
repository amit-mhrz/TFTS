<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TFTS
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="section error-404 not-found">
				<div class="container notfound-holder">
					<strong class="title-404">
						<?php echo '<h1>404</h1>';?>
						<?php esc_html_e( 'Oops! That page can&rsquo;t be found.'); ?>
					</strong>
					<div class="page-content404">
						<p><?php esc_html_e( 'It looks like nothing was found at this location.'); ?></p>
					</div>
					<div class="btn-holder">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-transparent btn-transparent-black">go to homepage</a>
					</div>
				</div>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
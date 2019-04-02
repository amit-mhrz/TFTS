<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TFTS
 */

get_header(); ?>

<div class="section section__banner--inner" style="background: url('<?php echo tfts_BASE_URL?>/assets/images/img-banner-contact.jpg') no-repeat;">
	<div class="container">
		<h1>Results</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo bloginfo( 'url' );?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Results</li>
			</ol>
		</nav>
	</div>
</div>
<main>
	<div class="section section__about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 about__left">
					<div class="text__holder">
						<h2>Search <span>Results</span></h2>
						<?php
							if ( have_posts() ) : 
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; 
						?>
					</div>
				</div>
				<div class="col-lg-4 about__right">
					<div class="siderbar__box">
						<h3>RECENT NEWS &amp; EVENTS</h3>
						<div class="recent__news__holder">
							<?php
                                $args = array(
                                    'posts_per_page'    => 5, 
                                    'post_type'         => 'news', 
                                    'post_status'       => 'publish', 
                                    'orderby'           => 'date', 
                                    'order'             => 'DESC'
                                );
                                $query = new WP_Query($args);
                                if( $query->have_posts()):
                                while( $query->have_posts()): $query->the_post();
                                {
                            ?>
							<div class="recent__news__list">
								<div class="recent__news__left">
									<?php 
                                        $download_ID = $post->ID;
                                        $feat_img = wp_get_attachment_url( get_post_thumbnail_id( $download_ID ) );
                                    ?>
									<a href="#"><img src="<?php echo $feat_img;?>" class="img-fluid" alt=""></a>
								</div>
								<div class="recent__news__right">
									<span class="text"><a href="<?php the_permalink()?>"><?php echo the_title()?></a></span>
									<div class="news__info__date">
										<img src="<?php echo tfts_BASE_URL?>/assets/images/icon-calander.svg" width="16" height="18" alt="icon">
									<?php echo get_the_date('Y M d');?></div>
								</div>
							</div>
							<?php }
                                endwhile;
                                endif;
                                wp_reset_query();
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
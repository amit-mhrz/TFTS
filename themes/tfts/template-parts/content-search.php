<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="recent__news__list recent__news__list--secondary">
			<div class="recent__news__left">
				<?php 
                    $download_ID = $post->ID;
                    $feat_img = wp_get_attachment_url( get_post_thumbnail_id( $download_ID ) );
                ?>
				<a href="#"><img src="<?php echo $feat_img;?>" class="img-fluid" alt=""></a>
			</div>
			<div class="recent__news__right">
				<span class="text"><a href="<?php the_permalink()?>"><?php the_title()?></a></span>
				<div class="news__info__date">
					<img src="<?php echo TFTS_BASE_URL?>/assets/images/icon-calander.svg" width="16" height="18" alt="icon">
				<?php echo get_the_date('Y M d');?></div>
			</div>
		</div>
	</div>
</article>
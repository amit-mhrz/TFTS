<div class="page-title wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
      <div class="col-md-12">
            <h2><?php the_title();?></h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                </ol>
            </nav>
      </div>
  </div>
</div>
<!-- End of page-title -->

<section id="gallery" class="section-container wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
    <div class="row gallery">
      <?php 
            $i = 0;
            $args = array(
                'posts_per_page'    => -1, 
                'post_type'         => 'tfts_gallery', 
                'post_status'       => 'publish', 
                'orderby'           => 'date', 
                'order'             => 'ASC'
            );
            $query = new WP_Query($args);
            if( $query->have_posts()):
            while( $query->have_posts()): $query->the_post(); ?>

            <div class="col-md-4 col-sm-6">
              <a href="<?php the_permalink();?>" class="gallery-album">
                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
                <img src="<?php echo $url;?>" alt="Image">
                <h3><?php the_title();?></h3>
              </a>
            </div>

      <?php endwhile; endif; ?>
    </div>
    </div>
</section>
<!-- End of gallery -->
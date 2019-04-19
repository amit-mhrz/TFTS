<div class="page-title wow fadeInDown" data-wow-delay=".5s" style="background: url('<?php the_field('inner_page_banner_image', 'option');?>') no-repeat; padding: 100px 0 40px; background-position: center center; text-align: center; height: 240px; -webkit-transition: all 0.3s ease; -o-transition: all 0.3s ease; transition: all 0.3s ease;">
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

<section id="projects" class="section-container wow fadeInDown" data-wow-delay=".5s">
    <div class="container">
      <div class="row">
        <?php 
            $i = 0;
            $args = array(
                'posts_per_page'    => -1, 
                'post_type'         => 'tfts_projects', 
                'post_status'       => 'publish'
            );
            $query = new WP_Query($args);
            if( $query->have_posts()):
            while( $query->have_posts()): $query->the_post(); ?>

              <div class="col-md-4 col-sm-6">
                  <div class="project-item">
                      <a href="#">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
                        <img src="<?php echo $url;?>" alt="">
                        <div class="overlay">
                          <div class="overlay-inner">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                            <p>
                              <i class="fas fa-map-marker"></i>
                              <?php the_field('project_location');?>
                            </p>  
                          </div>
                        </div>
                      </a>
                  </div>
              </div>

      <?php endwhile; endif; wp_reset_query(); ?>
      </div>
    </div>
</section>
<!-- End of services -->
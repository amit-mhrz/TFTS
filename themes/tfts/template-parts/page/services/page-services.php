<div class="page-title wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
      <div class="col-md-12">
            <h2>Services</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
      </div>
  </div>
</div>
<!-- End of page-title -->

<section id="services" class="section-container">
    <div class="container-fluid clearfix">
        <?php 
            $i = 0;
            $args = array(
                'posts_per_page'    => -1, 
                'post_type'         => 'tfts_services', 
                'post_status'       => 'publish', 
                'orderby'           => 'date', 
                'order'             => 'ASC'
            );
            $query = new WP_Query($args);
            if( $query->have_posts()):
            while( $query->have_posts()): $query->the_post(); ?>
                <div class="row <?php echo ($i%2==0)?'':'row-rev';?>">   
                    <div class="col-md-6 fitout-section wow fadeInRight" data-wow-delay=".5s">
                    </div>
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                        <div class="service-details">
                            <h3><?php the_title();?></h3>
                            <?php the_content();?>
                        </div>
                    </div> 
                </div>
        <?php $i++; endwhile; endif; wp_reset_query();?>
    </div>
</section>
<!-- End of services -->
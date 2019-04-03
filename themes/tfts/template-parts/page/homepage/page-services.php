<section id="services" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title wow fadeInRight" data-wow-delay=".5s">
                    <h2><?php the_field('h_our_services_title');?></h2>
                    <p class="short-text"><?php the_field('h_our_services_sub_title');?></p>
                </div>
            </div>
        </div>
        <div class="row mg-r-0">
            <?php
                $i = 1;
                $args = array(
                    'posts_per_page'    => 5, 
                    'post_type'         => 'tfts_services', 
                    'post_status'       => 'publish', 
                    'orderby'           => 'date', 
                    'order'             => 'ASC'
                );
                $query = new WP_Query($args);
                if( $query->have_posts()):
                while( $query->have_posts()): $query->the_post();

            if(($i==1)||($i==2)||($i==4)){
                echo '<div class="col-md-4">';
            }?>            
                <div class="service-item wow <?php echo (($i==2)||($i==3))?'fadeInDown':'fadeInLeft';?>" data-wow-delay=".5s">
                    <a href="<?php the_permalink();?>">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
                        <img src="<?php echo $url;?>" alt="">
                        <h3><?php the_title();?></h3>
                    </a>
                </div>
            <?php if(($i==1)||($i==3)||($i==5)){
                echo '</div>';
            } $i++; endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- End of services -->
<section id="team" class="section-container">
    <div class="container pos-rel">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title center-title wow fadeIn" data-wow-delay=".5s">
                    <h2><?php the_field('team_title');?></h2>
                    <p class="short-text"><?php the_field('team_sub_title');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-slider wow fadeInDown" data-wow-delay=".5s">
                <?php
                        $args = array(
                            'posts_per_page'    => -1, 
                            'post_type'         => 'tfts_teams', 
                            'post_status'       => 'publish', 
                            'orderby'           => 'date', 
                            'order'             => 'ASC'
                        );
                        $query = new WP_Query($args);
                        if( $query->have_posts()):
                        while( $query->have_posts()): $query->the_post();
                        {
                    ?>
                <div class="team-item col-md-4">
                    <div class="team-inner">
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
                        <img src="<?php echo $url;?>" alt="" class="img-responsive">
                        <h3><?php the_title();?></h3>
                        <span class="team-designation"><?php the_field('staff_designation');?></span>
                        <ul class="social-links no-style">
                            <?php 
                              $facebook = get_field('staff_facebook');
                              $linkedin = get_field('staff_linkedin');
                              $twitter  = get_field('staff_twitter');
                              if($facebook != ''){ ?>
                                <li><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                              <?php } if($twitter != ''){ ?>
                                <li><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                              <?php } if($linkedin != ''){ ?>
                                <li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                              <?php } ?>
                        </ul>
                    </div>                            
                </div>
                <?php } endwhile; endif; wp_reset_query();?>
                
            </div>  
        </div>
    </div>
</section>
<!-- End of team -->
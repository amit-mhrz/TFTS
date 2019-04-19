<section id="clients-feedback" class="section-container bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title center-title wow fadeIn" data-wow-delay=".5s">
                    <h2><?php the_field('h_testimonial_title', '7');?></h2>
                    <p class="short-text">
                        <?php the_field('h_testimonial_sub_title', '7');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="client-slider wow fadeInDown" data-wow-delay=".5s">
                    <?php
                        $args = array(
                            'posts_per_page'    => -1, 
                            'post_type'         => 'tfts_testimonials', 
                            'post_status'       => 'publish'
                        );
                        $query = new WP_Query($args);
                        if( $query->have_posts()):
                        while( $query->have_posts()): $query->the_post();
                        {
                    ?>
                    <div class="client-item">
                        <div class="img-shadow">
                            <div class="client-img">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
                                <img src="<?php echo $url;?>" alt="">
                            </div>
                        </div>
                        <h3><?php the_title();?></h3>
                        <span class="designation"><?php the_field('designation');?></span>
                        <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <?php $content = get_the_content();?>
                        <p class="client-words"><i class="fas fa-quote-left"></i>
                            <?php echo strip_tags($content, '<b>');?>
                        <i class="fas fa-quote-right"></i></p>
                    </div>
                    <?php } endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of clients-feedback -->

<section id="clients" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title wow fadeInRight" data-wow-delay=".5s">
                    <h2><?php the_field('h_clients_title', '7');?></h2>
                    <p class="short-text"><?php the_field('h_clients_sub_title', '7');?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="clients-slider wow fadeInDown" data-wow-delay=".5s">
                    <?php if(get_field('h_our_clients', '7')):
                    while(the_repeater_field('h_our_clients', '7')): ?>
                    <div class="clients-item"><img src="<?php the_sub_field('h_client_logo', '7');?>" alt=""></div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of clients -->
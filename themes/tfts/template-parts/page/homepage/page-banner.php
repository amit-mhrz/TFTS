<section id="banner">
    <div class="feat-slider">
        <?php if(get_field('h_banners')):
            while(the_repeater_field('h_banners')): ?>
        <div class="feat-item">
           <div class="feat-item-inner">
                <img src="<?php the_sub_field('h_banner_images');?>" alt="">
                <div class="banner-content">
                    <a href="<?php the_sub_field('h_button_url');?>" class="btn btn-primary wow fadeInDown" data-wow-delay="1.5s"><?php the_sub_field('h_button_text');?></a>
                </div>
            </div>
        </div>
        <?php endwhile; endif;?>
    </div>
</section>
<!-- End of banner -->
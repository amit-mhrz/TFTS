<div class="parallax-window">
<section id="fitout-process" class="section-container" style="background: url('<?php the_field('fit_out_process_b_image');?>') no-repeat; background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title center-title white-col wow fadeIn" data-wow-delay=".5s">
                    <h2><?php the_field('fit_out_process_title');?></h2>
                    <p class="short-text"><?php the_field('fit_out_process_sub_title');?></p>
                </div>
                <img src="<?php the_field('fit_out_process_image');?>" alt="" class="img-responsive wow fadeInUp" data-wow-delay=".5s">
            </div>
        </div>
    </div>
</section>
</div>
<!-- End of fitout-process -->

<section id="why-choose-us" class="section-container">
    <div class="container pos-rel">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title wow fadeInRight" data-wow-delay=".5s">
                    <h2><?php the_field('wcu_title');?></h2>
                    <p class="short-text">
                        <?php the_field('wcu_sub_title');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 wow fadeInRight" data-wow-delay=".5s">
                <div class="row">
                    <?php 
                    $i = 0;
                    if(get_field('key_features')):
                    while(the_repeater_field('key_features')):
                    if($i%2 == 0){ echo '<div class="col-md-6">';}?>

                        <div class="why-item">
                            <span class="why-icon"><i class="fas fa-<?php if($i==0){ echo 'crop'; } if($i==1){ echo 'rocket'; } if($i==2){ echo 'lightbulb'; } if($i==3){ echo 'users'; }?>"></i></span>
                            <div class="why-content">
                                <h3><?php the_sub_field('wcu_key_title');?></h3>
                                <p><?php the_sub_field('wcu_key_description');?></p>
                            </div>
                        </div>

                    <?php $i++; if($i%2 == 0){ echo '</div>';}?>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
        <div class="why-img wow fadeInLeft" data-wow-delay=".5s"><img src="<?php the_field('wcu_right_image');?>" alt="" class="img-responsive"></div>
    </div>
</section>
<!-- End of why-choose-us -->
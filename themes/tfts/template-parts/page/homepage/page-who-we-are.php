<section id="who-we-are" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sec-title wow fadeInRight" data-wow-delay=".5s">
                    <h2><?php the_field('h_who_we_are_title');?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 wow fadeInRight" data-wow-delay=".5s">
                <p>
                    <?php the_field('h_who_we_are_description');?>
                </p>
            </div>
            <div class="col-md-7 text-right wow fadeInLeft" data-wow-delay=".5s">
                <img src="<?php the_field('h_who_we_are_image');?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-12">
                 <div class="quote text-center wow fadeInUp" data-wow-delay=".5s">
                    <p><i class="fas fa-quote-left"></i><?php the_field('h_support_vision');?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of who-we-are -->

<section id="support" class="bg-blue row">
    <div class="col-md-5 rot-bg-primary wow fadeInRight" data-wow-delay=".5s">
        <h2><?php the_field('h_support_title');?></h2>
        <p><?php the_field('h_support_description');?></p>                    
    </div>
    <div class="col-md-7 support-right wow fadeInLeft" data-wow-delay=".5s">
        <ul class="no-style">
            <li class="clearfix"><i class="far fa-life-ring"></i><h3><?php the_field('support_hours');?></h3> <div><?php the_field('support_text');?></div></li>
            <li class="clearfix"><i class="fas fa-phone fa-flip-horizontal"></i> <div class="no-mg">Call Us <br> <a href="tel:+<?php the_field('h_support_c_num');?>">+<?php the_field('h_support_c_num');?></a></div></li>
        </ul>
    </div>
</section>
<!-- End of support -->
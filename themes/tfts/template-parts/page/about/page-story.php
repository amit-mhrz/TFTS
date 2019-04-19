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

<section id="about" class="section-container">
  <div class="container">
        <?php 
            $i = 0;
            if(get_field('visions_n_missions')):
            while(the_repeater_field('visions_n_missions')): ?>
                <div class="row about-row <?php echo ($i%2==0)?'':'row-rev';?>">
                    <div class="col-md-5">
                        <div class="about-content <?php echo ($i%2==0)?'left-content wow fadeInRight':'right-content short-content wow fadeInLeft';?>" data-wow-delay=".5s">
                            <p class="short-info"><?php the_sub_field('quote_title');?></p> 
                            <h3><?php the_sub_field('vm_title');?></h3>
                            <p>
                                <?php the_sub_field('vm_description');?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="img-border wow <?php echo ($i%2==0)?'fadeInLeft':'fadeInRight';?>" data-wow-delay=".5s"><img src="<?php the_sub_field('vm_image');?>" alt="" class="img-responsive"></div>
                    </div>
                </div>
        <?php $i++; endwhile; endif;?>

    </div>
</section>
<!-- End of about -->
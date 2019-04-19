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

<section id="careers" class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-heading">
                    <h3>Apply Now</h3>
                    <p>We are in constant lookout for talented, smart and honest people. If you have the skills to contribute and be part of TechForce. Please send your application to us below.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form wow fadeInRight" data-wow-delay=".5s">
                    <?php echo do_shortcode('[contact-form-7 id="207" title="Careers Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of careers -->
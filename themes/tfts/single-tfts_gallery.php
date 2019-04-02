<?php do_action('tfts_header');?>

<div class="page-title wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
      <div class="col-md-12">
            <h2>Gallery</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url();?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('/gallery');?>">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                </ol>
            </nav>
      </div>
  </div>
</div>
<!-- End of page-title -->

<section id="gallery" class="section-container wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
    <div class="row gallery">
      <?php 
          $images = get_field('tfts_album');
          if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                          <div class="col-md-4 col-sm-6">
                            <a data-fancybox="gallery" href="<?php echo $image['url']; ?>" data-caption="Maintenance">
                              <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                            </a>
                          </div>
                  <?php endforeach; ?>
          <?php endif; ?>
    </div>
  </div>
</section>
<!-- End of services -->

<?php get_template_part('template-parts/page/common/page', 'clients');?>

<script type="text/javascript">
  $('[data-fancybox="gallery"]').fancybox({
  // Options will go here
  });
</script>

<?php do_action('tfts_footer');?>
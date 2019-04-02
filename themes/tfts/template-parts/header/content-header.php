<div class="wrapper">
  <div class="header-container">
      <header id="header">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="top-header">
                          <div class="top-header-inner">
                             <div class="row">
                                  <div class="col-md-6">
                                      <ul class="social-links no-style">
                                        <?php 
                                          $facebook = get_field('facebook', 'option');
                                          $linkedin = get_field('linkedin', 'option');
                                          $twitter  = get_field('twitter', 'option');
                                          if($facebook != ''){ ?>
                                            <li><a href="<?php echo $facebook;?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                          <?php } if($twitter != ''){ ?>
                                            <li><a href="<?php echo $twitter;?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                          <?php } if($linkedin != ''){ ?>
                                            <li><a href="<?php echo $linkedin;?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                          <?php } ?>
                                            <li><span>We Provide Services You Need</span></li>
                                      </ul>
                                  </div>
                                 <div class="col-md-6 text-right right-info">
                                      <a href="maito:<?php the_field('header_email_address', 'option');?>"><i class="far fa-envelope"></i> <?php the_field('header_email_address', 'option');?></a>
                                      <a href="tel:<?php the_field('header_contact_number', 'option');?>"><i class="fas fa-phone fa-flip-horizontal"></i> +<?php the_field('header_contact_number', 'option');?></a>
                                 </div>
                             </div>
                          </div>
                      </div>
                      <div class="head-wrap clearfix">
                          <h1 id="logo"><a href="<?php echo site_url();?>"><img src="<?php the_field('website_logo', 'option');?>" alt="Tech Force Technical Service"></a></h1>
                          <div id="main-nav">
                              <nav class="navbar navbar-expand-lg navbar-light ">
                                    <div class="nav-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                      <div id="burger-menu" class="c-hamburger c-hamburger--htx">
                                              <span>Menu</span>
                                          </div>
                                    </button>
                                    </div>

                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                      <?php 
                                        wp_nav_menu([
                                         'menu'            => 'top',
                                         'theme_location'  => 'header-menu',
                                         'container_class' => '',
                                         'menu_id'         => false,
                                         'menu_class'      => 'navbar-nav',
                                         'depth'           => 2,
                                         'fallback_cb'     => 'bs4navwalker::fallback',
                                         'walker'          => new bs4navwalker()
                                        ]);
                                    ?>
                                    </div>
                              </nav>
                          </div>
                      </div>   
                  </div>
              </div>
          </div>
      </header>
  </div>
  <!-- End of header-container -->
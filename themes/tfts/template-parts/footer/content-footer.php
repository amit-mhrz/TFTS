    <footer id="footer" class="bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row footer-menus">
                        <div class="col-md-2">
                            <h3 class="border-org"><?php the_field('footer_column_1_title', 'option');?></h3>
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'footer-menu-1',
                                'before' => '<i class="fas fa-angle-right"></i> ' ));
                            ?>
                        </div>
                        <div class="col-md-3">
                            <h3><?php the_field('footer_column_2_title', 'option');?></h3>
                            <?php wp_nav_menu( array( 
                                'theme_location' => 'footer-menu-2',
                                'before' => '<i class="fas fa-angle-right"></i> ' ));
                            ?>
                        </div>
                        <div class="col-md-4">
                            <h3><?php the_field('footer_column_3_title', 'option');?></h3>
                            <p><?php the_field('footer_location', 'option');?></p>
                            <ul>
                                <li><i class="fas fa-phone fa-flip-horizontal"></i> <a href="tel:<?php the_field('footer_telephone', 'option');?>">+ <?php the_field('footer_telephone', 'option');?></a></li>
                                <li><i class="fas fa-mobile"></i> <a href="tel:<?php the_field('footer_mobile', 'option');?>"> + <?php the_field('footer_mobile', 'option');?></a></li>
                                <li><i class="fas fa-fax"></i> <a href="fax:<?php the_field('footer_fax', 'option');?>"> + <?php the_field('footer_fax', 'option');?></a></li>
                                <li><i class="fas fa-envelope"></i> <a href="mailto:<?php the_field('footer_email_address', 'option');?>"><?php the_field('footer_email_address', 'option');?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3><?php the_field('footer_column_4_title', 'option');?></h3>
                            <p><?php the_field('follow_us_description', 'option');?></p>

                            <form action="#" class="email-subscription-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <button><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                            <div class="social-block">
                                <ul class="no-style social-links">
                                    <?php 
                                      $facebook = get_field('facebook', 'option');
                                      $linkedin = get_field('linkedin', 'option');
                                      $twitter = get_field('twitter', 'option');
                                      if($facebook != ''){ ?>
                                        <li><a href="<?php echo $facebook;?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                      <?php } if($twitter != ''){ ?>
                                        <li><a href="<?php echo $twitter;?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                      <?php } if($linkedin != ''){ ?>
                                        <li><a href="<?php echo $linkedin;?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"><p>© <?php echo date('Y');?> <?php the_field('copyright_text', 'option');?></p></div>
                    <div class="col-md-4 text-right"><p>Design with <i class="fas fa-heart" style="color: red;"></i>  by <a href="http://www.fifthdesigns.com/" class="col-white" target="_blank">Fifth Designs</a></p></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of footer -->
</div>
<!-- End of wrapper -->
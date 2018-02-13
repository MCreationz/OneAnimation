 <?php
 /* Template Name: Partners-distribution
 */
 get_header();?>
 <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    
    ?>
            <div class="oddbods-hero hero-hight oddbods-distribution" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('distribution_slider_heading', 'banner_image_title'); ?></h4>
                        </div>
                        <a href="#" class="scroll-down" address="true"></a>
                    </div>
                </div>
                <!-- CONTAINER END -->
                
            </div>
	     <?php
    endwhile;
    wp_reset_query();
    ?>
        </section>

<input type="hidden" value="<?php the_cfc_field( 'distribution_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgdistribution">
        <!-- ODDBODS HERO IMAGE END --> 
        <!-- LAYER SECTION 3 START -->
	  <?php if( get_field('enable_distribution_section') == 0 ): ?>
        <section id="" class="ok">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center cat" style="padding-bottom:50px;">
                            <h4><?php the_cfc_field('distribution_slider_heading', 'slider_heading'); ?></h4>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 3 END -->
        <!-- LAYER SECTION 4 START -->
	 
        <section id="">
            <div class="oddbods-icon" style="background-color:#ebebeb;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text  cat">
			    <?php foreach( get_cfc_meta( 'distibution_images' ) as $key => $value ){ ?>   
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="partners-icon center">
                                        <img src="<?php the_cfc_field( 'distibution_images','partner_image', false, $key ); ?>" class="image">
                                    </div>
                                </div>
                               

                                    <?php }  ?>   
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
        </section>
	    <?php endif;?>
        <!-- LAYER SECTION 4 END -->
        <!-- LAYER SECTION 5 START -->
		  <?php if( get_field('enable_partner-distribution-_talk-section') == 0 ): ?>
        <section id="" class="">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('distribution_slider_heading', 'bottom_subheading'); ?></p>
                                 <a href="<?php the_cfc_field('distribution_slider_heading', 'button_link'); ?>"> <button  class="odd-btn"><?php the_cfc_field('distribution_slider_heading', 'button'); ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
	<?php endif;?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
        <!-- LAYER SECTION 5 END -->
	<?php get_footer();?>
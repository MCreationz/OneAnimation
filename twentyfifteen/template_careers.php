  <?php
  /* Template Name: careers
  */
  get_header();
  ?>
   <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
    $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
    ?>
            <div class="oddbods-hero hero-hight oddbods-carrer" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('careers', 'banner_image_title'); ?></h4>
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

<input type="hidden" value="<?php the_cfc_field( 'careers_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgcareers">
        <!-- ODDBODS HERO IMAGE END --> 
        
        <!-- ODDBODS TEXT START -->
        <section class="ok">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
			<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
                           the_content();
    endwhile;
    wp_reset_query();
    ?>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS TEXT END -->
        <!-- LAYER SECTION 5 START -->
        <section id="" class="cat">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                            <div class="oddbods-icon-text center">
                                <a href="<?php the_cfc_field('careers', 'button_link'); ?>">
                                    <button class="odd-btn" style="margin-top:0px; margin-bottom:0px;"><?php the_cfc_field('careers', 'button_name'); ?>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 5 END -->
        <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1" style="position:relative; margin-top:70px;">
            <div class="oddbods-hero hero-hight carres-5" style="background-image: url(<?php the_cfc_field('careers', 'faq_image'); ?>);">
	    <input type="hidden" value="<?php the_cfc_field( 'careers_mobile_banner','mobile_banner_upload_faq'); ?>" id="bsnnerimgfaq">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4 style="font-size:40px;"><?php the_cfc_field('careers', 'heading'); ?></h4>
                        </div>
<!--                        <a href="#" class="scroll-down" address="true"></a>-->
                    </div>
                </div>
                <!-- CONTAINER END -->
                <a href="#" class="scroll-down-1"  address="true"></a>
            </div>
        </section>
        <!-- ODDBODS HERO IMAGE END --> 
        
        <!-- ODDBODS TEXT START -->
        <section class="ok-2">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
                           <?php the_cfc_field('careers', 'faq_conent'); ?>
 

                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS TEXT END -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<?php get_footer();?>
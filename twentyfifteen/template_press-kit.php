<?php
/* Template Name: Press-kit
*/
get_header();?> 
 <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    
    ?>
            <div class="oddbods-hero hero-hight oddbods-kit" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('press_kit', 'banner_image_title'); ?></h4>
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

<input type="hidden" value="<?php the_cfc_field( 'press_kit_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgpresskit">

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
    while ( have_posts() ) : the_post(); ?>
             <?php the_content();?>
	     <?php
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
	

	<style>
		 .zip{
		 position: absolute;
    left: 43%;
    /* top: 3%; */
    z-index: 999;
		 }
		 .zip a{    position: absolute;
    top: 57px;}
		</style>
		       <!-- <section id="" class="">
            <div class="oddbods-icon" style="background-color:#454545;
    width: 100%;
    padding: 78px;
    float: left;
    position: relative;">
                 <!-- CONTAINER START -->
              <!--  <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center ">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            <!--</div>
        </section>-->
		     <?php if( get_field('enable_press-kit-button_section') == 0 ): ?>
		        <section id="" class="cat">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('press_kit', 'main_title'); ?></p>
                                 <a href="<?php the_cfc_field('press_kit', 'button_link'); ?>"> <button  class="odd-btn"><?php the_cfc_field('press_kit', 'button_name'); ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
		
		
	    <?php endif;?>
        <!-- LAYER SECTION 5 END -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<?php get_footer();?>
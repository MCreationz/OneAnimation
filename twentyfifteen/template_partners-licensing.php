<?php
/* Template Name: Partners-licensing
*/
get_header();?>  
  <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    
    ?>
            <div class="oddbods-hero hero-hight oddbods-licensing" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('licensing_slider_heading', 'banner_image_title'); ?></h4>
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


<input type="hidden" value="<?php the_cfc_field( 'licensing_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimglicensing">

        <!-- ODDBODS HERO IMAGE END --> 
        <!-- LAYER SECTION 3 START -->
	        <?php if( get_field('enable_partner_section') == 0 ): ?>
        <section id="" class="ok">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center cat" style="padding-bottom:50px;">
                            <h4><?php the_cfc_field('licensing_heading', 'partnership_heading'); ?></h4>
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
			    <?php foreach( get_cfc_meta( 'licensing_partnerships' ) as $key => $value ){ ?>   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="partners-icon center">
                                        <img src="<?php the_cfc_field( 'licensing_partnerships','licensing_partnerships_image', false, $key ); ?>" class="image">
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
        <!-- LAYER SECTION 3 START -->
		        <?php if( get_field('enable_top-licensing-section') == 0 ): ?>
        <section id="" class="">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center" style="padding-bottom:40px; padding-top:40px; ">
                            <h4><?php the_cfc_field('licensing_heading', 'toplicenses_heading'); ?></h4>
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
			     <?php foreach( get_cfc_meta( 'top_licensing' ) as $key => $value ){ ?>   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="partners-icon center">
                          <img src="<?php the_cfc_field( 'top_licensing','licensing_image', false, $key ); ?>" class="image">
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
        <!-- LAYER SECTION 3 START -->
		        <?php if( get_field('enable_top-retailer-section') == 0 ): ?>
        <section id="" class="">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center" style="padding-bottom:40px; padding-top:40px;">
                            <h4><?php the_cfc_field('licensing_heading', 'retailer_heading'); ?></h4>
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
                               
				  <?php foreach( get_cfc_meta( 'licensing_retailer' ) as $key => $value ){ ?> 
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="partners-icon center">
                                        <img src="<?php the_cfc_field( 'licensing_retailer','licensing_images', false, $key ); ?>" class="image">
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
<?php if( get_field('enable_partner-licensing-_talk-section') == 0 ): ?>
        <section id="" class="">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('licensing_slider_heading', 'bottom_subheading'); ?></p>
                              <a href="<?php the_cfc_field('licensing_slider_heading', 'button_link'); ?>"> <button  class="odd-btn"><?php the_cfc_field('licensing_slider_heading', 'button'); ?></button></a>
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
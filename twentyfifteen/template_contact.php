 <?php
 /* Template Name: Contact
 */
 get_header();?>
  <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
     $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
    ?>
            <div class="oddbods-hero hero-hight oddbods-contacts" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('contact_us', 'banner_image_title'); ?></h4>
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

<input type="hidden" value="<?php the_cfc_field( 'contact_us_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgcontactus">
        <!-- ODDBODS HERO IMAGE END --> 
        
        <!-- ODDBODS TEXT START -->
        <section class="ok">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 no-padding">
                            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Contact Sidebar')) : else : ?>
			    <?php endif; ?>
                                <div class="line" style=overflow:hidden;></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS TEXT END -->
        <!-- ODDBODS TEXT START -->
        <section class="">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
			    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
                                <?php the_content();?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cat"> 
                          <?php //echo do_shortcode('[contact-form-7 id="464" title="my contact form"]');?>
								 <?php echo do_shortcode('	[wpforms id="1541" title="false" description="false"]');?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cat"> 
                                    <div id="map" style="width:100%;height:437px;">
				     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8079790276743!2d103.8050963140219!3d1.289449362127512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a32d44dbe01%3A0x5970aeb67b00e7f8!2sB-Select+Vantage+Automotive+Ltd!5e0!3m2!1sen!2sin!4v1512986154611" width="100%" height="437" frameborder="0" style="border:0" allowfullscreen></iframe>
				    </div>
				   <!-- <script>
				    var map;
				    function myMap(){
				    map= new google.maps.Map(document.getElementById('map'),{
				    center: { lat:-34.397, lng:150.644},
				    zoom:8});
				    }
				    </script>-->
				   
                                </div>
				
<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBXhnBXfh7MPSAgVMhV_QAENBESYN0NN0s&callback=myMap" async defer></script>-->

			<?php
    endwhile;
    wp_reset_query();
    ?>	
                            </div>
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
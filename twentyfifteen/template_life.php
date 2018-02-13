  <?php
  /* Template Name: life
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
            <div class="oddbods-hero hero-hight oddbods-life " style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('life_oa_banner', 'banner_image_title'); ?></h4>
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

<input type="hidden" value="<?php the_cfc_field( 'life_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimglifeoa">
        <!-- ODDBODS HERO IMAGE END --> 
        <!-- ODDBODS TEXT START -->
        <section class="ok">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid" style="padding-top:40px;">
                        <div class="oddbods-text">
					
			<?php foreach( get_cfc_meta( 'life_oa' ) as $key => $value ){ 
		
						 $videolink = get_cfc_field('life_oa', 'image_link', false, $key); 
		
  

 if($videolink != null){

?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="oddbods-text life-hight image" style="background-image:url(<?php the_cfc_field( 'life_oa','life_image', false, $key ); ?>)">
                                    <div class="oddbods-video-icon odd-text-center">
                                     <!--  <img src="<?php //the_cfc_field( 'life_oa','life_image', false, $key ); ?>" class="image"/>-->
                                         <a href="<?php the_cfc_field( 'life_oa','image_link', false, $key ); ?>" class="video-pop-btn popup-youtube"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
						    <?php
						   }
						   else{
						   	  ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="center life-hight image " style="background-image:url(<?php the_cfc_field( 'life_oa','life_image', false, $key ); ?>)" data-darkbox="<?php the_cfc_field( 'life_oa','life_image', false, $key ); ?>"data-darkbox-group="two">
                                </div>
                            </div>
                       
		      
		       
		       
		        <?php
						   
						   }  
						   }
						   ?>
                


		       
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
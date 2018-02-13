 <?php
 /* Template Name: Press-releases
 */
 get_header();?>
  <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    
    ?>
            <div class="oddbods-hero hero-hight oddbods-releases " style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">		
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('press_releases', 'banner_image_title'); ?></h4>
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


<input type="hidden" value="<?php the_cfc_field( 'press_releases_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgpressreleases">
        <!-- ODDBODS HERO IMAGE END --> 
        <!-- ODDBODS TEXT START -->
        <section class="ok">
	<?php

	//$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			 $args = array(
                     'post_type' => 'blogs',
		      // 'paged' => $paged,
		 
                      'posts_per_page' => 5
                           );
                       $the_query = new WP_Query($args);
                         if ($the_query->have_posts()) {
                          while ($the_query->have_posts()) {
			//for($i=1;$i<=5;$i++) {
			
                           $the_query->the_post(); ?>
			  
						<?php   $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
						   
							   
					   ?>
					   	<style>
						img.mob-postimg {
    width: 100%;
    height: 317px;
}
						.oddbods-text p {
    font-size: 23px !important;}
</style>

            <div class="odd-text ">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
						<div class="col-lg-2 col-md-2 hidden-sm hidden-xs "></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
			
			
			
                            <div class="oddbods-text blogpost">
		<!--<input type="hidden" value="<?php //the_cfc_field( 'mobile_blog_post','mobile_banner_upload'); ?>" id="blogimgpressreleases">-->
				<img src="<?php echo $pic[0]; ?>" class="image"/>
				
		
                            </div>
			    <?php $attachment_id = get_field('blog_post_section');
$size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
// url = $image[0];
// width = $image[1];
// height = $image[2];
?>
<!--<img src="<?php //echo $image[0]; ?>" class="mob-postimg" />-->
			   		<div class="top-pading">
								
						
                            <div class="oddbods-icon-text">
                                <h5 class="left" style="padding-top:50px;"><?php the_title();?></h5>
                                <p class="p-date-time"><?php the_time(get_option('date_format'));  ?></p>
                                <div class="line" style="margin-top:20px;"></div>
                            </div>
                            <div class="oddbods-text text-h">
                                <p class="text-padding" style="font-size:20px;"><?php the_excerpt();?></p>
                            </div>
                             <div class="oddbods-icon-text left main-icon-oddbards" style="padding-top:40px;">
                                <a href="<?php echo get_permalink();?>"><button class="odd-btn" style="margin-top:0px;margin-bottom:0px !important;">Read more
                                    </button></a>
                            </div>
                        </div>

                        </div>
			
            
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>

	     <?php
	    }
                          //   }
			     
									
                        }
                     wp_reset_postdata();
                    ?>	

		   <div class="next-prev"> 
 <?php echo get_next_posts_link( 'Next', $the_query->max_num_pages ); ?></li>
 <?php echo get_previous_posts_link( 'Previous' ); ?>		   

   

      
	    </div>
	          
        </section>


        <!-- ODDBODS TEXT END -->
        
      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
        
	<?php get_footer();?>
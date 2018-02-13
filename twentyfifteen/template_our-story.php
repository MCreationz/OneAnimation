 <?php
 /* Template Name: Our-story
 */
 get_header();?>

 <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
    $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
    ?>
            <div class="oddbods-hero hero-hight oddbods-story" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('our_story_banner_title', 'banner_image_title'); ?></h4>
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

<input type="hidden" value="<?php the_cfc_field( 'our_story_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgourstory">

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
 
    ?>
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
        <!-- LAYER SECTION 2 START -->
	<?php foreach( get_cfc_meta( 'our_story' ) as $key => $value ){ ?>    
        <section class="layer-1">
            <div class="oddbods-hero">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
					
		


<?php
 $videolink1 = get_cfc_field('our_story', 'video_link1', false, $key);
						 if($videolink1 != null){
						  ?>
						 
						        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-right phone-padding">
                                    <div class="oddbods-text hero-hight-video" style="min-height:400px;">
                            <div class="oddbods-video-icon odd-text-center image" style="background-image:url(<?php the_cfc_field('our_story', 'story_image1', false, $key); ?>)">
                                
                                    <a href="<?php the_cfc_field('our_story', 'video_link1', false, $key); ?>" class="video-pop-btn popup-youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				    
				   
				    
                            </div>
                        </div>
                            </div>
			
					       <?php
						   }
						   else{
						   	  ?>
						   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-left phone-padding">
                            <div class="oddbods-text hero-hight-video image" style="background-image: url(<?php the_cfc_field('our_story', 'story_image1', false, $key); ?>); min-height: 400px;">
                            </div>
                        </div>
						  <?php
						   
						   }
						   ?>
				            
                      <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-right phone-padding">
                            <div class="oddbods-text hero-hight-video image" style="background-image: url(<?php// the_cfc_field('our_story', 'story_image2', false, $key); ?>); min-height: 400px;">
                            </div>
                        </div>-->
						
						<?php $path = get_cfc_field('our_story', 'story_image2', false, $key); 
					$pathhh = $path['url'];
					$path_infoo = pathinfo($pathhh);
                    //print_r($path_info);
                    $extt = $path_infoo['extension'];
                          //echo '<p style="font-size:45px;">extension  '.$ext.'</p>';
					
						 $videolink = get_cfc_field('our_story', 'video_link2', false, $key);
						 if($videolink != null){
						  ?>
						 
						        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-right phone-padding">
                                    <div class="oddbods-text hero-hight-video" style="min-height:400px;">
                            <div class="oddbods-video-icon odd-text-center image" style="background-image:url(<?php the_cfc_field('our_story', 'story_image2', false, $key); ?>)">
                                
                                    <a href="<?php the_cfc_field('our_story', 'video_link2', false, $key); ?>" class="video-pop-btn popup-youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				    
				   
				    
                            </div>
                        </div>
                            </div>
			
					       <?php
						   }
						   else{
						   	  ?>
						   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 p-left phone-padding">
                            <div class="oddbods-text hero-hight-video image" style="background-image: url(<?php the_cfc_field('our_story', 'story_image2', false, $key); ?>); min-height: 400px;">
                            </div>
                        </div>
						  <?php
						   
						   }
						   ?>
						
						
						
						
						
						
						
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 2 END -->
         <!-- ODDBODS TEXT START -->
        <section class="ok">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
                            <p><?php the_cfc_field('our_story', 'story_content1', false, $key); ?></p>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
    

<?php }  ?>   
        
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<?php get_footer();?>
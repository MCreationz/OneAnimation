 <?php
 /* Template Name: Show-oddbods
 */
 get_header();?>
  <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post();
$pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');    
    ?>
            <div class="oddbods-hero hero-hight" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                          <div class="oddbods-text odd-text-img ">
							<div class="add-logo-image hidden-xs" style="background-image: url(http://dev.oneanimation.com/wp-content/uploads/2018/01/odd-logo-1.png);">
								
							</div>
							
<!--                             <h4><?php the_cfc_field('oddbods_slider_heading', 'banner_image_title'); ?></h4> -->
							<img  class="image hidden-sm hidden-md hidden-lg" src="http://dev.oneanimation.com/wp-content/uploads/2018/01/odd-logo-1.png"/>
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
<input type="hidden" value="<?php the_cfc_field( 'oddbods_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimgoddbods">

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
		
		
		<!-- ODDBODS NEW START -->
		 <?php if( get_field('enable_oddbods_episode_section') == 0 ): ?>
        <section class="">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
						<?php foreach( get_cfc_meta( 'oddbods_episode' ) as $key => $value ){ ?>     
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding">
                                <div class="oddbods-section-text center">
                                    <h2><?php the_cfc_field( 'oddbods_episode','heading', false, $key ); ?></h2>
                                    <div class="oddbods-new-box" style="background-color:<?php the_cfc_field( 'oddbods_episode','color', false, $key ); ?>;">
                                        <p><?php the_cfc_field( 'oddbods_episode','sub_heading', false, $key ); ?></p>
										<p><?php the_cfc_field( 'oddbods_episode','sub_heading1', false, $key ); ?></p>
										<p><?php the_cfc_field( 'oddbods_episode','sub_heading2', false, $key ); ?></p>
                                    </div>
                               </div>
                            </div>
              <?php }  ?> 
                 
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
			 <?php endif;?>
        <!-- ODDBODS NEW END -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <?php if( get_field('enable_oddbods-broadcaster_section') == 0 ): ?>
		
		
		 <section id="" class="">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center cat" style="padding-bottom:50px;">
                            <h4><?php the_cfc_field('oddbods_slider_heading', 'broadcaster_heading'); ?></h4>
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
			    <?php foreach( get_cfc_meta( 'show_oddbos_images' ) as $key => $value ){ ?>   
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="partners-icon center">
                                        <img src="<?php the_cfc_field( 'show_oddbos_images','oddbods_images', false, $key ); ?>" class="image">
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
		
		
        <!-- LAYER SECTION 2 START -->
        <section class="layer-1">
            <div class="oddbods-hero">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-text hero-hight-video">
                            <div class="oddbods-video-icon odd-text-center image" style="background-image:url(<?php the_cfc_field('oddbods', 'oddbods_image'); ?>)">
                                
                                    <a href="<?php the_cfc_field('oddbods', 'oddbods_link'); ?>" class="video-pop-btn popup-youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				    
				   
				    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 2 END -->
          <!-- LAYER SECTION 4 START -->

        <!-- MC Code -->
        <?php if( get_field('enable_rewards_section') == 0 ): ?>
            <!-- End MC Code -->
	    <style>
	    .owl-nav{display:none;}
	    .owl-carousel .owl-item img {
    display: block;
   
    width: 231px !important;
}</style>
	      <h4 class="center" style=" font-size: 30px;  color: #6e686e;
    padding: 39px 0px;"><?php the_cfc_field('oddbods_slider_heading', 'slider_heading'); ?></h4>
   <div class="owl-carousel owl-theme">
					<?php 
          $args = array(
          'post_type'   => 'oddbods_award',
          'posts_per_page'  => -1,
          'order'   =>'ASC',
          'orderby'   => 'date',
          'post_status'      => 'publish'
          );

          //$slider = get_posts( $args ); 
          $awards = new WP_Query( $args );

          if ( $awards->have_posts() ) :
          while ( $awards->have_posts() ) : $awards->the_post(); 
          ?>


					<?php// $active = "" ; ?>

   <?php// foreach( get_cfc_meta( 'award_oddbods' ) as $key => $value ){
//$slide =  the_cfc_field( 'award_oddbods','slider', false, $key );
//echo '<p style="background-color:red;color:white;font-size:23px;">'.$slide.'</p>';  
   ?> 
 
                                          <div class="item active<?php //echo $active ; ?>">
					 <!-- <div class="col-xs-12 col-sm-6 col-md-4">-->
					  <div class="col-xs-12">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block">
                                            </div>
					 
                                         
                                     
                                          </div>
					   <?php endwhile; ?>
        <?php endif;  ?>
        <?php wp_reset_query(); ?>  

<?php// $active = $active + 1 ; ?>
<?php //}  ?> 
                                          </div>
                                      
        <!-- MC Code -->
    <?php endif;?>
    <!-- End MC Code -->





        <!-- LAYER SECTION 4 END -->
        <!-- LAYER SECTION 3 START -->
        <section id="">
            <div class="oddbods-icon">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-icon-text center cat">
                            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Oddbods Sidebar')) : else : ?>
<?php endif; ?>

<?php //the_cfc_field('social_link', 'social_icon'); ?>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 3 END -->
      
        <!-- LAYER SECTION 5 START -->
        <section id="" class="cat">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('oddbods_slider_heading', 'bottom_subheading'); ?></p>
                               <a href="<?php the_cfc_field('oddbods_slider_heading', 'button_link'); ?>"> <button  class="odd-btn"><?php the_cfc_field('oddbods_slider_heading', 'button'); ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
	

        <!-- LAYER SECTION 5 END -->
	<?php get_footer();?>
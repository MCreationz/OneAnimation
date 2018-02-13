<?php
/* Template Name: home
*/
 get_header();
?>
  <!-- HERO SLIDER START -->
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
		
                <!-- Indicators -->
<!--
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
-->
                <!-- Wrapper for slides -->
             	
                <div class="carousel-inner" role="listbox">
		
		<?php// echo do_shortcode("[metaslider id=512]");?>
		<?php $active = "" ; ?>
               <!-- Item 1 -->
		<?php foreach( get_cfc_meta( 'home_slider' ) as $key => $value ){
		?>     
                    <div class="item active<?php echo $active ; ?> <?php the_cfc_field( 'home_slider','slider_class', false, $key ); ?> image" style="background-image: url(<?php the_cfc_field( 'home_slider','slider_image', false, $key ); ?>);" >
                        <div class="row"><div class="container-fluid cont">
                            <div class="<?php the_cfc_field( 'home_slider','class_1', false, $key ); ?>">
                                <div class="<?php the_cfc_field( 'home_slider','class_2', false, $key ); ?>">
                               <div class="<?php the_cfc_field( 'home_slider','class_3', false, $key ); ?>">
                                        <h3><?php the_cfc_field( 'home_slider','slider_heading', false, $key ); ?></h3>
                                </div>
                                    <h4><?php the_cfc_field( 'home_slider','slider_text', false, $key ); ?></h4>  
                                </div>
                             </div>
                            <div class="col-md-3 text-right">
                                
                            </div>
                            
                        </div></div>
                     </div> 
                   
                    <a href="#" class="scroll-down" address="true"></a>
		    <?php $active = $active + 1 ; ?>

<?php }  ?>   

                </div>
		
                             <!-- End Wrapper for slides-->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i><span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span>
                </a>
       
		
		
            </div>
        </div>
        <!-- HERO SLIDER END -->
        <!-- HOME LAYER 2 START -->
        <section class="ok">
            <div class="hero-contact-layer-2">
                <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
		     <?php
			 $args = array(
                     'post_type' => 'post',
		      'order' => 'asc',
                      'posts_per_page' => 3
		      
                           );
                       $the_query = new WP_Query($args);
                         if ($the_query->have_posts()) {
                          while ($the_query->have_posts()) {
                           $the_query->the_post();
						   $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
						   ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <a href="<?php echo get_permalink();?>"> <div class="layer-2-img">
                                <img src="<?php echo $pic[0]; ?>" class="image"/>
                            </div></a>
                            <div class="layer-2-contact">
                                <h4><?php the_title();?></h4>    
                            </div>
                        </div>
                   
                       <?php
                             }
									
                        }
                     wp_reset_postdata();
                    ?>	 
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
     <style>
  .layer-2-contact a:hover
  {
  text-decoration: none;
    }
    </style>
    <?php $act = "1" ; ?>
	<?php foreach( get_cfc_meta( 'home__mobile_slider' ) as $key => $value ){
		?> 
	
	<input type="hidden" value="<?php the_cfc_field( 'home__mobile_slider','mobile_slider_image', false, $key ); ?>" id="mobimg<?php echo $act ; ?>">
	  <?php $act = $act + 1 ; ?>
	<?php
	
            }
	?>
	
	
	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
         <!-- HOME LAYER 2 END -->    
	 <?php get_footer();?>
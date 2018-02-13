<?php
/* Template Name: Management
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
            <div class="oddbods-hero hero-hight" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                            <h4><?php the_cfc_field('managment', 'banner_image_title'); ?></h4>
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
        <!-- ODDBODS HERO IMAGE END --> 
        
        <!-- ODDBODS TEXT START -->
        <section class="ok">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
                            <div class="profile center" id="panel2" style="max-width: 100% !important;">
                               <div style="width:415px;margin:0 auto;float:none;"> <img src="<?php the_cfc_field( 'managment','picture'); ?>"  class="image footermusic_bg"/></div>
                                <h2><?php the_cfc_field( 'managment','name' ); ?></h2>
                                <h5><?php the_cfc_field( 'managment','position' ); ?></h5>
				   <p class="center" style="padding-top:50px;"><?php the_cfc_field( 'managment','content_mamagment'); ?> </p>
                            </div>
                         
                            <div class="line" style="padding-top:50px; width:70%;"></div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS TEXT END -->
        <!-- ODDBODS TEXT START -->
	       <?php if( get_field('enable_managment-section') == 0 ): ?>
        <section class="">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="oddbods-text">
		<?php foreach( get_cfc_meta( 'managment' ) as $key => $value ){ ?>       
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="profile-mamber center">
                                <img src="<?php the_cfc_field( 'managment','picture', false, $key ); ?>"  class="image selectimg"/>
                                    <h2 ><?php the_cfc_field( 'managment','name', false, $key ); ?></h2>
                                    <h5><?php the_cfc_field( 'managment','position', false, $key ); ?></h5>
				    <p style="    display: none;"><?php the_cfc_field( 'managment','content_mamagment', false, $key ); ?></p>
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
        <!-- ODDBODS TEXT END -->
        <!-- ODDBODS TEXT START -->

        <!-- ODDBODS TEXT END -->
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>

	<?php get_footer();?>
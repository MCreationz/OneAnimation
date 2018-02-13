  <?php
  /* Template Name:Privacy Policy
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
                            <h4><?php the_title();?></h4>
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
                            <div class="oddbods-icon-text">
<!--                                <h4 style="font-size:40px;">Listings</h4>-->
                            </div>
			      <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
                            <h5 style="padding-top:40px;"><?php the_title();?></h5>
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
        <?php get_footer();?>
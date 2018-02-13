 <?php
 /* Template Name: Listing
 */
 get_header();?>
  <!-- ODDBODS HERO IMAGE START -->
        <section class="layer-1">
	 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); 
     $pic = wp_get_attachment_image_src(get_post_thumbnail_id(),'featured-home-thumb');
    ?>
            <div class="oddbods-hero hero-hight oddbods-listings" style="background-image: url(<?php echo $pic[0]; ?>);">
            <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid odd-text-center">
                        <div class="oddbods-text">
                           <h4><?php the_cfc_field('listing_banner', 'banner_image_title'); ?></h4>
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
<input type="hidden" value="<?php the_cfc_field( 'listings_mobile_banner','mobile_banner_upload'); ?>" id="bsnnerimglistings">
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
			    
			     <?php if( get_field('enable_jobopening_section') == 0 ): ?>
                            <h5><?php the_cfc_field( 'listing_banner','listing_main_heading'); ?></h5>
			   

                            <ul class="job-text">
							 <?php
			 $args = array(
                     'post_type' => 'jobdescriptions',
					 'order'   => 'asc',
                      'posts_per_page' => 10
                           );
                       $the_query = new WP_Query($args);
                         if ($the_query->have_posts()) {
                          while ($the_query->have_posts()) {
                           $the_query->the_post();
						   
						   ?>
                                <li class="job-text-one heading_li"><a href="<?php echo get_permalink();?>"><?php the_title();?></a> </li>
                              <!--  <ul class="job-text-p">
                                   <li> <?php// the_cfc_field( 'listing','sub_headings', false, $key ); ?></li>
                                    <li><?php// the_cfc_field( 'listing','part1', false, $key ); ?></li>
                                    <li><?php// the_cfc_field( 'listing','part2', false, $key ); ?></li>
                                </ul>-->
                             
                               <?php
                             }
									
                        }
                     wp_reset_postdata();
                    ?>	 
                            </ul> 
 	
<?php endif; ?>		    
			     <div id="pl-337" class="panel-layout">
<div id="pg-337-0" class="panel-grid panel-no-style">
<div id="pgc-337-0-0" class="panel-grid-cell" data-weight="1">
<div id="panel-337-0-0-0" class="so-panel widget widget_sow-editor panel-first-child panel-last-child" data-index="0">
<div class="so-widget-sow-editor so-widget-sow-editor-base">
<div class="siteorigin-widget-tinymce textwidget">
<h5 style="padding-top: 30px;">Steps</h5>
<ul class="job-text" style="padding-left: 0px;">
<?php foreach( get_cfc_meta( 'listing' ) as $key => $value ){ ?>      
 	<li class="job-text-two"><?php the_cfc_field( 'listing','job_title', false, $key ); ?>
<ul class="job-text-p" style="padding-left: 0px;">
 	<li style="padding-top: 0px;"><?php the_cfc_field( 'listing','job_description', false, $key ); ?></li>
</ul>
</li>
 <?php }  ?>   

</ul>
</div>
</div>
</div>
</div>
</div>
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
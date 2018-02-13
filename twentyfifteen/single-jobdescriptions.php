<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 get_header();?>

 
  <!-- ODDBODS HERO IMAGE START -->
 
        <section class="layer-1">
            <div class="line" style="padding-top:74px;"></div>
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-text" style="padding-top:40px;">
                            <ul class="job-text-head">
							
 	<li><a><?php the_cfc_field( 'jobdescription','job_title_heading'); ?></a><?php the_cfc_field( 'jobdescription','job-title'); ?></li>
 	<li><a><?php the_cfc_field( 'jobdescription','job_location_heading'); ?></a> <?php the_cfc_field( 'jobdescription','job-location'); ?></li>
 	<li><a><?php the_cfc_field( 'jobdescription','job_department_heading'); ?></a> <?php the_cfc_field( 'jobdescription','job-department'); ?></li>
 	<li><a><?php the_cfc_field( 'jobdescription','job_repots_to_heading'); ?></a> <?php the_cfc_field( 'jobdescription','job_reports'); ?></li>
 	<li class="text-padding"><span style="font-weight: 200;"><?php the_content(); ?></li>

                            </ul>  
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- ODDBODS HERO IMAGE END -->
 
         <!-- ODDBODS TEXT START -->
        <section class="">
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid ">
                     <div class="oddbods-text">
					 <?php foreach( get_cfc_meta( 'job_type' ) as $key => $value ){ ?>     
                            <h5 class="cat"><?php the_cfc_field( 'job_type','job_title', false, $key ); ?></h5>
                            <ul class="job-text-des">
                        <?php the_cfc_field( 'job_type','job_description', false, $key ); ?>
                            </ul> 
                         <?php }  ?>   
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>

        <!-- ODDBODS TEXT END -->
      
        <!-- LAYER SECTION 5 START -->
			  <?php if( get_field('enable_distribution_section') == 0 ): ?>
        <section id="" class="cat">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('job_description_contact', 'main_title'); ?></p>
                              <a href="<?php the_cfc_field('job_description_contact', 'button_link'); ?>">  <button class="odd-btn"><?php the_cfc_field('job_description_contact', 'button_name'); ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
		    <?php endif;?>
        <!-- LAYER SECTION 5 END -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<?php get_footer();?>
 <?php
 /* Template Name: job-descripation
 */
 get_header();?>

 
  <!-- ODDBODS HERO IMAGE START -->
  <?php foreach( get_cfc_meta( 'jobdescription' ) as $key => $value ){ ?>     
        <section class="layer-1">
            <div class="line" style="padding-top:74px;"></div>
            <div class="odd-text">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="oddbods-text" style="padding-top:40px;">
                            <ul class="job-text-head">
							
 	<li><a>Title:</a><?php the_cfc_field( 'jobdescription','job-title', false, $key ); ?></li>
 	<li><a>Location:</a> <?php the_cfc_field( 'jobdescription','job-location', false, $key ); ?></li>
 	<li><a>Department:</a> <?php the_cfc_field( 'jobdescription','job-department', false, $key ); ?></li>
 	<li><a>Reports to:</a> <?php the_cfc_field( 'jobdescription','job_reports', false, $key ); ?></li>
 	<li class="text-padding"><span style="font-weight: 200;"><?php the_cfc_field( 'jobdescription','job_content', false, $key ); ?></li>

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
						
                            <h5 class="cat"><?php the_cfc_field( 'jobdescription','job-heading', false, $key ); ?></h5>
						
                            <ul class="job-text-des">
                         <?php the_cfc_field( 'jobdescription','job_description', false, $key ); ?>
						   
                            </ul> 
                      <h5 class="cat"><?php the_cfc_field( 'jobdescription','job-heading', false, $key ); ?></h5>
						
                            <ul class="job-text-des">
                         <?php the_cfc_field( 'jobdescription','job_description', false, $key ); ?>
						   
                            </ul> 
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
		 <?php }  ?>  
        <!-- ODDBODS TEXT END -->
      
        <!-- LAYER SECTION 5 START -->
        <section id="" class="cat">
            <div class="oddbods-icon" style="background-color:#454545;">
                 <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="oddbods-icon-text center">
                            <p><?php the_cfc_field('job_description_contact', 'main_title'); ?></p>
                                <a href="<?php the_cfc_field('job_description_contact', 'button_link'); ?>"><button class="odd-btn"><?php the_cfc_field('job_description_contact', 'button_name'); ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER END -->
            </div>
        </section>
        <!-- LAYER SECTION 5 END -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
	<?php get_footer();?>
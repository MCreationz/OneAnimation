<?php
/*
Template Name: Awards Template
*/
get_header();?>
?>

  <div>
    Please have a look. Am just doing functionality on rewards section div not on whole page.
    </div>

    <p>For hiding rewards section Go wp-admin > pages > Awards > change the Enable Awards Scetion to No from dropdown. </p>


      <h2>Rewards</h2>
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


                  
                  
                    <!-- Start Our courses content -->
                    <div class="item">
                    <img src="<?php the_post_thumbnail_url(); ?>" />
                      <h4><a href="#"><?php echo get_the_title($post->ID); ?></a></h4>
                      <p><?php echo get_the_content($post->ID); ?></p>
                    </div>

        <?php endwhile; ?>
        <?php endif;  ?>
        <?php wp_reset_query(); ?>   
        </div>









<script type="text/javascript">
jQuery(document).ready(function() {
  // Calculate number of Slides
  var totalItems = $('.owl-carousel .item').length;
  console.log(totalItems);


  // If there is only three slides
  if (totalItems < 4) {
    var isLooped = false;
    var isNav = false;
    var isautoplay = false;
    var iscenter = true;
  } 
  else {
    var isLooped = true;
    var isNav = true;
    var isautoplay = true;
    var iscenter = false;
  }

  if (totalItems < 2) {
    var iscenter = true;
  } 
  else {
   
    var iscenter = false;
  }


  // Initiate Carousel
  $('.owl-carousel').owlCarousel({
      //add in your dynamic variables to your options
      loop: isLooped,
      nav:isNav,
      // then any other options...
      margin:0,
      center: iscenter,
      lazyLoad:true,
      dots: true,
      video:true,
      autoplay: isautoplay,
      //autoplayTimeout:3500,
     // autoplayHoverPause:true,
      navSpeed:1300,
      //autoplaySpeed:1300,
      responsive:{
        0:{
            items:1
        },
        767:{
            items:1
        },
        1000:{
            items:3
        }
      }
  });
});



</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>
<?php get_footer();?>

</body>
</html>



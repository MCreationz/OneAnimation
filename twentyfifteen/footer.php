<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

 <!-- FOOTER START -->
        
        <section>
            <div class="footer">
                   <!-- CONTAINER START -->
                <div class="container-sm">
                    <div class="container-fluid cat">
                        <div class="footer-icon center">
                                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer')) : else : ?>
                            <?php endif; ?>
                            <div class="footer-text center">
                              <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom Footer')) : else : ?>
                            <?php endif; ?>
                            </div>
                        </div>
                     </div>
                </div>
                <!-- CONTAINER END -->         
            </div>
        </section>
        
        <!-- FOOTER END -->
        <!------ INDEX  LAYER 6 FOOTER END ---------->
        
        <!---- JAVA SCRIPT FILE ----->
       
 
 
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/magnific-popup.js"></script>
   <!-- <script src="<?php bloginfo('template_url');?>/js/jquery.popVideo.js"></script>m -->
    	 <script src="<?php bloginfo('template_url');?>/js/darkbox.js"></script>
	<!--<script src="<?php //echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>-->

<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url');?>/js/main.js" type="text/javascript"></script> 
        <?php if( get_field('enable_press-kit-button_section') == 0 ): ?>
<script type="text/javascript">
  $(document).ready(function(){
$('.profile-mamber').on('click',function(){
var imgg = $(this).children('img').attr('src');
var headingg = $(this).children('h2').html();
var textt = $(this).children('h5').html();
var desc = $(this).children('p').html();
   $('.footermusic_bg').attr('src', ''+imgg); 
   $('.profile').children('h2').html(headingg);
   $('.profile').children('h5').html(textt);
    $('.profile').children('p').html(desc);
    $('html,body').animate({scrollTop: ($('#panel2').offset().top)+(-116)+'px'},900);
});

  
  <!--$(".zip").children("a").first().text("<?php the_cfc_field('press_kit', 'button_name'); ?>");-->
  
  
   });
</script>
    <?php endif;?>


<script>
  $(document).ready(function(){
  
   var img1 = $('#mobimg1').val();
   var img2 = $('#mobimg2').val();
    var img3 = $('#mobimg3').val();
      var img4 = $('#mobimg4').val();
        var img5 = $('#mobimg5').val();
	  var img6 = $('#mobimg6').val();
	    var img7 = $('#mobimg7').val();
	      var img8 = $('#mobimg8').val();
	        var img9 = $('#mobimg9').val();
		  var img10 = $('#mobimg10').val();
		//banner images
		  var bnimg = $('#bsnnerimgoddbods').val();
		   var bnimg1 = $('#bsnnerimgisectibles').val();
		    var bnimg2 = $('#bsnnerimgrobtherobot').val();
		     var bnimg3 = $('#bsnnerimgdistribution').val();
		      var bnimg4 = $('#bsnnerimglicensing').val();
		       var bnimg5 = $('#bsnnerimgpresskit').val();
		        var bnimg6 = $('#bsnnerimgpressreleases').val();
			 var bnimg7 = $('#bsnnerimgcareers').val();
			  var bnimg8 = $('#bsnnerimglistings').val();
			   var bnimg9 = $('#bsnnerimgourstory').val();
			    var bnimg10 = $('#bsnnerimgcontactus').val();
			     var bnimg11 = $('#bsnnerimglifeoa').val();

		    var bnimg12 = $('#bsnnerimgfaq').val();
		    var bnimg13 = $('#blogimgpressreleases').val();
		  
		  
		  
   var width = $(window).width();
   if ($(window).width() < 960) {
    $('.active').css('background-image','url('+img1+')');
       $('.active1').css('background-image','url('+img2+')');
       $('.active2').css('background-image','url('+img3+')');
        $('.active3').css('background-image','url('+img4+')');
	 $('.active4').css('background-image','url('+img5+')');
	  $('.active5').css('background-image','url('+img6+')');
	   $('.active6').css('background-image','url('+img7+')');
	    $('.active7').css('background-image','url('+img8+')');
	     $('.active8').css('background-image','url('+img9+')');
	      $('.active9').css('background-image','url('+img10+')');
	      
	      //banner images
	      $('.oddbods-hero').css('background-image','url('+bnimg+')');
	         $('.oddbods-insectibles').css('background-image','url('+bnimg1+')');
		    $('.oddbods-robrobot').css('background-image','url('+bnimg2+')');
		       $('.oddbods-distribution').css('background-image','url('+bnimg3+')');
		        $('.oddbods-licensing').css('background-image','url('+bnimg4+')');
	 
		          $('.oddbods-kit').css('background-image','url('+bnimg5+')');
			     $('.oddbods-releases').css('background-image','url('+bnimg6+')');
			        $('.oddbods-carrer').css('background-image','url('+bnimg7+')');
				   $('.oddbods-listings').css('background-image','url('+bnimg8+')');
				      $('.oddbods-story').css('background-image','url('+bnimg9+')');
				         $('.oddbods-contacts').css('background-image','url('+bnimg10+')');
					    $('.oddbods-life').css('background-image','url('+bnimg11+')');
					   
	                                          $('.carres-5').css('background-image','url('+bnimg12+')');
	      
	     
}
  
  });
 </script>

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
      autoplayTimeout:2000,
      //autoplayHoverplay:true,
      navSpeed:1300,
      autoplaySpeed:1300,
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
<script>

</script>

<?php wp_footer(); ?>

</body>
</html>

function myFunction(x) {
    x.classList.toggle("change");
}


//SLIDER START

(function( $ ) {

    //Function to animate slider captions 
    function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	
	//Variables on page load 
	var $myCarousel = $('#carousel-example-generic'),
		$firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
		
	//Initialize carousel 
	$myCarousel.carousel();
	
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);
	
	//Pause carousel  
	$myCarousel.carousel('pause');
	
	
	//Other slides to be animated on carousel slide event 
	$myCarousel.on('slide.bs.carousel', function (e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});  
    $('#carousel-example-generic').carousel({
        interval:3000,
        pause: "false"
    });
	
})(jQuery);	

/************************ SCROOL DOWN ********************************/

   $('.scroll-down').on('click',function(){

    $('html,body').animate({scrollTop: ($('section.ok').offset().top)+(-70)+'px'},900);

  });

  $('.scroll-down-1').on('click',function(){

    $('html,body').animate({scrollTop: ($('section.ok-2').offset().top)+(-70)+'px'},900);

  });

   

/*********************************************** slider START ***************************************/

$(document).ready(function(){

$('#itemslider').carousel({ interval: 3000 });

$('.carousel-showmanymoveone .item').each(function(){
var itemToClone = $(this);

for (var i=1;i<6;i++) {
itemToClone = itemToClone.next();

if (!itemToClone.length) {
itemToClone = $(this).siblings(':first');
}

itemToClone.children(':first-child').clone()
.addClass("cloneditem-"+(i))
.appendTo($(this));
}
});
});

/*********************************************** GOOGLE MAP START ***************************************/

function myMap() {
      var mapCanvas = document.getElementById("map");
      var myCenter = new google.maps.LatLng(30.6984528,76.7178726); 
      var mapOptions = {center: myCenter, zoom: 14};
      var map = new google.maps.Map(mapCanvas,mapOptions);
      var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
      });
      marker.setMap(map);
    }


/************************************* VIDEO PROPUP *****************************************/
/** MAGNIFIC POPUP **/
function MagnificPopup() {

    $('.popup-modal').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: true
    });
    $(document).on('click', '.modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });

    $(function () {
        $('.single-image').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }

        });
    });
}
MagnificPopup();
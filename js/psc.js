jQuery(function($){

/////////////////  PUSH DOWN FOOTER  \\\\\\\\\\\\\\\\\

$(document).ready(function() {
	$('#js-heightControl').css('height', $(window).height() - $('html').height() +'px');
});

/////////////////  SLIDER  \\\\\\\\\\\\\\\\\
$(document).ready(function() {
	$('#heroSlider').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  infinite: true,
	  arrows: false,
	  dots: true,
	  appendDots: '#heroDots',
	  dotsClass: 'hero-dots',
	  autoplay: true,
	  autoplaySpeed: 5000,
	  fade: true,
	  fadeSpeed: 1000
	});
});

/////////////////  HAMBURGER FUNCTIONALITY  \\\\\\\\\\\\\\\\\
  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
  });

//

///////////////////////////////////////////////////
//Disable the parent pages link in breadcrumbs
$('#breadcrumbs a[href$="about/"], #breadcrumbs a[href$="membership/"], #breadcrumbs a[href$="events/"], #breadcrumbs a[href$="publications/"], #breadcrumbs a[href$="news/"]' ).removeAttr("href").css("cursor","default");

//end of file
});
jQuery(function($){

/////////////////  NO FOLLOW ON CAPTCHA  \\\\\\\\\\\\\\\\\

$(document).ready(function() {
	if ( window.location.href.indexOf("captchaintherye.com") > -1 ) {
		console.log('on captcha');
    } else if ( window.location.href.indexOf(".d4tw") > -1) {
		console.log('on d4tw');
    	}
	else {
    	alert('NEED TO REMOVE NOINDEX FROM HEADER & THIS LINE FROM JS');
    }
});

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

//end of file
});
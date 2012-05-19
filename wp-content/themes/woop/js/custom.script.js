$(document).ready(function(){
  
  $('a').smoothScroll({
    offset: 0,
    easing: 'swing',
    speed: 400
  });
  
  /* sticky bar */
	$("nav").sticky({topSpacing:0});

  /* recent work slider */
	$('#slides').slides({
		preload: true,
		generateNextPrev: true
	});

});



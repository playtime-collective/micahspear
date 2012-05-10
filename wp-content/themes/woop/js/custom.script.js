$(document).ready(function(){
  
  /* sticky bar */
	$("nav").sticky({topSpacing:0});

  /* recent work slider */
	$('#slides').slides({
		preload: true,
		generateNextPrev: true
	});

});



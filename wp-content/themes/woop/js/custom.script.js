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
	
	$.getJSON('http://micahman.tumblr.com/api/read/json?type=photo&num=9&callback=?',
  function(response) {
    for (i=0; i<=response.posts.length; i++) {
      var url = '<a href="' + response.posts[i].url + '">';
      var img = '<img src="' + response.posts[i]['photo-url-75'] + '"></img>';
      var list_item = '<li>' + url + img + '</li>';
      $(list_item).appendTo('ul.tumblr-blog');
    }
  });

});



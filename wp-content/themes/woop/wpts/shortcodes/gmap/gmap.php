<?php

$key = theme_get_option('general', 'gmap');

// Enqueue the GMAP Script
wp_enqueue_script( 'gmap-api', "http://maps.googleapis.com/maps/api/js?key=".$key."&sensor=false", array('jquery'), NULL );

//wp_enqueue_script( 'gmap-api', "http://maps.google.com/maps?file=api&v=2&sensor=true&key=ABQIAAAAE9tSYq-hy62Lh3MTwByikBQ0QrWYgSOG3rNu1mAQedHVJQevRhREYsj05gH-jGPJ_S9ETep7kAfd7g", array('jquery'), NULL );

wp_enqueue_script( 'gmap', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.gmap-1.1.0-min.js', array('jquery', 'gmap-api'), NULL );

function wpts_sc_googlemap($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		"width" => 'auto',
		"height" => '400',
		"address" => 'Brazil',
		"zoom" => 10,
		'align' => false,
	), $atts));

	if($width && is_numeric($width)){
		if($width != 'auto') {
			$width = 'width:'.$width.'px;';
		}
		else
		{
			$width = 'width: auto;';
		}
	}else{
		$width = '';
	}
	if($height && is_numeric($height)){
		$height = 'height:'.$height.'px;';
	}else{
		$height = '';
	}
	
	$align = $align?' align'.$align:'';
	$id = rand(100,1000);
	if($marker != 'false'){
		return <<<HTML
[raw]
<div class="map_frame map_canvas {$align}" id="{$id}" style="{$width} {$height}"></div>
<script type="text/javascript">
        // Google Map
		
        function initialize() {
			
			var geocoder;
			var map;
		
			geocoder = new google.maps.Geocoder();
             var myOptions = {
                center: new google.maps.LatLng(0, 0),
                zoom: {$zoom},
                 mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("{$id}"),
                myOptions);
				
			var address = "{$address}";
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				map.setCenter(results[0].geometry.location);
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location
				});
			  } else {
				alert("Geocode was not successful for the following reason: " + status);
			  }
			});
        }
		                                
        initialize();
          
</script> 
[/raw]
HTML;
	}
	else
	{
return <<<HTML
[raw]
<div id="google_map_{$id}" class="google_map{$align}" style="{$height}"></div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery("#google_map_{$id}").gMap({
	    zoom: {$zoom},
	    latitude: {$latitude},
	    longitude: {$longitude},
	    address: "{$address}",
		controls: {$controls},
		maptype: {$maptype},
	    scrollwheel:{$scrollwheel}
	});
});
</script>
[/raw]
HTML;
	}
}

add_shortcode('gmap','wpts_sc_googlemap');
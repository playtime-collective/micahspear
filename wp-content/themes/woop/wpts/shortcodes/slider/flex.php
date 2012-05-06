<?php


	// Enqueue the BX-Slider Script
	wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/wpts/shortcodes/flex/jquery.flexslider-min.js', array('jquery'), NULL );
	
	wp_enqueue_style( 'flex-slider-css', get_template_directory_uri() . '/wpts/shortcodes/flex/flexslider.css', array(), NULL, 'all' );
		
	// Shortcodes
		
	function wp_sc_flex_slider($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => '',
			'arrow' => 'false',
		), $atts));
		
		$html = '[raw]
		<div class="flex-container">
			<div class="flexslider" id="'.$id.'">
				<ul class="slides">'.do_shortcode($content).'
				</ul>
			</div>
		</div>
		<script type="text/javascript" charset="utf-8">
		  $(window).load(function() {
			$(\'.flexslider\').flexslider({
				  animation: "slide",
				  controlsContainer: ".flex-container",
				  directionNav: '.$arrow.'
			});
		  });
		</script>
		
		[/raw]';

		return $html;
	}

	add_shortcode('flex_slider','wp_sc_flex_slider');
		
	function wp_sc_flex_slider_item($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'src' => '',
			'caption' => '',
			'href' => '',
		), $atts));
		
		if($caption != '')
		{
			$caption = '<p class="flex-caption">'.$caption.'</p>';
		}
		
		$hclose = '';
		
		if($href!= '')
		{
			$href = '<a href="'.$href.'">';
			$hclose = '</a>';
		}
		
		$html = ' 
		<li>
			'.$href.'<img src="'.$src.'" />'.$hclose.'
			'.$caption.'
		</li>';
		
		return $html;

	}
	
	add_shortcode('flex_item', 'wp_sc_flex_slider_item');
	
?>
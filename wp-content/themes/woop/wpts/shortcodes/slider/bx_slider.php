<?php


	// Enqueue the BX-Slider Script
	wp_enqueue_script( 'bx-slider', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.bxSlider.min.js', array('jquery'), NULL );
		
	// Shortcodes
		
	function wp_sc_bx_slider($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => '',
			'width' => '',
			'mode' => 'horizontal',
			'speed' => '500',
			'infiniteloop' => 'true',
			'controls' => 'true',
			'nexttext' => 'Next',
			'prevtext' => 'Prev',
			'startingslide' => '0',
			'captions' => 'false',
			'easing' => 'swing',
			'pager' => 'false',
			'pagertype' => 'full',
			'pagerlocation' => 'bottom',
			'auto' => 'false',
		), $atts));
		
		$size = '';
						
		if($width != '' && $height != '')
		{
			$size = ' style="width: '.$width.'px; height: auto;"';
		}
		
		$html = '<div class="bx-slider"'.$size.'" id="'.$id.'"><div id="in-'.$id.'">'.do_shortcode($content).'</div></div><script type="text/javascript">jQuery(window).load(function(){  jQuery("#in-'.$id.'").bxSlider( { mode: "'.$mode.'", speed: '.$speed.', infiniteLoop: '.$infiniteloop.', controls: '.$controls.', nextText: "'.$nexttext.'", prevText: "'.$prevtext.'", startingSlider: "'.$startingslider.'", captions: '.$captions.', easing: "'.$easing.'", pager: '.$pager.', pagerType: "'.$pagertype.'", pagerLocation: "'.$pagerlocation.'", auto: '.$auto.'  }); }); </script>';
		
		return $html;
	}

	add_shortcode('bx_slider','wp_sc_bx_slider');
		
	function wp_sc_bx_slider_item($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => ''
		), $atts));
						
		if($id != '') { $id = ' id="'.$id.'"'; } 
		
		$html = '<div '.$id.' >'.do_shortcode($content).'</div>';
		
		return $html;

	}
	
	add_shortcode('bx_item', 'wp_sc_bx_slider_item');
	
?>
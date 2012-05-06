<?php


	// Enqueue the Nivo Slider Script
	wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.nivo.slider.pack.js', array('jquery'), NULL );

	// Enqueue Styles
	wp_enqueue_style( 'nivo-slider-css', get_template_directory_uri() . '/wpts/shortcodes/css/nivo/nivo-slider.css', array(), NULL, 'all' );
		
	wp_enqueue_style( 'nivo-default-theme', get_template_directory_uri() . '/wpts/shortcodes/css/nivo/themes/default/default.css', array(), NULL, 'all' );
	
	wp_enqueue_style( 'your-nivo-slider-css', get_template_directory_uri() . '/wpts/shortcodes/css/nivo/yourStyle.css', array(), NULL, 'all' );
		
	// Shortcodes
		
	function wp_sc_nivo_slider($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => '',
			'width' => '',
			'height' => '',
			'effect' => 'random',
			'slices' => '15',
			'boxcols' => '8',
			'boxrows'=> '4',
			'animspeed'=> '500',
			'pausetime'=> '3000',
			'startslide'=> '0',
			'directionnav'=> 'true',
			'directionnavhide'=> 'true',
			'controlnav'=> 'true',
			'controlnavthumbs'=> 'false',
			'controlnavthumbsfromrel'=> 'false',
			'controlnavthumbssearch'=> '.jpg',
			'controlnavthumbsreplace'=> '_thumb.jpg',
			'keyboardnav'=> 'true',
			'pauseonhover'=> 'true',
			'manualadvance'=> 'false',
			'captionopacity'=> '0.8',
			'prevtext'=> 'Prev',
			'nexttext'=> 'Next'
		), $atts));
		
		$size = '';
		
		if($width != '' && $height != '')
		{
			$size = ' style="width: '.$width.'px; height: '.$height.'px"';
		}

		$html = '<div class="slider-wrapper theme-default" '.$size.'><div class="ribbon"></div><div id="'.$id.'" class="nivoSlider" '.$size.'>'. do_shortcode($content) .'</div></div> [raw]<script type="text/javascript">jQuery(window).load(function(){jQuery("#'.$id.'").nivoSlider( { effect : "'.$effect.'", slices : '.$slices.', boxCols : '.$boxcols.', boxRows: '.$boxrows.', animSpeed: '.$animspeed.', pauseTime: '.$pausetime.', startSlide: '.$startslide.', directionNav: '.$directionnav.', directionNavHide: '.$directionnavhide.', controlNav: '.$controlnav.', controlNavThumbs: '.$controlnavthumbs.', controlNavThumbsFromRel: '.$controlnavthumbsfromrel.', controlNavThumbsSearch: "'.$controlnavthumbssearch.'", controlNavThumbsReplace: "'.$controlnavthumbsreplace.'", keyboardNav: '.$keyboardnav.', pauseOnHover: '.$pauseonhover.', manualAdvance: '.$manualadvance.', captionOpacity: '.$captionopacity.', prevText: "'.$prevtext.'", nextText: "'.$nexttext.'" });});</script> [/raw]';
			
		return $html;
	}

	add_shortcode('nivo_slider','wp_sc_nivo_slider');
		

	function wp_sc_nivo_item($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => '',
			'href' => '',
			'caption' => '',
			'src' => ''
		), $atts));
				
		$endHref = '';
		$html = '';
				
		if($href != '') { $href = '<a href="'.$href.'">';  $endHref = '</a>'; }
		
		$titleTag = '';
		
		if($caption != '') { $titleTag = ' title="'.$caption.'"'; }
		
		
		$html = '[raw]'.$href.'<img src="'.$src.'" alt=" " '.$titleTag.' />'.$endHref.'[/raw]';
		
		return $html;

	}

	add_shortcode('nivo_item', 'wp_sc_nivo_item');
	
?>
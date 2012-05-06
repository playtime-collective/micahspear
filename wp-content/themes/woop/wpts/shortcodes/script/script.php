<?php

	function wpts_sc_script($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'src' => '',
			'theme_uri' => 'true'
		), $atts));
		
		if($theme_uri == true) { $theme_uri = get_template_directory_uri().'/'; } else { $theme_uri = ''; }
		return '<script type="text/javascript" src="'.$theme_uri.$src.'"></script>';
	}
	add_shortcode('script', 'wpts_sc_script');
	

	
?>
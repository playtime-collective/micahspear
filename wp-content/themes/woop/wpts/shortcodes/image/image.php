<?php

	function wp_sc_image($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'align' => '',
			'title' => '',
			'alt' => '',
			'src' => '',
			'link' => '',
			'target' => '_self',
			'boxed' => '',
			'noborder' => '',
		), $atts));
				
		$close = '';
		
		if($link != '') { $link = '<a href="'.$link.'" target="'.$target.'">'; $close = '</a>';}
		
		$html = '';
		
		if($noborder != '') { $noborder = 'no-border'; }
		
		if($boxed == "true")
		{
			$html = '<p class="boxed '.$align.'">'.$link.'<img src="'.$src.'" alt="'.$alt.'" title="'.$title.'" class="image '.$noborder.'" />'.$close.'</p>';
		}
		else if($align != "") {
			$html = '<p class="'.$align.'">'.$link.'<img src="'.$src.'" alt="'.$alt.'" title="'.$title.'" class="image '.$noborder.'" />'.$close.'</p>';
		}
		else
		{
			$html = $link.'<img src="'.$src.'" alt="'.$alt.'" title="'.$title.'" class="image '.$noborder.'" />'.$close;
		}
		
		return $html;
	}

	add_shortcode('image','wp_sc_image');
	
	function wp_sc_image_noresp($atts, $content = null, $code) 
	{
		return "<span class='no-responsive'>".do_shortcode($content)."</span>";
	}
	add_shortcode('image_no_resp','wp_sc_image_noresp');
	
?>
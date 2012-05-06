<?php

	function wpts_sc_highlight($atts, $content = null, $code)
	{
		extract( shortcode_atts( array(
			'type' => 'false',
			'color' => null
		), $atts));
		
		if($type != 'false') { $type = ' highlight-'.$type; } else { $type = ''; }
		
		if($color != null) { $color = ' style="background-color: #'.$color.';"'; } else { $color = ''; }
		
		return '<span class="highlight'.$type.'" '.$color.'>'.do_shortcode($content).'</span>';
		
	}
	add_shortcode('highlight', 'wpts_sc_highlight');
	
	function wpts_sc_blockquote($atts, $content = null, $code) 
	{
		extract( shortcode_atts( array (
			'align' => null,
			'cite' => null,
		), $atts));
		
		if($align != null) { $align = ' class="align-'. $align . '"'; } else { $align = ''; } 
		
		if($cite != null) { $cite = '<p class="cite"> - '.$cite.'</p>'; } else { $cite = ''; }
		
		return '<div class="blockquote"><blockquote '. $align . '>' . do_shortcode($content) .' '. $cite .'</blockquote></div>';
	}
	add_shortcode('blockquote', 'wpts_sc_blockquote');
	
	function wpts_sc_dropcaps($atts, $content = null, $code) {
		extract( shortcode_atts( array (
			'color' => '',
		), $atts));

		if($color != ''){
			$color = ' dropcap-'.$color;
		}
		return '<span class="dropcap' . $color . '">' . do_shortcode($content) . '</span>';
	}
	add_shortcode('dropcap', 'wpts_sc_dropcaps');
	
	
	function wpts_sc_block($atts, $content = null, $code)
	{
		
		return '<div class="wpts-block">'.do_shortcode($content).'</div>';
		
	}
	add_shortcode('block', 'wpts_sc_block');
	
	function wpts_sc_sub_section($atts, $content = null, $code)
	{		
		return '<h4 class="wpts-sub-heading">'.$content.'</h4>';
	}
	add_shortcode('sub_section_title', 'wpts_sc_sub_section');
	
	function wpts_sc_section($atts, $content = null, $code)
	{
		/*extract( shortcode_atts( array (
			'description' => '',
		), $atts));
		
		if($description != '') { $description = '<p class="description">'.$description.'</p>'; }*/
		
		return '<h3 class="wpts-section-title"><span>'.$content.'</span></h3>';
		
	}
	add_shortcode('section_title', 'wpts_sc_section');

	
?>
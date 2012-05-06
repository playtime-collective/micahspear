<?php

// Enqueue the Tools Tabs Script
wp_enqueue_script( 'tools-tabs', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.tools.tabs.min.js', array('jquery'), NULL );
wp_enqueue_script( 'tools-tabs-init', get_template_directory_uri() . '/wpts/shortcodes/js/toolstabs-initialize.js', array('jquery'), NULL );

function wpts_sc_tabs($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'style' => false
	), $atts));
	
	if (!preg_match_all("/(.?)\[(tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/tab\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
		}
		$output = '<ul class="'.$code.'">';
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<li><a href="#">' . $matches[3][$i]['title'] . '</a></li>';
		}
		$output .= '</ul>';
		$output .= '<div class="panes">';
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<div class="tab-pane">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}
		$output .= '</div>';
		
		return '<div class="page-tabs">' . $output . '</div>';
	}
}

add_shortcode('tabs', 'wpts_sc_tabs');

function wpts_sc_accordions($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'style' => false
	), $atts));
	
	if (!preg_match_all("/(.?)\[(accordion)\b(.*?)(?:(\/))?\](?:(.+?)\[\/accordion\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
		}
		$output = '';
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<div class="tab"><h4>' . $matches[3][$i]['title'] . '</h4></div>';
			$output .= '<div class="pane">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}

		return '<div class="accordion">' . $output . '</div>';
	}
}

add_shortcode('accordions', 'wpts_sc_accordions');

function wpts_sc_toggle($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'title' => false
	), $atts));
	return '<div class="toggle"><h4 class="toggle_title">' . $title . '</h4><div class="toggle_content">' . do_shortcode(trim($content)) . '</div></div>';
}

add_shortcode('toggle', 'wpts_sc_toggle');

?>
<?php

function wpts_sc_list($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'style' => "list1",
		'color' => 'black',
	), $atts));

	if($color){
		$color = ' list_color_'.$color;
	}
	return str_replace('<ul>', '<ul class="'.$style.$color.'">', do_shortcode($content));
}

add_shortcode('list', 'wpts_sc_list');

?>
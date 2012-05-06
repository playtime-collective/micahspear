<?php

	// divider
	function wpts_sc_divider()
	{
		return '<div class="divider"></div>';
	}
	add_shortcode('divider', 'wpts_sc_divider');
	
	// divider_top
	
	function wpts_sc_divider_top()
	{
		return '<div class="divider top"><a href="#">'.__('Top','wpts_front').'</a></div>';
	}
	add_shortcode('divider_top', 'wpts_sc_divider_top');
	
	function wpts_sc_divider_border()
	{
		return '<div class="divider-border"></div>';
	}
	add_shortcode('divider_border', 'wpts_sc_divider_border');
	
	function wpts_sc_divider_empty()
	{
		return '<div class="divider-empty"></div>';
	}
	add_shortcode('divider_empty', 'wpts_sc_divider_empty');
	
	// divider_image
	
	function wpts_sc_divider_image($atts)
	{
		extract( shortcode_atts( array(
			'top' => 'false'
		), $atts));
		
		/*if($top == 'true') 
		{ 
			$top =  '<a href="#">'.__('Top','wpts_front').'</a>';
		}
		else { $top = ''; }*/
		
		$top = ($top == 'true') ?  '<a href="#">'.__('Top','wpts_front').'</a>' : '';
		
		return '<div class="divider_image">'.$top.'</div>';
	}
	add_shortcode('divider_image', 'wpts_sc_divider_image');
	
	function wp_sc_clearboth() {
	   return '<div class="clearboth"></div>';
	}
	add_shortcode('clearboth', 'wp_sc_clearboth');

?>
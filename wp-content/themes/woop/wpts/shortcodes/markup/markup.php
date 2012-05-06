<?php

	function wpts_sc_div($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'id' => '',
			'class' => ''
		), $atts));
		
		if($id != '') { $id = ' id="'.$id.'"'; }
		if($class!= '') { $class = ' class="'.$class.'"'; }
		
		return '<div '.$id.$class.'>' .do_shortcode($content). '</div>';
	}
	add_shortcode('div', 'wpts_sc_div');
	
	function wpts_sc_p($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'id' => '',
			'class' => ''
		), $atts));
		
		if($id != '') { $id = ' id="'.$id.'"'; }
		if($class!= '') { $class = ' class="'.$class.'"'; }
		
		return '<p '.$id.$class.'>' .do_shortcode($content). '</p>';
	}
	add_shortcode('p', 'wpts_sc_p');
	
	function wpts_sc_br($atts, $content = null, $code) {

		return '<br />';
	}
	add_shortcode('br', 'wpts_sc_br');
	
	function wpts_sc_ul($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'style' => '1'
		), $atts));
		
		if($id != '') { $id = ' id="'.$id.'"'; }
		if($class!= '') { $class = ' class="'.$class.'"'; }
		
		return '<div class="arrow-'.$style.'">' .do_shortcode($content). '</div>';
	}
	add_shortcode('ul', 'wpts_sc_ul');	

	
?>
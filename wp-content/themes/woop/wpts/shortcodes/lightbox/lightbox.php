<?php

wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.colorbox-min.js', array('jquery'), NULL );
wp_enqueue_script( 'colorbox-init', get_template_directory_uri() . '/wpts/shortcodes/js/colorbox-initialize.js', array('colorbox'), NULL );

wp_enqueue_style( 'wpts-colorbox', get_template_directory_uri() . '/wpts/shortcodes/css/colorbox.css', array(), NULL, 'all' );

function wpts_sc_lightbox($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'href' => '#',
		'title' => '',
		'group' => '',
		'width' => false,
		'height' => false,
		'iframe' => 'false',
		'inline' => 'false',
		'photo' => 'false',
		'close' => 'true',
	), $atts));
	
	if($width && is_numeric($width)){
		$width = ' data-width="'.$width.'"';
	}else{
		$width = '';
	}
	if($height && is_numeric($height)){
		$height = ' data-height="'.$height.'"';
	}else{
		$height = '';
	}
	
	if($iframe != 'false'){
		$iframe = ' data-iframe="true"';
	}else{
		$iframe = ' data-iframe="false"';
	}
	if($inline != 'false'){
		$inline = ' data-inline="true" data-href="'.$href.'"';
		$href = '#';
	}else{
		$inline = ' data-inline="false"';
	}
	if($photo != 'false'){
		$photo = ' data-photo="true"';
	}else{
		$photo = ' data-photo="false"';
	}
	if($close != 'false'){
		$close = ' data-close="true"';
	}else{
		$close = ' data-close="false"';
	}
	
	$content = do_shortcode($content);
	
	$html = '[raw] <a title="'.$title.'" href="'.$href.'"'.($group?' rel="'.$group.'"':'').' class="colorbox"'.$width.$height.$iframe.$inline.$photo.$close.'>'.$content.'</a> [/raw]';
	
	//$html .= '<script type="text/javascript">jQuery(".colorbox").colorbox({width:"75%", height:"75%"});</script>';
	
	return $html;
}

add_shortcode('lightbox', 'wpts_sc_lightbox');
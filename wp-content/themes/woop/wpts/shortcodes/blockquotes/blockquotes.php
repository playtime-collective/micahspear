<?php

	function wpts_shortcode_blockquote($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'align' => false,
			'author' => false,
		), $atts));
		
		return '<blockquote' . ($align ? ' class="wpts-align' . $align . '"' : '') . '>' . do_shortcode($content) . ($author ? '<p class="author">'  . $author . '</p>' : '') . '</blockquote>';
	}
	add_shortcode('blockquote', 'wpts_shortcode_blockquote');
	
?>
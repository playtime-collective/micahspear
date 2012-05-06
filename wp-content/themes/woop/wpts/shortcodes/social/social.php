<?php

// Enqueue the GMAP Script
wp_enqueue_script( 'twitter-share', "http://platform.twitter.com/widgets.js", array(''), NULL );

function wpts_sc_tweet($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		"data_url" => '',
		"data_via" => '',
		"data_text" => '',
		"data_related" => '',
		"data_count" => "vertical",
		"text" => "Tweet",
	), $atts));
	
		return <<<HTML
[raw]
<a href="http://twitter.com/share" class="twitter-share-button"
			  data-url="$data_url"
			  data-via="$data_via"
			  data-text="$data_text"
			  data-related="$data_related"
			  data-count="$data_count">$text</a>
[/raw]
HTML;

}

add_shortcode('tweet','wpts_sc_tweet');

function wpts_sc_like($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		"url" => '',
		"width" => '450',
		"height" => '60',
	), $atts));
	
		return <<<HTML
[raw]
<iframe src="http://www.facebook.com/plugins/like.php?href=$url&layout=standard&show_faces=true&width=$width&action=like&colorscheme=light&locale=en_US" scrolling="no" frameborder="0" allowTransparency="true" style="border: none; overflow: hidden; width: {$width}px; height: {$height}px;"></iframe>
[/raw]
HTML;

}

add_shortcode('like','wpts_sc_like');
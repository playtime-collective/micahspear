<?php
/**
	WPST - This file call some files of this folder to generate the shortcodes AND the ShortCode Generator Meta Box
*/
	/**
	 * Disable Automatic Formatting on Posts
	 * Thanks to TheBinaryPenguin (http://wordpress.org/support/topic/plugin-remove-wpautop-wptexturize-with-a-shortcode)
	 */
	 
	function my_formatter($content) {
		$new_content = '';
		$pattern_full = '{(\[raw\].*?\[/raw\])}is';
		$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
		$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

		foreach ($pieces as $piece) {
			if (preg_match($pattern_contents, $piece, $matches)) {
				$new_content .= $matches[1];
			} else {
				$new_content .= wptexturize(wpautop($piece));
			}
		}

		return $new_content;
	}

	remove_filter('the_content', 'wpautop');
	remove_filter('the_content', 'wptexturize');

	add_filter('the_content', 'my_formatter', 99);
	
	if(is_admin())
	{
	// The file that include the Shortcode Generator Meta Box in Wordpress Admin
	include "shortcodes/wpts_main_shortcodes_meta.php"; 
	}
	else
	{

	include "wpts_shortcodes_config.php";

	include "shortcodes/wpts_sc_commons.php";
	
	// dividers shortcode
	include "shortcodes/dividers/dividers.php";
	
	// typography shortcode
	include "shortcodes/typography/typography.php";
	
	// pre code
	include "shortcodes/pre_code/pre_code.php";
	
	// message boxes code
	include "shortcodes/boxes/boxes.php";
	
	// columns code
	include "shortcodes/columns/columns.php";
	
	// slider code
	//include "shortcodes/slider/flex.php";
	//include "shortcodes/slider/cycle.php";
	
	// markup code
	include "shortcodes/markup/markup.php";
	
	// js script code
	include "shortcodes/script/script.php";
	
	// video code
	include "shortcodes/video/video.php";
	
	// buttons code
	//include "shortcodes/buttons/btns.php";
	
	// lightbox shortcode
	include "shortcodes/lightbox/lightbox.php";
	
	// image shortcode
	//include "shortcodes/image/image.php";
	
	// tabs, accordion and toggle shortcode
	include "shortcodes/tabs/tabs.php";
	
	// gmap shortcode
	include "shortcodes/gmap/gmap.php";
		
	// table shortcode
	include "shortcodes/tables/tables.php";	
	
	// gchart shortcode
	include "shortcodes/gchart/gchart.php";
	
	// sitemap shortcode
	//include "shortcodes/sitemap/sitemap.php";
	
	// widgets shortcode
	include "shortcodes/widgets/widgets.php";
	
	// list shortcode
	//include "shortcodes/list/list.php";
	
	// social shortcode
	//include "shortcodes/social/social.php";
	
	// contact form
	include "shortcodes/contact/contact.php";
	
	}
	
?>
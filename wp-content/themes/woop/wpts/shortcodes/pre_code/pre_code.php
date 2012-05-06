<?php

	global $wpts_code_token;
	$wpts_code_token = md5(uniqid(rand()));
	$wpts_code_matches = array();
	
	function wpts_code_before_filter($content) {
		return preg_replace_callback("/(.?)\[(pre|code)\b(.*?)(?:(\/))?\](?:(.+?)\[\/\\2\])?(.?)/s", "wpts_code_before_filter_callback", $content);
	}

	function wpts_code_before_filter_callback(&$match) {
		global $wpts_code_token, $wpts_code_matches;
		$i = count($wpts_code_matches);
		
		$wpts_code_matches[$i] = $match;
		
		return "\n\n<p>" . $wpts_code_token . sprintf("%03d", $i) . "</p>\n\n";
	}

	function wpts_code_after_filter($content) {
		global $wpts_code_token;
		
		$content = preg_replace_callback("/<p>\s*" . $wpts_code_token . "(\d{3})\s*<\/p>/si", "wpts_code_after_filter_callback", $content);
		
		return $content;
	}
	function wpts_code_after_filter_callback($match) {
		global $wpts_code_matches;
		$i = intval($match[1]);
		$content = $wpts_code_matches[$i];
		$content[5]=trim($content[5]);
		
		if (version_compare(PHP_VERSION, '5.2.3') >= 0) {
			$output = htmlspecialchars($content[5], ENT_NOQUOTES, get_bloginfo('charset'), false);
		} else {
			$specialChars = array('&' => '&amp;', '<' => '&lt;', '>' => '&gt;');
			
			$output = strtr(htmlspecialchars_decode($content[5]), $specialChars);
		}
		return '<' . $content[2] . ' class="'. $content[2] .'">' . $output . '</' . $content[2] . '>';
	}

	add_filter('the_content', 'wpts_code_before_filter', 0);
	add_filter('the_content', 'wpts_code_after_filter', 99);
	
	//
	
	

?>
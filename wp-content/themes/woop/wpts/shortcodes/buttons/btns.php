<?php

function wpts_sc_button($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'id' => 'false',
		'class' => 'false',
		'size' => 'small',
		'link' => '',
		'linktarget' => '',
		'color' => 'default-button',
		'bgcolor' => '',
		'textcolor' => '',
		'full' => "",
		'align' => '',
		'fontweight' => 'normal',
	), $atts));
	
	if($id != 'false') { $id = ' id="'.$id.'" '; } else { $id = ''; }
	if($class != 'false') { $class = ''.$class.'" '; } else { $class = ''; }
	
	if($link != '') { $link = ' href="'.$link.'" '; }
	
	if($linktarget != '') { $linktarget = ' target="'.$linktarget.'" '; }
	
	if($bgcolor != '') { $bgcolor = ' style="background-color: #'.$bgcolor.';" '; }
	if($textcolor != '') { $textcolor = ' style="color: #'.$textcolor.';" '; }
	
	if($full != "") { $full = ' full'; }
		
	$content = '<a'.$id.$link.$linktarget.$bgcolor.' class="button '.$size.' '.$color.' '.$full.$class.'"><span'.$textcolor.' class="btn-'.$fontweight.'">' . trim($content) . '</span></a>';
	if($align != ''){
		return '<p class="'.$align.'">'.$content.'</p>';
	}else{
		return $content;
	}
}

add_shortcode('button','wpts_sc_button');

?>
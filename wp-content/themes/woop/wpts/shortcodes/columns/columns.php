<?php

function wpts_sc_column($atts, $content = null, $code) 
{
	return '<div class="'.$code.'">' . do_shortcode(trim($content)) . '</div>';
}

function wpts_sc_column_last($atts, $content = null, $code) 
{
	return '<div class="'.str_replace('_last','',$code).' last">' . do_shortcode(trim($content)) . '</div><div class="clearboth"></div>';
}

function wpts_sc_resp($atts, $content = null, $code) 
{

	extract(shortcode_atts(array(
		'type' => '',
	), $atts));

	$col = "columns";
	
	if($code == "one")
	{
		$col = "column";
	}
		
	return '<div class="'.$code.' '.$col.' '.$type.'">' . do_shortcode(trim($content)) . '</div>';
}

function wpts_sc_padding($atts, $content = null, $code) 
{

	$pre = "offset-by-";
	
	$code = str_replace("padd_", "", $code);
	
	$col = "columns";
	
	if($code == "one")
	{
		$col = "column";
	}
			
	return '<p class="'.$pre.$code.' '.$col.'"></p>';
}

function wpts_sc_row($atts, $content = null, $code) 
{
	extract(shortcode_atts(array(
		'removebottom' => '',
		), $atts));
		
	if($removebottom != '' && $removebottom != 'half') { $removebottom = " remove-bottom"; }
	if($removebottom == 'half') { $removebottom = " half-bottom"; }
		
	return '<div class="row'.$removebottom.'">' . do_shortcode(trim($content)) . '</div>';
}

function wpts_sc_one_resp($atts, $content = null, $code) 
{

	extract(shortcode_atts(array(
		'type' => '',
	), $atts));

	$col = "column";
			
	return '<div class="one-third '.$col.' '.$type.'">' . do_shortcode(trim($content)) . '</div>';
}

function wpts_sc_two_resp($atts, $content = null, $code) 
{

	extract(shortcode_atts(array(
		'type' => '',
	), $atts));

	$col = "column";
			
	return '<div class="two-thirds '.$col.' '.$type.'">' . do_shortcode(trim($content)) . '</div>';
}

add_shortcode('one_third_resp', 'wpts_sc_one_resp'); // 
add_shortcode('two_third_resp', 'wpts_sc_two_resp'); // 

add_shortcode('row', 'wpts_sc_row'); // 

// Responsive Padding

add_shortcode('padd_one', 'wpts_sc_padding'); // 
add_shortcode('padd_two', 'wpts_sc_padding'); // 
add_shortcode('padd_three', 'wpts_sc_padding'); // 
add_shortcode('padd_four', 'wpts_sc_padding'); // 
add_shortcode('padd_five', 'wpts_sc_padding'); // 
add_shortcode('padd_six', 'wpts_sc_padding'); // 
add_shortcode('padd_seven', 'wpts_sc_padding'); // 
add_shortcode('padd_eight', 'wpts_sc_padding'); // 
add_shortcode('padd_nine', 'wpts_sc_padding'); // 
add_shortcode('padd_ten', 'wpts_sc_padding'); // 
add_shortcode('padd_eleven', 'wpts_sc_padding'); // 
add_shortcode('padd_twelve', 'wpts_sc_padding'); // 
add_shortcode('padd_thirteen', 'wpts_sc_padding'); // 
add_shortcode('padd_fourteen', 'wpts_sc_padding'); // 
add_shortcode('padd_fiveteen', 'wpts_sc_padding'); // 
add_shortcode('padd_sixteen', 'wpts_sc_padding'); // 

// Responsive Columns

add_shortcode('one', 'wpts_sc_resp'); // 
add_shortcode('two', 'wpts_sc_resp'); // 
add_shortcode('three', 'wpts_sc_resp'); // 
add_shortcode('four', 'wpts_sc_resp'); // 
add_shortcode('five', 'wpts_sc_resp'); // 
add_shortcode('six', 'wpts_sc_resp'); // 
add_shortcode('seven', 'wpts_sc_resp'); // 
add_shortcode('eight', 'wpts_sc_resp'); // 
add_shortcode('nine', 'wpts_sc_resp'); // 
add_shortcode('ten', 'wpts_sc_resp'); // 
add_shortcode('eleven', 'wpts_sc_resp'); // 
add_shortcode('twelve', 'wpts_sc_resp'); // 
add_shortcode('thirteen', 'wpts_sc_resp'); // 
add_shortcode('fourteen', 'wpts_sc_resp'); // 
add_shortcode('fiveteen', 'wpts_sc_resp'); // 
add_shortcode('sixteen', 'wpts_sc_resp'); // 



add_shortcode('row', 'wpts_sc_row'); // 


// Normal Columns

add_shortcode('one_half', 'wpts_sc_column'); // 
add_shortcode('one_third', 'wpts_sc_column'); //
add_shortcode('one_fourth', 'wpts_sc_column'); //
add_shortcode('one_fifth', 'wpts_sc_column'); //
add_shortcode('one_sixth', 'wpts_sc_column'); //

add_shortcode('two_third', 'wpts_sc_column'); //
add_shortcode('three_fourth', 'wpts_sc_column'); //
add_shortcode('two_fifth', 'wpts_sc_column'); //
add_shortcode('three_fifth', 'wpts_sc_column'); //
add_shortcode('four_fifth', 'wpts_sc_column'); //
add_shortcode('five_sixth', 'wpts_sc_column'); //

// Last Columns

add_shortcode('one_half_last', 'wpts_sc_column_last'); //
add_shortcode('one_third_last', 'wpts_sc_column_last'); //
add_shortcode('one_fourth_last', 'wpts_sc_column_last'); //
add_shortcode('one_fifth_last', 'wpts_sc_column_last'); //
add_shortcode('one_sixth_last', 'wpts_sc_column_last'); //

add_shortcode('two_third_last', 'wpts_sc_column_last'); //
add_shortcode('three_fourth_last', 'wpts_sc_column_last'); //
add_shortcode('two_fifth_last', 'wpts_sc_column_last'); //
add_shortcode('three_fifth_last', 'wpts_sc_column_last'); //
add_shortcode('four_fifth_last', 'wpts_sc_column_last'); //
add_shortcode('five_sixth_last', 'wpts_sc_column_last'); //

?>
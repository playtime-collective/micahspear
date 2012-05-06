<?php

	function wpts_sc_table($atts, $content = null, $code) {
		extract(shortcode_atts(array(
			'id' => '',
			'class' => '',
			'colspan' => '',
			'rowspan' => '',
			'width' => '',
		), $atts));
		
		if($id != '') { $id = ' id="'.$id.'"'; }
		if($width != '') { $width = ' style="width: '.$width.';"'; }
		if($colspan != '') { $colspan = ' colspan="'.$colspan.'"'; }
		if($rowspan != '') { $rowspan = ' rowspan="'.$rowspan.'"'; }
		
		return '<'.$code.' '.$id.' '.$width.' class="table_style '.$class.'" '.$colspan.$rowspan.'>' .do_shortcode($content). '</'.$code.'>';
	}
	
	add_shortcode('table', 'wpts_sc_table');
	add_shortcode('thead', 'wpts_sc_table');
	add_shortcode('tfoot', 'wpts_sc_table');
	add_shortcode('tbody', 'wpts_sc_table');
	add_shortcode('tr', 'wpts_sc_table');
	add_shortcode('td', 'wpts_sc_table');
	add_shortcode('th', 'wpts_sc_table');

?>
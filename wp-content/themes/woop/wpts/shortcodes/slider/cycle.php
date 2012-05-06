<?php

		
	function wp_sc_cycle($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'id' => '',
		), $atts));

		if($id == '') {
			$id = rand(100,1000);
		}
			
		$html = '[raw]			
		<div id="slider-'.$id.'" class="cy-slider">
            <div class="slides" id="'.$id.'">
				'.do_shortcode($content).'
			</div><!-- end of .slides -->
                    
            <div class="cy-slider-pager" id="'.$id.'-pager"></div>                    
        </div>
		
		<script type="text/javascript" charset="utf-8">
		  jQuery(window).load(function() {
			jQuery("#'.$id.'").cycle({
			fx: "fade", 			// for more slide-effects follow the link http://jquery.malsup.com/cycle/browser.html
			speed: 800,	  			// slide transition speed in mili-seconds
			pause: true,      		// pasue slide transition on hover
			pager:  "#'.$id.'-pager",
			easing: "easeInOutQuart"
			});
		  });
		</script>
		
		[/raw]';

		return $html;
	}

	add_shortcode('cycle_slider','wp_sc_cycle');
		
	function wp_sc_cyclo_item($atts, $content = null, $code) 
	{
		extract(shortcode_atts( array(
			'src' => '',
			'caption' => '',
			'href' => '',
			'button' => '',
			'price' => '',
		), $atts));
		
				
		$html = ' 
		<div class="slide">
            <a href="'.$href.'"><img src="'.$src.'" alt=" " /></a>                                    
            <div class="caption">
                <a href="'.$href.'" class="button default-button medium purchase-btn"><span>'.$button.'</span></a>
                <p>'.$caption.'<span class="price">'.$price.'</span></p>                                            
            </div><!-- end of .caption -->
        </div><!-- end of .slide -->';
		
				
		/*$html = ' 
		<div class="slide">
            <a href="'.$href.'"><img src="'.$src.'" alt=" " /></a>                                    
            <div class="caption">
                <a href="'.$href.'" class="purchase-btn">&nbsp;</a>
                <p>'.$caption.'<span class="price">'.$price.'</span></p>                                            
            </div><!-- end of .caption -->
        </div><!-- end of .slide -->';*/
		
		return $html;

	}
	
	add_shortcode('cyclo_item', 'wp_sc_cyclo_item');
	
?>
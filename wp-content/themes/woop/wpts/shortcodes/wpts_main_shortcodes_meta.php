<?php
/**
	WPST - Generate the Shortcode Generator Meta Box
*/

	// Enqueue Scripts 

	add_action( 'admin_print_scripts-post.php', 'wpts_sc_gen_enqueue' );
	add_action( 'admin_print_scripts-post-new.php', 'wpts_sc_gen_enqueue' );
	
	/*add_action( 'admin_print_scripts-page.php', 'wpts_sc_gen_enqueue' );
	add_action( 'admin_print_scripts-page-new.php', 'wpts_sc_gen_enqueue' );*/
	
	function wpts_sc_gen_enqueue()
	{
		wp_enqueue_script( 'wpts-shortcodes', get_template_directory_uri() . '/wpts/shortcodes/js/wpts_shortcodes_generator.js', array('jquery'), NULL );
		
		// COLOR PICKER

		wp_enqueue_script( 'wpts-color-picker', get_template_directory_uri() . '/wpts/shortcodes/js/colorpicker.js', array('jquery'), NULL );
		
		wp_enqueue_script( 'wpts-color-picker-custom', get_template_directory_uri() . '/wpts/shortcodes/js/customCP.js', array('wpts-color-picker'), NULL );	
	}
	
	// Enqueue Styles
	
	add_action( 'admin_print_styles-post.php', 'wpts_sc_gen_enqueue_style' );
	add_action( 'admin_print_styles-post-new.php', 'wpts_sc_gen_enqueue_style' );
	
	function wpts_sc_gen_enqueue_style()
	{
		wp_enqueue_style( 'wpts-shortcodes-meta-style', get_template_directory_uri() . '/wpts/shortcodes/wpts_shortcodes_meta.css', array(), NULL, 'all' );
		
		// COLOR PICKER
		
		wp_enqueue_style( 'wpts-color-picker-style', get_template_directory_uri() . '/wpts/shortcodes/css/colorpicker.css', array(), NULL, 'all' );
		
	}
	
	/********** COLOR PICKER *******************/
	
	

	// Create the MetaBox
	
	add_action( 'add_meta_boxes', 'wpts_sc_gen_create' );  
	
	function wpts_sc_gen_create()
	{
		add_meta_box( 'wpts-shortcodes', 'Shortcode Generator', 'wpts_sc_gen_render', 'post', 'normal', 'high' );
		add_meta_box( 'wpts-shortcodes', 'Shortcode Generator', 'wpts_sc_gen_render', 'page', 'normal', 'high' );
		add_meta_box( 'wpts-shortcodes', 'Shortcode Generator', 'wpts_sc_gen_render', 'project', 'normal', 'high' );
	}
	
	// Render the MetaBox
	
	function wpts_sc_gen_render()
	{
		?>
		<div id="wpts_main_sc">
		
			<a href="#" id="dividers" title="Divider"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/dividers.png" width="26" height="25" alt="Divider" /></a>&nbsp;
			<a href="#" id="typography" title="Typography"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/typography.png" width="26" height="25" alt="Divider" /></a>&nbsp;
			<!-- <a href="#" id="precode" title="Pre Code"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/precode.png" width="26" height="25" alt="Pre Code" /></a>&nbsp; -->
			<a href="#" id="message-box" title="Message Box"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/messagebox.png" width="26" height="25" alt="Message Box" /></a>&nbsp;
			<a href="#" id="columns" title="Columns"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/columns.png" width="26" height="25" alt="Columns" /></a>&nbsp;
			<a href="#" id="video" title="Video"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/video.png" width="26" height="25" alt="Video" /></a>&nbsp;
			<!--<a href="#" id="buttons" title="Button"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/buttons.png" width="26" height="25" alt="Button" /></a>&nbsp;
			<a href="#" id="images" title="Images"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/image.png" width="26" height="25" alt="Image" /></a>&nbsp;
			<a href="#" id="sliders" title="Sliders"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/sliders.png" width="26" height="25" alt="Slider" /></a>&nbsp; -->
			<a href="#" id="lightbox" title="Lightbox"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/lightbox.png" width="26" height="25" alt="Lightbox" /></a>&nbsp;
			<a href="#" id="organize" title="Tabs Accordion Toggle"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/organize.png" width="26" height="25" alt="Tabs" /></a>&nbsp;
			<a href="#" id="gmaps" title="Google Maps"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/gmaps.png" width="26" height="25" alt="Google Maps" /></a>&nbsp;
			<a href="#" id="chart" title="Google Chart"><img src="<?php echo get_template_directory_uri() ?>/wpts/shortcodes/shortcodes_icons/chart.png" width="26" height="25" alt="Google Chart" /></a>&nbsp;
		
		</div>
		
		<!-- SUB SC AREA -->
		
		<div id="wpts_sub_sc">
			
		</div>
		
		<div id="wpts_sc_attrs">
			
		</div>
		
		<div id="wpts_send">
			<input type="button" id="sc_send_editor" value="Send to Editor" />
		</div>
		
		<?php
	}
?>
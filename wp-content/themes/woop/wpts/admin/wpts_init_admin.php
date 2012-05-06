<?php

	function wpts_admin_init()
	{
		$dir = get_template_directory_uri();
		wp_enqueue_style('jquery');
		wp_enqueue_style("wpts-admin", $dir."/wpts/admin/wpts-admin.css", false, "1.0", "all");
		wp_enqueue_style('thickbox');
		
		wp_enqueue_script( 'wpts-color-picker', get_template_directory_uri() . '/wpts/shortcodes/js/colorpicker.js', array('jquery'), NULL );
		wp_enqueue_style( 'wpts-color-picker-style', get_template_directory_uri() . '/wpts/shortcodes/css/colorpicker.css', array(), NULL, 'all' );
		wp_enqueue_script( 'wpts-color-picker-custom', get_template_directory_uri() . '/wpts/shortcodes/js/customCP.js', array('wpts-color-picker'), NULL );	
		
	}
			
	function wpts_admin_setup()
	{
		
		// SET MAIN MENU
		add_menu_page("Woop", "Woop", 10, 'theme_general', 'get_option_page' );
		
		// SET SUB MENUS
		add_submenu_page('theme_general', 'General', 'General', 10, 'theme_general', 'get_option_page');
		add_submenu_page('theme_general', 'Colors', 'Colors', 10, 'theme_colors', 'get_option_page');
		//MARKER - DONT REMOVE THIS LINE //
	}
		
	add_action('admin_init', 'wpts_admin_init');
	add_action('admin_menu', 'wpts_admin_setup');
	
	function get_option_page()
	{
		include_once ('wptsGenerator.php');
				
		$page = include('pages' . "/" . $_GET['page'] . '.php');
				
		if($page['auto']){
			new wptsGenerator($page['name'],$page['options']);
		}
	}

?>
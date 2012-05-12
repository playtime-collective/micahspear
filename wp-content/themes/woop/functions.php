<?php

	// DEFINE THEME DIRECTORY
	define("THEME_DIR", get_template_directory_uri());
	
	/*--- REMOVE GENERATOR META TAG ---*/
	remove_action('wp_head', 'wp_generator');
	
	/*--- SUPPORT TO LANGUAGES ---*/
	
	load_theme_textdomain( 'woop', TEMPLATEPATH.'/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH."/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
	
	// ENQUEUE STYLES
	
	function enqueue_styles() {
		/** REGISTER css/reset.css **/
		wp_register_style( 'reset-style', THEME_DIR . '/css/reset.css', array(), '1', 'all' );
		wp_enqueue_style( 'reset-style' );
		
		/** REGISTER css/960.css **/
		wp_register_style( '960-style', THEME_DIR . '/css/960.css', array(), '1', 'all' );
		wp_enqueue_style( '960-style' );
		
		/** REGISTER css/styles.css **/
		wp_register_style( 'main-style', THEME_DIR . '/css/styles.css', array(), '1', 'all' );
		wp_enqueue_style( 'main-style' );
		
		/** REGISTER css/jquery.selectBox.css **/
		wp_register_style( 'wpts-shortcodes', THEME_DIR . '/wpts/shortcodes/wpts_shortcodes.css', array(), '1', 'all' );
		wp_enqueue_style( 'wpts-shortcodes' );
		
		
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
	
	// ENQUEUE SCRIPTS
	
	function enqueue_scripts() {
	/** REGISTER js/jquery.js **/
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), null, false );
	wp_enqueue_script( 'jquery' );
	
	/** REGISTER HTML5 Shin **/
	wp_register_script( 'html5-shin', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'html5-shin' );
	
	/** REGISTER js/smooth-scroll.js **/
	if(!is_single()) {
	wp_register_script( 'jquery-smooth-scroll', THEME_DIR . '/js/smooth-scroll.js', array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'jquery-smooth-scroll' );
	}
	
	/** REGISTER js/jquery.sticky.js **/
	wp_register_script( 'jquery-sticky', THEME_DIR . '/js/jquery.sticky.js', array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'jquery-sticky' );
	
	/** REGISTER js/jquery.easing-1.3.pack.js **/
	wp_register_script( 'jquery-easing', THEME_DIR . '/js/jquery.easing-1.3.pack.js', array( 'jquery' ), '1.3', false );
	wp_enqueue_script( 'jquery-easing' );
	
	/** REGISTER js/slides.min.jquery.js **/
	wp_register_script( 'slides-jquery', THEME_DIR . '/js/slides.min.jquery.js', array( 'jquery' ), '1.3', false );
	wp_enqueue_script( 'slides-jquery' );
			
	/** REGISTER fancybox/jquery.mousewheel-3.0.4.pack.js **/
	wp_register_script( 'jquery-mousewheel', THEME_DIR . '/fancybox/jquery.mousewheel-3.0.4.pack.js', array( 'jquery' ), '3.0.4', false );
	wp_enqueue_script( 'jquery-mousewheel' ); 
	
	/** REGISTER js/custom.script.js **/
	wp_register_script( 'custom-script', THEME_DIR . '/js/custom.script.js', array( 'jquery' ), '1.0', false );
	wp_enqueue_script( 'custom-script' );
		
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
	
	/*== WPTS ==*/
	
	include_once("wpts/wpts_admin_config.php");
	include_once("wpts/admin/wpts_init_admin.php");
	
	include_once("wpts/wpts_shortcodes.php");
	
	// ENABLE CUSTOM MENUS
	if ( function_exists( 'register_nav_menu' ) ) {
	
		register_nav_menu( 'top_menu', 'Top Menu' );
		register_nav_menu( 'main_menu', 'Main Menu' );
		
		// To use more Menus use
		//register_nav_menu( 'menu-name-slug', 'Menu Name' );
		//
		// use wp_nav_menu - to show your menu : http://codex.wordpress.org/Function_Reference/wp_nav_menu
	}
		
	/*== SIDEBARS WIDGET AREAS ==**/
	
	register_sidebar( array(
		'id'          => 'right-sidebar',
		'name'        => 'Right Sidebar',
		'description' => 'Displayed at content\'s right on pages like: Blog, Single Post and Page with Sidebar.',
		'before_title'  => '<h3 class="widgettitle"><span>',
		'after_title'   => '</span></h3>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>'
	) );
	
	// use dynamic_sidebar to get your sidebar - http://codex.wordpress.org/Function_Reference/dynamic_sidebar
	
	add_filter('widget_text', 'do_shortcode');
	
	/**== BLOG POSTS ==**/
	
	if (function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
	}
	
	if ( function_exists( 'add_image_size' ) ) { 
		
		/* ADD THEME SIZES HERE */
		/*add_image_size( 'blog-size', 700, 290 );*/
		add_image_size( 'portfolio-size', 280, 180, true );
	}
	
	/*== PORTFOLIO ==*/
	
	add_action('init', 'project_custom_init');  
	
	/*-- Custom Post Init Begin --*/
	function project_custom_init()
	{
	  $labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('No projects found'),
		'not_found_in_trash' => __('No projects found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Projects'

	  );
	  
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('project',$args);
	  
	  // Initialize New Taxonomy Labels
	  $labels = array(
		'name' => _x( 'Tags', 'taxonomy general name' ),
		'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Types' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => __( 'Parent Tag' ),
		'parent_item_colon' => __( 'Parent Tag:' ),
		'edit_item' => __( 'Edit Tags' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
	  );
		// Custom taxonomy for Project Tags
		register_taxonomy('tagportifolio',array('project'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'tag-portifolio' ),
	  ));
	  
	}
	/*-- Custom Post Init Ends --*/
	
	 add_action("admin_init", "portfolio_meta_box");     
      
    function portfolio_meta_box(){  
        add_meta_box("projInfo-meta", "Project Options", "portfolio_meta_options", "project", "side", "low");  
    }    
      
    function portfolio_meta_options()
	{  
            global $post;  
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  
            $custom = get_post_custom($post->ID);  
            $link = $custom["projLink"][0];  
    ?>  
        <label>Large Image URL: </label><input name="projLink" value="<?php echo $link; ?>" />  
    <?php  
    }  
	
	add_action('save_post', 'save_project_link');   
      
    function save_project_link(){  
        global $post;    
      
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){  
            return $post_id;  
        }else{  
            update_post_meta($post->ID, "projLink", $_POST["projLink"]);  
        }  
    }  
	
	// Add filter to ensure the text Project, or project, is displayed when a user updates a book
	add_filter('post_updated_messages', 'project_updated_messages');
	
	function project_updated_messages( $messages ) {
	  global $post, $post_ID;

	  $messages['project'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Project updated. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.'),
		3 => __('Custom field deleted.'),
		4 => __('Project updated.'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Project restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Project published. <a href="%s">View project</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Project saved.'),
		8 => sprintf( __('Project submitted. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Project scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview project</a>'),
		  // translators: Publish box date format, see http://php.net/date
		  date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Project draft updated. <a target="_blank" href="%s">Preview project</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	  );

	  return $messages;
	}
		
	/*== PAGINATION ==*/
	
	// Thanks to kriesi - http://www.kriesi.at/archives/how-to-build-a-wordpress-post-pagination-without-plugin
	function nav_pagination($range = 2, $pages = '' )
	{  
		$showitems = ($range * 2)+1;  

		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == '')
		{
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages)
			{
				$pages = 1;
			}
		}   

		if(1 != $pages)
		{
			echo '<p class="pagination">';
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&lt;</a>";
			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&gt;</a>";

			for ($i=1; $i <= $pages; $i++)
			{
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				{
					 echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
				}
			}

			if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
			if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
			echo "</p>\n";
		}
	}
	
	/***/
	
?>
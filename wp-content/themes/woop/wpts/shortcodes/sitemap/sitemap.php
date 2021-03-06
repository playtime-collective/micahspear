<?php
function wpts_sc_sitemap($atts, $content = null, $code) 
{
	if(isset($atts['type'])){
		switch($atts['type']){
			case 'pages':
				return sitemap_pages($atts);
			case 'posts':
				return sitemap_posts($atts);
			case 'categories':
				return sitemap_categories($atts);
			case 'all':
			default:
				return sitemap_all($atts);			
		}
	}
	return '';
}

add_shortcode('sitemap', 'wpts_sc_sitemap');

function sitemap_pages($atts)
{
	extract(shortcode_atts(array(
		'number' => '0',
		'depth' => '0',
	), $atts));
	
	return '<ul>'.wp_list_pages('depth=0&sort_column=menu_order&echo=0&title_li=&depth='.$depth.'&number='.$number ).'</ul>';
}

function sitemap_categories($atts)
{
	extract(shortcode_atts(array(
		'number' => '0',
		'depth' => '0',
		'show_count' => true,
		'show_feed' => true,
	), $atts));
	
	if($show_count === 'false'){
		$show_count = false;
	}
	if($show_feed === true || $show_feed == 'true'){
		$feed = __( 'RSS' );
	}else{
		$feed = '';
	}

	$exclude_cats = theme_get_option('blog','exclude_categorys');
	return '<ul>'.wp_list_categories( array( 'exclude'=> implode(",",$exclude_cats), 'feed' => $feed, 'show_count' => $show_count, 'use_desc_for_title' => false, 'title_li' => false, 'echo' => 0 ) ).'</ul>';
}

function sitemap_posts($atts){
	extract(shortcode_atts(array(
		'show_comment' => true,
		'number' => '0',
		'cat' => '',
		'posts' => '',
	), $atts));
	
	if($number == 0){
		$number = 1000;
	}
	if($show_comment === 'false'){
		$show_comment = false;
	}
	
	$query = array(
		'showposts' => (int)$number,
		'post_type'=>'post',
	);
	if($cat){
		$query['cat'] = $cat;
	}
	if($posts){
		$query['post__in'] = explode(',',$posts);
	}
	
	$archive_query = new WP_Query( $query );
	
	$output = '';
	while ($archive_query->have_posts()) : $archive_query->the_post();
		$output .= '<li><a href="'.get_permalink().'" rel="bookmark" title="'.sprintf( __("Permanent Link to %s"), get_the_title() ).'">'. get_the_title().'</a>'.($show_comment?' ('.get_comments_number().')':'').'</li>';
	endwhile;
	return '<ul>'.$output.'</ul>';
}

function sitemap_all($atts){
	extract(shortcode_atts(array(
		'number' => '0',
		'shows' => 'pages,categories,posts,portfolios',
	), $atts));
	
	$shows = explode(',', $shows);
	if(empty($shows)){
		return '';
	}
	
	$output = '';
	
	if(in_array('pages',$shows)){
		$output .= '<h2>'.__('Pages').'</h2>';
		$output .= sitemap_pages($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top').'</a></div> ';
	}
	if(in_array('categories',$shows)){
		$output .= '<h2>'.__('Category Archives').'</h2>';
		$output .= sitemap_categories($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top').'</a></div> ';
	}
	if(in_array('posts',$shows)){
		$output .= '<h2>'.__('Blog Posts').'</h2>';
		$output .= sitemap_posts($atts);
		$output .= '<div class="divider top"><a href="#">'.__('Top').'</a></div> ';
	}
	
	return $output;

}
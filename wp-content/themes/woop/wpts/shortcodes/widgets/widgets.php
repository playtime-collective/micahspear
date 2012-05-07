<?php

// Enqueue the Twitter Script
	wp_enqueue_script( 'jquery-tweet', get_template_directory_uri() . '/wpts/shortcodes/js/jquery.tweet.js', array('jquery'), NULL );

/*
	wp_enqueue_script( 'jquery-pretty', get_template_directory_uri() . '/wpts/shortcodes/prettyphoto/js/jquery.prettyPhoto.js', array('jquery'), NULL );

	wp_enqueue_script( 'jquery-pretty-init', get_template_directory_uri() . '/wpts/shortcodes/prettyphoto/init.js', array('jquery'), NULL );
	
	wp_register_style( 'pretty-style', get_template_directory_uri() . '/wpts/shortcodes/prettyphoto/css/prettyPhoto.css', array(), '1', 'all' );
	wp_enqueue_style( 'pretty-style' );

*/

function wpts_sc_twitter($atts) 
{
	extract(shortcode_atts(array(
		'username' => '',
		'count' => 3,
		'query' => 'null',
		'avatarsize' => 'null',
	), $atts));
	
	$user_array = explode(',',$username);
	foreach($user_array as $key => $user){
		$user_array[$key] = '"'.$user.'"';
	}	
	
	$id = rand(1,1000);
	
	$seconds_ago_text = __('about %d seconds ago','striking_front');
	$a_minutes_ago_text = __('about a minute ago','striking_front');
	$minutes_ago_text = __('about %d minutes ago','striking_front');
	$a_hours_ago_text = __('about an hour ago','striking_front');
	$hours_ago_text = __('about %d hours ago','striking_front');
	$a_day_ago_text = __('about a day ago','striking_front');
	$days_ago_text = __('about %d days ago','striking_front');
	$view_text = __('view tweet on twitter','striking_front');
	
	if ( !empty( $user_array )|| $query!="null" ) {
		$username = implode(',',$user_array);
		if($query != "null"){
			$query = '"'.html_entity_decode($query).'"';
		}
		$with_avatar = ($avatarsize != 'null')?' with_avatar':'';
		return <<<HTML
<div class="twitter_wrap{$with_avatar}">
	<div id="twitter_wrap_{$id}"></div>
	<div class="clearboth"></div>
</div>
<script type="text/javascript">
	jQuery(function($){
		jQuery("#twitter_wrap_{$id}").tweet({
			username: {$username},
			count: {$count},
			query: {$query},
			avatar_size: {$avatarsize},
			seconds_ago_text: '{$seconds_ago_text}',
			a_minutes_ago_text: '{$a_minutes_ago_text}',
			minutes_ago_text: '{$minutes_ago_text}',
			a_hours_ago_text: '{$a_hours_ago_text}',
			hours_ago_text: '{$hours_ago_text}',
			a_day_ago_text: '{$a_day_ago_text}',
			days_ago_text: '{$days_ago_text}',
			view_text: '{$view_text}'
		});
	});
</script>
HTML;
	}
}
add_shortcode('twitter', 'wpts_sc_twitter');

function wpts_sc_search() 
{

	$home = home_url( '/' );

	return <<<HTML

	<form action="{$home}" id="searchform" method="get"><fieldset> <input type="text" onblur="if(this.value=='')this.value='To search type and hit enter';" onfocus="if(this.value=='To search type and hit enter')this.value='';" value="To search type and hit enter" id="s" name="s"></fieldset></form>
	
HTML;
}
add_shortcode('search', 'wpts_sc_search');

function wpts_sc_flickr($atts) 
{
	extract(shortcode_atts(array(
		'id' => '',
		'type' => 'user',
		'count' => 9,
		'display' => 'latest'//lastest or random
	), $atts));
	
	return <<<HTML
<div class="flickr_wrap">
	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count={$count}&amp;display={$display}&amp;size=s&amp;layout=x&amp;source={$type}&amp;{$type}={$id}"></script>
</div>
<div class="clearboth"></div>
HTML;
}
add_shortcode('flickr', 'wpts_sc_flickr');

function wpts_sc_popular_posts($atts) 
{
	extract(shortcode_atts(array(
		'count' => '4',
		'thumbnail' => 'true',
		'extra' => 'desc',
		'cat' => '',
		'desc_length' => '80',
	), $atts));
	
	$query = array('showposts' => $count, 'nopaging' => 0, 'orderby'=> 'comment_count', 'post_status' => 'publish', 'caller_get_posts' => 1);
	if($cat){
		$query['cat'] = $cat;
	}
	$r = new WP_Query($query);

	if ($r->have_posts()){
		$output = '<div class="popular_posts_wrap">';
		$output .= '<ul class="posts_list">';
		while ($r->have_posts()){
			$r->the_post();
			$output .= '<li>';
			if($thumbnail!='false'){
				$output .= '<a class="thumbnail" href="'.get_permalink().'" title="'.get_the_title().'">';
				if (has_post_thumbnail() ){
					$output .= get_the_post_thumbnail(get_the_ID(),array(45,45),array('title'=>get_the_title(),'alt'=>get_the_title()));
				}else{
					$output .= '<img src="'.get_template_directory_uri() .'/wpts/shortcodes/sc_images/widget_posts_thumbnail.png" width="45" height="45" title="'.get_the_title().'" alt="'. get_the_title().'"/>';
				}
				$output .= '</a>';
			}
			$output .= '<div class="post_extra_info">';
			$output .= '<a class="post_title" href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>';
			
			$num_comments = get_comments_number();

			if($num_comments == 0)
			{
				 $comments = __('No Comments');
			}
			elseif($num_comments > 1)
			{
				$comments = $num_comments.' '.__('Comments');
			}
			else
			{
				$comments = "1 Comment";
			}
			
			$output .= '<p class="post_meta"><strong>'.get_the_date('d-m-y').'</strong> - <a href="'.get_comments_link().'">'.$comments.'</a></p>';
			/*if($extra=='time'){
				$output .= '<time datetime="'.get_the_time('Y-m-d').'">'.get_the_date().'</time>';
			}else{
				global $post;
				$excerpt = $post->post_excerpt;
				if($excerpt==''){
					$excerpt = get_the_content('');
				}
				$output .= '<p>'.wp_html_excerpt($excerpt,$desc_length).'...</p>';
			}*/
			$output .= '</div>';
			$output .= '<div class="clearboth"></div>';
			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	} 
	wp_reset_query();
	return ''.$output.'';
}
add_shortcode('popular_posts', 'wpts_sc_popular_posts');

function wpts_sc_recent_posts($atts) 
{
	extract(shortcode_atts(array(
		'count' => '4',
		'thumbnail' => 'true',
		'extra' => 'desc',
		'cat' => '',
		'desc_length' => '80',
	), $atts));
	
	$query = array('showposts' => $count, 'nopaging' => 0, 'post_status' => 'publish', 'caller_get_posts' => 1);
	if($cat){
		$query['cat'] = $cat;
	}
	$r = new WP_Query($query);
	
	if ($r->have_posts()){
		$output = '<div class="popular_posts_wrap">';
		$output .= '<ul class="posts_list">';
		while ($r->have_posts()){
			$r->the_post();
			$output .= '<li>';
			if($thumbnail!='false'){
				$output .= '<a class="thumbnail" href="'.get_permalink().'" title="'.get_the_title().'">';
				if (has_post_thumbnail() ){
					$output .= get_the_post_thumbnail(get_the_ID(),array(45,45),array('title'=>get_the_title(),'alt'=>get_the_title()));
				}else{
					$output .= '<img src="'.get_template_directory_uri() .'/wpts/shortcodes/sc_images/widget_posts_thumbnail.png" width="45" height="45" title="'.get_the_title().'" alt="'. get_the_title().'"/>';
				}
				$output .= '</a>';
			}
			$output .= '<div class="post_extra_info">';
			$output .= '<a class="post_title" href="'.get_permalink().'" title="'.get_the_title().'" rel="bookmark">'.get_the_title().'</a>';
			
			$num_comments = get_comments_number();

			if($num_comments == 0)
			{
				 $comments = __('No Comments');
			}
			elseif($num_comments > 1)
			{
				$comments = $num_comments.' '.__('Comments');
			}
			else
			{
				$comments = "1 Comment";
			}
			
			$output .= '<p class="post_meta"><strong>'.get_the_date('d-m-y').'</strong> - <a href="'.get_comments_link().'">'.$comments.'</a></p>';
			
			/*if($extra=='time'){
				$output .= '<time datetime="'.get_the_time('Y-m-d').'">'.get_the_date().'</time>';
			}else{
				global $post;
				$excerpt = $post->post_excerpt;
				if($excerpt==''){
					$excerpt = get_the_content('');
				}
				$output .= '<p>'.wp_html_excerpt($excerpt,$desc_length).'...</p>';
			}*/
			$output .= '</div>';
			$output .= '<div class="clearboth"></div>';
			$output .= '</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	} 
	wp_reset_query();
	return ''.$output.'';
}
add_shortcode('recent_posts', 'wpts_sc_recent_posts');

function wpts_sc_infos($atts, $content) 
{
	extract(shortcode_atts(array(
		'phone' => '+351 123 456 789',
		'email' => 'youremail@yoursite.com',
		'address' => 'Fifth Avenue <br />767 5th Ave, New York NY 10153',
	), $atts));
	
	return '[raw]<div class="contact_info">
				<div class="one_half">
					<p><img src="'.THEME_DIR.'/img/icn_phone.png" alt="" /> '.$phone.'</p>
					<p><img src="'.THEME_DIR.'/img/icn_mail.png" alt="" /> '.$email.'</p>
				</div>
				<div class="one_half last">
					<p><img src="'.THEME_DIR.'/img/icn_address.png" alt="" /> <span class="address">'.$address.'</span>
					</p>
				</div>
				<div class="clearboth"></div>
			</div> <!-- end .contact_info -->[/raw]';
}

add_shortcode('infos', 'wpts_sc_infos');


function wpts_sc_skills($atts, $content) 
{
	return '<div class="skills"><ul>'.do_shortcode($content).'</ul></div>';
}

add_shortcode('skills', 'wpts_sc_skills');

function wpts_sc_skill($atts, $content) 
{
	extract(shortcode_atts(array(
		'value' => '50',
		'color' => 'red',
		'text' => '',
	), $atts));
	
	return '[raw]<li><div class="skill'.$color.'" style="width: '.$value.'%;"><p>'.$text.'</p></div></li>[/raw]';
}

add_shortcode('skill', 'wpts_sc_skill');

function wpts_sc_social_icons($atts, $content) 
{
	return '<div class="social"><ul>'.do_shortcode($content).'</ul></div>';
}

add_shortcode('social_icons', 'wpts_sc_social_icons');

function wpts_sc_social_icon($atts) 
{
	extract(shortcode_atts(array(
		'type' => 'twitter',
		'link' => '#',
	), $atts));
	
	return '[raw]<li><a href="'.$link.'" target="_blank"><div class="icon '.$type.' sprite"></div></a></li>[/raw]';
}

add_shortcode('social', 'wpts_sc_social_icon');

function wpts_sc_recent_projects($atts) 
{
	extract(shortcode_atts(array(
		'num' => -1,
	), $atts));
	
	$loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => $num));
	
	$grid = array('5', '6', '5');
	
	$html = '';
	
	$html .= '[raw]<div class="gallery">';
	
		$gc = 0;

		while ( $loop->have_posts() ) : $loop->the_post(); 
			
			if($gc > 2) { $gc = 0; }
			
			$html .= '<div class="grid_'.$grid[$gc].' portfolio-item">';
							
			$large = get_post_custom_values('projLink');
			
			$tags = '';
			$terms = get_the_terms( get_the_ID(), 'tagportifolio' );
			
			$i = '';
			$s = '';
			if ( $terms && ! is_wp_error( $terms ) ) : 
				foreach ( $terms as $term ) 
				{
					$name = $term->name;
					$tags .= $i.$s.$name.' ';
					$i = '/';
					$s = ' ';
				}
			endif;

												
			$html .= '<a href="'.$large[0].'" class="single_image" rel="prettyPhoto[portfolio]"><div class="ss">'.get_the_post_thumbnail(get_the_ID(), 'portfolio-size').'</div></a>';
			
					$html .= '<p>'.get_the_title().'<br />
							  <span class="ss_text">'.$tags.'</span>
							  </p>
					</div> <!-- end .grid_5 --> ';
			
			$gc++;			
													
		endwhile;
		
	$html .= '</div> <!-- end .gallery -->[/raw]';
	
	return $html;	
}

add_shortcode('recent_projects', 'wpts_sc_recent_projects');


// custom recent work shortcode
function wpts_sc_recent_work($atts) 
{
	extract(shortcode_atts(array(
		'num' => -1,
	), $atts));
	
	$count = 0; // init item counter
	$column = 0; // init column counter
	$colSize = 6; // column size
	$loop = new WP_Query(array('post_type' => 'project', 'nopaging' => 'true'));
	$itemsTotal = $loop->post_count;
	
	$grid = array('5', '6', '5');
	$gc = 0;
	
	$html = '';
	$html .= '<div id="myCarousel" class="gallery carousel">';
	$html .= '<div class="carousel-inner">';
	
	while ( $loop->have_posts() ) : $loop->the_post();
  	# columns display variables 
    $isStartOfNewColumn = 0 === ($count % $colSize); // modulo
    $isEndOfColumn = ($count && $isStartOfNewColumn);
    $isStartOfNewColum && $column++; // update column counter

    if ($isEndOfColumn) {
      $html .= '</div>';
    }

    if ($isStartOfNewColumn) {
		  $html .= '<div class="item active">';
		}
		
		if($gc > 2) { $gc = 0; }
		
		$html .= '[raw]<div class="grid_'.$grid[$gc].' portfolio-item">[/raw]';
		
		$large = get_post_custom_values('projLink');
		
		$tags = '';
		$terms = get_the_terms( get_the_ID(), 'tagportifolio' );
    
    $i = '';
		$s = '';
		if ( $terms && ! is_wp_error( $terms ) ) : 
			foreach ( $terms as $term ) 
			{
				$name = $term->name;
				$tags .= $i.$s.$name.' ';
				$i = '/';
				$s = ' ';
			}
		endif;
		
		$html .= '[raw]<a href="'.$large[0].'" class="single_image" rel="">';
		$html .= '<div class="ss">'.get_the_post_thumbnail(get_the_ID(), 'portfolio-size').'</div></a>';
		
		$html .= '<p>'.get_the_title().'<br />';
		$html .= '<span class="ss_text">'.$tags.'</span></p></div> <!-- end .grid_5 --> [/raw]';
		
		$gc++;
	
	  $count++;
	
	endwhile;
	
	$html .= '[raw]</div> <!-- end last item -->';
	
	$html .= '<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>';
  $html .= '<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>';
  
	$html .= '</div> <!-- end .carousel-inner -->';
	$html .= '</div> <!-- end #myCarousel -->[/raw]';
	
	return $html;
	
}

add_shortcode('recent_work', 'wpts_sc_recent_work');

?>

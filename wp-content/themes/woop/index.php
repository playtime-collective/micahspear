<?php
	get_header(); // get the header.php file	
?>

<?php
	
	$pageids = theme_get_option("general", "ids");
	
	$pages = explode ( ";" , $pageids );
	
	$gray = true;
	
	$first = 'first';
	
	foreach($pages as $ID) {

		$query = new WP_Query( 'page_id='.$ID.'&post_type=page' );
		if($query->have_posts()) :
		
		$template = get_post_meta( $ID, '_wp_page_template', true );
		$type = 'page';
		if($template == 'page_blog.php') { $type = 'blog'; }
		if($template == 'page_recent_work.php') { $type = 'recent_work'; }
		
		$query->the_post();
		
		$title = get_the_title();
		
		$blockId = strtolower($title);
		$blockId = str_replace(' ', '-', $blockId);
		$blockId = str_replace('!', '', $blockId);
		$blockId = str_replace('?', '', $blockId);
		$blockId = str_replace('.', '', $blockId);
		$blockId = str_replace(',', '', $blockId);
		$blockId = str_replace(';', '', $blockId);
		
		$class = '';
		if($gray == true)
		{
			$class = 'gray-block'; 
		}
		else {
			$class = 'white-block';
		}
		
	?>
	<?php if($type != 'blog') : ?>
	
	<?php if($first == '' && $gray == false) { ?>
	<div class="bg_top"></div>
	<?php } ?>
	
	<div id="<?php echo $blockId; ?>" class="block <?php echo $class; ?> <?php echo $first; ?>">
		<div class="container_16">
			
			<div class="subheader">
				<h2><span><?php echo $title; ?></span></h2>
			</div>
			
			<div class="page-content" name="post-list">
				<?php the_content(); ?>
			</div>
			
		</div> <!-- end .container_16 -->
	</div> <!-- end #work -->
	
	<?php if($first == '' && $gray == false) { ?>
	<div class="bg_bottom"></div>
	<?php } ?>
	
	<?php	
	
		if($gray == true)
		{
			$gray = false;
		}
		else {
			$gray = true;
		}
	
		$first = '';
		
		endif;
	endif; /* type if end */
	}
?>

<div id="footer" class="block gray-block ">
  <div class="page-content">
    <?php 
    $post_id = 10;
    $my_post = get_post($post_id);
    $title = $my_post->post_title;
    echo do_shortcode( $my_post->post_content );
    ?>
		
		<style>
    ul.tumblr-blog{
      width: 300px;
    }
    ul.tumblr-blog li {
      display: inline-block;
      margin:5px;
    }
    </style>
	</div>
  
  <?php
  	get_footer(); // get the footer.php file	
  ?>
</div>

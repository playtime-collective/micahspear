<?php
/*
Template Name: Blog
*/
?>

<?php
	get_header(); // get the header.php file	
?>
			
		<?php the_post(); ?>
		
		<div class="block white-block page first"  id="">
			<div class="container_16">
				
				<div class="subheader">
					<h2><span><?php the_title(); ?></span></h2>
				</div>
				
				<div class="page-content">
				<!-- BLOG POSTS BELOW -->
				
					<div id="post-list">
					
						<?php
						$posts = new WP_Query();
						$posts->query('post_type=post&paged='.$paged);
						
						if($posts->have_posts()): 
		
						while( $posts->have_posts() ) : $posts->the_post();
						?>
						<div class="post">
						
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="meta"><?php the_time( 'd' ); ?> <?php the_time( 'M' ); ?> <?php the_time( 'Y' ); ?> - <a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'woop'), __('1 Comment', 'woop'), '% '.__('Comments', 'woop') ); ?></a></div>
							<div class="content">
								<?php the_excerpt(); ?>
							</div>
							
							<div class="read-more">
							<a href="<?php the_permalink(); ?>#post-list" class="read-more"><?php _e('Read More', 'woop'); ?></a>
							</div>
						
						</div> <!-- .post -->
						<?php endwhile; 
						else: ?>
							
						<div class="error">
                            <p><?php _e('Sorry! Not found posts with your criteria.', 'woop'); ?></p>
                        </div>
								
						<?php endif; ?>
					
					</div> <!-- #post-list -->
					
					<!-- START of PAGINATION -->
					<?php nav_pagination(3, $posts->max_num_pages); ?>
					<!-- END of PAGINATION -->
	
				<!-- BLOG POSTS ABOVE -->
				</div>
			</div> <!-- end .container_16 -->
		</div>
		<div class="bg_bottom"></div>
	
<?php
	get_footer(); // get the footer.php file	
?>
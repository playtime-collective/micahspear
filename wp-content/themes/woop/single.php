<?php
	get_header(); // get the header.php file	
?>
			
		<?php the_post(); ?>
		
		<div class="block white-block single first" id="">
			<div class="container_16">
								
				<div class="page-content">
				<!-- BLOG POSTS BELOW -->
				
					<div id="post-list">

						<div class="post">
						
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="meta"><?php the_time( 'd' ); ?> <?php the_time( 'M' ); ?> <?php the_time( 'Y' ); ?> - <a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', 'woop'), __('1 Comment', 'woop'), '% '.__('Comments', 'woop') ); ?></a></div>
							<div class="content">
								<?php the_content(); ?>
							</div>						
						</div> <!-- .post -->
					
					</div> <!-- #post-list -->
					
					<?php comments_template( '', true ); ?>
	
				<!-- BLOG POSTS ABOVE -->
				</div>
			</div> <!-- end .container_16 -->
		</div>
		<div class="bg_bottom"></div>

<?php
	get_footer(); // get the footer.php file	
?>
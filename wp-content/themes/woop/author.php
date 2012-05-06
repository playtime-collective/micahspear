<?php
	get_header(); // get the header.php file	
?>					
		<!-- START of BREADCRUMBS -->
			<?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
        <!-- END of BREADCRUMBS -->
		
		<?php
		$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
		?>
		
		<!-- START of INNER-CONTAINER -->
            <div class="inner-container clearfix">
            	<div id="blog">
                    <h3 class="main-heading"><span><?php echo $curauth->nickname; ?></span></h3>

					<?php
						if(have_posts()): 
		
						while( have_posts() ) : the_post();
					?>
						<div class="post">
                            <?php if( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="post-feature-image"><?php the_post_thumbnail(); ?></a>
							<?php endif; ?>
                            <div class="header">
								<?php if( has_post_thumbnail() ) : ?>
                                <a class="arrow">&nbsp;</a>
								<?php endif; ?>
                                <div class="meta">
                                    <div class="date"><?php the_time( 'd' ); ?></div>
                                    <div class="month-year"><span><?php the_time( 'M' ); ?></span><span><?php the_time( 'Y' ); ?></span></div>
                                </div>
                                <div class="title">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><span><?php _e('Posted By', 'bonfire'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span> / <span><?php _e('Comments', 'bonfire'); ?> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?>.</a></span></p>
                                </div>
                            </div>
							<?php 
								$excerpt = get_the_excerpt(); 
								$excerpt = str_replace('<p>', '', $excerpt);
								$excerpt = str_replace('</p>', '', $excerpt);
							?>
                            <p class="post-detail"><?php echo $excerpt; ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read More', 'bonfire'); ?></a>
                            
                        </div><!-- end of .post -->
					<?php endwhile; else: ?>
							
						<div class="msg-red">
                            <p><?php _e('Sorry! Not found posts with your criterias.', 'bonfire'); ?></p>
                        </div>
								
					<?php endif; ?>

				</div><!-- end of #contents -->
                    
                <div id="sidebar">
                    	<?php dynamic_sidebar('right-sidebar'); ?>
                </div><!-- end of #sidebar -->
            
            </div>
            <!-- END of INNER-CONTAINER -->
            
            <!-- START of PAGINATION -->
    		<?php nav_pagination(3); ?>
    		<!-- END of PAGINATION -->
	
<?php
	get_footer(); // get the footer.php file	
?>
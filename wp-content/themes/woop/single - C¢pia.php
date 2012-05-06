<?php
	get_header(); // get the header.php file	
?>
					
		<!-- START of BREADCRUMBS -->
			<?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
        <!-- END of BREADCRUMBS -->
		
		<!-- START of INNER-CONTAINER -->
            <div class="inner-container clearfix">
            	<div id="blog">
                    <h3 class="main-heading"><span>Blog</span></h3>

					<?php
						if(have_posts()): 
		
						the_post();
					?>
						<div class="post">
                            <?php if( has_post_thumbnail() ) : ?>
							<a href="#" class="post-feature-image"><?php the_post_thumbnail(); ?></a>
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
                                    <h2><?php the_title(); ?></h2>
                                    <p><span><?php _e('Posted By', 'bonfire'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></span> / <span><?php _e('Comments', 'bonfire'); ?> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?>.</a></span></p>
                                </div>
                            </div>
                            <div class="page-single"><?php the_content(); ?></div>                            
                        </div><!-- end of .post -->
						
						<div class="author clearfix">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" class="author-avatar"><?php echo get_avatar($comment,$size='93',$default=''); ?></a>  
                            <div class="author-detail">    
                                <h4><span><?php _e('Article by', 'bonfire'); ?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a></h4>
                                <p class="meta"><span><?php _e('Posted', 'bonfire'); ?></span>  <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php the_author_posts(); ?> <?php _e('Articles', 'bonfire'); ?></a></p>
                                <p class="paragraph"><?php the_author_meta( "description", get_the_author_meta( 'ID' ) ); ?> </p>        
                            </div><!-- end of .author detail -->
                        </div><!-- end of .author -->
						
						<?php comments_template( '', true ); ?>
						
					<?php else: ?>
							
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

<?php
	get_footer(); // get the footer.php file	
?>
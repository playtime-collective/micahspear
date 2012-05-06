<?php
/*
Template Name: Page Right Sidebar
*/
?>

<?php
	get_header(); // get the header.php file	
?>
			
		
					
		<!-- START of BREADCRUMBS -->
			<?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
        <!-- END of BREADCRUMBS -->
		
		<!-- START of INNER-CONTAINER -->
            <div class="inner-container clearfix">			
            	<div class="page-single page-sidebar">
					<?php if(have_posts()) : the_post(); ?>
					
					<h3 class="main-heading"><span><?php the_title(); ?></span></h3>
					
					<?php the_content(); ?>
					
					<?php else: ?>
							
						<div class="msg-red">
                            <p><?php _e('Sorry! Not found posts with your criterias.', 'bonfire'); ?></p>
                        </div>
								
					<?php endif; ?>

				</div><!-- end of #contents -->
                    
                <div id="sidebar">
                    	<?php if ( function_exists( 'is_woocommerce' ) ) { ?>
						<?php if(is_cart() || is_checkout() || is_woocommerce()) : ?>
							<?php dynamic_sidebar('woo-sidebar'); ?>
						<?php else : ?>
							<?php dynamic_sidebar('right-sidebar'); ?>
						<?php endif; ?>
						<?php } else { ?>
								<?php dynamic_sidebar('right-sidebar'); ?>
						<?php } ?>
                </div><!-- end of #sidebar -->
            
            </div>
            <!-- END of INNER-CONTAINER -->
	
<?php
	get_footer(); // get the footer.php file	
?>
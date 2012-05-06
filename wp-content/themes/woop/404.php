<?php
	get_header(); // get the header.php file	
?>

		<!-- START of BREADCRUMBS -->
			<?php if (function_exists('the_breadcrumbs')) the_breadcrumbs(); ?>
        <!-- END of BREADCRUMBS -->
		
		<!-- START of INNER-CONTAINER -->
            <div class="inner-container clearfix">
            	<div class="page-single">
						<div class="msg-red">
                            <p><?php _e('Sorry! Not found posts with your criterias.', 'bonfire'); ?></p>
                        </div>
				</div><!-- end of #contents -->
            
            </div>
            <!-- END of INNER-CONTAINER -->
	
<?php
	get_footer(); // get the footer.php file	
?>
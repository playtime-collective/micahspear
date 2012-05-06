<?php 

function theme_comments($comment, $args, $depth) 
{
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('clearfix'); ?> id="comment-<?php comment_ID(); ?>">
		<a class="comment-avatar"><?php echo get_avatar($comment,$size='93',$default=''); ?></a>
		
		<div class="comment-detail">
			<h4><a href="<?php echo get_comment_author_url($coment-ID); ?>" target="_blank"><?php echo comment_author(); ?></a> / <span><?php echo get_comment_date(); ?></span></h4>
			<?php comment_text() ?>
			<?php if ($comment->comment_approved == '0') : ?>
				<p><strong><?php _e('Your comment are waiting for approval! Just wait...', 'woop') ?></strong></p>
			<?php endif; ?>
			<?php 
				$reply_str = __("Reply", 'woop');
				$reply = get_comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => "$reply_str")));
				$reply = str_replace("comment-reply-link", "comment-reply-link reply", $reply);
				$reply = str_replace("$reply_str", "$reply_str", $reply);
				echo $reply;
			?>
		</div><!-- end of .author detail -->
<?php
}
?>

<?php if ( comments_open() ) : ?>
	<div class="comments" id="comments">
		
		<?php if(get_comments_number() > 0) : ?>
		
		<h3 class="heading"><?php printf( _n( '1 Comment', '%1$s Comments', get_comments_number(), 'woop' ),
			number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3>
			
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation" id="blog-nav-top">
				<div class="nav-previous"><?php previous_comments_link( __( '<span>&larr; Previous</span>', 'woocommerce' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( '<span>Next &rarr;</span>', 'woocommerce' ) ); ?></div>
				<div class="clearfix"></div>
			</div>
		<?php endif; ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array( 'callback' => 'theme_comments' ) );
			?>
		</ul><!-- end of .comment-list -->
		<?php endif; ?>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation" id="blog-nav">
				<div class="nav-previous"><?php previous_comments_link( __( '<span>&larr; Previous</span>', 'woocommerce' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( '<span>Next &rarr;</span>', 'woocommerce' ) ); ?></div>
				<div class="clearfix"></div>
			</div>
		<?php endif; ?>
		
		<form class="comment-form" id="respond" method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
		
				<h3><?php comment_form_title( __('Leave a Comment', 'woop'), __('Reply "%s" Comment', 'woop') ); ?></h3>
				<!--<h3><?php _e('Leave a Comment', 'woop'); ?></h3> -->
		
				<div>
					<?php if ( !is_user_logged_in() ) : ?>
					<fieldset class="clearfix">
							<label for="author"><?php _e('Name', 'woop');  if ($req) echo " *"; ?>:</label>
							<input id="author" name="author" type="text" />
					</fieldset>
					<fieldset class="clearfix">
							<label for="email"><?php _e('Email', 'woop'); if ($req) echo " *"; ?>:</label>
							<input id="email" name="email" type="text" />
					</fieldset>
					<fieldset class="clearfix">
							<label for="url"><?php _e('Website', 'woop'); if ($req) echo " *"; ?>:</label>
							<input id="url" name="url" type="text" />
					</fieldset>
					<?php endif; ?>
					<fieldset class="clearfix">
							<label for="comment"><?php _e('Comment', 'woop'); if ($req) echo " *"; ?>:</label>
							<textarea id="comment" cols="5" rows="5" name="comment" ></textarea>
					</fieldset>
					
					<fieldset class="submit-button clearfix">
							<input type="submit" class="submit" onclick="jQuery('#respond').submit();return false;" value="<?php _e('Submit', 'woop'); ?>" />
					</fieldset>
					<?php comment_id_fields(); ?>
					<p><?php do_action('comment_form', get_the_ID()); ?></p>
				</div>
				
		</form><!-- end of .comment-form -->
								
	</div><!-- end of .comments -->
	
<?php endif; ?>
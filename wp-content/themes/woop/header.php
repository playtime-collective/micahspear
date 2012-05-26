<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame. Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
	<title><?php bloginfo( 'name' ); ?> - <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<!-- A Sunil Joshi design (http://themeforest.net/user/suniljoshi/portfolio) - Proudly developed by 960development (http://960development.com) -->
    
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Google Fonts API -->
	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:700,900|Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
	
	<!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->
	<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/favicon.ico" />
	
	<?php wp_head(); ?>
	
	<?php
	// Required for nested reply function that moves reply inline with JS
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	?>
	


<!-- PIGPIGPIGPIGPIGPIGPIG -->

<style>

</style>



</head>

<?php if(is_single()) : ?>
  <?php $page_type = "single" ?>
<?php else : ?>
  <?php $page_type = "home" ?>
<?php endif; ?>

<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body class="<?php echo $page_type; ?>"> <!--<![endif]-->

<div class="topbar"></div> <!-- top bar -->

<div id="intro">
	<div class="title">
		<h1><?php echo str_replace('\\', '', theme_get_option("general", "line1")); ?><br />
		<span class="small"><?php echo str_replace('\\', '', theme_get_option("general", "line2"));  ?></span><br />
		<span class="name"><?php echo str_replace('\\', '', theme_get_option("general", "line3")); ?></span><br />
		<span class="intro_line"></span><span class="amp">&#38;</span><span class="intro_line"></span><br />
		<span class="small"><?php echo str_replace('\\', '', theme_get_option("general", "line4")); ?></span></h1>
	</div> <!-- end .title -->
</div> <!-- end #intro -->


<nav>
	<ul>
		<?php if(!is_page() && !is_single()) : ?>
			<li><a href="#intro">home</a></li>
		<?php else : ?>
			<li><a href="<?php echo site_url('/'); ?>">home</a></li>
		<?php endif; ?>
		
	<?php
	
	$tpageids = theme_get_option("general", "ids");
	
	$tpages = explode ( ";" , $tpageids );

	foreach($tpages as $tID) {

		$ttquery = new WP_Query( 'page_id='.$tID.'&post_type=page' );
		
		$template = get_post_meta( $tID, '_wp_page_template', true );
		$type = 'page';
		//if($template == 'page_blog.php') { $type = 'blog'; }
		
		if($ttquery->have_posts()) :
		
		$ttquery->the_post();
		
		$ttitle = get_the_title();
		
		$tblockId = strtolower($ttitle);
		$tblockId = str_replace(' ', '-', $tblockId);
		$tblockId = str_replace('!', '', $tblockId);
		$tblockId = str_replace('?', '', $tblockId);
		$tblockId = str_replace('.', '', $tblockId);
		$tblockId = str_replace(',', '', $tblockId);
		$tblockId = str_replace(';', '', $tblockId);

	
	?>
		<?php if($type == 'page') : ?>
			<?php if(!is_page() && !is_single()) : ?>
				<li><a href="#<?php echo $tblockId; ?>"><?php echo $ttitle; ?></a></li>
			<?php else : ?>
				<li><a href="<?php echo site_url('/'); ?>#<?php echo $tblockId; ?>"><?php echo $ttitle; ?></a></li>
			<?php endif; ?>
		<?php else : ?>
		<li><a href="<?php the_permalink(); ?>"><?php echo $ttitle; ?></a></li>
		<?php endif; ?>
	<?php
		endif;
	}
	?>
	  
	</ul>
</nav> <!-- end nav -->
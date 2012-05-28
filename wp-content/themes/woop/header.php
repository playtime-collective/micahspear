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

p, div {
	font-family: tahoma, arial, sans-serif;
	font-weight: 100;
	font-size: 13px;
	letter-spacing: 0.1em;
	color: #666666;
	line-height: 1.5em;
}

.topbar {
	display: none;
}

nav ul {
	padding-top: 8px;
}

nav a:link {
	font-size: 15px;
	font-weight: 300;
	color: #4a4949;
	text-transform: uppercase;
	padding: 7px 30px 7px 30px;
	line-height: 18px;
}

.subheader {
	text-align: center;
	margin-top: 70px;
	margin-bottom: 50px;
}

div.twitter_wrap {
  clear: both;
  border: 1px solid #f5f5f5;
  padding: 15px 0;
  background-color: white;
  margin-top: 25px;
  width: 268px;
}

div#slides a.prev {
  float: left;
  padding-left: 6px;
  margin-left: 22px;
}

span.ss_text {
	color: #808080;
	font-size: 13px;
}

footer p {
	margin-top: 20px;
	font-size: 10px;
	color: #454545;
	text-transform: uppercase;
	padding-top: 30px;
	letter-spacing: .4em;
}

.alignleft, img.alignleft {
	margin-right: 10px;
	display: inline;
	float: left;
	margin-top: 0px;
}

.skills {
	width:200px;
	float:left;
	text-align:center;
	padding:0px 20px 0px 20px;
}

.skills p {
	font-size: 12px;
	color:#666666;
}

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
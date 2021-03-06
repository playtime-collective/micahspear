<?php require_once( ABSPATH.'wp-load.php' );

	$col = theme_get_option('colors');
	
	$headerbg = '';
	if($col["h_backgroundurl"] == '') 
	{
		$headerbg = '../img/bgs/'.$col["default_bg"];
	}
	else
	{
		$headerbg = $col["h_backgroundurl"];
	}

?>

@charset "utf-8";
/* CSS Document */


body {
	background: url(<?php echo $headerbg; ?>) repeat fixed;
}



/*------------------------------------------------
                    typography
--------------------------------------------------*/

h2 {
	font-family: 'Maven Pro', sans-serif;
	font-weight: 900;
	font-size: 30px;
	text-transform: uppercase;
	color: #<?php echo $col["c_headers"]; ?>;
}

h3 {
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	font-size: 22px;
	text-transform: uppercase;
	color: #<?php echo $col["c_headers"]; ?>;
}

h4 {
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	font-size: 18px;
	color: #<?php echo $col["c_headers"]; ?>;
}

p, div {
	font-family: 'Open Sans', sans-serif;
	font-weight: 300;
	font-size: 16px;
}

a:link {
	text-decoration: none;
	font-family: 'Open Sans', sans-serif;
}



/*------------------------------------------------
                     intro
--------------------------------------------------*/

.topbar {
	background-color: #fff;
	width: 100%;
	height: 30px;
	opacity: 0.7;
	position: fixed;
	z-index: 200;
	-webkit-box-shadow: 0px 0px 7px 0px #818181;
	-moz-box-shadow: 0px 0px 7px 0px #818181;
	box-shadow: 0px 0px 7px 0px #818181;
}

.ie8 .topbar, .ie7 .topbar {
	display: none;
}


#intro {
	background: url(<?php echo $headerbg; ?>) repeat fixed;
	height: 610px;
	text-align: center;
	margin: 0 auto;
	overflow: hidden;
}



#intro h1 {
	font-family: 'Maven Pro', sans-serif;
	font-weight: 900;
	font-size: 120px;
	text-transform: uppercase;
	letter-spacing: -5px;
	line-height: 80px;
	text-align: center;
	color: #<?php echo $col["h_basecolor"]; ?>;
	text-shadow: 1px 1px 1px #787777;
	/*filter: dropshadow(color=#787777, offx=1, offy=1);*/
	padding-top: 90px;
	margin: 0 auto;
	position: fixed;
	z-index: 100;
	width: 100%;
}

span.small {
	font-size: 80px;
}

span.name {
	color: #<?php echo $col["h_featuredcolor"]; ?>;
	text-shadow: 1px 0px 1px #787777;
}

span.amp {
	display: inline-block;
	font-size: 80px;
	font-weight: normal;
	font-family: Baskerville, 'Maven Pro', serif;
	font-style: italic;
}
span.intro_line {
	background: url(../img/intro_line.png) no-repeat;
	width: 254px;
	height: 8px;
	display: inline-block;
	margin: 0 20px 12px 25px;
}


.ie7 #intro .title {
	text-align: left;
}

/*------------------------------------------------
                       nav
--------------------------------------------------*/

nav {

	<?php if( $col["m_backgroundurl"] == '') : ?>
	background: url(../img/nav_bg.png) repeat-x;
	<?php else : ?>
	background: url(<?php echo $col["m_backgroundurl"]; ?>) repeat-x;
	<?php endif; ?>
	
	height: 34px;
	width: 100%;
	text-align: center;
	position: absolute;
	z-index: 1000;
	-webkit-box-shadow: 0px 0px 7px 0px #818181;
	-moz-box-shadow: 0px 0px 7px 0px #818181;
	box-shadow: 0px 0px 7px 0px #818181;
}

nav ul {
	padding-top: 5px;
}

nav ul li {
	display: inline;
}

nav a:link {
	font-size: 18px;
	font-weight: 300;
	color: #<?php echo $col["m_normal"]; ?>;
	text-transform: uppercase;
	padding: 5px 30px 5px 30px;
}

nav a:visited {
	color: #<?php echo $col["m_normal"]; ?>;
}

nav a:hover {
	background: #<?php echo $col["m_hoverbackground"]; ?>;
	color: #<?php echo $col["m_hover"]; ?>;
}

/*------------------------------------------------
                      blocks
--------------------------------------------------*/

.gray-block {
	margin-top: -13px;
	background: url(../img/work_bg.png) repeat;
	width: 100%;
	position: relative;
	z-index: 400;
	text-align: left;
	height: auto;
	padding-bottom: 70px;
}

.gray-block.first{
	margin-top: 0px !important;
}

.white-block {
	width: 100%;
	background-color: #fff;
	position: relative;
	z-index: 400;
	text-align: left;
	padding-bottom: 70px;
}

.white-block p {
	color: #686868;
}

.gray-block p {
	color: #3D3D3D;
}

.white-block.first{
	margin-top: 0px !important;
}

.bg_top {
	background: url(../img/bg_up.png) repeat-x;
	background-color: #fff;
	width: 100%;
	height: 14px;
	position: relative;
	z-index: 400;
}

.bg_bottom {
	background: url(../img/bg_down.png) repeat-x;
	width: 100%;
	height: 13px;
	position: relative;
	z-index: 500;
}

/*------------------------------------------------
                      elements
--------------------------------------------------*/

.block h1 {

}

.block h2 {

}

.block h3 {
	margin: 0px 0 18px 0;
	font-size: 22px;
}

.block h4 {
	margin: 0px 0 18px 0;
	font-size: 18px;
}

.block p{
	margin: 0px 0 18px 0;
}

.block a {
	color: #<?php echo $col['c_a']; ?>;
}

.block img {
	opacity: 0.8;
	margin-top: 7px;
}

/* == WordPress WYSIWYG Editor Styles == */

.entry-content img {
	margin: 0 0 1.5em 0;

	}
.alignleft, img.alignleft {
	margin-right: 1.5em;
	display: inline;
	float: left;
	}
.alignright, img.alignright {
	margin-left: 1.5em;
	display: inline;
	float: right;
	}
.aligncenter, img.aligncenter {
	margin-right: auto;
	margin-left: auto;
	display: block;
	clear: both;
	margin-bottom: 18px;
	}
.alignnone, img.alignnone {
	/* not sure about this one */
	}
.wp-caption {
	margin-bottom: 1.5em;
	text-align: center;
	padding-top: 5px;
	}
.wp-caption img {
	border: 0 none;
	padding: 0;
	margin: 0;
	}
.wp-caption p.wp-caption-text {
	line-height: 1.5;
	font-size: 10px;
	margin: 0;
	}
.wp-smiley {
	margin: 0 !important;
	max-height: 1em;
	}
blockquote.left {
	margin-right: 20px;
	text-align: right;
	margin-left: 0;
	width: 33%;
	float: left;
	}
blockquote.right {
	margin-left: 20px;
	text-align: left;
	margin-right: 0;
	width: 33%;
	float: right;
	}
	

/*------------------------------------------------
                      work
--------------------------------------------------*/

.subheader {
	text-align: center;
	margin-top: 70px;
	margin-bottom: 60px;
}

.subheader h2 {
	text-align: center;
	background-image: url(../img/subheader_line.png);
	background-repeat: repeat-x;
	background-position: 0 center;
	color: #<?php echo $col["c_title"]; ?>;
}

.gray-block .subheader h2 span{
	background-color: #f0f0f0;
	padding: 0px 10px;
}

.white-block .subheader h2 span{
	background-color: #ffffff;
	padding: 4px 10px;
}

.subheader_line {
	background: url(../img/subheader_line.png) no-repeat;
	width: 348px;
	height: 8px;
	margin: 0 10px 5px 10px;
	display: inline-block;
}

.gallery {
	/*margin-top: 70px;*/
}

.gallery .portfolio-item {
	margin-top: 40px;
	margin-bottom: 30px;
}

.gallery p {
	margin-top: 14px;
	font-size: 15px;
	color: #4b4a4a;
	text-align: center;
}

span.ss_text {
	color: #808080;
}

.ss {
	text-align: center;
	width: 280px;
	height: 180px;
	margin: 0 auto;
}

.ss img {
	-webkit-box-shadow: 0px 0px 0px 1px #d9d7d7;
	-moz-box-shadow: 0px 0px 0px 1px #d9d7d7;
	box-shadow: 0px 0px 0px 1px #d9d7d7;
}

.ss img:hover {
	-webkit-box-shadow: 0px 0px 0px 7px #<?php echo $col["c_a"]; ?>;
	-moz-box-shadow: 0px 0px 0px 7px #<?php echo $col["c_a"]; ?>;
	box-shadow: 0px 0px 0px 7px #<?php echo $col["c_a"]; ?>;
}

.center {
	text-align: center;
	margin: 0 auto;
}

.spacer {
	padding-bottom: 37px;
}


.work_bg_bottom {
	background: url(../img/work_bg_bottom.png) repeat-x;
	background-color: #fff;
	width: 100%;
	height: 14px;
	position: relative;
	z-index: 400;
}

/*------------------------------------------------
                      about
--------------------------------------------------*/

.about_pic {
	background: url(../img/about_pic.jpg) no-repeat;
	width: 266px;
	height: 266px;
	-webkit-box-shadow: 0px 0px 0px 7px #fff;
	-moz-box-shadow: 0px 0px 0px 7px #fff;
	box-shadow: 0px 0px 0px 7px #fff;
	opacity: 0.8;
	margin-top: 67px;
}

.about_copy {
	margin-top: 60px;
}

.about_copy p {
	margin-bottom: 15px;
	color: #3d3d3d;
}

/********* social **********/

.social {
	margin-top: 30px;
}

.social ul li {
	display: inline;
	margin-right: 15px;
}

.icon.twitter {
	width: 52px;
	height: 52px;
	background: url(../img/icn_twitter.png) no-repeat 0 0;
	display: inline-block;
}

.icon.facebook {
	width: 52px;
	height: 52px;
	background: url(../img/icn_facebook.png) no-repeat 0 0;
	display: inline-block;
}

.icon.linkedin {
	width: 50px;
	height: 52px;
	background: url(../img/icn_linkedin.png) no-repeat 0 0;
	display: inline-block;
}

.icon.dribbble {
	width: 50px;
	height: 52px;
	background: url(../img/icn_dribble.png) no-repeat 0 0;
	display: inline-block;
}

.sprite:hover {
	background-position: 0 -52px;
}

/********** skills *********/


.skills ul li {
	margin-bottom: 15px;
}

.skills p {
	padding: 4px 0 0 10px;
	color: #fff;
	font-size: 15px;
}

.skillred {
	background-image: url(../img/skill1.png);
	background-repeat: repeat-x;
	height: 27px;
}

.skillyellow {
	background-image: url(../img/skill2.png);
	background-repeat: repeat-x;
	height: 27px;
}

.skillblue {
	background-image: url(../img/skill3.png);
	background-repeat: repeat-x;
	height: 27px;
}

.skillgray {
	background-image: url(../img/skill4.png);
	background-repeat: repeat-x;
	height: 27px;
}

.skillgreen {
	background-image: url(../img/skill5.png);
	background-repeat: repeat-x;
	height: 27px;
}

.skillbrown {
	background-image: url(../img/skill6.png);
	background-repeat: repeat-x;
	height: 27px;
}

/*------------------------------------------------
                      contact
--------------------------------------------------*/

.contact_form h4 {
	margin-bottom: 15px;
}

.contact_form input {
	width: 340px;
	height: 25px;
	margin-bottom: 15px;
	padding-left: 4px;
	background-color: #f0f0ef;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	font-weight: 300;
	font-size: 16px;
	color: #939292;
	border-top: 1px solid #cfcfcf;
	border-left: 1px solid #cfcfcf;
	border-right: 1px solid #fff;
	border-bottom: 1px solid #fff;
}

.contact_form textarea {
	background-color: #f0f0ef;
	margin-bottom: 20px;
	padding-left: 5px;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	font-weight: 300;
	font-size: 16px;
	color: #939292;
	width: 390px;
	height: 140px;
	border-top: 1px solid #cfcfcf;
	border-left: 1px solid #cfcfcf;
	border-right: 1px solid #fff;
	border-bottom: 1px solid #fff;
}

.contact_form input:focus, .contact_form textarea:focus {
	-moz-box-shadow: 0px 0px 6px #125b76;
	-webkit-box-shadow: 0px 0px 6px #125b76;
	box-shadow: 0px 0px 6px #125b76;
} 

.contact_form input.submit-button {
	background-color: #000000;
	color: #faf4ec;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	font-style: normal;
	font-size: 15px;
	width: 74px;
	padding: 0;
	text-align: center;
}

.contact_form input.submit-button:hover {
	background-color: #e76658;
}


.contact_info h4 {
	margin-bottom: 15px;
}

.contact_info p {
	margin-bottom: 6px;
	color: #4e4e4e;
}

#contact-loader {
	display: none;
	text-align: center;
}

.contact_info img {
	vertical-align: baseline;
	margin-right: 8px;
}

span.address {

}

.map_frame {
	margin-top: 20px;
	-webkit-box-shadow: 0px 0px 0px 7px #f0f0ef;
	-moz-box-shadow: 0px 0px 0px 7px #f0f0ef;
	box-shadow: 0px 0px 0px 7px #f0f0ef;
}

/*------------------------------------------------
                      footer
--------------------------------------------------*/

footer {
	height: 50px;
	text-align: center;
}

footer p {
	margin-top: 20px;
	font-size: 16px;
	color: #<?php echo $col["f_text"]; ?>;
}


/*------------------------------------------------
                      blog
--------------------------------------------------*/

.page .subheader {
	margin-top: 100px;
}

.post {
	margin-bottom: 30px;
}

.post h2{
	text-transform: capitalize;
	color: #<?php echo $col["b_title"]; ?>;
}

.post h2 a {
	color: #<?php echo $col["b_title"]; ?>;
}

.post .meta {
	font-size: 12px;
	padding-top: 5px;
	margin-bottom: 5px;
}

.post .read-more {
	font-weight: bold;
}

.pagination {
	padding-top: 30px;
}

.pagination a {
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	font-style: normal;
	font-size: 15px;
	width: 74px;
	padding: 0;
	text-align: center;
	padding: 8px;
	margin-right: 10px;
}

.pagination a.active {
	background-color: #000000;
	color: #faf4ec;
}

.single .post {
	margin-top: 100px;
}



.single .meta {
	margin-bottom: 30px;
}

.single h1, .single h2, .single h3, .single h4, .single h5, .single h6 {
	font-family: 'Open Sans', sans-serif;
	text-transform: capitalize;
	color: #<?php echo $col["c_headers"]; ?>;
	font-weight: normal;
}

.single h1 { font-size: 30px; line-height: 36px; margin-bottom: 10px; }

.single h2 { font-size: 24px; line-height: 30px; margin-bottom: 10px; }

.single h3 { font-size: 20px; line-height: 26px; margin-bottom: 15px; }

.single h4 { font-size: 16px; line-height: 22px; margin-bottom: 15px; }

.single h5 { font-size: 14px; line-height: 20px; margin-bottom: 15px; }

.single h6 { font-size: 12px; line-height: 18px; margin-bottom: 15px; }

.single ul { margin-bottom: 15px; }

.single ul li { list-style-type: square; color: #464545; margin-bottom: 10px; margin-left: 35px;}

.single ol { margin-bottom: 15px; }

.single ol li { list-style-type: decimal; color: #464545; margin-bottom: 10px; margin-left: 35px;}

/* == WordPress WYSIWYG Editor Styles == */

.entry-content img {
	margin: 0 0 1.5em 0;
	}
.alignleft, img.alignleft {
	margin-right: 10px;
	display: inline;
	float: left;
	}
.alignright, img.alignright {
	margin-left: 10px;
	display: inline;
	float: right;
	}
.aligncenter, img.aligncenter {
	margin-right: auto;
	margin-left: auto;
	display: block;
	clear: both;
	}
.alignnone, img.alignnone {
	/* not sure about this one */
	}
.wp-caption {
	margin-bottom: 1.5em;
	text-align: center;
	padding-top: 10px;
	}
.wp-caption img {
	border: 0 none;
	padding: 0;
	margin: 0;
	}
.wp-caption p.wp-caption-text {
	line-height: 1.5;
	font-size: 10px;
	padding-top: 5px;
	margin: 0;
	}
.wp-smiley {
	margin: 0 !important;
	max-height: 1em;
	}
blockquote.left {
	margin-right: 20px;
	text-align: right;
	margin-left: 0;
	width: 33%;
	float: left;
	}
blockquote.right {
	margin-left: 20px;
	text-align: left;
	margin-right: 0;
	width: 33%;
	float: right;
	}
	
/*** COMMENTS ***/

#comments {

}

#comments .heading {
	margin-bottom: 30px;
}

#comments .comment-list {
	margin-bottom: 30px;
}

#comments .comment-list .comment {
	list-style-type: none;
	margin-left: 0px;
	margin-bottom: 25px;
}

#comments .comment-list .comment .comment-avatar {
	width: 93px;
	height: 93px;
	float: left;
}

#comments .comment-list .comment .comment-detail{
	padding-left: 120px;
	padding-top: 5px;
}

#comments .comment-list .comment ul {
	margin-left: 30px;
	padding-top: 15px;
	margin-bottom: 0;
}

#comments .comment-list .comment ul .comment:last-child {
	margin-bottom: 0;
}

/*** RESPOND COMMENTS ***/

#respond {

}

#respond h3 {
	padding-top: 30px;
	margin-bottom: 50px;
}

#respond fieldset {
	margin-bottom: 10px;
}

#respond fieldset label {
	color: #686868;
	display: block;
	margin-bottom: 5px;
}

#respond input[type="text"]{
	width: 340px;
	height: 25px;
	margin-bottom: 15px;
	padding-left: 4px;
	background-color: #f0f0ef;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	font-weight: 300;
	font-size: 16px;
	color: #939292;
	border-top: 1px solid #cfcfcf;
	border-left: 1px solid #cfcfcf;
	border-right: 1px solid #fff;
	border-bottom: 1px solid #fff;
}

#respond textarea {
	background-color: #f0f0ef;
	margin-bottom: 20px;
	padding-left: 5px;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	font-weight: 300;
	font-size: 16px;
	color: #939292;
	width: 390px;
	height: 140px;
	border-top: 1px solid #cfcfcf;
	border-left: 1px solid #cfcfcf;
	border-right: 1px solid #fff;
	border-bottom: 1px solid #fff;
}

#respond input[type="text"]:focus, #respond textarea:focus {
	-moz-box-shadow: 0px 0px 6px #125b76;
	-webkit-box-shadow: 0px 0px 6px #125b76;
	box-shadow: 0px 0px 6px #125b76;
} 

#respond input[type="submit"] {
	background-color: #000000;
	color: #faf4ec;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	font-style: normal;
	font-size: 15px;
	width: 74px;
	padding: 0;
	text-align: center;
	border: none;
}

#respond input[type="submit"]:hover {
	background-color: #e76658;
}
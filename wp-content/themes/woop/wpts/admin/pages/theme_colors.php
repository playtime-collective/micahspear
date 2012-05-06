<?php
$options = array(
	array(
		"name" => 'Colors',
		"type" => 'title',
		"desc" => '',
	),
	
	array(
	"name" => "Header",
	"type" => "start"
	),

		array(
		"name" => "Default Background",
		"desc" => "Select an default background",
		"id" => "default_bg",
		"default" => "",
		"options" => array(
			"1.jpg" => "Normal Wood (default)", "2.png" => "Dark Points", "3.png" => "Dark Circles", "4.png" => "Black Points", "5.png" => "Dark Wood"
		),
		"type" => "select",
		),
		
		array(
		"name" => "Normal Text Color",
		"desc" => "The hex code without '#'",
		"id" => "h_basecolor",
		"default" => "ffffff",
		"type" => "color",
		),
		
		array(
		"name" => "Name Text Color",
		"desc" => "The hex code without '#'",
		"id" => "h_featuredcolor",
		"default" => "b46b6b",
		"type" => "color",
		),
		
		array(
		"name" => "Custom Background URL",
		"desc" => "Leave blank to use Default Background",
		"id" => "h_backgroundurl",
		"default" => "",
		"type" => "text",
		),
	
	array(
	"type" => "end"
	),
	
	array(
	"name" => "Menu",
	"type" => "start"
	),
		
		array(
		"name" => "Normal Text Color",
		"desc" => "The hex code without '#'",
		"id" => "m_normal",
		"default" => "4a4949",
		"type" => "color",
		),
		
		array(
		"name" => "Hover Text Color",
		"desc" => "The hex code without '#'",
		"id" => "m_hover",
		"default" => "ffffff",
		"type" => "color",
		),
		
		array(
		"name" => "Hover Background Color",
		"desc" => "The hex code without '#'",
		"id" => "m_hoverbackground",
		"default" => "b46b6b",
		"type" => "color",
		),
		
		array(
		"name" => "Custom Background URL",
		"desc" => "Leave blank to use Default Background",
		"id" => "m_backgroundurl",
		"default" => "",
		"type" => "text",
		),
	
	array(
	"type" => "end"
	),
	
	array(
	"name" => "Content",
	"type" => "start"
	),
		
		array(
		"name" => "Title Color",
		"desc" => "The hex code without '#'",
		"id" => "c_title",
		"default" => "464545",
		"type" => "color",
		),
		
		array(
		"name" => "A Color",
		"desc" => "The hex code without '#'",
		"id" => "c_a",
		"default" => "b46b6b",
		"type" => "color",
		),
		
		array(
		"name" => "H1, H2, H3, H4, H5, H6 Color",
		"desc" => "The hex code without '#'",
		"id" => "c_headers",
		"default" => "464545",
		"type" => "color",
		),
		
	array(
	"type" => "end"
	),

	array(
	"name" => "Blog",
	"type" => "start"
	),
		
		array(
		"name" => "Post Title Color",
		"desc" => "The hex code without '#'",
		"id" => "b_title",
		"default" => "b46b6b",
		"type" => "color",
		),
		
	array(
	"type" => "end"
	),
	
	array(
	"name" => "Footer",
	"type" => "start"
	),
		
		array(
		"name" => "Text Color",
		"desc" => "The hex code without '#'",
		"id" => "f_text",
		"default" => "454545",
		"type" => "color",
		),
		
	array(
	"type" => "end"
	),
	
	/*MARK*/
);
return array(
	'auto' => true,
	'name' => 'colors',
	'options' => $options
);
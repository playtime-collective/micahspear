<?php
$options = array(
	array(
		"name" => "General",
		"type" => "title",
		"desc" => 'General Settings of the Theme',
	),
		
	array(
	"name" => "Intro Area",
	"type" => "start"
	),
		
		array(
		"name" => "#1 Line",
		"desc" => "The text that will appears in the 1st line",
		"id" => "line1",
		"default" => "HELLO",
		"type" => "text",
		),
		
		array(
		"name" => "#2 Line",
		"desc" => "The text that will appears in the 2nd line",
		"id" => "line2",
		"default" => "MY NAME IS",
		"type" => "text",
		),
		
		array(
		"name" => "#3 Line",
		"desc" => "The text that will appears in the 3rd line",
		"id" => "line3",
		"default" => "JOHN DOE",
		"type" => "text",
		),
		
		array(
		"name" => "#4 Line",
		"desc" => "The text that will appears in the 4th line",
		"id" => "line4",
		"default" => "I'M A WEBDESIGNER",
		"type" => "text",
		),
	
	/*introarea*/
	array(
	"type" => "end"
	),
	
	array(
	"name" => "Pages",
	"type" => "start"
	),
		
		array(
		"name" => "IDs",
		"desc" => "A list with all the pages' ID separated by semicolon ex. - 10;8;6",
		"id" => "ids",
		"default" => "",
		"type" => "text",
		),
		
		array(
		"name" => "GMAP API",
		"desc" => "GMap API",
		"id" => "gmap",
		"default" => "",
		"type" => "text",
		),
		
		array(
		"name" => "Footer Text",
		"desc" => "",
		"id" => "footertext",
		"default" => "&copy; 2012 All rights reserved",
		"type" => "text",
		),
			
	/*pages*/
	array(
	"type" => "end"
	),
	
	/*MARK*/
);
return array(
	'auto' => true,
	'name' => 'general',
	'options' => $options
);
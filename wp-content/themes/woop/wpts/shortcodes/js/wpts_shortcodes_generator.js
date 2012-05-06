	
	var currSC = "";
	var subSC = "";
	
	//
	
	function getChildSC(id)
	{
		jQuery("#wpts_sub_sc").html("");
		jQuery("#wpts_sc_attrs").css("display", "none");
		
		switch(id)
		{
		
			// DIVIDERS GROUP ----
			case "dividers" :
			
				var html = '<a href="#" id="divider" class="wpts_button">divider</a>&nbsp;' +
					'<a href="#" id="divider_top" class="wpts_button">divider_top</a>&nbsp;';
					
					/*'<a href="#" id="divider_image" class="wpts_button">divider_image</a>&nbsp;';*/
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// TYPOGRAPHY GROUP ----
			case "typography" :
			
				var html = '<a href="#" id="highlight" class="wpts_button">highlight</a>&nbsp;' +
					'<a href="#" id="blockquote" class="wpts_button">blockquote</a>&nbsp;' +
					'<a href="#" id="dropcap" class="wpts_button">dropcap</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// BOXES GROUP ----
			case "message-box" :
			
				var html = '<a href="#" id="info" class="wpts_button">info</a>&nbsp;' +
					'<a href="#" id="success" class="wpts_button">success</a>&nbsp;' +
					'<a href="#" id="error" class="wpts_button">error</a>&nbsp;' +
					'<a href="#" id="notice" class="wpts_button">notice</a>&nbsp;';
					/*'<a href="#" id="box" class="wpts_button">box</a>&nbsp;';*/
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// COLUMNS GROUP ----
			case "columns" :
			
				var html = '<a href="#" id="columns" rel="one_half" class="wpts_button">one_half</a>&nbsp;' +
					'<a href="#" id="columns" rel="one_half_last" class="wpts_button">one_half_last</a>&nbsp; - ' +
					'<a href="#" id="columns" rel="one_third" class="wpts_button">one_third</a>&nbsp;' +
					'<a href="#" id="columns" rel="one_third_last" class="wpts_button">one_third_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="two_third" class="wpts_button">two_third</a>&nbsp;' +
					'<a href="#" id="columns" rel="two_third_last" class="wpts_button">two_third_last</a>&nbsp; - ' +
					'<a href="#" id="columns" rel="one_fourth" class="wpts_button">one_fourth</a>&nbsp;' +
					'<a href="#" id="columns" rel="one_fourth_last" class="wpts_button">one_fourth_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="three_fourth" class="wpts_button">three_fourth</a>&nbsp;' +
					'<a href="#" id="columns" rel="three_fourth_last" class="wpts_button">three_fourth_last</a>&nbsp; - ' +
					'<a href="#" id="columns" rel="one_fifth" class="wpts_button">one_fifth</a>&nbsp;' +
					'<a href="#" id="columns" rel="one_fifth_last" class="wpts_button">one_fifth_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="two_fifth" class="wpts_button">two_fifth</a>&nbsp;' +
					'<a href="#" id="columns" rel="two_fifth_last" class="wpts_button">two_fifth_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="three_fifth" class="wpts_button">three_fifth</a>&nbsp;' +
					'<a href="#" id="columns" rel="three_fifth_last" class="wpts_button">three_fifth_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="four_fifth" class="wpts_button">four_fifth</a>&nbsp;' +
					'<a href="#" id="columns" rel="four_fifth_last" class="wpts_button">four_fifth_last</a>&nbsp; - ' +
					'<a href="#" id="columns" rel="one_sixth" class="wpts_button">one_sixth</a>&nbsp;' +
					'<a href="#" id="columns" rel="one_sixth_last" class="wpts_button">one_sixth_last</a>&nbsp;' +
					'<a href="#" id="columns" rel="five_sixth" class="wpts_button">five_sixth</a>&nbsp;' +
					'<a href="#" id="columns" rel="five_sixth_last" class="wpts_button">five_sixth_last</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				jQuery("#wpts_sc_attrs").html( '' );
				
			break;
			
			// VIDEO GROUP ----
			case "video" :
			
				var html = '<a href="#" id="html5" class="wpts_button">html5</a>&nbsp;' +
					'<a href="#" id="flash" class="wpts_button">flash</a>&nbsp;' +
					'<a href="#" id="youtube" class="wpts_button">youtube</a>&nbsp;' +
					'<a href="#" id="vimeo" class="wpts_button">vimeo</a>&nbsp;' + 
					'<a href="#" id="dailymotion" class="wpts_button">dailymotion</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// BUTTONS GROUP ----
			case "buttons" :
			
				var html = '<a href="#" id="button" class="wpts_button">button</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// IMAGE GROUP ----
			case "images" :
			
				var html = '<a href="#" id="image" class="wpts_button">image</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// SLIDER GROUP ----
			case "sliders" :
			
				var html = '<a href="#" id="flex_slider" class="wpts_button">flex_slider</a>&nbsp;' +
					'<a href="#" id="flex_item" class="wpts_button">flex_item</a>&nbsp;';
					
					/* '<a href="#" id="nivo_slider" class="wpts_button">nivo_slider</a>&nbsp;' +
					'<a href="#" id="nivo_item" class="wpts_button">nivo_item</a>&nbsp;' + */
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// LIGHTBOX GROUP ----
			case "lightbox" :
			
				var html = '<a href="#" id="lightbox" class="wpts_button">lightbox</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// ORGANIZE GROUP ----
			case "organize" :
			
				var html = '<a href="#" id="toggle" class="wpts_button">toggle</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// GMAP GROUP ----
			case "gmaps" :
			
				var html = '<a href="#" id="gmap" class="wpts_button">gmap</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
			
			// chart GROUP ----
			case "chart" :
			
				var html = '<a href="#" id="chart" class="wpts_button">chart</a>&nbsp;';
				
				jQuery("#wpts_sub_sc").html( html );
				
			break;
						
			default:
			
		}
	}

	// 
	
	function getForm(id)
	{
	
		jQuery("#wpts_sc_attrs").css("display", "block");
		jQuery("#wpts_send").css("display", "block");
		
		switch(id)
		{
		
			// DIVIDER ---------
			case "divider" :
			
				var html = '<p>This is a simple line divider</p>';
				
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// DIVIDER TOP ---------
			case "divider_top" :
										
				var html = '<p>This is a simple line divider <strong>with a Top Link</strong></p>';
				
				jQuery("#wpts_sc_attrs").html( html );
										
			break;
			
			// DIVIDER IMAGE ---------
			case "divider_image" :
					
				var html = '<div>' +
					'<input type="radio" id="divider_top_link" name="divider_top_link">&nbsp;&nbsp;With Top Link &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="divider_without_top_link" name="divider_top_link">&nbsp;&nbsp;Without Top Link'+
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// HIGHLIGHT
			
			case "highlight" :
					
				var html = '<div>' +
					'<input type="radio" id="highlight_type_normal" name="highlight_type">&nbsp;&nbsp;Normal Type &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="highlight_type_dark" name="highlight_type">&nbsp;&nbsp; Dark Type' +
					'</div>' +
					'<div>' +
					'<label for="custom_high_color">Custom Color:</label> <input type="text" id="custom_high_color" name="custom_high_color" class="wpts-color-picker" />' +
					'</div>' +
					'<div>' +
					'<label for="high_text">The highlighted Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="high_text" name="high_text"></textarea>' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
				addCP("#custom_high_color");
				
			break;
			
			// BLOCKQUOTE
			
			case "blockquote" :
					
				var html = '<div>' +
					'<label for="quote_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="quote_text" name="quote_text"></textarea>' +
					'</div>' +
					'<div>' +
					'<label for="quote_cite">Cite:</label> <input type="text" id="quote_cite" name="quote_cite" />' +
					'</div>' +
					'<div>' +
					'<input type="radio" id="quote_align_normal" name="quote_align">&nbsp;&nbsp;Normal &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="quote_align_left" name="quote_align">&nbsp;&nbsp; Left Align &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="quote_align_right" name="quote_align">&nbsp;&nbsp; Right Align' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			
			// DROPCAP
			case "dropcap" :
					
				var html = '<div>' +
					'<label for="drop_text">The DropCap Letter <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /> <br /> <input type="text" id="drop_text" name="drop_text" />' +
					'</div>' +
					'<div>' +
					'<label for="drop_color">Style:</label> <select name="drop_color" id="drop_color">' +
						'<option value="">Select the Style</option>' +
						'<option value="black">Black</option>' +
						'<option value="black-gradient">Black Gradient</option>'
					'</select>' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// INFO BOX
			
			case "info" :
					
				var html = '<div>' +
					'<label for="info_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="info_text" name="info_text"></textarea>' +
					'</div>' +

					'<div>' +
					'<input type="radio" id="info_align_normal" name="info_align">&nbsp;&nbsp;Normal &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="info_align_left" name="info_align">&nbsp;&nbsp; Left Align &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="info_align_right" name="info_align">&nbsp;&nbsp; Right Align' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// SUCCESS BOX
			
			case "success" :
					
				var html = '<div>' +
					'<label for="success_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="success_text" name="success_text"></textarea>' +
					'</div>' +

					'<div>' +
					'<input type="radio" id="success_align_normal" name="success_align">&nbsp;&nbsp;Normal &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="success_align_left" name="success_align">&nbsp;&nbsp; Left Align &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="success_align_right" name="success_align">&nbsp;&nbsp; Right Align' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// ERROR BOX
			
			case "error" :
					
				var html = '<div>' +
					'<label for="error_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="error_text" name="error_text"></textarea>' +
					'</div>' +

					'<div>' +
					'<input type="radio" id="error_align_normal" name="error_align">&nbsp;&nbsp;Normal &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="error_align_left" name="error_align">&nbsp;&nbsp; Left Align &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="error_align_right" name="error_align">&nbsp;&nbsp; Right Align' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// NOTICE BOX
			
			case "notice" :
					
				var html = '<div>' +
					'<label for="notice_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="notice_text" name="notice_text"></textarea>' +
					'</div>' +

					'<div>' +
					'<input type="radio" id="notice_align_normal" name="notice_align">&nbsp;&nbsp;Normal &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="notice_align_left" name="notice_align">&nbsp;&nbsp; Left Align &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="notice_align_right" name="notice_align">&nbsp;&nbsp; Right Align' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// BOX
			
			case "box" :
					
				var html = '<div>' +
					'<label for="box_title">Box Title:</label> <br /> <br /> <input type="text" id="box_title" name="box_title" />' +
					'</div>' +
					'<div>' +
					'<label for="box_text">The Content/Text <i>(You do not need fill this, you can do it in the Editor if you like</i>):</label> <br /><br />' +
					'<textarea id="box_text" name="box_text"></textarea>' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
						
			// HTML5 VIDEO
			
			case "html5" :
					
				var html = '<div>' +
					'<label>MP4 URL:</label> <br /> <br /> <input type="text" id="mp4" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>WebM Source Supplied URL:</label> <br /> <br /> <input type="text" id="webm" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>OGG URL:</label> <br /> <br /> <input type="text" id="ogg" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Poster:</label> <br /> <br /> <input type="text" id="poster" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <br /> <br /> <input type="text" id="height" name=" " />' +
					'</div>' +

					'<div>' +
					'<input type="checkbox" id="preload">&nbsp;&nbsp;Preload &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' + 
					'<div>' +
					'<input type="checkbox" id="autoplay">&nbsp;&nbsp;Autoplay &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// FLASH VIDEO
			
			case "flash" :
					
				var html = '<div>' +
					'<label>Source:</label> <br /> <br /> <input type="text" id="src" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>FlashVars:</label> <br /> <br /> <input type="text" id="flashvars" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <br /> <br /> <input type="text" id="height" name=" " />' +
					'</div>' +

					'<div>' +
					'<input type="checkbox" id="autoplay">&nbsp;&nbsp;Autoplay &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// YOUTUBE VIDEO
			
			case "youtube" :
					
				var html = '<div>' +
					'<label>Clip ID:</label> <br /> <br /> <input type="text" id="clipid" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <br /> <br /> <input type="text" id="height" name=" " />' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// VIMEO VIDEO
			
			case "vimeo" :
					
				var html = '<div>' +
					'<label>Clip ID:</label> <br /> <br /> <input type="text" id="clipid" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="title" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <br /> <br /> <input type="text" id="height" name=" " />' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// DAILYMOTION VIDEO
			
			case "dailymotion" :
					
				var html = '<div>' +
					'<label>Clip ID:</label> <br /> <br /> <input type="text" id="clipid" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <br /> <br /> <input type="text" id="height" name=" " />' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// BUTTON BOX
			
			case "button" :
					
				var html = '<div>' +
					'<label>Text Button\'s:</label> <input type="text" id="text" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Id:</label> <input type="text" id="btnid" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Class:</label> <input type="text" id="btnclass" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Size: (small, medium, large)</label>  <input type="text" id="size" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Link:</label> <input type="text" id="link" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Target: (ex. _blank, _self)</label> <input type="text" id="target" name=" " />' +
					'</div>' +
					'<div><label>Color:</label> <select id="color">' +
						'<option value="default-button">Default</option>' +
						'<option value="gray">Gray</option>' +
						'<option value="black">Black</option>' +
						'<option value="white">White</option>' +
						'<option value="red">Red</option>' +
						'<option value="orange">Orange</option>' +
						'<option value="magenta">Magenta</option>' +
						'<option value="yellow">Yellow</option>' +
						'<option value="blue">Blue</option>' +
						'<option value="pink">Pink</option>' +
						'<option value="green">Green</option>' +
						'<option value="rosy">Rosy</option>' +
					'</select></div>' +
					'<div>' +
					'<label>Custom Background Color:</label> <input type="text" id="customcolor" class="wpts-color-picker" />' +
					'</div>' +
					'<div>' +
					'<label>Custom Text Color:</label> <input type="text" id="customtextcolor" class="wpts-color-picker" />' +
					'</div>' +
					'<div>' +
					'<label>Align: (left, center or right)</label> <input type="text" id="align" />' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="full">&nbsp;&nbsp;Full Size &nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" id="fontweight">&nbsp;&nbsp;Bold &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
				addCP("#customcolor");
				addCP("#customtextcolor");
				
			break;
			
			// IMAGE VIDEO
			
			case "image" :
					
				var html = '<div>' +
					'<label>Source:</label> <br /> <br /> <input type="text" id="src" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titleimg" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Alt:</label> <br /> <br /> <input type="text" id="alt" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Link:</label> <br /> <br /> <input type="text" id="link" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Target: (ex. _blank, _self)</label> <input type="text" id="target" name=" " />' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="align">&nbsp;&nbsp;Center&nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// NIVO SLIDER VIDEO
			
			case "nivo_slider" :
					
				var html = '<div>' +
					'<label>Id:</label> <input type="text" id="id" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width: (without "px")</label> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <input type="text" id="height" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Effect: (fold,fade,sliceDown)</label> <br /> <br /> <input type="text" id="effect" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Prev Text:</label> <input type="text" id="prevtext" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Next Text</label> <input type="text" id="nexttext" name=" " />' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="directionnav">&nbsp;&nbsp;Disable Next & Prev Navigation &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="directionnavhide">&nbsp;&nbsp;Always show navigation &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="controlnav">&nbsp;&nbsp;Disable 1,2,3 Navigation &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="keyboardnav">&nbsp;&nbsp;Disable Keyboard Navigation &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="pauseonhover">&nbsp;&nbsp;Disable Pause on Hover&nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="manualadvance">&nbsp;&nbsp;Force Manual Advance &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// NIVO ITEM VIDEO
			
			case "nivo_item" :
					
				var html = '<div>' +
					'<label>Id:</label> <input type="text" id="id" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Source: (image src)</label> <br /> <br /> <input type="text" id="src" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Caption:</label> <br /> <br /> <input type="text" id="caption" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Href:</label> <br /> <br /> <input type="text" id="href" name=" " />' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// BXSLIDER VIDEO
			
			case "flex_slider" :
					
				var html = '<div>' +
					'<label>Id:</label> <input type="text" id="id" name=" " />' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// BX ITEM VIDEO
			
			case "flex_item" :
					
				var html = '<div>' +
					'<label>Src:</label> <input type="text" id="src" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Caption:</label> <input type="text" id="caption" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Href:</label> <input type="text" id="href" name=" " />' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// LIGHTBOX VIDEO
			
			case "lightbox" :
					
				var html = '<div>' +
					'<label>Href:</label> <br /> <br /> <input type="text" id="href" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titlelb" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Group:</label> <br /> <br /> <input type="text" id="group" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Width (without "px"):</label> <br /> <br /> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height (without "px"):</label> <br /> <br /> <input type="text" id="href" name=" " />' +
					'</div>' +
					'<div>' +
	
					'<div>' +
					'<input type="checkbox" id="iframe">&nbsp;&nbsp;Force open in a iframe' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="inline">&nbsp;&nbsp;Force open inline' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="photo">&nbsp;&nbsp;Force to display like a Photo' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// TABS
			
			case "tabs" :
										
				jQuery("#wpts_sc_attrs").html( ' ' );
				
			break;
			
			/*case "mini_tabs" :
										
				jQuery("#wpts_sc_attrs").html( ' ' );
				
			break;*/
			
			// ACCORDIONS
			
			case "accordions" :
										
				jQuery("#wpts_sc_attrs").html( ' ' );
				
			break;
			
			// ACCORDIONS
			
			case "accordions" :
										
				jQuery("#wpts_sc_attrs").html( ' ' );
				
			break;
			
			// TOGGLE
			
			case "toggle" :
			
				var html = '<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titletoggle" name=" " />' +
					'</div>';
										
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// ACCORDION
			
			case "accordion" :
			
				var html = '<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titleaccordion" name=" " />' +
					'</div>';
										
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// Tab
			
			case "tab" :
			
				var html = '<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titletab" name=" " />' +
					'</div>';
										
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// GMAP
			
			case "gmap" :
					
				var html = '<div>' +
					'<label>Width: (without "px" or "auto")</label> <input type="text" id="width" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Height: (without "px")</label> <input type="text" id="height" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Address: </label> <br /> <br /> <input type="text" id="address" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Zoom: (1 to 20, 8 is default)</label> <input type="text" id="zoom" name=" " />' +
					'</div>' +
					'<div>' +
					'<input type="checkbox" id="center">&nbsp;&nbsp;Align center &nbsp;&nbsp;&nbsp;&nbsp;' +
					'</div>';
					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			// chart
			
			case "chart" :
					
				var html = '<div>' +
					'<label>Data:</label> <br /> <br /> <input type="text" id="data" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Colors:</label> <br /> <br /> <input type="text" id="colors" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Size:</label> <br /> <br /> <input type="text" id="size" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Background:</label> <br /> <br /> <input type="text" id="bg" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Title:</label> <br /> <br /> <input type="text" id="titlechart" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Labels:</label> <br /> <br /> <input type="text" id="labels" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Advanced:</label> <br /> <br /> <input type="text" id="advanced" name=" " />' +
					'</div>' +
					'<div>' +
					'<label>Type:</label> <br /> <br /> <input type="text" id="type" name=" " />' +
					'</div>';

					
				jQuery("#wpts_sc_attrs").html( html );
				
			break;
			
			default:
			
		}
	
	}
	
	// 
	
	function toEditor()
	{
		switch(currSC)
		{
			// DIVIDER ----------
			case "divider" :
			
				var sc = '[divider]';
				
				send_to_editor(sc);
				
			break;
			
			// DIVIDER TOP ----------
			case "divider_top" :
			
				var sc = '[divider_top]';
				
				send_to_editor(sc);
				
			break;
			
			// DIVIDER_IMAGE ----------
			case "divider_image" :
			
				var sc = '[divider_image';
				
				if( jQuery("#divider_top_link").is(':checked') == true )
				{
					sc += ' top="true"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// HIGHLIGHT ----------
			case "highlight" :
			
				var sc = '[highlight';
				
				if( jQuery("#highlight_type_dark").is(':checked') == true )
				{
					sc += ' type="dark"';
				}
				
				if( jQuery("#custom_high_color").val() != "" )
				{
					sc += ' color="' + jQuery("#custom_high_color").val() + '"';
				}
				
				sc += ']';
				
				sc += jQuery("#high_text").val();
				
				sc += '[/highlight]';
				
				send_to_editor(sc);
				
			break;
			
			// BLOCKQUOTE ----------
			case "blockquote" :
			
				var sc = '[blockquote';
				
				if( jQuery("#quote_align_left").is(':checked') == true )
				{
					sc += ' align="left"';
				}
				
				if( jQuery("#quote_align_right").is(':checked') == true )
				{
					sc += ' align="right"';
				}
				
				if( jQuery("#quote_cite").val() != "" )
				{
					sc += ' cite="' + jQuery("#quote_cite").val() + '"';
				}
				
				sc += ']';
				
				sc += jQuery("#quote_text").val();
				
				sc += '[/blockquote]';
				
				send_to_editor(sc);
				
			break;
			
			// DROPCAP ----------
			case "dropcap" :
			
				var sc = '[dropcap';
				
				if( jQuery("#drop_color").val() != "" )
				{
					sc += ' color="' + jQuery("#drop_color").val() + '"';
				}
				
				sc += ']';
				
				sc += jQuery("#drop_text").val();
				
				sc += '[/dropcap]';
				
				send_to_editor(sc);
				
			break;
			
			// INFO BOX ----------
			case "info" :
			
				var sc = '[info';
				
				if( jQuery("#info_align_left").is(':checked') == true )
				{
					sc += ' align="left"';
				}
				
				if( jQuery("#info_align_right").is(':checked') == true )
				{
					sc += ' align="right"';
				}
				
				sc += ']';
				
				sc += jQuery("#info_text").val();
				
				sc += '[/info]';
				
				send_to_editor(sc);
				
			break;
			
			// SUCCESS BOX ----------
			case "success" :
			
				var sc = '[success';
				
				if( jQuery("#success_align_left").is(':checked') == true )
				{
					sc += ' align="left"';
				}
				
				if( jQuery("#success_align_right").is(':checked') == true )
				{
					sc += ' align="right"';
				}
				
				sc += ']';
				
				sc += jQuery("#success_text").val();
				
				sc += '[/success]';
				
				send_to_editor(sc);
				
			break;
			
			// ERROR BOX ----------
			case "error" :
			
				var sc = '[error';
				
				if( jQuery("#error_align_left").is(':checked') == true )
				{
					sc += ' align="left"';
				}
				
				if( jQuery("#error_align_right").is(':checked') == true )
				{
					sc += ' align="right"';
				}
				
				sc += ']';
				
				sc += jQuery("#error_text").val();
				
				sc += '[/error]';
				
				send_to_editor(sc);
				
			break;
			
			// NOTICE BOX ----------
			case "notice" :
			
				var sc = '[notice';
				
				if( jQuery("#notice_align_left").is(':checked') == true )
				{
					sc += ' align="left"';
				}
				
				if( jQuery("#notice_align_right").is(':checked') == true )
				{
					sc += ' align="right"';
				}
				
				sc += ']';
				
				sc += jQuery("#notice_text").val();
				
				sc += '[/notice]';
				
				send_to_editor(sc);
				
			break;
			
			
			// BOX BOXE
			
			case "box" :
			
				var sc = '[box';
				
				if( jQuery("#box_title").val() != "" )
				{
					sc += ' title="' + jQuery("#box_title").val() + '"';
				}
				
				sc += ']';
				
				sc += jQuery("#box_text").val();
				
				sc += '[/box]';
				
				send_to_editor(sc);
				
			break;
			
			// COLUMNS BOXE
			
			case "columns" :
			
				var sc = '[' + subSC + '] ' + '[/' + subSC + '] ';
				
				send_to_editor(sc);
			
			break;
			
			// HTML5 BOX ----------
			case "html5" :
			
				var sc = '[video type="html5" ';
				
				if( jQuery("#mp4").val() != "" )
				{
					sc += ' mp4="' + jQuery("#mp4").val() + '"';
				}
				
				if( jQuery("#webm").val() != "" )
				{
					sc += ' webm="' + jQuery("#webm").val() + '"';
				}
				
				if( jQuery("#ogg").val() != "" )
				{
					sc += ' ogg="' + jQuery("#ogg").val() + '"';
				}
				
				if( jQuery("#poster").val() != "" )
				{
					sc += ' poster="' + jQuery("#poster").val() + '"';
				}
				
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				if( jQuery("#preload").is(':checked') == true )
				{
					sc += ' preload="true"';
				}
				
				if( jQuery("#autoplay").is(':checked') == true )
				{
					sc += ' autoplay="true"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// FLASH BOX ----------
			case "flash" :
			
				var sc = '[video type="flash" ';
				
				if( jQuery("#src").val() != "" )
				{
					sc += ' src="' + jQuery("#src").val() + '"';
				}
				
				if( jQuery("#flashvars").val() != "" )
				{
					sc += ' flashvars="' + jQuery("#flashvars").val() + '"';
				}

				
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				
				if( jQuery("#autoplay").is(':checked') == true )
				{
					sc += ' play="true"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// YOUTUBE BOX ----------
			case "youtube" :
			
				var sc = '[video type="youtube" ';
				
				if( jQuery("#clipid").val() != "" )
				{
					sc += ' clip_id="' + jQuery("#clipid").val() + '"';
				}
								
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// VIMEO BOX ----------
			case "vimeo" :
			
				var sc = '[video type="vimeo" ';
				
				if( jQuery("#clipid").val() != "" )
				{
					sc += ' clip_id="' + jQuery("#clipid").val() + '"';
				}
				
				if( jQuery("#title").val() != "" )
				{
					sc += ' title="' + jQuery("#title").val() + '"';
				}
								
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// DAILYMOTION BOX ----------
			case "dailymotion" :
			
				var sc = '[video type="dailymotion" ';
				
				if( jQuery("#clipid").val() != "" )
				{
					sc += ' clip_id="' + jQuery("#clipid").val() + '"';
				}
								
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// BUTTON BOX ----------
			
			case "button" :
			
				var sc = '[button';
				
				if( jQuery("#btnid").val() != "" )
				{
					sc += ' id="' + jQuery("#btnid").val() + '"';
				}
				
				if( jQuery("#btnclass").val() != "" )
				{
					sc += ' class="' + jQuery("#btnclass").val() + '"';
				}
				
				if( jQuery("#size").val() != "" )
				{
					sc += ' size="' + jQuery("#size").val() + '"';
				}
				
				if( jQuery("#link").val() != "" )
				{
					sc += ' link="' + jQuery("#link").val() + '"';
				}
				
				if( jQuery("#target").val() != "" )
				{
					sc += ' linktarget="' + jQuery("#target").val() + '"';
				}	

				sc += ' color="' + jQuery("#color").val() + '"';
				
				if( jQuery("#customcolor").val() != "" )
				{
					sc += ' bgcolor="' + jQuery("#customcolor").val() + '"';
				}
				
				if( jQuery("#customtextcolor").val() != "" )
				{
					sc += ' textcolor="' + jQuery("#customtextcolor").val() + '"';
				}
	
				if( jQuery("#full").is(':checked') == true )
				{
					sc += ' full="true"';
				}
				
				if( jQuery("#align").val() != "" )
				{
					sc += ' align="' + jQuery("#align").val() + '"';
				}
				
				if( jQuery("#fontweight").is(':checked') == true )
				{
					sc += ' fontweight="bold"';
				}
				
				sc += ']';
				
				sc += jQuery("#text").val();
				
				sc += '[/button]';
				
				send_to_editor(sc);
				
			break;
			
			// IMAGE BOX ----------
			case "image" :
			
				var sc = '[image';
				
				if( jQuery("#src").val() != "" )
				{
					sc += ' src="' + jQuery("#src").val() + '"';
				}
				
				if( jQuery("#title").val() != "" )
				{
					sc += ' title="' + jQuery("#titleimg").val() + '"';
				}
				
				if( jQuery("#alt").val() != "" )
				{
					sc += ' alt="' + jQuery("#alt").val() + '"';
				}
				
				if( jQuery("#link").val() != "" )
				{
					sc += ' link="' + jQuery("#link").val() + '"';
				}
				
				if( jQuery("#target").val() != "" )
				{
					sc += ' target="' + jQuery("#target").val() + '"';
				}
				
				
				if( jQuery("#align").is(':checked') == true )
				{
					sc += ' align="center"';
				}
				
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// NIVO SLIDER BOX ----------
			case "nivo_slider" :
			
				var sc = '[nivo_slider';
				
				if( jQuery("#id").val() != "" )
				{
					sc += ' id="' + jQuery("#id").val() + '"';
				}
				
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				if( jQuery("#effect").val() != "" )
				{
					sc += ' effect="' + jQuery("#effect").val() + '"';
				}
				
				if( jQuery("#prevtext").val() != "" )
				{
					sc += ' prevtext="' + jQuery("#prevtext").val() + '"';
				}
				
				if( jQuery("#nexttext").val() != "" )
				{
					sc += ' nexttext="' + jQuery("#nexttext").val() + '"';
				}
				
				if( jQuery("#directionnav").is(':checked') == true )
				{
					sc += ' directionnav="false"';
				}
				
				if( jQuery("#directionnavhide").is(':checked') == true )
				{
					sc += ' directionnavhide="false"';
				}
				
				if( jQuery("#controlnav").is(':checked') == true )
				{
					sc += ' controlnav="false"';
				}
				
				if( jQuery("#keyboardnav").is(':checked') == true )
				{
					sc += ' keryboardnav="false"';
				}
				
				if( jQuery("#pauseonhover").is(':checked') == true )
				{
					sc += ' pauseonhover="false"';
				}
				
				if( jQuery("#manualadvance").is(':checked') == true )
				{
					sc += ' manualadvance="true"';
				}
				
				sc += '] [/nivo_slider]';
				
				send_to_editor(sc);
				
			break;
			
			// NIVO ITEM BOX ----------
			case "nivo_item" :
			
				var sc = '[nivo_item';
				
				if( jQuery("#id").val() != "" )
				{
					sc += ' id="' + jQuery("#id").val() + '"';
				}
				
				if( jQuery("#src").val() != "" )
				{
					sc += ' src="' + jQuery("#src").val() + '"';
				}
				
				if( jQuery("#caption").val() != "" )
				{
					sc += ' caption="' + jQuery("#caption").val() + '"';
				}
				
				if( jQuery("#href").val() != "" )
				{
					sc += ' href="' + jQuery("#href").val() + '"';
				}

				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// BX SLIDER BOX ----------
			case "flex_slider" :
			
				var sc = '[flex_slider';
				
				if( jQuery("#id").val() != "" )
				{
					sc += ' id="' + jQuery("#id").val() + '"';
				}
												
				sc += '] [/flex_slider]';
				
				send_to_editor(sc);
				
			break;
			
			
			// BX ITEM BOX ----------
			case "flex_item" :
			
				var sc = '[flex_item';
				
				if( jQuery("#src").val() != "" )
				{
					sc += ' src="' + jQuery("#src").val() + '"';
				}
				
				if( jQuery("#caption").val() != "" )
				{
					sc += ' caption="' + jQuery("#caption").val() + '"';
				}
				
				if( jQuery("#href").val() != "" )
				{
					sc += ' href="' + jQuery("#href").val() + '"';
				}
				
				sc += ']';
				
				//sc += '\n' + ']';
				
				send_to_editor(sc);
				
			break;
			
			// LIGHTBOX BOX ----------
			case "lightbox" :
			
				var sc = '[lightbox';
				
				if( jQuery("#href").val() != "" )
				{
					sc += ' href="' + jQuery("#href").val() + '"';
				}
				
				if( jQuery("#titlelb").val() != "" )
				{
					sc += ' title="' + jQuery("#titlelb").val() + '"';
				}
				
								
				if( jQuery("#group").val() != "" )
				{
					sc += ' group="' + jQuery("#group").val() + '"';
				}
				
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				if( jQuery("#iframe").is(':checked') == true )
				{
					sc += ' iframe="true"';
				}
				
				if( jQuery("#inline").is(':checked') == true )
				{
					sc += ' inline="true"';
				}
				
				if( jQuery("#photo").is(':checked') == true )
				{
					sc += ' photo="true"';
				}
				
								
				sc += '] [/lightbox]';
				
				send_to_editor(sc);
				
			break;
			
			// TABS  ----------
			case "tabs" :
			
				var sc = '[tabs';
				sc += ']';
				
				sc += '\n' + '[/tabs]';
				
				send_to_editor(sc);
				
			break;
			
			// MINI TABS  ----------
			/*case "mini_tabs" :
			
				var sc = '[mini_tabs';
				sc += ']';
				
				sc += '\n' + '[/mini_tabs]';
				
				send_to_editor(sc);
				
			break;*/
			
			// ACCORDIONs  ----------
			case "accordions" :
			
				var sc = '[accordions';
				
				sc += ']';
				
				sc += '\n' + '[/accordions]';
				
				send_to_editor(sc);
				
			break;
			
			// TOGGLE  ----------
			case "toggle" :
			
				var sc = '[toggle';
								
				if( jQuery("#titletoggle").val() != "" )
				{
					sc += ' title="' + jQuery("#titletoggle").val() + '"';
				}
				
				sc += ']';
				
				sc += '\n' + '[/toggle]';
				
				send_to_editor(sc);
				
			break;
			
			// TAB  ----------
			case "tab" :
			
				var sc = '[tab';
								
				if( jQuery("#titletab").val() != "" )
				{
					sc += ' title="' + jQuery("#titletab").val() + '"';
				}
				
				sc += ']';
				
				sc += '\n' + '[/tab]';
				
				send_to_editor(sc);
				
			break;
			
			// ACCORDION ----------
			case "accordion" :
			
				var sc = '[accordion';
								
				if( jQuery("#titleaccordion").val() != "" )
				{
					sc += ' title="' + jQuery("#titleaccordion").val() + '"';
				}
				
				sc += ']';
				
				sc += '\n' + '[/accordion]';
				
				send_to_editor(sc);
				
			break;
			
			// GMAP BOX ----------
			case "gmap" :
			
				var sc = '[gmap';
				
				if( jQuery("#width").val() != "" )
				{
					sc += ' width="' + jQuery("#width").val() + '"';
				}
				
				if( jQuery("#height").val() != "" )
				{
					sc += ' height="' + jQuery("#height").val() + '"';
				}
				
				if( jQuery("#address").val() != "" )
				{
					sc += ' address="' + jQuery("#address").val() + '"';
				}
				
				if( jQuery("#zoom").val() != "" )
				{
					sc += ' zoom="' + jQuery("#zoom").val() + '"';
				}
				
				if( jQuery("#center").is(':checked') == true )
				{
					sc += ' align="center"';
				}
								
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			// chart BOX ----------
			case "chart" :
			
				var sc = '[chart';
				
				if( jQuery("#data").val() != "" )
				{
					sc += ' data="' + jQuery("#data").val() + '"';
				}
				
				if( jQuery("#colors").val() != "" )
				{
					sc += ' colors="' + jQuery("#colors").val() + '"';
				}
				
				if( jQuery("#size").val() != "" )
				{
					sc += ' size="' + jQuery("#size").val() + '"';
				}
				
				if( jQuery("#bg").val() != "" )
				{
					sc += ' bg="' + jQuery("#bg").val() + '"';
				}
				
				if( jQuery("#titlechart").val() != "" )
				{
					sc += ' title="' + jQuery("#titlechart").val() + '"';
				}
				
				if( jQuery("#labels").val() != "" )
				{
					sc += ' labels="' + jQuery("#labels").val() + '"';
				}
				
				if( jQuery("#advanced").val() != "" )
				{
					sc += ' advanced="' + jQuery("#advanced").val() + '"';
				}
				
				if( jQuery("#type").val() != "" )
				{
					sc += ' type="' + jQuery("#type").val() + '"';
				}
						
				sc += ']';
				
				send_to_editor(sc);
				
			break;
			
			default:
		}
	}

	jQuery(document).ready( function()
	{
		jQuery("#sc_send_editor").click( function()
		{
			toEditor();
			
			return false;
		});
		
		// MAIN SHORTCODES
		
		jQuery("#wpts_main_sc a").click( function() {
		
			jQuery("#wpts_send").css("display", "none");
			
			jQuery("#wpts_sub_sc").css("display", "block");
		
			var att = jQuery(this).attr("id");
			
			getChildSC(att);
		
			return false;
		});
		
		// SUB SHORTCODES
		
		jQuery("#wpts_sub_sc a").live( "click", function() {
		
			jQuery("#wpts_send").css("display", "none");
		
			var att = jQuery(this).attr("id");
			
			currSC = att;
			
			if(currSC == "columns")
			{
				subSC = jQuery(this).attr("rel");
			}
			
			getForm(att);
		
			return false;
		});
		
		// GET FORMS
		
	});
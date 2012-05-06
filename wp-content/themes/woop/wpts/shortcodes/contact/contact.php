<?php

	function f_contact_form($atts, $content)
	{
		extract(shortcode_atts(array(
		'to' => '',
		), $atts));
		
		$dir = get_template_directory_uri();
		
		$form = '[raw]
			<div class="contact_form">
				<form method="post" id="contact-form" action="'. THEME_DIR .'" + "/scripts/sendmail.php">
					<input type="text" name="Name" id="name" value="'.__('Name', 'woop').'" onfocus="this.value = this.value==\''.__('Name', 'woop').'\'?\'\':this.value;" onblur="this.value = this.value==\'\'?\''.__('Name', 'woop').'\':this.value;" />
					<input type="text" name="Email" id="email" value="'.__('Email', 'woop').'" onfocus="this.value = this.value==\''.__('Email', 'woop').'\'?\'\':this.value;" onblur="this.value = this.value==\'\'?\''.__('Email', 'woop').'\':this.value;" />
					<input type="text" value="Subject" id="subject" onfocus="this.value = this.value==\''.__('Subject', 'woop').'\'?\'\':this.value;" onblur="this.value = this.value==\'\'?\''.__('Subject', 'woop').'\':this.value;" />
					<textarea name="Message" id="message" onfocus="this.value = this.value==\''.__('Message', 'woop').'\'?\'\':this.value;" onblur="this.value = this.value==\'\'?\''.__('Message', 'woop').'\':this.value;">'.__('Message', 'woop').'</textarea>
					<input type="submit" name="submit" id="submit" value="'.__('Send', 'woop').'" class="submit-button" />
					<input name="to" id="to" type="hidden" value="'.$to.'" />
				</form>
				<div id="contact-loader"><img src="'.THEME_DIR.'/img/ajax-loader.gif" /></div>
				<div id="confirmation" style="display:none; position: relative; z-index: 600; font-family: \'Open Sans\', sans-serif; font-weight: 300; font-size: 16px; color: #4e4e4e;"></div>
			</div> <!-- end .contact_form -->[/raw]';

		$script = 
		'[raw]
			<script type="text/javascript">
			$(document).ready( function() {
			
				$("#contact-form").submit( function() {
				
					var to = "'.$to.'";
					
					var name = $("#name").val();
					if(name == "" || name == "'.__('Name', 'woop').'")
					{
						alert("Type your name, please!");
						return false;
					}

					var email = $("#email").val();
					if(email == "" || email == "'.__('Email', 'woop').'")
					{
						alert("Type your email, please!");
						return false;
					}
					
					var subject = $("#subject").val();
					if(subject == "" || subject == "'.__('Subject', 'woop').'")
					{
						alert("Type your subject, please!");
						return false;
					}
					
					var message = $("#message").val();
					if(message == "" || message == "'.__('Message', 'woop').'")
					{
						alert("Type your message, please!");
						return false;
					}
					
					$("#contact-loader").css("display", "block");
					$("#confirmation").html("");
					$("#confirmation").css("display", "none");
					
					$.post("'. THEME_DIR .'" + "/scripts/sendmail.php", { to : to, name : name, email : email, subject : subject, message : message }, function(data) {
						
						$("#contact-loader").css("display", "none");
						$("#confirmation").css("display", "block");
						$("#confirmation").html(data);
					
					}, "html");
					
					return false;
				});
			
			});
			</script>
		[/raw]
		';
		
		return $form.$script;

	}
	add_shortcode("contact_form", "f_contact_form");
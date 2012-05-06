<?php
	
	require_once("../../../../wp-load.php");
		
	$to = addslashes($_POST["to"]);
	$name = addslashes($_POST["name"]);
	$email = addslashes($_POST["email"]);
	$subject = addslashes($_POST["subject"]);
	$message = addslashes($_POST["message"]);
	$message = nl2br($message);
	
	
	/* To send HTML mail, you can set the Content-type header. */
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	$sj = '"'.$subject.'" - New Message';

	$msg = '
		<p>'.$name.' sent this message for you, you can reply to this e-mail: '.$email.'</p>
		
		<p><strong>Message:</p>
		<p>
		'.$message.'
		</p>
	';
		
	/* and now mail it */
	if(mail($to, $sj, $msg, $headers))
	{
		echo __("Success! Thank you, we'll contact you soon.!", 'woop');
	}
	else
	{
		echo __("Oh, sorry! Something wrong... Please, try again.", 'woop');
	}
	
?>
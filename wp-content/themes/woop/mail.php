<?php

		require_once("../../../wp-load.php");
		
		$to = '';
		$name     = '';
        $email    = ''; 
        $message = ''; 
        
         
        if(isset($_POST['email'])) {
        
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $to = $_POST['to'];

            if(get_magic_quotes_gpc()) {
                    $message = stripslashes($message);
            }

             $address = $to;

             $e_subject = 'Bonfire: You\'ve Received a Message From ' . $name . '.';

             $e_body = "You have Received a message from $name, their additional message is as follows.\r\n\n";

             $e_content = "\"$message\"\r\n\n";

             $e_reply = "You can contact $name via email, $email";

             $msg = $e_body . $e_content . $e_reply;

             if(mail($address, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n","-f $address"))
			 {    
             	echo __("Message Sent Successfully!", "bonfire");
			 }
			 else
			 {
            	echo __("Message Sending Failed: Server is not supporting call to send email !", "bonfire");
        	 }
        }
        else
		{
            echo __("Message Sending Failed!");
        }
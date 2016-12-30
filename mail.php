<?php
	$to= "ogogurl@gmail.com";
	$subject="Moodboard: What's your mood?";
	$msg="Hi there from Moodboard! Please respond with a message, ranging from a word to a biography on what your current mood is.
	<strong> When you're finished with your update please add the tag: <END>, so that your message is correctly parsed. </strong>";
	$msg=wordwrap($msg,70);
	$headers= "From: webmaster@ogonwodoh.com" . "\r\n";
	
	mail($to,$subject,$msg,$headers);
?>

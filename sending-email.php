<?php

     $emailTo = "dolly@jjkkklklk.com";
	 
	 $subject = "I hope this works!";
	 
	 $body = "I think u are great!";
	 
	 $headers ="From: shrishti@bjkfgg.co.uk";
	 
	if (!@mail($emailTo, $subject, $body, $headers)) {
		
		
		echo "The email was sent successfully";
		
	} else {
		
		
		echo "The email could not be sent.";
		
	}

	


?> 
<?php

	if ((isset($_POST['currentPage'])) && ($_POST['currentPage'] == "CIah2vIqE3SL9ujDy0JG9sQnVe6Ms45D7ATJbt5yhsg=")) {	
		$comments = $_POST['Field4'];
		$email = $_POST['Field3'];
		$to = "mnorman@singlesail.net";
		$subject = "SINGLESAIL.NET Contact Form Submission";
		$message = "Hey! OMG! I GOT AN EMAIL!!!!!\n";
		$message .= "From: " . $email ."\n";
		$message .= "Comments: " .$comments;
		$headers = "From: $email";
		mail($to,$subject,$message,$headers);
		header("location: #thanks");
	}

?>
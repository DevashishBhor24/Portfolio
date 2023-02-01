<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject']; 
	$message = $_POST['message']; 

	$email_from = 'bhordevashish0@hotmail.com';
	$email_subject="New Form Submission!";/* he samajlach asel*/

	$email_body = "User Name : $name. \n".
	"User Email: $visitor_email.\n". 
	"Contact No: $contact_num.\n".
	"Subject: $subject. \n". 
	"User Message: $message.\n";

	$to = "bhordevashish0@gmail.com"; 
	$headers = "From:$email_from \r\n";
	$headers .="Reply-To: $email_from \r\n"; 
	mail($to,$email_subject,$email_body, $headers);
	header("location:contact.html");

?>
<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'customer@info.com';

$email_subject = 'New User Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
              
$to = 'faisalkhan226536@gmail.com'

$header ="From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$subject,$email_body,$header);

header("Location: contact.html");

?>
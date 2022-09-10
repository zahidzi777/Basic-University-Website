<?php
$name = $_POST['name'];
$Visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message .\n";

$to = 'zahidzi777@gmail.com';

$headers = "From $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?> 
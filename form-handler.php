<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$subject_email = $_Post['subject'];
$message_email = $_Post['message'];

$email_form = 'info@shabrinayesmin.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'shabrinayesmin99@gmail.com';
$headers = "Form: $email_form \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
              
?>

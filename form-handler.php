<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messang = $_POST['message'];

$email_from = 'info@panth.work.gd'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $messang.\n";

$to = 'pokarpanth80@gmail.com'

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

    
mail($to,$email_subject,$email_body,$headers);
    
header("Location: contact.html");     
?>
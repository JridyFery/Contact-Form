<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from='EJridifer006@gmail.com';
$email_subject="New Form Submission";
$email_body="User Name: $name. \n".
"User Email :$visitor_email.\n".
"User Message: $message.\n";
?>
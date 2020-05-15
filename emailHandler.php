<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$email_subject = $__POST['subject'];

$email_body = "Email form:  $name.\n".
"Email address:  $visitor_email.\n".
"Subject:  $visitor_email.\n".
"Message:  $message.\n";

$to = 'pola.zwardon@gmail.com';

$headers = "From: $visitor_email \r\n";
mail($to,$email_subject,$email_body$headers);
header("Location: index.html");
?>

<?php
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$call = $_POST['contact'];
$sub = $_POST['sub'];
$mode = $_POST['mode'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $call \n Company: $company \n Sub: $sub \n Mode: $mode \n Message: $message";
$recipient = " ";
$subject = "Enquiry Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact-us.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = "website message";
$message = $_POST['message'];
$header = "From: ".$name. "<".$email.">\r\n";
$to = 'receiveEmail@bimalkhatri.com.np';
$body = "From : ".$username." with email: ".$email.". And the message is ".$message;
mail($to, $subject,$body,$header);
or die('Error');
echo "message sent";

?>

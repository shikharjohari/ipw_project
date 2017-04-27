<?php
	include('store/connect.php');
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	mysql_query("INSERT INTO message (name, email, subject, message) VALUES ('$name','$email','$subject','$message')");
	header("location: sending.php");
	
$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message1 = $message;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message1,$headers);
	echo"Your mail has been sent";
?>
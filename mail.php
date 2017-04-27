<?php
include 'sendEmail.php';
$to = $_POST['mail'];
$subject = "Book movie issues";
$txt = "I am facing the following issues";
$headers = "From: webmaster@example.com";

mail($to,$subject,$txt,$headers);
?>
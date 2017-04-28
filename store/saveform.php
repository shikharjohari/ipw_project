<?php
require "connect.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];

$paddress=$_POST['paddress'];
$city=$_POST['city'];


mysql_query("INSERT INTO reservation (firstname, lastname, city, address, email, contact) VALUES ('$fname','$lname','$city','$paddress','$email','$cnum')");
header("location: print.php?id=$transnum");
echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From Genesis Print stuff";
$mail_Body = "First Name: $fname\n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Country: $country \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ";
mail($mail_To, $mail_Subject, $mail_Body);

?>
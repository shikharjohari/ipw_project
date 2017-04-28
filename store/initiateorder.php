<meta http-equiv="refresh" content="1; url=index.php">
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include 'connect.php';

	
	
			$transnum=$_POST['transnum'];
			$qty=$_POST['select2'];
			$name=$_POST['pname'];
		
			$total=$_POST['txtDisplay'];
			mysql_query("INSERT INTO orders (product, qty, confirmation, total) VALUES('$name', '$qty', '$transnum', '$total')");
			


?>


<html>
<head>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>
</head>
<body>
<a href="javascript:Clickheretoprint()">Print</a>
<div>
<?php
include('connect.php');
		
		$result = mysql_query("SELECT * FROM reservation where reservation_id='SELECT id from orders' ");
		while($row = mysql_fetch_array($result))
			{
				
				echo 'Name: '.$row['firstname'].' '.$row['lastname'].'<br>';
				echo 'Address: '.$row['address'].' '.$row['city'].'<br>';
				echo 'Email: '.$row['email'].'<br>';
				echo 'Contact number: '.$row['contact'].'<br>';
				
			}
	?> 
	<a href="index.php">Back</a>
</body>
</html>


<?php
	require_once('../auth.php');
?>
<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];
?>
<html>
<head>
<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>
  <script language="javascript" type="text/javascript">
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
<style>
a{
color:#fff;
text-decoration:none;
}
    a.tooltip {outline:none; }
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;} 
a.tooltip span {
    z-index:10;display:none; padding:14px 20px;
    margin-top:-30px; margin-left:28px;
    width:240px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute; color:#111;
    border:1px solid #DCA; background:#fffAF0;}
.callout {z-index:20;position:absolute;top:30px;border:0;left:-12px;}
    
/*CSS3 extras*/
a.tooltip span
{
    border-radius:4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
        
    -moz-box-shadow: 5px 5px 8px #CCC;
    -webkit-box-shadow: 5px 5px 8px #CCC;
    box-shadow: 5px 5px 8px #CCC;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this product?");
if (con ==false)
{
return false;
}
}
</script>
</head>
<body>
<div id="wrapper">
	<div id="note">
		<h1 style="margin-top: 0px; margin-bottom: 5px;">Select Movie</h1>
		
	</div>
	<div id="content">
		<div id="productlist">
			
			<?php
			require "connect.php";
			$result = mysql_query("SELECT * FROM internet_shop");
			while($row=mysql_fetch_assoc($result))
			{
				echo '<a rel="facebox" href="orderpage.php?id='.$row['id'].'&trnasnum='.$transnum.'"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="109" height="109" class="pngfix" /></a>';
			}

			?>
		</div>
		<div id="orderlist">
			<table width="100%" border="1" cellpadding="2" cellspacing="2">
				<tr>
				  <td></td>
				  <td width="25"><div align="center"><strong>Qty</strong></div></td>
				  <td width="150"><div align="left"><strong>Name</strong></div></td>
				  <td width="25"><div align="center"><strong>Total</strong></div></td>
				</tr>
				<?php
				$result3 = mysql_query("SELECT * FROM orders WHERE confirmation='$transnum'");
					while($row3 = mysql_fetch_array($result3))
						{
						echo '<tr>';
						echo '<td><a href="deleteorder.php?id='.$row3['id'].'" id="'.$row3['id'].'" class="delbutton" title="Click To Delete"><img src="img/delete.png"></a></td>';
						echo '<td><div align="center">'.$row3['qty'].'</div></td>';
						echo '<td>'.$row3['product'].'</td>';
						echo '<td><div align="center">'.$row3['total'].'</div></td>';
						echo '</tr>';
						}
				?>
				<tr>
				  <td colspan="3"><div align="right"><span style="color:#B80000; font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Grand Total: </span></div></td>
				  <td><div align="center">
				  <?php
				  $result5 = mysql_query("SELECT sum(total) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(total)']; 
						$sfdddsdsd=$row5['sum(total)'];
					  }
				  ?>
				  
				  
				  </div>
				  </td>
				</tr>
			</table>
			<form method="post" action="personalinfo.php" name="form1" onsubmit="return validateForm()">
			<input type="hidden" name="transnumber" value="<?php echo $transnum ?>" />
			<input type="hidden" name="total" value="<?php echo $sfdddsdsd ?>" />
			<input type="hidden" name="totalqty" value="
			<?php
				  $result5 = mysql_query("SELECT sum(qty) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(qty)']; 
					  }
				  ?>
			" />
			
			<input type="submit" value="Book">
			</form>
		</div>
		<div class="clearfix"></div>
	</div>
	<div style="text-align:center; margin-top:10px;">
	

	</div>
	<div class="clearfix"></div>
</div>
</body>
</html>
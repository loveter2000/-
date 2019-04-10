<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 
	$strID = $_GET["ID"];
	$link = mysqli_connect("localhost","root","","phu");
	$sql = "DELETE  FROM admin
		WHERE ID = '".$strID."'";
	$sql2 = "DELETE  FROM phutapong
		WHERE ID = '".$strID."'";
	$sql3 = "DELETE  FROM phutapong1
		WHERE ID = '".$strID."'";	
			
	$query = mysqli_query($link,$sql);
	$query2 = mysqli_query($link,$sql2);
	$query3 = mysqli_query($link,$sql3);
	
	if ($query) 
	{
	  	echo "ลบข้อมูลเรียบร้อยแล้ว";
	  	header("location:admin.php");
	}  
	if (mysqli_affected_rows($link)) 
	{
		echo "ลบข้อมูลเรียบร้อยแล้ว";
		header("location:admin.php");
	}
	mysqli_close($link);
	?>
 </body>
 </html>



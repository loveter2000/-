<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "phu";
	echo $_POST["txtConPassword"];
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	if ($objCon) 
	{
		echo "Connect Sucess";
	}

	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();
	}

	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();
	}

	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		echo $_POST["txtPassword"];
		echo $_POST["txtConPassword"];
		echo "Password not Match!";
		exit();
	}

	if(trim($_POST["txtEmail"]) == "")
	{
		echo "Please input Email!";
		exit();
	}
	if(trim($_POST["txtTel"]) == "")
	{
		echo "Please input Tel!";
		exit();
	}
	if(trim($_POST["txtCard"]) == "")
	{
		echo "Please input Card!";
		exit();
	}
	
	$strSQL = "SELECT * FROM admin WHERE Username = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			echo "Username already exists!";
	}
	else
	{

		$strSQL = "INSERT INTO admin
		(Username,Password,Email,Tel,Card,Status) VALUES ('".$_POST["txtUsername"]."',
		'".$_POST["txtPassword"]."','".$_POST["txtEmail"]."','".$_POST["txtTel"]."','".$_POST["txtCard"]."','User')";
		$objQuery = mysqli_query($objCon,$strSQL);
			{
				header("location:index.php");
			}
	}	

	mysqli_close($objCon);
?>
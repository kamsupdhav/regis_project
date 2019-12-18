<?php
    session_start();
	$txtUsername = $_POST['txtUsername'] ;
	$txtPassword = $_POST['txtPassword'] ;	
	print ("$txtUsername") ; 
	print ("$txtPassword") ;
		
	include('connect_database.php');
		
 	$sql = "SELECT * FROM user WHERE username = '$txtUsername' and Password = '$txtPassword' ";
	$query = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($query);
	print("$objResult");
	if(!$objResult)
	{
		$message = "ชื่อผู้ใช้ หรือ รหัสผ่าน ไม่ถูกต้อง!";
		print "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
			$_SESSION["username"] = $objResult["username"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "admin")
			{
               
				header("location:home_admin.php");
			}
			else if($objResult["status"] == "user")
			{
               
				header("location:home_user.php");
            }
            else 
            {
				
				header("location:login.php");
			}
	}
	mysqli_close($conn);
?>
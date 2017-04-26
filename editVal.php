<?php

	if (isset($_POST['submit']))
	{
		session_start();
			
			$password=$_POST['password'];
			$password2=$_POST['password2'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$AOI=$_POST['AOI'];
			$edu=$_POST['edu'];
			$city=$_POST['city'];
			require("connect.php");

			if($password==$password2)
			{	
			
			
			$query = mysqli_query($connection ,"update signup set AOI='".$AOI."',edu='".$edu."', email='".$email."', pass='".$password."',mobile=$mobile, city='".$city."' where uname='".$_SESSION['active']."'");

			if(!$query)
			{
				die("Updates failed".mysqli_error($connection));
			}
			else
			{
				header('location:profile.php');
			}
		  
		}
		else
		{
			header('location:edit.php');

		}
		mysqli_close($connection);
	}
?>

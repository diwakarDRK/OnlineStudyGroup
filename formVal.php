<?php
	if (isset($_POST['submit']))
	{
		session_start();
		$username=$_POST['username'];
		$password=$_POST['password'];
		$connection = mysqli_connect("localhost", "root","","adequate");

		$username=stripcslashes($username);
		$password=stripcslashes($password);
		$username=$username;
		$password=$password;

		$query = mysqli_query($connection ,"select * from signup where pass='$password' and uname = '$username'");
		$rows = mysqli_num_rows($query);
		if($rows==1)
		{
			$_SESSION["active"] = $username;
			header('location:home22.php');
		}
		else
		{
			
			header('location:signin.php');
		}
		mysqli_close($connection);
	}
?>

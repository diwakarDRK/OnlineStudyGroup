<?php
session_start();
	if (isset($_POST['submit']))
	{
		

    	$username=$_POST['username'];
		$mobile=$_POST['mobile'];
		$DOB=$_POST['DOB'];
		require("connect.php");

		$query3 = mysqli_query($connection ,"select * from signup where uname = '$username' and mobile ='$mobile' and DOB='$DOB' ");
		$sql3=mysqli_fetch_assoc($query3);
		$_SESSION['$sql4']=$sql3['uname'];
		$_SESSION['$sql5']=$sql3['pass'];
		$rows3 = mysqli_num_rows($query3);
			if($rows3>0)
			{
				$_SESSION["activefor"] = $username;
				header("location:forgetS.php");
			}
			else
			{
				echo "<script>
				alert('No such user found');
                history.go(-1);
                </script>";
				//header("location:forgetS.php");
			}			
		mysqli_close($connection);
	}
?>
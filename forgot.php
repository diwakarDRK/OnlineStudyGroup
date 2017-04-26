<?php
	if (isset($_POST['submit']))
	{	
		$username=$_POST['username'];
		$mobile=$_POST['mobile'];
		$DOB=$_POST['DOB'];
		$connection = mysqli_connect("localhost", "root","","adequate");

		$sql3="SELECT uname,pass from signup where uname='".$username."'; and mobile='".$mobile."';DOB='".$DOB."';";
		$query3 = mysqli_query($connection ,$sql3);
			if(mysqli_num_rows($query3)>0)
			{
				echo "$uname";
				echo "$pass"
			}			
		mysqli_close($connection);
	}
?>
<?php
	if (isset($_POST['submit']))
	{
		session_start();
			$name=$_POST['name'];	
			$username=$_POST['username'];
			$password=$_POST['password'];
			$password2=$_POST['password2'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$DOB=$_POST['DOB'];
			$gender=$_POST['gender'];
			$AOI=$_POST['AOI'];
			$edu=$_POST['edu'];
			$city=$_POST['city'];
			$rank=0;
			//print_r($_FILES);
			//print_r($_REQUEST);
			
			require("connect.php");

			$target=__dir__."\images";
			$img=$_FILES['dp']['name'];
			$target_dir=$target."\\".$img;
			
			move_uploaded_file($_FILES['dp']["tmp_name"],$target_dir);
			if($password==$password2)
			{	
					$sql2="SELECT * from signup where uname='".$username."';";
					$query2 = mysqli_query($connection ,$sql2);
					if(mysqli_num_rows($query2)>0)
					{
						echo "Already Exists";
					}			
					else
					{
					$sql="INSERT INTO signup (uname, pass, name,AOI,edu, email, DOB, gender, mobile,image,city)" ."VALUES('$username','$password','$name','$AOI','$edu','$email','$DOB','$gender','$mobile','$img','$city') ";

					$query = mysqli_query($connection ,$sql);
					if(!$query)
					{
						die("query failed".mysqli_error($connection));
					}
					else
					{
						$_SESSION["active"] = $username;
						header('location:home22.php');
					}
				  }
			}
		else
		{
			echo "Password not matching";
			header('location:signup.php');

		}
		mysqli_close($connection);
	}
?>

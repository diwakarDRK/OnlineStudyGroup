<!DOCTYPE html>
<html>
<head>
	<title>formDes</title>
</head>
<body>
<?php
	if(isset($_POST['submit']))
	{
		echo "username : {$_POST['username']} <br />";
		echo "password : {$_POST['password']} <br />";
		echo "Gender : {$_POST['gender']} <br />";
		echo "email : {$_POST['email']} <br />";
	}
	else
	{
		echo "Form was not submitted";
	}
?>
</body>
</html>
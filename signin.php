<?php
	session_start();
	if(isset($_SESSION["active"]))
		{
			header('location:home22.php');
		}
?>	
<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head><title> SignIn </title>
<link href="/cssin.css" rel="stylesheet">
<style>
.new {color:red;
position:top;}
.w3-bar .w3-button{
	padding: 16px;
}
body{ background-position: center;
    background-size: cover;
    background-image: url("home12.jpg");
    min-height: 100%; }
</style>
</head>
<body>

    	<div style="color:#228B22;"><a href="home2.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a> <h1 align="center"><b><span style="color:#C0C0C0"></span> STUDY BUDDY</b></h1>
    	<h4 align="center" style="color:#228B22"> <b>Sign in to continue access Your Account</b>
	</h4>

	<h6 align="right"><a href="signup.php"><input type="submit" value="sign up" style="color:#228B22; width:150px; height:35px";/></a> </h6>
	 </div><br />
	  <div class='container'>

	
	<form action="formVal.php" method="post" >
	<label>Username:</label><abbr title="minimum 8 character long">
	<input class='nice' required name="username" type="text" value="" placeholder="username" /></abbr>
	<label>Password: </label>
	<input class="nice" required name="password" type="password" /></abbr>
	<input class="centered" type="submit" style="color:green" value="Log In" name="submit">
	<a href="forget.php" align="right" style="color:black"><h4> Forgotten Account</h4></a>
	</form>
	</div>
</body>
</htm
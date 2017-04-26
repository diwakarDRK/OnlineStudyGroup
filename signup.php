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

<head><title> SignUp </title>
<link href="/cssup.css" rel="stylesheet">
<style>
	body{ background-position: center;
    background-size: cover;
    background-image: url("home12.jpg");
    min-height: 100%; }
</style>
</head>
<body >	
	<div style="color:#228B22;"> <a href="home2.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a> <h1 align="center"><b><span style="color:#C0C0C0	"></span> STUDY BUDDY</b></h1>
	<h6 align="right"><a href="signin.php"><input type="submit" value="Sign In" style="color:#228B22; width:100px; height:35px";/></a> </h6>
	

	 </div>

	<div class='container'>
	<h4 align="center" style="color:#006400; font-style: "> <b>Create Your precious Account</b></h4>
	<form action="formValSU.php" method="post" enctype="multipart/form-data">
	<label> Name: </label>
	<input class='nice' required name="name" type="text" value="" placeholder="Full Name" autofocus="" />
	<label>Choose Your username:</label><abbr title="minimum 8 character long">

	<input class='nice' required name="username" type="text" value="" placeholder="username" /></abbr>
	<label>Upload profile pic:</label>
	<input class='nice' type="file" name="dp"   required/>
	<label>Area of Intrest:</label>
	<input class='nice' required name="AOI" type="text" value="" placeholder="IAS" />
	<label>Highest level of education:</label>
	<input class='nice' required name="edu" type="text" value="" placeholder="UG" />
	<label> Email: </label>
	<input class='nice' required name="email" type="email" placeholder="email@gmail.com"/>
	<label>Create a Password: </label><abbr title="password must be 8 character long">

	<input class="nice" required name="password" type="password"/></abbr>
	<label> Confirm Password: </label>
	<input class="nice" required name="password2" type="password"/>
	<label>Birthday</label>
	<input class="nice" required name="DOB" type="date" value=""/>
	<label><b>Gender:</b></label>
	<b>Male</b>:<input  type="radio" value="male" required name="gender"/>
	<b>Female:</b><input  type="radio" value="female" required name="gender"/><br/><br/>
	<label>Mobile</label>
	<input class="nice" id="tel" required name="mobile" type="tel" placeholder="75563886388"/>
	<label>City you are currently staying:</label>
	<input class='nice' required name="city" type="text" value="" placeholder="Bhopal" />
	<input class="centered" type="submit" value="Register" name="submit" >
	</form>
	</div>
</body>
</html>
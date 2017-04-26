<?php
    session_start();
    if(isset($_SESSION["activefor"]))
      {
      }
     else{
      header('location:forget.php');
     } 
     $Username=$_SESSION['$sql4'];
     $Password=$_SESSION['$sql5'];
 ?>    

<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head><title> SignUp </title>
<link href="/cssin.css" rel="stylesheet">
<style type="text/css">
</style>
</head>
<body>
<div style="background-color:#F0F8C5;padding:20px;"> <a href="home22.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a><h3 align="center"><b>YOUR LOGIN ID & PASSWORD</b></h3>
<h6 align="right"><a href="signup.php"><input type="submit" value="SignUp" style="color:#228B22; width:150px; height:35px"/></a> 
 <a href="signin.php"><input type="submit" value="SignIn" style="color:#228B22; width:150px; height:35px"/></a> </h6>
 </div>
 <br/><br/>
 <div class='container'>
<form action="register.php" method="post" >
<label>
	<form action="formVal.php" method="post" >
	<label>Username: <?php echo $Username;?> </label>
	</br>
	<label>Password: <?php echo $Password;?></label>
     <?php session_destroy();?> 

</label>
</form>
</div>
</body>
</html
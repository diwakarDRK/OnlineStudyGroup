<?php
    session_start();
    if(isset($_SESSION["active"]))
      {
      if(isset($_SESSION['a']))
      {
      	header("location:groupformed.php");
      }
      }
     else{
      header('location:home2.php');
     } 

?>     

<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
</style>
<head><title> SignUp </title>
<link href="/cssin.css" rel="stylesheet">
</head>
<body>
<div style="color:#228B22;"><a href="home22.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a> <h1 align="center"><b><span style="color:#C0C0C0"></span> STUDY BUDDY</b></h1>
<h2 align="center"><b><span style="color:#C0C0C0">Form Group</span></div>

<center><br/></br>
<form method="post" action="formgroup.php">
<table cellpadding="10px" cellspacing="3px" border="2" width="40%" height="" bgcolor="#F0F8C5" >
<tr>

<th>Count</th>

<th> Warrior Type</th>
<th> Cost</th></tr>
<tr> 
<th><input id="car" type="number" name="a" list="option"/>
<datalist id="option">
<option value="1">
<option value="2">
<option value="3">
<option value="4">
<option value="5">
<option value="6">
<option value="7">
<option value="8">
<option value="9">
<option value="10">
</datalist>
 </th>
<th> Rokkie </th>
<th> Rs10 </th></tr>
<tr> 
<th> <input id="car" type="number" name="b" list="option"/>
<datalist id="option">
<option value="1">
<option value="2">
<option value="3">
<option value="4">
<option value="5">
<option value="6">
<option value="7">
<option value="8">
<option value="9">
<option value="10"></th>
<th> Amature </th>
<th> Rs20 </th></tr>
<tr> 
<th> <input id="car" type="number" name="c" list="option"/>
<datalist id="option">
<option value="1">
<option value="2">
<option value="3">
<option value="4">
<option value="5">
<option value="6">
<option value="7">
<option value="8">
<option value="9">
<option value="10"> </th>
<th> Pro </th>
<th> Rs30 </th></tr>
<tr>
<th colspan="2"> <input name="total" type="submit" value="Total: "  style="width:150px; height:25px"/><?php 
if(isset($_POST['total']))
{
   
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=10*$a + 20*$b + 30*$c;
  if($d<10)
  {
    header('location:formgroup.php');
  }
  else
  {
    $_SESSION['a']=$a;
    $_SESSION['b']=$b;
    $_SESSION['c']=$c;
  }
  echo "Rs.".$d;
}
?></th>
<th><a href="groupformed.php"> <input type="button" value="Pay" style="width:150px; height:25px"/></a></th></tr> 
</table>
</form>
</center>
</body>
</html>
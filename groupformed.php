<?php
    session_start();
    if(isset($_SESSION["active"]))
      {

      if(isset($_SESSION['a']))
      {
        if(isset($_SESSION['gp']))
        {
          if(isset($_SESSION['bt']))
          header('location:groupformed2.php');    
        }
        else
        {}
      }
      else
      header('location:formgroup.php');	
      }
     else{
      header('location:home2.php');
     } 

?> <!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head><title> SignUp </title>
<link href="/cssin.css" rel="stylesheet">
</head>
<body>
<div style="color:#228B22;"><a href="home22.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a> <h1 align="center"><b><span style="color:#C0C0C0"></span> STUDY BUDDY</b></h1>
<center>
<table cellpadding="10px" cellspacing="3px" border="2" width="40%" height="" bgcolor="#F0F8C5" >
<tr>
<th><h2> Group FORMED</h2></th></tr>
<tr>
<?php
 require("connect.php");
 $q=mysqli_query($connection ,"select * from signup where uname='".$_SESSION["active"]."'");
 $rows2=mysqli_fetch_array($q);
 $query = mysqli_query($connection ,"select * from signup where rank<=5 and city='".$rows2['city']."'");
 $query2=mysqli_query($connection ,"select * from signup where rank>5 and rank<=10 and city='".$rows2['city']."'");
 $query3=mysqli_query($connection ,"select * from signup where rank>10 and city='".$rows2['city']."'");
$a=$_SESSION['a'];
$b=$_SESSION['b'];
$c=$_SESSION['c'];


if($_SESSION['rank']<=5){echo "<th style='color:grey;'>".$rows2['uname']." ( ".$rows2['mobile']." )    "."    ( ".$rows2['rank']." ) "."</th></tr><tr>";}
else if($_SESSION['rank']<=10){echo"<th  style='color:#1111ff;'> ".$rows2['uname']." ( ".$rows2['mobile']." )    "."    ( ".$rows2['rank']." ) "."</th></tr><tr>";}
                    else {echo"<th style='color:red;'> ".$rows2['uname']." ( ".$rows2['mobile']." )    "."    ( ".$rows2['rank']." ) "."</th></tr><tr>";}

while($a>0)
{
if($rows=mysqli_fetch_array($query))
{
if($rows['uname']!= $rows2['uname'])
  {
    echo "<th style='color:grey;'>".$rows['uname']." ( ".$rows['mobile']." )"."  ( ".$rows['rank']." ) "."</th></tr><tr>";
  }
  $a--;
}
else
break;
}
while($b>0)
{
$rows=mysqli_fetch_array($query2);
if($rows=mysqli_fetch_array($query2))
{
if($rows['uname']!= $rows2['uname'])
  {
    echo "<th style='color:#1111ff;'>".$rows['uname']." ( ".$rows['mobile']." )"."  ( ".$rows['rank']." ) "."</th></tr><tr>";
  }
  $b--;
}
else
break;
}
while($c>0)
{
$rows=mysqli_fetch_array($query3);
if($rows=mysqli_fetch_array($query3))
{
if($rows['uname']!= $rows2['uname'])
  {
    echo "<th style='color:red;'>".$rows['uname']." ( ".$rows['mobile']." )"."  ( ".$rows['rank']." ) "."</th></tr><tr>";
  }
  $c--;
 } 
else
break;
}
$_SESSION['time']=(rand(6,20)).":".(rand(00,59));
echo "<th>"."Time Slot:: ".$_SESSION['time']."</th></tr><tr>";
echo "<th>"."Location:: ".$rows2['city']."</th></tr><tr>";
?>
</table>
<a href="incr.php">
<input type="button" value="Confirm" style="color:#228B22; width:150px; height:35px"/></a> 
 <a href="reset.php"><input type="button" value="Decline" style="color:#228B22; width:150px; height:35px"/></a> </h6>
</center>
</body>
</html>
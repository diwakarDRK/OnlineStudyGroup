<?php
  session_start();
  if(isset($_SESSION["active"]))
    { require("connect.php");
     $qu=mysqli_query($connection ,"select * from signup where uname='".$_SESSION["active"]."'");
     $rows22=mysqli_fetch_array($qu);
     $_SESSION['AOI']=$rows22['AOI'];
     $_SESSION['edu']=$rows22['edu'];
     $_SESSION['email']=$rows22['email'];
     $_SESSION['pass']=$rows22['pass'];
     $_SESSION['mobile']=$rows22['mobile'];
     $_SESSION['city']=$rows22['city'];
    }
    else
    {
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
<head><title> Edit </title>
<link href="/cssup.css" rel="stylesheet">
</head>
<body > 
  <div style="background-color:#F0F8C5;padding:20px;"> <a href="home22.php" class="new"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a><h2 align="center"><b>Edit Your Profile</b></h2></a> </h6>
 </div>
 <br/><br/>

  <div class='container'>
  <form action="editVal.php" method="post">
  <label>Area of Intrest:</label>
  <input class='nice' name="AOI" type="text" value=<?php echo "\"".$_SESSION['AOI']."\"" ?>  />
  <label>Highest level of education:</label>
  <input class='nice' name="edu" type="text" value=<?php echo "\"".$_SESSION['edu']."\"" ?>  />
  <label> Email: </label>
  <input class='nice' name="email" type="email" value=<?php echo "\"".$_SESSION['email']."\"" ?> />
  <label>Create a Password: </label>
  <input class="nice" name="password" value=<?php echo "\"".$_SESSION['pass']."\"" ?> type="password"/>
  <label> Confirm Password: </label>
  <input class="nice" name="password2" value=<?php echo "\"".$_SESSION['pass']."\"" ?> type="password"/>
  <label>Mobile</label>
  <input class="nice" id="tel" name="mobile" type="tel" value=<?php echo "\"".$_SESSION['mobile']."\"" ?> />
  <label>City you are currently staying:</label>
  <input class='nice' name="city" type="text" value=<?php echo "\"".$_SESSION['city']."\"" ?> />
  <input class="centered" type="submit" value="Submit" name="submit" >
  </form>
  </div>
</body>
</html>
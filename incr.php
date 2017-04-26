<?php
    session_start();
    if(isset($_SESSION["active"]))
      {

      if(isset($_SESSION['a']))
      {
        $_SESSION['bt']="xyz";
        require("connect.php");
        $query = mysqli_query($connection ,"update signup set rank=rank+1 where uname='".$_SESSION["active"]."'");
        if($query){
          $_SESSION['gp']=$_SESSION['a'];
          echo '<a href="profile.php">group formed click to go back</a>';
        }
        else
          header('location:home22.php');    
      }
      else
      header('location:formgroup.php');	
      }
     else{
      header('location:home2.php');
     } 

?>
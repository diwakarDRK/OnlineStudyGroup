<?php
    session_start();
    if(isset($_SESSION["active"]))
      {
      }
     else{
      header('location:home2.php');
     } 

require("connect.php");
$login= $_SESSION['active'];
$login_ses=mysqli_query($connection,"select * from signup where uname='$login'");
$row=mysqli_fetch_array($login_ses);
$username=$row['uname'];
$name=$row['name'];
$email=$row['email'];
$DOB=$row['DOB'];
$gender=$row['gender'];
$mobile=$row['mobile'];
$AOI=$row['AOI'];
$edu=$row['edu'];
$city=$row['city'];
$img=$row['image'];
$_SESSION['rank']=$row['rank'];
?> 
<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
.col {
  color:red;
}
</style>
<body class="w3-theme-l5">

          <!-- Navbar -->
          <div class="w3-top">
           <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
            <a href="home22.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right fa-2x"></i></a>
            <div class="w3-right w3-hide-small">
    <!-- notification code-->
    <a href="groupformed2.php" class="w3-bar-item w3-button"><i class="fa fa-envelope-o w3-hover-text-orange fa-2x"></i></a>
    
    <a href="edit.php" class="w3-bar-item w3-button"><i class="fa fa-pied-piper-alt fa w3-hover-text-orange fa-2x"></i> Edit</a>

            <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-power-off fa w3-hover-text-orange fa-2x"></i></a>
            
            </div>
            </div>
          </div>

          <!-- Navbar on small screens -->
          <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
          </div>

          <!-- Page Container -->
          <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
            <!-- The Grid -->
            <div class="w3-row">
              <!-- Left Column -->
              <div class="w3-col m3">
                <!-- Profile -->
                <div class="w3-card-2 w3-round w3-white">
                  <div class="w3-container">
                   <h4 class="w3-center">My Profile</h4>
                   <p class="w3-center"><?php 
                    $a="/images"."/".$img;
                    echo "<img src=$a alt='Profile Pic' width=180 height=140 align=center>";  
                   ?> </p>
                   <h3><div class="w3-center"><?php if($_SESSION['rank']<=5){echo"<p class='col'  style='color:grey;'> ".$username;}
                   else if($_SESSION['rank']<=10){echo"<p class='col' style='color:#1111ff;'> ".$username;}
                    else {echo"<p class='col' style='color:red;'> ".$username;}




                   ?></p></div></h3>

                   <hr>
                   <h4><p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $name;?></p></h4>
                   <h4><p><i class="fa fa-male fa-fw w3-margin-right w3-text-theme"></i> <?php echo $gender;?></p></h4>
                   <h4><p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?php echo $city;?></p></h4>
                   <h4><p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> <?php echo $DOB;?></p></h4>
                    <h4><p><i class="fa fa-envelope-o fa-fw w3-margin-right w3-text-theme"></i> <?php echo $email;?></p></h4>
                   <h4><p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i> <?php echo $mobile;?></p></h4>
                  </div>
                </div>
                <br>
                
                <div class="w3-card-2 w3-round w3-white w3-hide-small">
                 <div class="w3-container">
                 <h3><p>STUDY GROUP :</p></h3>
                 <a href="formgroup.php">Form a study group</a>
                 </div>
                 </div>
                 <div class="w3-card-2 w3-round w3-white w3-hide-small">
                 <div class="w3-container">
                 <h4><p>EDUCATIONAL BACKGROUND :</p></h4>
                 <p>Higest Level:<span class="w3-tag w3-large w3-theme-d1"><?php echo $edu;?></span></p>
                 </div>
                 </div>
                
                <!-- Interests --> 
                <div class="w3-card-2 w3-round w3-white w3-hide-small">
                  <div class="w3-container">
                    <h4><p>AREA OF INTEREST :</p></h4>
                    <p>
                      <span class="w3-tag w3-large w3-theme-d1"><?php echo $AOI;?></span>
                    </p>
                  </div>
                </div>
                <br>  
              <!-- End Left Column -->
              </div>
                  
              
              <!-- End Right Column -->
              </div>
              
            <!-- End Grid -->
            </div>
            
          <!-- End Page Container -->
          </div>
          <br>


          <!-- Footer -->
          <footer class="w3-container w3-theme-d3 w3-padding-16" >
          </footer>

          <footer class="w3-container w3-theme-d5">
          </footer>
           
          <script>
          // Accordion
          function myFunction(id) {
              var x = document.getElementById(id);
              if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
                  x.previousElementSibling.className += " w3-theme-d1";
              } else { 
                  x.className = x.className.replace("w3-show", "");
                  x.previousElementSibling.className = 
                  x.previousElementSibling.className.replace(" w3-theme-d1", "");
              }
          }

          // Used to toggle the menu on smaller screens when clicking on the menu button
          function openNav() {
              var x = document.getElementById("navDemo");
              if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
              } else { 
                  x.className = x.className.replace(" w3-show", "");
              }
          }
          </script>

</body>
</html> 

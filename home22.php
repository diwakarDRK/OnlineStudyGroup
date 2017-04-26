 <?php
      session_start();
      if(isset($_SESSION["active"]))
        {
        }
      else
      {
         header('location:home2.php');
      }  
?> 
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a:link{color:red;}
a:visited{color:grey;}
a:hover{color:blue;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
#newb{ font-family:bold;font-size: 50px; }
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("homenew1.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
.w3-h {
  padding: 30px;
}
</style>
<body> 
        <!-- Navbar (sit on top) -->
        <div class="w3-top">
          <div class="w3-bar w3-white w3-card-2" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-home w3-text-grey w3-hover-text-purple fa-2x  "></i></a>
            

            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
            <a href="profile.php" class="w3-bar-item w3-button"><i class="fa fa-user w3-hover-text-indigo fa-2x"></i> PROFILE</a>

           <a href="#BLOG" class="w3-bar-item w3-button"><i class="fa fa-pencil-square-o w3-hover-text-green fa-2x"></i>BLOG</a> 

              <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-inr w3-hover-text-orange fa-2x"></i></a>
              <a href="#About" class="w3-bar-item w3-button"><i class="fa fa-envelope w3-hover-text-pink fa-2x"></i> About</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
              <i class="fa fa-bars"></i>
            </a>
          </div>
        </div>

        <!-- Sidebar on small screens when clicking the menu icon -->
        <nav class="w3-sidebar w3-bar-block w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">

          <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>

          <a href="#BLOG" onclick="w3_close()" class="w3-bar-item w3-button">BLOG</a>
          <a href="#Profile" onclick="w3_close()" class="w3-bar-item w3-button">Profile</a>
          <a href="#mail" onclick="w3_close()" class="w3-bar-item w3-button">MAIL</a>
          <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
          <a href="#About" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
        </nav>

        <!-- Header with full-height image -->
        <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
          <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
            <span class="w3-large">Stop wasting valuable time </span>
            <p><a href="#BLOG" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more </a></p>
          </div> 
        </header>

        <!-- BLOG Section -->
        <div class="w3-container" style="padding:128px 16px" id="BLOG">
          <h2 class="w3-center">BLOG</h2>
          <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
              <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
              <p class="w3-large">Study buddy</p>
              <p>In the next decade, it is estimated that seven million students will be studying outside their hometown. Study Group, working with academic institutions and our own colleges, is here to help them realise their dreams and help them find the perfect study group</p>
            </div>
            <div class="w3-quarter">
              <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
              <p class="w3-large">Passion</p>
              <p>Studying is work and any work becomes repetitive and unpleasant at times.  Now you have to look deep into it.  You don't just get to decide on some shallow level that you're not interested in the work and stop doing it.  You have to see the elements of what you're learning and organize them yourself.</p>
            </div>
            <div class="w3-quarter">
              <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
              <p class="w3-large">Design</p>
              <p>It helps you design a perfect mix of study group. You are basically designing a solution to that problem. There should be a common conception of it as being good in the mass for the obvious problem solving.</p>
            </div>
            <div class="w3-quarter">
              <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
              <p class="w3-large">Support</p>
              <p>Available 24x7</p>
              <a href="#About">Our Team for support</a>
              <br />
              <a href="https://www.facebook.com/groups/225540461261302/">Go to the blog section</a>
            </div>
          </div>
        </div>

        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
          <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
          <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
          </div>
        </div>


        <!-- Pricing Section -->
        <div class="w3-container w3-center w3-green" style="padding:60px 16px" id="pricing">
          
          <h3>PRICING</h3>
          <p class="w3-large"></p>
          <div class="w3-row-padding" style="margin-top:50px">
            <div class="w3-third w3-section">
              <ul class="w3-ul w3-white w3-hover-shadow">
                
                <li class="w3-grey w3-xlarge w3-padding-32">Rookie</li>
                
                <li class="w3-padding-16">
                  <h2 class="w3-wide"><i class="fa fa-inr w3-text-grey"></i>10</h2>
                  <span class="w3-opacity">Pay Per Invite</span>
                </li>
                
              </ul>
            </div>
            <div class="w3-third">
              <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                <li class="w3-padding-16">
                  <h2 class="w3-wide"><i class="fa fa-inr w3-text-grey"></i>30</h2>
                  <span class="w3-opacity">Pay Per Invite</span>
                </li>
                
              </ul>
            </div>
            <div class="w3-third w3-section">
              <ul class="w3-ul w3-white w3-hover-shadow">
                <li class="w3-blue w3-xlarge w3-padding-32">Amature</li>
                <li class="w3-padding-16">
                  <h2 class="w3-wide"><i class="fa fa-inr w3-text-grey"></i>20</h2>
                  <span class="w3-opacity">Pay Per Invite</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- About Section -->
            
        <div class="w3-container w3-light-grey" style="padding:50px 16px" id="About">
          <div id="newb" class="w3-center">About</div>
          <!--<div class="w3-row-padding" style="margin-top:64px">-->
          <div class="w3-container" style="padding:20px 16px" id="About">

        <!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-30">
<div class="w3-half">
    <p>We at StudyBuddy belive that in a fact that legend are not born but made.<br>
                 We desire to create a space where the unlike minded people with common intrest,<br>
                 can come together and explore there limitless capablities.</p>
                 <p>In this website you have a opportunity and freedom to create your own customised<br>
                 study group. So, come join us and make this world great again.<br><br><br><br></p>
                 </div>

    </div>
    
<br />
<br />
          <!--<h3 class="w3-center">THE About</h3>
          <p class="w3-center w3-large">The ones who runs this company</p>-->
          <div class="w3-row-padding w3-grayscale">
            <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card-2">
                <img src="/drk.jpg" alt="John" style="width:100%">
                <div class="w3-container">
                  <h3>Diwakar Kumar</h3>
                  <p class="w3-opacity">CEO & Founder</p>
                  <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                  <p><button class="w3-button w3-block"><i class="fa fa-envelope"></i> About</button></p>
                </div>
              </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card-2">
                <img src="/chaitu.jpg" alt="Jane" style="width:100%">
                <div class="w3-container">
                  <h3>Chaitanya</h3>
                  <p class="w3-opacity">Art Director & Co-Founder</p>
                  <p>Amazing man with superhuman capablities, got a problem or caught around a mess just call for him.</p>
                  <p><button class="w3-button w3-block"><i class="fa fa-envelope"></i> About</button></p>
                </div>
              </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card-2">
                <img src="/kkj.jpg" alt="Mike" style="width:100%">
                <div class="w3-container">
                  <h3>Kshitij</h3>
                  <p class="w3-opacity">CTO & Web Designer</p>
                  <p>Don't go by his looks, because this man defies the fact that good looking man aren't hard working.</p>
                  <p><button class="w3-button w3-block"><i class="fa fa-envelope"></i> About</button></p>
                </div>
              </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
              <div class="w3-card-2">
                <img src="/rahul.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                  <h3>Rahul Nayak</h3>
                  <p class="w3-opacity">Designer & Co-founder</p>
                  <p>The entertainer, he is capable of turning even the worst days to a fun and frolic end.</p>
                  <p><button class="w3-button w3-block"><i class="fa fa-envelope"></i> About</button></p>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="w3-half">
              <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> MANIT,BHOPAL</p>
              <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9977551515</p>
              <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email:studenthelp@Gmail.com</p>
              <br>
              <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                <p>
                  <button class="w3-button w3-black" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                  </button>
                </p>
              </form>
            </div>
            <div class="w3-half">
              <!-- Add Google Maps -->
              <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:510px;"></div>
            </div>
          </div>
        </div>


        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-64">
          <a href="#home" class="w3-button"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
          <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
            <i class="fa fa-flickr w3-hover-text-red"></i>
            <i class="fa fa-instagram w3-hover-text-purple"></i>
            <i class="fa fa-twitter w3-hover-text-light-blue"></i>
            <i class="fa fa-linkedin w3-hover-text-indigo"></i>
          </div>
        </footer>
         
        <!-- Add Google Maps -->
        <script>

        // Modal Image Gallery
        function onClick(element) {
          document.getElementById("img01").src = element.src;
          document.getElementById("modal01").style.display = "block";
          var captionText = document.getElementById("caption");
          captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
        </script>
        <!--
        To use this code on your website, get a free API key from Google.
        Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
        -->

</body>
</html>

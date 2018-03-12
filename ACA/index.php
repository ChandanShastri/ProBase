<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>ProBase | Login</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/MX.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>






<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">ProBase v0.1</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Admin Login</a></li>
        <li><a href="#">Devloper Login</a></li>
      </ul>


      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Admin Login</a></li>
        <li><a href="#">Devloper Login</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons"> * </i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Welcome to ProBase.</h1>
      <div class="row center">
        <h5 class="header col s12 light">A Fully Functional Database System with Easy to use Controls & Options. </h5>
      </div>
      <div class="row center">
        <a href="console.php" id="download-button" class="btn-large waves-effect waves-light orange">Go to Console</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">

            <h5 class="center">Faster Access Speeds</h5>

            <p class="light"> The Entire System has been Optimized for Responsiveness and Engineered for Maximum Performance.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">User Data Security</h5>

            <p class="light">Entire Platform is vigoursly Tested for Reliablity and Security. The Platform uses the Latest <i>Hyper Emulation & Manupulation Algorithm</i>, Made by Chandan Shastri.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">

            <h5 class="center">Fine Tuned Access</h5>

            <p class="light">The ProBase uses the most Latest Backend Technologies which are built for Extreme Conditions, Just-in-case to avoid Hacking & Data Loss. Every Version of ProBase uses the PHP 7 or higher to make sure that the System is Secure.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer black">
    <div class="container">
      <div class="row">

          <center>
          <h5 class="blue-text text-lighten-1"><a class="orange-text text-lighten-3" href="view.php" target="_blank">About ProBase</a></h5>
          <p class="white-text text-lighten-4">ProBase is a College Database Management Solution, Focused on High Performance and Reliability.</a></p>
        </center>



      </div>
    </div>
    <div class="footer-copyright">
      <div class="container"><center>
      Made by <a class="orange-text text-lighten-3" href="http://chandanshastri.blogspot.com">Chandan Shastri.</a>
    </center></div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/MX.js"></script>
  <script src="js/IX.js"></script>







  <?php

$con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

  if (mysqli_connect_errno())
  {
  echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
  }

else echo "<b> Database System and Server Status : </b><i> Online </i> "
  ?>

  </body>
</html>

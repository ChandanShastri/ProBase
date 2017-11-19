<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Data Entry Panel</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="index.php" class="breadcrumb">&nbsp Home</a>
          <a href="console.php" class="breadcrumb">Console</a>

        </div>
      </div>
    </nav>

  <?php

  session_start();
  error_reporting(0);
  if($_SESSION['varname']=="XX")
  {
  echo "<script>alert(\" Student Registration Successful..! \\n Add the Additional Info for this Student now..! \")</script>";

  }
  session_destroy();
  ?>





<!-- DATA ENTRY  -->
<div class="container">
  <br><br>
<center><h3> Welcome to Data Entry Panel <h3></center>
<br><br>




  <div class="row">


      <div class="row">
        <div class="input-field col s12">
          <center><a href="add_student.php"  class="waves-effect waves-light btn-large">Add a Student</a></center>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <center><a href="Blackboards/Out1.php"  class="waves-effect waves-light btn-large">View Students</a></center>
        </div>
      </div>

<br><br><hr>


      <br><br><br>
      <form class="col s12" method="post" action="Blackboards/search.php">

        <div class="row">

          <div class="col s4 push-s4">
            <center> Search for USN :</center>
            <input name="Usn" id="xname" type="text" class="validate" required>
            <label for="xname">USN ( University Seat Number)</label>
          </div>
        </div>

        <div class="row">
        <center>  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button></center>

  <br><br><hr>


      </div>
    </form>

<br><br>




      </div>

  </div>
<center>



  <?php





  $con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

  if (mysqli_connect_errno())
  {
    echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
  }

  else echo "<center><b><br><br><br><br><br><br> Database System and Server Status : </b><i> Online </i> </center>";

  ?>

</center>
</div>





  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>

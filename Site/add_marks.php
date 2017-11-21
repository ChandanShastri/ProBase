<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Marks Entry Panel</title>

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
  if($_SESSION['varname']=="MM")
  {
  echo "<script>alert(\" Successfully Inserted Marks..! \\n Add Next One..! \")</script>";

  }
  session_destroy();
  ?>





  <script>
  $(document).ready(function() {
  $('select').material_select();
  });
  </script>

<!-- DATA ENTRY  -->
<div class="container">
  <br><br>
<center><h3> Internal Marks Entry Panel <h3></center>
<br><br>




  <div class="row">
    <form class="col s12" method="post" action="Blackboards/marks.php">

      <div class="row">
        <div class="input-field col s4">
          USN :
          <input name="usn" id="xname" type="text" class="validate" size="10" required>
          <label for="xname"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          Select Semester ( 1 - 8) :
          <input name="sem" id="xname" type="number" class="validate" min="1" max="8" required>
          <label for="xname"></label>
        </div>
        <div class="input-field col s3">
          Select Internals ( 1 - 3 ) :
          <input name="int" id="xname" type="number" class="validate" min="1" max="3" required>
          <label for="xname"></label>
        </div>
      </div>

<hr><br><br>
      <div class="row">
        <div class="input-field col s3">
          Subject 1 Marks ( 0 - 20 ) :
          <input name="int1" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          Subject 2 Marks ( 0 - 20 ) :
          <input name="int2" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s3">
          Subject 3 Marks ( 0 - 20 ) :
          <input name="int3" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s3">
          Subject 4 Marks ( 0 - 20 ) :
          <input name="int4" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row">
        <div class="input-field col s3">
          Subject 5 Marks ( 0 - 20 ) :
          <input name="int5" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          Subject 6 Marks ( 0 - 20 ) :
          <input name="int6" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row">
        <div class="input-field col s3">
          Subject 7 Marks ( 0 - 20 ) :
          <input name="int7" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s3">
          Subject 8 Marks ( 0 - 20 ) :
          <input name="int8" id="xname" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>
<br><br>


        <div class="row">
        <center>  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button></center>


      </div>
    </form>
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

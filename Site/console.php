<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Data Entry Panel</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/MX.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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
  else if($_SESSION['varname']=="USNERR")
  {
    echo "<script>alert(\" USN Doesn't Exist in Database..! \\n Please Verify it Once Again..! \")</script>";
  }
  session_destroy();
  ?>

  <script src="js/JX.js"></script>
      <script src="js/MX.js"></script>
      <script src="js/IX.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });

      </script>








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

      <div class="row">
        <div class="input-field col s12">
          <center><a href="add_marks.php"  class="waves-effect waves-light btn-large">Academics Entry</a></center>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <center><a href="addatt.php"  class="waves-effect waves-light btn-large">Attendance Entry</a></center>
        </div>
      </div>

<br><br><hr><br>

<form class="col s12" method="post" action="Blackboards/dangerzone.php">
<center><center><h5 class="red-text"> Attendance Shortage & Coaching Lists </h5></center><br><br>
<left><h6 class="blue-text"><b> Select Semester and Exam :</b> </h6></left><br>
<div class="card-panel orange lighten-4">
    <div class="row">
        <div class="input-field col s3">
        <h7 class="red-text">Select Semester  :</h7>
        <select name="sem" required>
          <option value="1">SEM - 1</option>
          <option value="2">SEM - 2</option>
          <option value="3">SEM - 3</option>
          <option value="4">SEM - 4</option>
          <option value="5">SEM - 5</option>
          <option value="6">SEM - 6</option>
          <option value="7">SEM - 7</option>
          <option value="8">SEM - 8</option>
        </select>
      </div>

      <div class="input-field col s3">
        <h7 class="red-text">Select Internal Time  :</h7>
      <select name="int" id="exam" required>
        <option value="1"> I - Internals</option>
        <option value="2"> II - Internals</option>
        <option value="3"> III - Internals</option>

      </select>

      </div>
      <div class="input-field col s3"><br>
        <button class="btn waves-effect waves-light" type="submit" > View
    <i class="material-icons right"></i>
  </button>
      </div>
    </div></div></form>
<br><br>
<hr><br>


<center><center><h5 class="red-text"> Database Event Log </h5></center><br>
<div class="row">
  <div class="input-field col s12">
    <center><a href="Blackboards/eventlog.php"  class="waves-effect waves-light btn-large">View Log</a></center>
  </div>
</div>
<br><br>
<hr>


      <br><br><br>
      <form class="col s12" method="post" action="Blackboards/search.php">

<div class="card-panel orange lighten-4"><br>
        <center><center><h5 class="red-text"> Database Search </h5></center><br>
        <div class="row">
          <div class="card-panel orange lighten-3"><br>
          <h7 class="red-text">Enter  University Serial Number  :</h7>
          <div class="input-field">
            USN :&nbsp&nbsp&nbsp&nbsp&nbsp   <b>4AL</b>
            <div class="input-field inline s3">
              <input name="usnb" placeholder="15" id="xname" type="number" class="validate" min="13" max="20" required>
            </div>
            <div class="input-field inline">

              <select name="branch" required >
                <option value="IS">ISE</option>
                <option value="CS">CSE</option>
                <option value="EC">ECE</option>
                <option value="CV">CIVIL</option>
                <option value="ME">MECH</option>
              </select></div>

              <div class="input-field inline">
                <input name="usnno" placeholder="001" id="xname" type="number" class="validate" min="1" max="500" required>
              </div>
            <label for="xname"></label>
          </div></div></div>

          <div class="card-panel orange lighten-3">
            <div class="row">

              <div class="input-field col s4 push-s4">
              <h7 class="red-text">Select Semester  :</h7>
              <select name="sem" required>
                <option value="1">SEM - 1</option>
                <option value="2">SEM - 2</option>
                <option value="3">SEM - 3</option>
                <option value="4">SEM - 4</option>
                <option value="5">SEM - 5</option>
                <option value="6">SEM - 6</option>
                <option value="7">SEM - 7</option>
                <option value="8">SEM - 8</option>
              </select>
            </div>
        </div></div></center><br>

        <div class="row">
        <center>  <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right"></i>
  </button></center></div>

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





  <script src="js/MX.js"></script>
  <script src="js/IX.js"></script>

</body>
</html>

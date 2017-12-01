<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Attendance Entry Panel</title>

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
  echo "<script>alert(\" Successfully Inserted Attendance..! \\n Add Next One..! \")</script>";

  }
  else if($_SESSION['varname']=="USNERR")
  {
    echo "<script>alert(\" USN Doesn't Exist in Database..! \\n Please Verify it Once Again..! \")</script>";
  }
  session_destroy();
  ?>




  <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
        $('select').material_select();
      });

      </script>

<!-- DATA ENTRY  -->
<div class="container">
  <br><br>
<center><h3 class="red-text"> Attendance Entry Panel </h3></center>
<br><br>





    <form class="col s12" method="post" action="Blackboards/att.php">
      <left><h6 class="blue-text"><b> Enter University Serial Number ( USN ) :</b></h6></left><br>
        <div class="card-panel orange lighten-4">
        <div class="input-field col s14">
          USN :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <b>4AL</b>
          <div class="input-field inline s3">
            <input name="usnb" placeholder="15" id="xname" type="number" class="validate" min="13" max="20" required>
          </div>
          <div class="input-field inline col s2">

            <select name="branch" required >
              <option value="IS">ISE</option>
              <option value="CS">CSE</option>
              <option value="EC">ECE</option>
              <option value="CV">CIVIL</option>
              <option value="ME">MECH</option>
            </select></div>

            <div class="input-field inline ">
              <input name="usnno" placeholder="001" id="xname" type="number" class="validate" min="1" max="500" required>
            </div>
          <label for="xname"></label>
        </div></div>
        <br>

<hr><br>


  <left><h6 class="blue-text"><b> Select Semester and Internal Session :</b> </h6></left><br>
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
          <h7 class="red-text">Select Internals  :</h7>
        <select name="int" required>
          <option value="1"> I - Internals</option>
          <option value="2"> II - Internals</option>
          <option value="3"> III - Internals ( Final Attendance )</option>
        </select>

        </div>
      </div></div><br><br>

<hr><br><br>


      <center><h5 class="red-text"><b> Enter the Attendance as per the Subject </b> </h5></center><br>
      <div class="card-panel orange lighten-4">
      <center>
      <div class="row"><b>Subject 1  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int1" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 2  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int2" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row"><b>Subject 3  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int3" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 4  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int4" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>
      </div>


      <div class="row"><b>Subject 5  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int5" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 6  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int6" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row"><b>Subject 7  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int7" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 8  ( 0 - 100 % ) :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int8" id="xname" type="number" class="validate" min="0" max="100" required>
          <label for="xname"></label>
        </div>
      </div>

    </center>

</div>
<br><br>
<center>
<input type="checkbox" id="test5" required>
<label for="test5">I have Verified that All the Data entered above is Correct.</label>
</center><br><br>


        <div class="row">
        <center>  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button></center>


      </div>
    </form>

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

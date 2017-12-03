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
  <?php

  session_start();
  error_reporting(0);
  if($_SESSION['varname']=="FF")
  {
  echo "<script>alert(\" USN already exists..!!  \\n Please Check your Inputs again...! \")</script>";

  }
  session_destroy();
  ?>




  <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="index.php" class="breadcrumb">&nbsp Home</a>
          <a href="console.php" class="breadcrumb">Console</a>

        </div>
      </div>
    </nav>

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
<center><div class="blue-text"><h3> Student Data Entry Panel <h3></div></center>
<br><br>





    <form class="col s12" method="post" action="Blackboards/blackboard1.php">

      <left><h6 class="blue-text"><b> Enter University Serial Number ( USN ) :</b></h6></left><br>
        <div class="card-panel orange lighten-4">
        <div class="input-field col">
          USN :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   <b>4AL</b>
          <div class="input-field inline">
            <input name="usnb" placeholder="15" id="xname" type="number" class="validate" min="13" max="20" required>
          </div>
          <div class="input-field inline col ">

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
        </div></div><br>
        <left><h6 class="blue-text"><b> Enter the Proper Name of the Student mentioned in Legal Documents :</b></h6></left><br>
        <div class="card-panel orange lighten-4">

      <div class="row">

        <div class="input-field col s6">
          <b>Name :
          <input placeholder="" name="Fname" id="first_name" type="text" class="validate" required>
          <label for="first_name"></label>
        </div>
        <div class="input-field col s6">
          Last Name :</b>
          <input name="Lname" id="last_name" type="text" class="validate" required>
          <label for="last_name"></label>
        </div>
      </div>
    </div><br>
<left><h6 class="blue-text"><b> Enter the Contact Details & Date of Birth. :</b></h6></left><br>
      <div class="card-panel orange lighten-4">
      <div class="row">
        <div class="input-field col inline">
          <b>Phone :
          <input name="Phone" value="" id="Phone" type="number" class="validate" required>
          <label for="xname"></label>
        </div>



        <div class="input-field inline">
          E-mail ID :
          <input name="Email" value="" id="Email" type="email" class="validate" required>
          <label for="xname"></label>
        </div>

        <div class="input-field inline">
          Date of Birth :</b>
          <input name="Birthdate" value="" id="DATE" type="date" class="date-picker" required>
          <label for="xname"></label>
        </div><br>

        <br>
        <center><b>Select Gender :<br><br></b>
        <input name="Gender" type="radio" id="test1" value="M"  required/>
        <label for="test1">Male</label>&nbsp&nbsp&nbsp
        <input name="Gender" type="radio" id="test2" value="F" required/>
        <label for="test2">Female</label>
      </center>


    </div></div><br>

      <left><h6 class="blue-text"><b> Enter the Permanent Residential Address :</b></h6></left><br>
            <div class="card-panel orange lighten-4">
      <div class="row">
        <div class="input-field col s12">
        <b>  Address : </b>
          <textarea name="Address" id="textarea1" class="materialize-textarea" required></textarea>
          <label for=""></label>
        </div>
      </div></div>



<br><br>
<div class="row">
  <div class="input-field col s12">

</div>
</div>
<br><br>
<center>
<input type="checkbox" id="test5" required >
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

<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Marks Entry Panel</title>

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
  if($_SESSION['varname']=="MM")
  {
  echo "<script>alert(\" Successfully Inserted Marks..! \\n Add Next One..! \")</script>";

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

      <script>
      function marksSetup()
      {

        var c1=document.getElementById("mk1");
        var c2=document.getElementById("mk2");
        var c3=document.getElementById("mk3");
        var c4=document.getElementById("mk4");
        var c5=document.getElementById("mk5");
        var c6=document.getElementById("mk6");
        var c7=document.getElementById("mk7");
        var c8=document.getElementById("mk8");
        var x=document.getElementById("exam");
        var head=document.getElementById("examhead");
        var lock=document.getElementById("sendinfo");

        if(x.value=="SEM")
        {
          c1.max = "100";
          c2.max = "100";
          c3.max = "100";
          c4.max = "100";
          c5.max = "100";
          c6.max = "100";
          c7.max = "100";
          c8.max = "100";
          lock.innerHTML="<button  class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit</button>";
          head.innerHTML="Semester Exam Marks Entry";
            alert("System Ready for Semester Marks Entry");
        }
        else {
          c1.max = "20";
          c2.max = "20";
          c3.max = "20";
          c4.max = "20";
          c5.max = "20";
          c6.max = "20";
          c7.max = "20";
          c8.max = "20";
          lock.innerHTML="<button  class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Submit</button>";

            if(x.value=="1")
            {
            head.innerHTML="I - Internal Exam Marks Entry";
            alert("System Ready for I - Internal Marks Entry");
            }
            else

            if(x.value=="2")
            {
            head.innerHTML="II - Internal Exam Marks Entry";
            alert("System Ready for II - Internal Marks Entry");
            }
            else
            {
              head.innerHTML="III - Internal Exam Marks Entry";
              alert("System Ready for III - Internal Marks Entry");
            }
        }
      }
      </script>




<!-- DATA ENTRY  -->
<div class="container">
  <br><br>
<center><h3 class="red-text"> Exam Marks Entry Panel </h3></center>
<br><br>





    <form class="col s12" method="post" action="Blackboards/marks.php">
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
          <h7 class="red-text">Select Type of Exam  :</h7>
        <select name="int" id="exam" required>
          <option value="1"> I - Internals</option>
          <option value="2"> II - Internals</option>
          <option value="3"> III - Internals</option>
          <option value="SEM"> Semester Exam </option>
        </select>

        </div>
        <div class="input-field col s3"><br>
          <button class="btn waves-effect waves-light" onclick="marksSetup()" type="button" >UPDATE
      <i class="material-icons right"></i>
    </button>
        </div>
      </div></div><br><br>

<hr><br><br>


      <center><h5 class="red-text" id="examhead"><marquee>System Not Ready. Please click on the Update Button above.</marquee></h5></center><br>
      <div class="card-panel orange lighten-4">
      <center>
      <div class="row"><b>Subject 1 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int1" id="mk1" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 2 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int2" id="mk2" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row"><b>Subject 3 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int3" id="mk3" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 4 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int4" id="mk4" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>


      <div class="row"><b>Subject 5 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int5" id="mk5" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 6 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int6" id="mk6" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>
      </div>



      <div class="row"><b>Subject 7 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">
          <input name="int7" id="mk7" type="number" class="validate" min="0" max="20" required>
          <label for="xname"></label>
        </div>



        <b>&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSubject 8 Marks   :</b>&nbsp &nbsp
        <div class="input-field inline">

          <input name="int8" id="mk8" type="number" class="validate" min="0" max="20" required>
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
        <center id="sendinfo">  <button  class="btn disabled waves-effect waves-light" type="submit" name="action">Please Click on Update Button to Configure the System
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





  <script src="js/MX.js"></script>
  <script src="js/IX.js"></script>

</body>
</html>

<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Danger Zone</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/MX.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="../index.php" class="breadcrumb">&nbsp Home</a>
          <a href="../console.php" class="breadcrumb">Console</a>
          <a href="#!" class="breadcrumb">Danger Zone</a>
        </div>
      </div>
    </nav>
<br>
<div class="container">
<center><h4 class="orange-text"> Students without Minimum Average Marks in Internals</h4></center>
<br>
</div>

<?php

$con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

if (mysqli_connect_errno())
{
  echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
}

else

{
  //echo "<b> Database System and Server Status : </b><i> Online </i> ";
  $_SESSION['varname'] = "ACTIVE";
}


$sem=$_POST["sem"];
$int=$_POST["int"];
$S1=$int."S1";
$S2=$int."S2";
$S3=$int."S3";
$S4=$int."S4";
$S5=$int."S5";
$S6=$int."S6";
$S7=$int."S7";
$S8=$int."S8";

echo "<br><center><h5 class=\"red-text\"> $int Internals </h5></center><br>";

echo "<div class=\"card-panel orange lighten-4\">";

$sql = "SELECT Usn,Fname,Lname,Branch  from STUDENT_INFO where Usn IN (SELECT Usn from STUDENT_ACADEMICS_INT$sem where $S1<12 or $S2<12 or $S3<12 or
$S4<12 or $S5<12 or $S6<12 or $S7<12 or $S8<12)";




$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=\"0\" class=\"centered\"><tbody><thead><tr>
    <th>USN</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Branch</th>
  </tr></thead>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Usn"]."</td><td>". $row["Fname"]."</td><td>". $row["Lname"]."</td><td>". $row["Branch"]."</td></tr>";
    }
    echo "</tbody></table>";
}

else {
    echo "<b><center> No Students have Below Average Marks. </center></b>";
}

echo "</div>";

echo "<center><br><br><h4 class=\"orange-text\"> Students with Attendance Shortage </h4></center><br><br>";

echo "<div class=\"card-panel orange lighten-4\">";

$sql = "SELECT Usn,Fname,Lname,Branch  from STUDENT_INFO where Usn IN (SELECT Usn from STUDENT_ACADEMICS_ATT$sem where $S1<85 or $S2<85 or $S3<85 or
$S4<85 or $S5<85 or $S6<85 or $S7<85 or $S8<85)";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=\"0\" class=\"centered\"><tbody><thead><tr>
    <th>USN</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Branch</th>
  </tr></thead>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Usn"]."</td><td>". $row["Fname"]."</td><td>". $row["Lname"]."</td><td>". $row["Branch"]."</td></tr>";
    }
    echo "</tbody></table>";
}

else {
    echo "<b><center> No Students have Attendance Shortage. </center></b>";
}

echo "</div>";


?>



</body>
</html>

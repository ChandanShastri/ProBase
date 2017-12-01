<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Data Entry Panel</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="../index.php" class="breadcrumb">&nbsp Home</a>
          <a href="../console.php" class="breadcrumb">Console</a>
          <a href="#!" class="breadcrumb">Student List</a>
        </div>
      </div>
    </nav>
<br>
<div class="container">
<center><h4 class="orange-text">Complete Student List</h4></center>
<br><br>
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


$sql = "SELECT * from STUDENT_INFO";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=\"0\" class=\"centered\"><tbody><thead><tr>
    <th>USN</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Birthdate</th>
    <th>Phone</th>
    <th>E-Mail</th>
    <th>Address</th>
  </tr></thead>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["Usn"]."</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]."</td><td>" . $row["Gender"]."</td><td>" . $row["Birthdate"]."</td><td>" . $row["Phone"]."</td><td>" . $row["Email"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}




?>



</body>
</html>

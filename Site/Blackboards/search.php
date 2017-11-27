<html>
<body>
  <head>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Data Entry Panel</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <div class="container">
  <center><br><h5 class="orange-text">Search Results for USN : <?php echo $_POST['Usn']; ?></h5></center>
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

$usn=$_POST['Usn'];
$sem=$_POST['sem'];

$sql = "SELECT * from STUDENT_INFO where Usn='$usn'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<div ><table border=\"0\" class=\"centered\"><tbody><thead><tr>
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
    echo "</tbody></table></div>";
}
else {
  $_SESSION['varname']="USNERR";
  header('Location: ../add_marks.php');exit;
}

$sql1 = "SELECT 1S1,1S2,1S3,1S4,1S5,1S6,1S7,1S8 from STUDENT_ACADEMICS_INT$sem where Usn='$usn'";
$result = $con->query($sql1);

if ($result->num_rows > 0) {
  echo "<center><h5 class=\"red-text\"><b><br><br> I - Internal Marks </b> </h5></center><br>";
  echo "<div ><table border=\"0\" class=\"centered\"><tbody><thead><tr>
  <th>SUB 1</th>
  <th>SUB 2</th>
  <th>SUB 3</th>
  <th>SUB 4</th>
  <th>SUB 5</th>
  <th>SUB 6</th>
  <th>SUB 7</th>
  <th>SUB 8</th>
</tr></thead>";

while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>".$row["1S1"]."</td><td>" . $row["1S2"]. "</td><td>" . $row["1S3"]."</td><td>" . $row["1S4"]."</td><td>" . $row["1S5"]."</td><td>" . $row["1S6"]."</td><td>" . $row["1S7"]."</td><td>".$row["1S8"]."</td></tr>";
}
echo "</tbody></table></div>";
}
 else {
echo "<center><h5 class=\"red-text\"><b> I - Internal Marks Not Entered. </b> </h5></center><br>";
}


$sql1 = "SELECT 2S1,2S2,2S3,2S4,2S5,2S6,2S7,2S8 from STUDENT_ACADEMICS_INT$sem where Usn='$usn'";
$result = $con->query($sql1);

if ($result->num_rows > 0) {
  echo "<center><h5 class=\"red-text\"><b><br><br> II - Internal Marks </b> </h5></center><br>";
  echo "<div ><table border=\"0\" class=\"centered\"><tbody><thead><tr>
  <th>SUB 1</th>
  <th>SUB 2</th>
  <th>SUB 3</th>
  <th>SUB 4</th>
  <th>SUB 5</th>
  <th>SUB 6</th>
  <th>SUB 7</th>
  <th>SUB 8</th>
</tr></thead>";

while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>".$row["2S1"]."</td><td>" . $row["2S2"]. "</td><td>" . $row["2S3"]."</td><td>" . $row["2S4"]."</td><td>" . $row["2S5"]."</td><td>" . $row["2S6"]."</td><td>" . $row["2S7"]."</td><td>".$row["2S8"]."</td></tr>";
}
echo "</tbody></table></div>";
}
 else {
echo "<center><h5 class=\"red-text\"><b> II - Internal Marks Not Entered. </b> </h5></center><br>";
}





$sql1 = "SELECT 3S1,3S2,3S3,3S4,3S5,3S6,3S7,3S8 from STUDENT_ACADEMICS_INT$sem where Usn='$usn'";
$result = $con->query($sql1);

if ($result->num_rows > 0) {
  echo "<center><h5 class=\"red-text\"><b><br><br> III - Internal Marks </b> </h5></center><br>";
  echo "<div ><table border=\"0\" class=\"centered\"><tbody><thead><tr>
  <th>SUB 1</th>
  <th>SUB 2</th>
  <th>SUB 3</th>
  <th>SUB 4</th>
  <th>SUB 5</th>
  <th>SUB 6</th>
  <th>SUB 7</th>
  <th>SUB 8</th>
</tr></thead>";

while($row = $result->fetch_assoc()) {
    echo "<tr>"."<td>".$row["3S1"]."</td><td>" . $row["3S2"]. "</td><td>" . $row["3S3"]."</td><td>" . $row["3S4"]."</td><td>" . $row["3S5"]."</td><td>" . $row["3S6"]."</td><td>" . $row["3S7"]."</td><td>".$row["3S8"]."</td></tr>";
}
echo "</tbody></table></div>";
}
 else {
echo "<center><h5 class=\"red-text\"><b> III - Internal Marks Not Entered. </b> </h5></center><br>";
}

echo "<br><br>";




?>










</body>
</html>

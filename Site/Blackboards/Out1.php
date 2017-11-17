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
    echo "<div class='container'><table><thead><tr>
    <th>Usn</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>Phone</th>
    <th>PPhone</th>
    <th>Birthdate</th>
    <th>Address</th>
  </tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["Usn"]."</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]."</td><td>" . $row["Gender"]."</td><td>" . $row["Birthdate"]."</td><td>" . $row["Phone"]."</td><td>" . $row["Pphone"]."</td><td>".$row["Address"]."</td></tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "0 results";
}




?>



</body>
</html>

<html>
<body>
  <head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>ProBase | Event Log</title>

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
          <a href="#!" class="breadcrumb">Event Log</a>
        </div>
      </div>
    </nav>
<br>
<div class="container">
<center><h4 class="orange-text"> Database Events with Time </h4></center>
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

echo "<div class=\"card-panel orange lighten-4\">";

$sql = "SELECT * from EVENT_LOG";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border=\"0\" class=\"centered\"><tbody><thead><tr>
    <th>Event</th>
    <th>Time</th>
  </tr></thead>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["EVENT"]."</td><td>". $row["TIME"]."</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<b><center>Event Log has been recently cleared.</center></b>";
}

echo "</div>";


?>



</body>
</html>

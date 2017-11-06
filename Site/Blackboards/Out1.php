<?php

$con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

if (mysqli_connect_errno())
{
  echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
}

else

{
  echo "<b> Database System and Server Status : </b><i> Online </i> ";
  $_SESSION['varname'] = "ACTIVE";
}


$sql = "SELECT * from STUDENT_INFO";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Usn"]. "\t" . $row["Fname"]. "\t" . $row["Lname"]."\t" . $row["Gender"]."\t" . $row["Birthdate"]."\t" . $row["Phone"]."\t" . $row["Pphone"]."\t" . $row["Address"]. "<br><br>";
    }
} else {
    echo "0 results";
}




?>

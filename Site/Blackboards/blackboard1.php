<?php
session_start();
$_SESSION['varname'] = "HELLO 11122";

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

$sql = "INSERT INTO STUDENT_INFO ('$_POST["Usn"]', '$_POST["Fname"]', '$_POST[Lname]','$_POST["Gender"]','$_POST["Phone"]','$_POST["Pphone"]','$_POST["Birthdate"]','$_POST["Address"]');";

if ($conn->query($sql) === TRUE) {
    $_SESSION['varname'] = "SS";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


echo $_POST["name"];
header("Location: ../console.php");
?>

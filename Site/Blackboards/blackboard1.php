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
  $_SESSION['varname']="XX";
}





$Usn=$_POST["Usn"];
$Fname=$_POST["Fname"];
$Lname=$_POST["Lname"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email"];
$Birthdate=$_POST["Birthdate"];
$Address=$_POST["Address"];
$Gender=$_POST["Gender"];

$sql = "INSERT INTO STUDENT_INFO values ('$Usn','$Fname','$Lname','$Gender','$Phone','$Email','$Birthdate','$Address')";

if ($con->query($sql) === TRUE) {
  $_SESSION['success'] = 'User Registration Success (Please login and update your profile)';
  echo "<script>alert(\" User Registration Successful..!<br> Please Login using your Email & Password. \")</script>";
  $_SESSION['varname']="XX";
  header('Location: ../console.php');exit;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

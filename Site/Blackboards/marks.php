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





$usn=$_POST["usn"];
$sem=$_POST["sem"];
$int=$_POST["int"];
$int1=$_POST["int1"];
$int2=$_POST["int2"];
$int3=$_POST["int3"];
$int4=$_POST["int4"];
$int5=$_POST["int5"];
$int6=$_POST["int6"];
$int7=$_POST["int7"];
$int8=$_POST["int8"];

$sql = "INSERT INTO STUDENT_ACADEMICS_INT$sem values ('$usn','$int1','$int2','$int3','$int4','$int5','$int6','$int7','$int8')";

if ($con->query($sql) === TRUE) {
  $_SESSION['success'] = 'User Registration Success (Please login and update your profile)';
  echo "<script>alert(\" User Registration Successful..!<br> Please Login using your Email & Password. \")</script>";
  $_SESSION['varname']="MM";
  header('Location: ../add_marks.php');exit;

} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

?>

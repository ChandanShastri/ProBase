<?php

$con = mysqli_connect("localhost","chandanshastri","321654","COLLEGE");

if (mysqli_connect_errno())
{
  echo "Sc Server is Down, Please Contact Chandan Shastri" . mysqli_connect_error();
}

else echo "<b> Database System and Server Status : </b><i> Online </i> ";

echo $_POST["name"];

?>

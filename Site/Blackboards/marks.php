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





$usn="4AL".$_POST["usnb"].$_POST["branch"].$_POST["usnno"];
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

$S1=$int."S1";
$S2=$int."S2";
$S3=$int."S3";
$S4=$int."S4";
$S5=$int."S5";
$S6=$int."S6";
$S7=$int."S7";
$S8=$int."S8";

$checkUsn="SELECT * FROM STUDENT_INFO where Usn='$usn'";
$cUsn = $con->query($checkUsn);
if ($cUsn->num_rows > 0)
{

}
else {
  $_SESSION['varname']="USNERR";
  header('Location: ../add_marks.php');exit;
}


if($int !="SEM")
{

$check="SELECT * FROM STUDENT_ACADEMICS_INT$sem where Usn='$usn'";

$result = $con->query($check);

if ($result->num_rows > 0)
{
  $sql ="UPDATE STUDENT_ACADEMICS_INT$sem SET $S1 = $int1, $S2 = $int2, $S3 = $int3, $S4 = $int4, $S5 = $int5, $S6 = $int6, $S7 = $int7, $S8 = $int8 where Usn='$usn'";
}
else
{
  $sql = "INSERT INTO STUDENT_ACADEMICS_INT$sem (Usn,$S1,$S2,$S3,$S4,$S5,$S6,$S7,$S8) values ('$usn','$int1','$int2','$int3','$int4','$int5','$int6','$int7','$int8')";
}
if ($con->query($sql) === TRUE) {
  $_SESSION['success'] = 'Marks Entry Success';
  $_SESSION['varname']="MM";
  header('Location: ../add_marks.php');exit;

}

else {
    echo "Error: " . $sql . "<br>" . $con->error;
}


}

else {






  $check="SELECT * FROM STUDENT_ACADEMICS_SEM$sem where Usn='$usn'";

  $result = $con->query($check);

  if ($result->num_rows > 0)
  {
    $sql ="UPDATE STUDENT_ACADEMICS_SEM$sem SET S1 = $int1, S2 = $int2, S3 = $int3, S4 = $int4, S5 = $int5, S6 = $int6, S7 = $int7, S8 = $int8 where Usn='$usn'";
  }
  else
  {
    $sql = "INSERT INTO STUDENT_ACADEMICS_SEM$sem (Usn,S1,S2,S3,S4,S5,S6,S7,S8) values ('$usn','$int1','$int2','$int3','$int4','$int5','$int6','$int7','$int8')";
  }
  if ($con->query($sql) === TRUE) {
    $_SESSION['success'] = 'Marks Entry Success';
    $_SESSION['varname']="MM";
    header('Location: ../add_marks.php');exit;

  }

  else {
      echo "Error: " . $sql . "<br>" . $con->error;
  }
}


?>

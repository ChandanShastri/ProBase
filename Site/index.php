<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>  Chandan Shastri's Database System </title>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

<div class="card-panel teal lighten-2">
      <h2><center>Welcome to Database Administration Panel</center></h2> </div>

      <?php
  $servername = "localhost";
  $username = "chandanshastri";
  $password = "321654";
  $dbname = "COLLEGE";
$con = mysqli_connect("$servername","$username","$password","$dbname");
  // Create connection
  //$conn = new mysqli($servername, $username, $password, $dbname,3307);
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //$sql = "SELECT id, firstname, lastname FROM MyGuests";
  //$result = $conn->query($sql);

  /*if ($result->num_rows > 0) {
       output data of each row
      while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
  } else {
      echo "0 results";



      $sql = "SELECT id, firstname, lastname FROM MyGuests";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
          }
      } else {
          echo "0 results";
      }
      $conn->close();








  }*/
//  $con->close();
  ?>







    </body>
  </html>

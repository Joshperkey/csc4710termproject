<?php

$server = "localhost";
$user = "id14771451_4710admin";
$pass = "Xo\qQ6eg_z(aFdgZ";
$db = "id14771451_4710db";

//create connection
$con = mysqli_connect($server,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno())
{
  echo '<br>Server: ' . $server;
  echo '<br>Username:' . $user;
  echo '<br>Password: ' . $pass;
  echo '<br>Database: ' . $db . '<br>';
  die("Failed to connect to MySQL: " . mysqli_connect_error() . "<br>");
}
echo "Connected Successfully to database: FSDB<br><br>";



// Close connection to DB
if (my_sqli_close($con)) {

  echo "Connection to database successfully closed";

}

?>

<?php
/*
$servername = "localhost";
$username = "id16701660_vak";
$password = "Vakproject@123";
$dbname = "id16701660_khaana";*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khaana";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>
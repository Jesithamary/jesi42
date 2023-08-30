<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
require("include.php");
?>



<!DOCTYPE html>
<html>
<head>
  
  <title></title>
</head>
<body>
  <h2>php programing language</h2>
  <?php
  
  // require_once("include.php");
?>

</body>
</html>
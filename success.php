<?php 
include('pro3.php')?>
<?php 

$sql = "SELECT firstname, fname, mname FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["firstname"]. 
    " - Fathername: " . $row["fname"]. 
    " Mothername:" . $row["mname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
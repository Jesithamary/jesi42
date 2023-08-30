<!DOCTYPE html>
<html>
<title>Count</title>
<body>
<h2>Indexed array</h2>
<?php
$Animals = array("Alex", "Femila", "Arul"); 
echo "I like " . $Animals[0] . ", " . $Animals[1] . " and "  .$Animals[2] . ".";


echo"<h2>loop Indexed</h2>";

$Animals = array("Alex", "Femila", "Arul");
$arrlength = count($Animals);
for($x = 0; $x < $arrlength; $x++) {
  echo $Animals[$x];
  echo "<br>";
}

echo"<h2>Associative arrays</h2>";

$age = array("Angel"=>"13", "Rosline"=>"14", "Marvin"=>"15");
echo "Angel is " . $age['Angel'] . " years old.";




echo"<h2> Loop Associative</h2>";

$age = array("Angel"=>"13", "Rosline"=>"14", "Marvin"=>"15");
foreach($age as $x => $x_age) {
  echo "name=" . $x . ", age=" . $x_age;
  echo "<br>";
}

?>

</body>
</html>

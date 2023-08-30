<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

echo "<h1>Case Sensitivity</h1>";
ECHO "Hello World!<br>";
echo "HELLO WORLD!<br>";
EcHo "Hello World!<br>";

$color = "blue";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";

echo "<h1>PHP Variables</h1>";
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>
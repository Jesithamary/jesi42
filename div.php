<html>
<head>
<title>Division table</title>
</head>
<body>

<?php
echo "<table border='1'>";
  for  ($y=0 ; $y<2 ; $y++) {
    echo "<tr>";
      for ($x=1 ; $x <=10; $x++) {
        echo "<td>".($y*20 + $x)."</td>";
      }
    echo "</tr>";
  }
echo "</table>"

?>

</body>
</html>
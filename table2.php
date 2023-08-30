<!DOCTYPE html>
<html>
<body> 
    <h3> HTML input form </h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h4>Please enter your First Name : </h4>
        <input type="text" name="f_name"><br>
        <h4>Please enter your Last Name : </h4>
        <input type="text" name="l_name"><br><br>
        <input type="submit"  name="submit">
    
<?php
    if (isset($_POST['submit'])) {   
        echo $_POST['f_name'];
        echo $_POST['l_name'];
    }
?>
<h1> Array</h1>
<?php
$age = array("Iniya"=>"35", "Inba"=>"37", "Iniyan"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<h1>Display string</h1>
<?php
$a=1000;
$b=1200;
$c=1400;
echo "<table border=1 cellspacing=0>
<tr> 
<td><font color=blue>Salary of Mr. A is</td> 
<td>$a$</font>
</td>
</tr> 
<tr>
 <td><font color=blue>Salary of Mr. B is</td>
  <td>$b$</font></td>
  </tr>
<tr>
 <td><font color=blue>Salary of Mr. C is</td> 
<td>$c$</font></td>
</tr>
</table>";
?>
<h1>Arithmetic operations </h1>
<?php
$d = 'A00';
  for ($n=0; $n<5; $n++)
{
echo ++$d ."\n";
}
?>
 </form>
</body>
</html>

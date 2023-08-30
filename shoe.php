<html>
<head>
<title>Form</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
<label>Name:</label>
<input type="text" name="name" id="name"><br>
<label>Age:</label>
<input type="number" name="Age" id="Age"><br>
<label>E-mail</label>
<input type="email" name="Email" id="Email"><br>
<label>Gender</label>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="fmale">Female<br>

<label>DOB:</label>
<input type="date" name="dob" id="dob"><br>
<label>Skills:</label>
<input type="checkbox" id="skill1" name="skill[]" value="Java">JAVA
<input type="checkbox" id="skill2" name="skill[]" value="C++">C & C++
<input type="checkbox" id="skill3" name="skill[]" value="P">PHP
<input type="checkbox" id="skill4" name="skill[]" value=".net">.net
<input type="checkbox" id="skill5" name="skill[]" value="python">Python<br>
<label>Phone no:</label>
<input type="tel" id="phone" name="phone" pattern="[5-9]{5}-[0-9]{5}" required><br>
<input type="submit">
</form>

<h1>Division Table</h1>
<?php  
$start  = 1;
$end = 10;
?>
<table border="1">
<tr>
<?php
for($x=$start;$x<=$end;$x++){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
  <?php
 for($x=2;$x<=20;$x+=2){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
for($x=3;$x<=30;$x+=3){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
 <?php
 for($x=4;$x<=40;$x+=4){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
 for($x=5;$x<=50;$x+=5){
echo "<td>$x</td>";

}
?>
</tr>	
<tr>
<?php
for($x=6;$x<=60;$x+=6){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
for($x=7;$x<=70;$x+=7){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
for($x=8;$x<=80;$x+=8){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
for($x=9;$x<=90;$x+=9){
echo "<td>$x</td>";

}
?>
</tr>
<tr>
<?php
for($x=10;$x<=100;$x+=10){
echo "<td>$x</td>";

}
?>
</tr>
</table>
</body>
</html>
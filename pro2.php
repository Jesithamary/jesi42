<?php include('pro3.php')
?>
<?php
print_r($_POST);
$name=$_POST['firstname'];
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $mail=$_POST['e_mail'];
 $phoneno=$_POST['phone'];
 $clog=$_POST['clgname'];
 $reg=$_POST['regisnum'];
 $bdate=$_POST['birthdate'];
 $gender=$_POST['gender'];
 $lan=$_POST['language'];
 $cour=$_POST['courses'];
 $mlang=$_POST['motherlanguage'];
 $addres=$_POST['address'];
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO form(firstname,fname,mname,e_mail,phone,clgname,regisnum,birthdate,gender,language,courses,motherlanguage,address)values
('$name','$fname','$mname','$mail','$phoneno','$clog','$reg','$bdate','$gender','$lan','$cour','$mlang','$addres')";

if ($conn->query($sql) === TRUE) {
  header("Location: success.php");
  exit();
} else {
  header("Location : error.php");
  exit();
}


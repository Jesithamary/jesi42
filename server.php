<?php

$name = '';
$email = '';
$gender ='';
$address ='';
$nameError = '';
$emailError = '';
$genderErr = '';
$successMessage = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        
    }


    if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $address = test_input($_POST["address"]);
  }

    
    if (empty($nameError) && empty($emailError)) {
        
        $successMessage = "Form submitted successfully!";
    } else {
        $successMessage = ""; 
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Form Validation</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <span style="color: red;">*<?php echo $nameError; ?></span>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <span style="color: red;">*<?php echo $emailError; ?></span>
        <br><br>

    
        <lable for="gender">Gender:</lable>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span style="color: red;" >* <?php echo $genderErr;?></span>
        <br><br>

        
        <lable for="address">Address:</lable>
         <textarea name="address" rows="5" cols="30"></textarea>
  <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <div style="color: green;"><?php echo $successMessage; ?></div>
   <?php
    echo"<h1>server input</h1>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $address;
    echo "<br>";
    ?>
</body>
</html>




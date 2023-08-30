<html>
<head>
<title>Form</title>
</head>
<body>
<form action="lase.php" method="POST"> 
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
<input type="checkbox" id="skill1" name="skill">JAVA
<input type="checkbox" id="skill2" name="skill">C & C++
<input type="checkbox" id="skill3" name="skill">PHP
<input type="checkbox" id="skill4" name="skill">.net
<input type="checkbox" id="skill5" name="skill ">Python<br>
<label>Phone no:</label>
<input type="tel" id="phone" name="phone" pattern="[5-9]{5}-[0-9]{5}" required><br>
<input type="submit">
</form>
</body>
</html>
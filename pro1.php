<html>
<head>
<title>DBCY Registration Form</title>
<style>

      hr {
        border: 1px solid #000000;
      }
	  
	  form {
	     padding-left: 10%;
		 }



.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: seagreen;
   color: white;
   text-align: center;
}
</style>
</head>
<body bgcolor="orange">
<hr style="height:5px;border-width:2;color:red;background-color:blue;">
<table  align="center">
<tr  bgcolor="red">

<td style="padding-left: 100px"  >
    <h1><center><i>Don Bosco College(CO-ED)-Yelagiri Hills</i><br>
     <b>Department Of Computer Application Registration Form</b></h1>
 </td>
</tr>
</table>
<hr style="height:5px;border-width:2;color:red;background-color:blue">
<marquee style="background-color:yellow" ><b><i>Don Bosco College college (CO-ED) Yelagiri Hills Department Of Computer Application</marquee>
<hr style="height:5px;border-width:2;color:red;background-color:blue">
<form method="post" action="pro2.php">
<fieldset>
<legend>DBCY:</legend>
<table cellspacing="10">
<tr>
    <td>
        <label> Student Name</label>
    </td>
    <td>
        <label>:</label>
    </td>
    <td>
        <input type="text" name="firstname"  size="30" placeholder="Student Name" autofocus>
    </td>
</tr>
<tr>
    <td>Father Name</td>
    <td>:</td>
    <td><input type="text"  name="fname" size="30" autocomplete="on">
    </td>
</tr>
<tr>
    <td>Mother Name</td>
    <td>:</td>
    <td><input type="text"  name="mname" size="30" autocomplete="on">
    </td>
</tr>
<tr>
    <td> <label> e_mail </label></td>
    <td>:</td>
    <td><input type="email" name="e_mail" size="30">
    </td>
</tr>
<tr>
    <td>Phone No</td>
    <td>:</td>
    <td><input type="text"  name="phone" maxlength="10" size="30" >
    </td>
</tr>
<tr>
    <td>College Name</td>
    <td>:</td>
    <td><input type="text"  name="clgname" value="Don Bosco College" readonly size="30">
    </td>
</tr>
<tr>
    <td>Registration No</td>
    <td>:</td>
    <td><input type="text"  name="regisnum" maxlength="6" size="30">
    </td>
</tr>
<tr>
    <td><label> Date Of Birth</label>
    </td>
    <td>:</td>
    <td><input type="date" name="birthdate">
</td>
</tr>
<tr>
    <td>Gender</td>
    <td>:</td>
<td>
    <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others</td>
</tr>
<tr>
    <td>Language Known</td>
    <td>:</td>
<td>
<input type="checkbox"  name="language" value="Tamil">Tamil
<input type="checkbox"  name="language" value="English">English
<input type="checkbox"  name="language" value="Hindi">Hindi</td>
</tr>
<tr>
    <td>Student Image</td>
    <td>:</td>
    <td><input type="file"  name="myfile">
    </td>
</tr>
<tr>
    <td>UG Courses</td>
    <td>:</td>
    <td>
        <select name="courses">
    <option value="BCA">BCA
    <option value="B.COM">B.COM
    <option value="BSC">BSC
    <option value="BBA">BBA
    <option value="BA.Tamil">BA.TAMIL
    </select>
</td>
</tr>
<tr>
    <td>Mother Language</td>
    <td>:</td>
    <td>
<select  name="motherlanguage" size="1">
   <option value="none">None</option>
  <option value="tamil">Tamil</option>
  <option value="english">English</option>
  <option value="hindi">Hindi</option>
  <option value="malayalam">Malayalam</option>
</select>
</td>
</tr>
<tr>
    <td>Address</td>
    <td>:</td>
    <td>
        <textarea name="address" rows="5" cols="30"></textarea>
    </td>
</tr>
<tr>
    <td>       
    </td>
    <td>
        <input type="submit" value="Submit">
 <input type="reset">
<input type="button" onclick="alert('Details Successfully Saved')" value="Save">
</td>
</tr>

</fieldset>
</table>
</form>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>

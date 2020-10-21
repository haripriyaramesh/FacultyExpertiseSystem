<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");
?>
<html>
<head>


<title>
Staff Profile
</title>
</head>
<body background = "college1.jpg">
<?php
//echo $_SESSION['eid'];
//echo "<p> <font color=#1F618D>You are signed in as</p>"; 
//echo $_SESSION['name'];
?>
<center>
<center><h1><font color=white>Qualification Details</font></h1></center>

<form method="post"  action="profile1.php" enctype="multipart/form-data">
<center><table border="10" bordercolor="white" bgcolor="white">
<tr><td colspan=2><font color=red>Enter your Qualification details</td></tr>

<tr>
<td><font color=#1F618D><b>Qualification*</td>

<td><select name="qf" size=5>
<option>B.E</option>B.E
<option>B.Tech</option>B.Tech
<option>M.E</option>M.E
<option>M.Tech</option>M.Tech
<option>Ph.D</option>Ph.D
<option>B.Sc</option>B.Sc
<option>M.Sc</option>M.Sc
<option>MCA</option>MCA
<option>M.S</option>M.S
<option>Diploma</option>Diploma
<option>Others</option>others
</select>
</td>

<tr><td><font color=#1F618D><b>Institution*</b></font></td><td><input type=name name="inst" size=100 maxlength=100 required></td></tr>
<tr><td><font color=#1F618D><b>Location*</b></font></td><td><input type=name name="locn" size=100 maxlength=100></td></tr>
<tr><td><font color=#1F618D><b>University*</b></font></td><td><input type=name name="unv" size=100 maxlength=100></td></tr>
<tr><td><font color=#1F618D><b>Join year</b></font></td><td><input type=name name="jyear" size=50 maxlength=50></td></tr>
<tr><td><font color=#1F618D><b>Passed year*</b></font></td><td><input type=name name="pyear" size=50 maxlength=50></td></tr>
<tr><td><font color=#1F618D><b>Percentage*</b></font></td><td><input type=name name="per" size=25 maxlength=25></td></tr>
<td>
<font color=#1F618D><b>Upload the degree/pass certificate</b></font>
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
     

<tr><td colspan=2><font color=red>Fields with * are Mandatory</td></tr>

</table>

<input type="submit" value="Submit">

</center>

</form>
</body>
</html>




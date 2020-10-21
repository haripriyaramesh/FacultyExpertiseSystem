<html>
<head>
<script type="text/javascript">

function validateForm() {
	submitOK="true";
    var x = document.forms["myForm"]["uname"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        submitOK="false";
		return false;
    }
}
</script>

<title>
Login
</title>
</head>
<body background="college1.jpg" valign="center" bgcolor="blue"  onLoad="document.forms[0].uname.focus()">



<center>

<table border=0 valign="center" bgcolor=white><tr><td valign="center">
<center><h2><img src="rvce.png" width=900 height=90></center></tr></td></table>
<hr>

<table border=0 valign="center" ><tr><td valign="center" width=50%>
<center><h1><font color=white><b><b>Faculty Expertise System</font></h1></center></tr></td>
<tr><td>
<center><h4><font color=white><b>(Autonomous Institute under VTU)</b></font></h4></center></tr></td>



<form name= "myForm" method="post"  action="login2.php" onsubmit="return validateForm()">
<tr><td>
<center><table border=1 ><tr>

<td><font color=white><b>Username</b></font>  <font color=#B03A2E><b>*</b></font></td><td><input type="text" name="uname" id="uname" size=30 maxlength=30></td><td><font color=#B03A2E><b>* Means mandatory field</b></font></td></tr>
<tr>

<td><font color=white><b>Password</b></font> <font color=#B03A2E><b>*</b></font></td><td><input type="password" name="pwd" id="pwd" size=30 maxlength=30></td><td><font color=#B03A2E><b>* Means mandatory field</b></font></td></tr>

</table>

<input type="submit" value="login">

</center>
</table></td></tr>
</form>
<b><a href="login.html"><b>New User</a></b>

</center>
<hr>
</body>
</html>

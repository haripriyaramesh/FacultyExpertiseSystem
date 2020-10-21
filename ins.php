<html>
<body background = "college1.jpg">
</html>
<?php

session_start();
$a=$_SESSION['auth'];
if($a!=1)
die("Error unauthorized acces");
else
{


	//echo "<br><font color=blue size='8px'> <center>Instructions</center></font>"; 


$xyz = $_SESSION['eid'];
$name = $_SESSION['name'];
     echo "<br><br><br><br><br><font color=white size='6px'><center><marquee>You are signed in as $name</marquee><br> </center></font>";
     echo "<br><br><font color=white size='8px'><center>Welcome to Faculty Expertise System<br><br></center></font><font size='6px'><center>click on the option to update details</center></font>";

		//echo "<br><font color=#B03A2E size='6px'><h5><center> Click on the field you want to view/update on the left for the chosen faculty.</center></h5>";

}
?>

<html>
<body bgcolor=white>
</body>
</html>
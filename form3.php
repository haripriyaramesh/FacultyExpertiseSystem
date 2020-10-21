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


include("db.php");

$user=$_COOKIE["username"];

echo "<center><table border=0 bgcolor=white width=100%>";

echo "<tr><td align=center><img src='rvce_logo.jpg' width=120 height=120></td><td colspan=8 align=center wrap><h3><font color=#1F618D> Rashreeya Shikshana Samithi Trust</h3><H1>R.V.College of Engineering</h1><h2>(Autonomous Institute Affiliated to VTU, Belgaum)</h2></font></td></tr>";


echo "</tr></table></center>";

}
?>

<html>
<body bgcolor=white>
</body>
</html>
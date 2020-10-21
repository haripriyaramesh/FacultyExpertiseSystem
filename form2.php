
<?php
session_start();
$a=$_SESSION['auth'];
if($a!=1)
die("Error unauthorized acces");
else
{

echo "<frameset rows='30%,*' >
	<frame src='form3.php' name=target1  frameborder='no' scrolling='no'>
	<frameset cols='20%,*'>
	<frame src='form33.php' name=target2   scrolling='yes'>
	<frame src='ins.php' name=target3 scrolling='yes'>
	</frameset></frameset>";
}
?>
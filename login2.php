<?php
//session_start();
$uname=$_POST['uname'];
//echo "<br>uname=$uname";
$pwd=$_POST['pwd'];

	if($uname=="")
	die("Error: Username not entered!");

	if($pwd=="")
	die("Error: Password not entered!");

	include("db.php");
    $con=mysqli_connect("localhost", "root", "","fes");

	$encrypt = md5($pwd);
    $pwd = $encrypt;
	//echo $pwd;
    //$pwd=$ecrypt;
	$query = "select email,password from faculty where email='$uname' and password='$pwd'"; //authentication for login
	$result=mysqli_query($con,$query) or die(mysqli_error($con));

$rows=mysqli_num_rows($result);

	
//echo "rows=$rows";
	while(list($a,$b)=mysqli_fetch_row($result))
	{
 	//echo "<br> inside while uname=$a  $b";

	}

	

	if($rows==1)
	{
	session_start(); 
	$_SESSION['auth'] = 1; 
	$sql = "SELECT eid,name from faculty where email = '" .mysqli_real_escape_string($con, $_POST['uname']) . "'";
	
	$result = mysqli_query($con,$sql) or trigger_error("sorry there...?");
	
	$row = mysqli_fetch_array($result, MYSQLI_BOTH);
	$_SESSION['eid']=$row[0];
	$_SESSION['name']=$row[1];
	
	
	
//$fd=fopen("host.txt","r");
//fscanf($fd,"%s",$localhost);

//echo "<br>lo=$localhost";
//fclose($fd);

$localhost="form2.php";
$local="signout.php";

echo "<form method=post action='$localhost'>";
	setcookie("username", $_POST['uname'], time()+(84600*30)); 
	echo "<font color=#3498DB><center><H1>Welcome $uname!<BR> </font>";
	echo "<img src='mca.jpg' height=300 width=1300></img>";
	//$uname=strtoupper($uname);
	echo "<br><br><center><font color=red><input type='submit' value='Click here '></font></form>";
	echo "<form method=post action='$local'>";
	echo "<br><br><center><font color=red><input type='submit' value='Logout'></font></form>";
	}	
	
	elseif($rows==0)
	{
	echo "Incorrect username or password";
//	$fd=fopen("host.txt","r");
//fscanf($fd,"%s",$localhost);
//fclose($fd);

	$localhost="index.html";
	

	echo "<br><a href ='$localhost'>Main Page</a>";

	
	


?>
	

<?php	
	}


?>
  	

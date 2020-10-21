<?php
session_start();
$username = $_POST['user'];
$password = $_POST['pass'];
$_SESSION['loggedIn'] = false;
//Prevent SQL Injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//connect to database
mysql_connect("localhost", "root", "");
mysql_select_db("customs");

//Query
$result = mysql_query("select * from login where username = '$username' and password = '$password'")
			or die("Failed to Query Database.".mysql_error());

$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password)
{
	$_SESSION['loggedIn'] = true;
	$_SESSION['username'] = $username;
	$result = mysql_query("SELECT * FROM carrier WHERE carrier_id = '$username'");
	$row = mysql_fetch_array($result);
	if(empty($row))
		$_SESSION['carrier'] = false;
	else
		$_SESSION['carrier'] = true;
	if($username == "admin")
	{
		header('Location: admin.php');
	}
	else
	{
		header('Location: home_after_login.php');
	}
}
else
{
	//echo "Invalid Credentials";
	echo '<script type="text/javascript">alert("Invalid credentials."); window.history.back(); </script>';
	$_SESSION['loggedIn'] = false;
}
?>
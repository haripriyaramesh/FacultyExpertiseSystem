<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");
//mysql_select_db($con,"fes");

$fname=$_POST["fname"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$pwd1=$_POST["pwd1"];
$eid=$_POST["eid"];
$desg=$_POST["desg"];
$dob=$_POST["dob"];
$_SESSION['eid'] = $eid;

echo " $fname  uname=$uname  pwd=$pwd  $pwd1  $desg";

if ($uname==''||$pwd==''||$dob==''||$desg==''||$eid==''||$pwd1==''||$fname=='' )
{
echo " Insufficient Data";
echo "<br><input type=submit value='Back to Registration'>";
}

else
{
 if ($pwd==$pwd1)
{
$encrypt = md5($pwd);
$pwd = $encrypt;
$pwd1 = $encrypt;
echo $pwd;
//$pwd=$ecrypt;
//$pwd1=$encrypt;
$query2="select email from faculty where pwd='$pwd'";
$result2 = mysqli_query($con,$query2);
while(list($b)=mysqli_fetch_row($result2))
{	$uname=$b;	}
$rows2=mysqli_num_rows($result2);
//echo "<br>rows2=$rows2";

if ($rows2>0)
echo "User with similar details already exists";
else
{
	/*$query1="select max(id) from faculty";
	$result1=mysqli_query($query1) or die(mysql_error());
	while(list($b)=mysql_fetch_row($result1))
	{	$id=$b;	}
	$rows1=mysql_num_rows($result1);
	//echo "<br>rows1=$rows1";

	$id=$id+1;*/
	$query="insert into faculty(name,eid,email,dob,password,designation) values('$fname','$eid','$uname','$dob','$pwd','$desg')";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));

	if($result==1)
	{
		echo "Account Created successfully";
		header('Location: index.php');
	}

	else
	{	
		echo "Error: Account not created <br>";


	}

}
}
else
{
echo "pwd do not match, re-register";
}
}

//echo "<a href='index.html'>Back to Main Menu</a>";
//header('Location: index.php');

?>
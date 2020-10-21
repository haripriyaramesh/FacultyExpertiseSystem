<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$client=$_POST["client"];
$title=$_POST["title"];
$sdate=$_POST["sdate"];
$cdate=$_POST["cdate"];
$f1=$_POST["f1"];
$f2=$_POST["f2"];
$revenue=$_POST["revenue"];
$summary=$_POST["summary"];
$lab=$_POST["lab"]; 
$other=$_POST["outcome"]; 

//echo "client=$client title=$title sdate=$sdate  cdate=$cdate  f1=$f1 f2=$f2 f3=$f3 revenue=$revenue summary=$summary  lab=$lab  url=$url others=$others";


if ($client=='' || $title=='' || $sdate=='' || $f1==''  )
{
echo " Insufficient Data";
echo "<br><a href=consultancy.html>Back to Profile for more data</a>";
}
else
{
//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into consultancy values('$client','$title','$sdate','$cdate','$f1','$f2','$revenue','$summary','$lab','$other')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$query1="insert into works_with values('$xyz','$title')";
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1&&$result1==1)
{
echo "Consultancy data successfully entered";
echo "<br><a href=consultancy.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=consultancy.html>Back to Profile for more data</a>";
}

}

?>
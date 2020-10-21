<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$type=$_POST["type"];
$title=$_POST["title"];
$year=$_POST["year"];
$f1=$_POST["f1"];
$f2=$_POST["f2"];
$det=$_POST["det"];
$url=$_POST["url"];

//echo "type=$type country=$country title=$title year=$year f1=$f1  f2=$f2 f3=$f3 det=$det aff=$aff url=$url others=$others";


if ($type=='' || $title=='' || $det=='' || $f1==''  )
{
echo " Insufficient Data";
echo "<br><a href=patent.html>Back to Profile for more data</a>";
}
else
{
$query="insert into patent values('$type','$title','$year','$f1','$f2','$det','$url')";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

if ($result==1)
{
echo "Patent data successfully entered";
echo "<br><a href=patent.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=patent.html>Back to Profile for more data</a>";
}

}

?>
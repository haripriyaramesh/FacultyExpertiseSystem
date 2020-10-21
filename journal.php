<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$ctype=$_POST["ctype"];
$rarea=$_POST["rarea"];
$ppj=$_POST["ppj"];
$prj_name=$_POST["prj_name"];
$prj_title=$_POST["prj_title"];
$author1=$_POST["author1"];
$author2=$_POST["author2"];
$author3=$_POST["author3"];
$pages=$_POST["pages"];
$abstract=$_POST["abstract"];
$keyword=$_POST["keyword"];

$jname=$_POST["jname"];
$vol=$_POST["vol"];
$issue=$_POST["issue"];
$year=$_POST["year"];

$imp=$_POST["imp"];
$ci=$_POST["ci"];


$url=$_POST["url"];
$others=$_POST["others"];
$fname=$_POST["fname"];
$journal=$_POST["journal"];

//echo "ctype=$ctype	rarea=$rarea   ppj=$ppj prj_name=$prj_name prj_title=$prj_title cname=$cname author1=$author1  jname=$jname  vol=$vol  issue=$issue  year=$year";
//echo "<br> author2=$author2 author3=$author3 pages=$pages abstract=$abstract keywords=$keyword url=$url  imp=$imp ci=$ci others=$others fname=$fname";


if ($ctype=='' ||  $prj_title=='' || $jname=='' || $author1=='')
{
echo " Insufficient Data";
echo "<br><a href=journal.html>Back to Profile for more data</a>";
}
else
{
//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into journal values('$ctype','$rarea','$author1','$author2','$author3','$jname','$prj_title','$abstract','$keyword','$imp','$ci','$url','$others','$vol','$issue','$pages','$year','$remarks')";
$query1="insert into publishes_in values('$xyz','$prj_title')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1&&$result1==1)
{
echo "Conference data successfully entered";
echo "<br><a href=journal.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=journal.html>Back to Profile for more data</a>";
}

}

?>
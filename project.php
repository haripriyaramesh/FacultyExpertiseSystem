<?php

session_start();
include("db.php");

$title=$_POST["title"];
$pi=$_POST["pi"];
$ci=$_POST["ci"];
$status=$_POST["status"];
$sdate=$_POST["sdate"];
$cdate=$_POST["cdate"];
$duration=$_POST["duration"];
$cost=$_POST["cost"];
$dept=$_POST["dept"];
$abstract=$_POST["abstract"];
$agency=$_POST["agency"];
$url=$_POST["url"];
$others=$_POST["others"];

//echo "title=$title pi=$pi ci=$ci status=$status sdate=$sdate cdate=$cdate duration=$duration cost=$cost dept=$dept abstract=$abstract agency=$agency url=$url others=$others";


if ($title=='' || $pi=='' || $status=='' || $sdate==''  )
{
echo " Insufficient Data";
echo "<br><a href=http://localhost/fes/project.html>Back to Profile for more data</a>";
}
else
{
$id=1;
$query="insert into project values($id,'$title','$pi','$status','$ci','$sdate','$cdate','$duration','$cost','$dept','$abstract','$agency','$url','$others')";

$result=mysql_query($query) or die(mysql_error());

if ($result==1)
{
echo "Project data successfully entered";
echo "<br><a href=http://localhost/fes/project.html>Back to Profile for more data</a>";
}
else
{
if($_SESSION['eid'] == 'IS010')
	echo "Error: Data not inserted";
	echo "<br><a href=http://localhost/fes/project.html>Back to Profile for more data</a>";
}

}

?>
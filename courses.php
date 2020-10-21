<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$title=$_POST["title"];
$ug_pg=$_POST["ug_pg"];
$sem=$_POST["sem"];
$year=$_POST["year"];
$num=$_POST["num"];
$pass=$_POST["pass"];
$dco1=$_POST["dco1"];
$dco2=$_POST["dco2"];
$dco3=$_POST["dco3"];
$dco4=$_POST["dco4"];
$dco5=$_POST["dco5"];
$dco6=$_POST["dco6"];
$co1=$_POST["co1"];
$co2=$_POST["co2"];
$co3=$_POST["co3"];
$co4=$_POST["co4"];
$co5=$_POST["co5"];
$co6=$_POST["co6"];
$feedback=$_POST["feedback"];
$branch=$_POST["branch"];


echo "title=$title   ug_pg=$ug_pg  sem=$sem   year=$year   num=$num pass=$pass";

if ($title=='' || $ug_pg=='')
{
echo " Insufficient Data";
echo "<br><a href=courses.html>Back to Profile for more data</a>";
}

else
{//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into courses values('$title','$ug_pg','$sem','$year','$num','$pass','$xyz','$dco1','$dco2','$dco3','$dco4','$dco5','$dco6','$feedback','$co1','$co2','$co3','$co4','$co5','$co6','$branch')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

if ($result==1)
{
echo "Course Taught data successfully entered";
echo "<br><a href=courses.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=courses.html>Back to Profile for more data</a>";
}
}

?>
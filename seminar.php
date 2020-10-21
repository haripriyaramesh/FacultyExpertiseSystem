<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$title=$_POST["title"];
$sem_wor=$_POST["sem_wor"];
$type=$_POST["type"];
$org_att=$_POST["org_att"];
$date=$_POST["date"];
$locn=$_POST["locn"];
$orgn=$_POST["orgn"];
$level=$_POST["level"];
$rarea=$_POST["rarea"];
$others=$_POST["others"];

echo "title=$title   sem_wor=$sem_wor  type=$type org_att=$org_att  date=$date locn=$locn orgn=$orgn";
echo "level=$level  rarea=$rarea others=$others";


if ($title=='' || $sem_wor=='' || $date=='' || $org_att==''  )
{
echo " Insufficient Data";
echo "<br><a href=seminar.html>Back to Profile for more data</a>";
}

else
{
$xyz= $_SESSION['eid'];
$query="insert into seminar_workshop values('$type','$title','$date','$locn','$orgn','$level','$rarea','$others','$sem_wor','$org_att')";
$query1="insert into conducts values('$title','$xyz')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1 && $result1==1)
{
echo " Seminar or Workshop data successfully entered";
echo "<br><a href=seminar.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=seminar.html>Back to Profile for more data</a>";
}
}


?>
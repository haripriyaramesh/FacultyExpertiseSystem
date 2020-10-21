<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$iname=$_POST["iname"];
$topic=$_POST["topic"];
$year=$_POST["year"];
$participation=$_POST["participation"];
$rarea=$_POST["rarea"];

echo "iname=$iname topic=$topic year=$year  participation=$participation rarea=$rarea \n";



if ($iname=='' || $topic=='' || $year=='')
{
echo " Insufficient Data";
echo "<br><a href=invited_talk.html>Back to Profile for more data</a>";
}

else
{//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into invited_talks values('$iname','$topic','$year','$participation','$rarea')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$query1="insert into delivers values('$xyz','$topic')";
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));

if ($result==1 && $result1==1)
{
echo "$iname Invited Talks data successfully entered\n";
echo "<br><a href=invited_talk.html>Back to Profile for more data\n</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=invited_talk.html>Back to Profile for more data</a>";
}
}

?>
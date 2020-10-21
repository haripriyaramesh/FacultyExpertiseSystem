<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");

$ctype=$_POST["ctype"];
$rarea=$_POST["rarea"];
$prj_title=$_POST["prj_title"];
$cname=$_POST["cname"];
$fdate=$_POST["fdate"];
$tdate=$_POST["tdate"];
$venue=$_POST["venue"];
$author1=$_POST["author1"];
$author2=$_POST["author2"];
$pages=$_POST["pages"];
$abstract=$_POST["abstract"];
$url=$_POST["url"];
$award = $_POST["award"];

//echo "ctype=$ctype	rarea=$rarea   ppj=$ppj prj_name=$prj_name prj_title=$prj_title cname=$cname org=$org fdate=$fdate tdate=$tdate venue=$venue author1=$author1";
//echo "<br> author2=$author2 author3=$author3 pages=$pages abstract=$abstract keywords=$keyword url=$url others=$others upaper=$fname";


if ($ctype=='' || $rarea==''  || $cname=='' || $fdate=='' || $tdate=='' || $venue=='' || $author1=='' || $pages=='' || $abstract==''  )
{
echo " Insufficient Data";
echo "<br><a href=conference.html>Back to Profile for more data</a>";
}
else
{
//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into conference values('$cname','$fdate','$tdate','$venue','$ctype','$pages','$abstract','$rarea','$prj_title' ,'$author1','$author2','$url','$award')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$query1="insert into presented_at values('$cname','$xyz')";
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1 && $result1==1)
{
echo "Conference data successfully entered";
echo "<br><a href=conference.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=conference.html>Back to Profile for more data</a>";
}

}

?>
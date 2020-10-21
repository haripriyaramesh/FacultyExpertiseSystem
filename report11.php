<?php
include "db.php";
$con=mysqli_connect("localhost", "root", "","fes");
$a=$_POST["SenId"];
$q="SELECT * FROM faculy WHERE eid='$a'";
$r=mysqli_query($con,$q);
$arr=mysqli_fetch_array($r,MYSQLI_BOTH);
echo $arr;
?>

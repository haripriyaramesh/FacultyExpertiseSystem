<?php

session_start();
include("db.php");
$con=mysqli_connect("localhost", "root", "","fes");
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$aname=$_POST["aname"];
//$eid=$_POST["eid"];
$url=$_POST["url"];
$year=$_POST["year"];
$agency=$_POST["agency"];


echo "aname=$aname agency=$agency year=$year url=$url";



if ($aname=='' || $agency=='' || $year=='')
{
echo "<br>Insufficient Data";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}

else
{//$id=1;
//$query="select eid from faculty  into award(award_name,award_eid,url,date,agency_name) values('$aname','$eid','$url','$year','$agency')";
$xyz= $_SESSION['eid'];
$query="insert into award values('$aname','$xyz','$url','$year','$agency','$fileName', '$fileSize', '$fileType', '$content')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
//include 'library/closedb.php';

}
if ($result==1)
{
echo "<br>$aname Award data successfully entered";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}
else
{
echo "<br>Error: Data not inserted";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}
}
else
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$content = '';


//include 'library/config.php';
//include 'library/opendb.php';

$aname=$_POST["aname"];
//$eid=$_POST["eid"];
$url=$_POST["url"];
$year=$_POST["year"];
$agency=$_POST["agency"];


echo "aname=$aname agency=$agency year=$year url=$url";



if ($aname=='' || $agency=='' || $year=='')
{
echo "<br>Insufficient Data";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}

else
{//$id=1;
//$query="select eid from faculty  into award(award_name,award_eid,url,date,agency_name) values('$aname','$eid','$url','$year','$agency')";
$xyz= $_SESSION['eid'];
$query="insert into award values('$aname','$xyz','$url','$year','$agency','$fileName', '$fileSize', '$fileType', '$content')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
//include 'library/closedb.php';

}
if ($result==1)
{
echo "<br>$aname Award data successfully entered";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}
else
{
echo "<br>Error: Data not inserted";
echo "<br><a href=award.html>Back to Profile for more data</a>";
}
}

?>
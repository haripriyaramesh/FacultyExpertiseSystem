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

$qf=$_POST["qf"];
$inst=$_POST["inst"];
$locn=$_POST["locn"];
$unv=$_POST["unv"];
$jyear=$_POST["jyear"];
$pyear=$_POST["pyear"];
$per=$_POST["per"];
//$degree_eid=$_POST["degree_eid"];


//echo "qf=$qf inst=$inst locn=$locn unv=$unv jmonth=$jmonth jyear=$jyear pyear=$pyear per=$per class=$class";

if ($qf=='' || $inst=='')
{
echo " Insufficient Data";
echo "<a href = profile.php>Back to Profile for more data</a>";

}

else
{
$xyz= $_SESSION['eid'];
$query="insert into degrees values('$qf','$inst','$locn','$unv','$jyear','$pyear','$per','$xyz','$fileName', '$fileSize', '$fileType', '$content')";

$result=mysqli_query($con,$query) or die(mysqli_error($con));
echo "<br> result=$result";

if ($result==1)
{
echo "$qf Qualification data successfully entered";
echo "<a href=profile.php>Back to Profile for more data</a>";
}

elseif ($result==0)
{
echo "Error: Data not inserted";
echo "<a href=profile.php>Back to Profile for more data</a>";

}
}
}
else
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$content = '';

$qf=$_POST["qf"];
$inst=$_POST["inst"];
$locn=$_POST["locn"];
$unv=$_POST["unv"];
$jyear=$_POST["jyear"];
$pyear=$_POST["pyear"];
$per=$_POST["per"];
//$degree_eid=$_POST["degree_eid"];


//echo "qf=$qf inst=$inst locn=$locn unv=$unv jmonth=$jmonth jyear=$jyear pyear=$pyear per=$per class=$class";

if ($qf=='' || $inst=='')
{
echo " Insufficient Data";
echo "<a href = profile.php>Back to Profile for more data</a>";

}

else
{
$xyz= $_SESSION['eid'];
$query="insert into degrees values('$qf','$inst','$locn','$unv','$jyear','$pyear','$per','$xyz','$fileName', '$fileSize', '$fileType', '$content')";

$result=mysqli_query($con,$query) or die(mysqli_error($con));
echo "<br> result=$result";

if ($result==1)
{
echo "$qf Qualification data successfully entered";
echo "<a href=profile.php>Back to Profile for more data</a>";
}

elseif ($result==0)
{
echo "Error: Data not inserted";
echo "<a href=profile.php>Back to Profile for more data</a>";

}
}
}


?>
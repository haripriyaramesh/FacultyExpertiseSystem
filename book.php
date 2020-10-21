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

$role=$_POST["role"];
$bc=$_POST["bc"];
$chapter=$_POST["chapter"];
$title=$_POST["title"];
$edition=$_POST["edition"];
$author2=$_POST["author2"];
$pub_name=$_POST["pub_name"];
$isbn=$_POST["isbn"];
$year=$_POST["year"];


//echo "role=$role bc=$bc chapter=$chapter title=$title edition=$edition  author1=$author1 author2=$author2 pub_name=$pub_name isbn=$isbn year=$year others=$others";


if ($role=='' || $bc=='' || $title=='' || $pub_name=='')
{
echo " Insufficient Data";
echo "<br><a href=localhost/book.html>Back to Profile for more data</a>";


}
else
{
//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into book values('$isbn','$role','$bc','$chapter','$title','$edition','$author2','$pub_name','$year','$fileName', '$fileSize', '$fileType', '$content')";
$query1="insert into has_published values('$xyz','$isbn')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1&& $result1==1)
{
echo "Book or Chapter data successfully entered";
echo "<br><a href=book.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=book.html>Back to Profile for more data</a>";
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

$role=$_POST["role"];
$bc=$_POST["bc"];
$chapter=$_POST["chapter"];
$title=$_POST["title"];
$edition=$_POST["edition"];
$author2=$_POST["author2"];
$pub_name=$_POST["pub_name"];
$isbn=$_POST["isbn"];
$year=$_POST["year"];


//echo "role=$role bc=$bc chapter=$chapter title=$title edition=$edition  author1=$author1 author2=$author2 pub_name=$pub_name isbn=$isbn year=$year others=$others";


if ($role=='' || $bc=='' || $title=='' || $pub_name=='')
{
echo " Insufficient Data";
echo "<br><a href=localhost/book.html>Back to Profile for more data</a>";


}
else
{
//$id=1;
$xyz= $_SESSION['eid'];
$query="insert into book values('$isbn','$role','$bc','$chapter','$title','$edition','$author2','$pub_name','$year','$fileName', '$fileSize', '$fileType', '$content')";
$query1="insert into has_published values('$xyz','$isbn')";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$result1=mysqli_query($con,$query1) or die(mysqli_error($con));
if ($result==1&& $result1==1)
{
echo "Book or Chapter data successfully entered";
echo "<br><a href=book.html>Back to Profile for more data</a>";
}
else
{
echo "Error: Data not inserted";
echo "<br><a href=book.html>Back to Profile for more data</a>";
}

}
}

?>
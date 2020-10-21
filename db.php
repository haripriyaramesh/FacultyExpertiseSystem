<?php

$localhost="localhost";

$con=mysqli_connect("localhost","root", "","fes");

//echo "hai";

if(!$con)
{
	echo("<BR>Connection failed");
	exit();
}
//echo ("<BR>connected to the database");


$db=mysqli_select_db($con,"fes");

/*if(!db)
{

	echo("<BR>Database not selected");
	exit();

}*/

//echo ("<BR>Database SELECTED");




?>
<?php
include 'db.php';
$con=mysqli_connect("localhost", "root", "","fes");
session_start();
unset ($_SESSION['auth']);
session_destroy();

header ("refresh:3;url=index.php" );
echo "you successfully logged out";
mysqli_close($con);
exit ();
?>
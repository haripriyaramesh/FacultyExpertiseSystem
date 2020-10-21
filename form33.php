<html>
<head>

</head>

<body>
</body>
</html>


</html>
<body background = "college1.jpg">
</html>
<?php

session_start();
$a=$_SESSION['auth'];
if($a!=1)
die("Error unauthorized acces");
else
{

include("db.php");

$user=$_COOKIE["username"];
//echo "cookie in form 33 ======$user";

echo "<table border=1 bgcolor=white>";

echo "
<tr><td align=center><a href = profile.php target=target3>Profile</a></td></tr>";

echo "<tr><td align=center><a href=award.html target=target3>
Awards/Recognition</a></td></tr>";

echo "<tr><td align=center><a href=book.html target=target3>
Books Published</a></td></tr>";

echo "<tr><td align=center><a href=conference.html target=target3>
Papers presented at Conferences</a></td></tr>";

echo "<tr><td align=center><a href=consultancy.html target=target3>
Consultancy</a></td></tr>";

echo "<tr><td align=center><a href=courses.html target=target3>
Subjects Taught</a></td></tr>";

echo "<tr><td align=center><a href=invited_talk.html target=target3>
Invited Talks</a></td></tr>";


echo "<tr><td align=center><a href=journal.html target=target3>
Papers Published in Journals</a></td></tr>";

echo "<tr><td align=center><a href=patent.html target=target3>
Patents</a></td></tr>";

echo "<tr><td align=center><a href=seminar.html target=target3>
Seminar/Workshop/FDP</a></td></tr>";


echo "<tr><td align=center><a href=chair.html target=target3>
Chaired Conference Sessions</a></td></tr>";

if($_SESSION['eid'] == 'IS008' || $_SESSION['eid'] == 'IS012' || $_SESSION['eid']=='IS010' )
{echo "<tr><td align=center><a href=s_page1.php target=target3>
Overall Report</a></td></tr>";}

if($_SESSION['eid'] == 'IS008' || $_SESSION['eid'] == 'IS012' || $_SESSION['eid']=='IS010' )
{echo "<tr><td align=center><a href=s_page2.php target=target3>
Publications Report</a></td></tr>";}

if($_SESSION['eid'] == 'IS008' || $_SESSION['eid'] == 'IS012' || $_SESSION['eid']=='IS010' )
{echo "<tr><td align=center><a href=s_page3.php target=target3>
Seminar/Workshop/FDP Report</a></td></tr></table>";}

$localhost="close.php";



}
?>


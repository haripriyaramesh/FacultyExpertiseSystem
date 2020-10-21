<?php
include "db.php";
$con=mysqli_connect("localhost", "root", "","fes");
$a=$_POST["SenId"];
$q="SELECT * FROM faculy WHERE eid='$a'";
$r=mysqli_query($con,$q);
$arr=mysqli_fetch_array($r);
echo $arr;
?>
<html>
<body> 
<form method="post"  action="report1.php">
<td><select name="degree_eid" id="SenId" required>
        <option value="">Select Faculty name</option>
		<?php
		$query2 = "SELECT name FROM faculty ORDER BY name";
		echo $_SESSION['eid'];
	
	    $result4 = mysqli_query($con, $query2);
		
		while($row4 = mysqli_fetch_array($result4)):;?>

            <option value="<?php echo $row4['name'];?>"><?php echo $row4['name'];?></option>

            <?php endwhile;?></td>

<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<br><br>
       
</form>
</body>
</html>
<?php
		session_start();
		include 'db.php';
		$con=mysqli_connect("localhost", "root", "","fes");?>
<html>
<head>
<style type="text/css">
h2
{
	color:white;
	text-align:center;
}
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>Student Room Details</h1>
  <center>
  <form method="POST" action="s_page.php">


<td>
		Name of Faculty:<select type="name" name="fname">
        <option value="">Select sender Name</option>
		<?php
		session_start();
		include 'db.php';
		$con=mysqli_connect("localhost", "root", "","fes");
		$query2 = "SELECT name FROM faculty";
	
	    $result4 = mysqli_query($con, $query2);
		echo $result4;
		
		while($row4 = mysqli_fetch_array($result4)):;?>

            <option value="<?php echo $row4['name'];?>"><?php echo $row4['name'];?></option>

            <?php endwhile;?> </select></td>


      
Options<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<br><br>
<input type="submit" name="submit" value="Show Result">
<br><br><br><br>
</form>
</center>
<?php

include 'db.php';
$con=mysqli_connect("localhost", "root", "","fes");
session_start();
if(isset($_POST['submit']) && !empty($_POST['fname']) && !empty($_POST['time']))
{
	$fname= $_POST['fname'];
	$time= $_POST['time'];
	$usn=$_SESSION['eid'];
	//if(mysql_num_rows($query_run)==0)
	//{
		//echo "<script type='text/javascript'> alert('No result exists. Select some other option.');</script>";
	//}
	//else
    $query="SELECT * FROM faculty WHERE '$fname'=name";
    $query_run=mysqli_query($con,$query);
	?>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Name</th>
	<th>eid</th>
	<th>Email</th>
	<th>dob</th>
	<th>Password</th>
	<th>designation</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
<?php
	while($query_row=mysqli_fetch_assoc($query_run))
	{
		?>
		<tr>
		<td><?php echo $query_row['name'];?></td>
		<td><?php echo $query_row['eid'];?></td>
		<td><?php echo $query_row['email'];?></td>
		<td><?php echo $query_row['dob'];?></td>
		<td><?php echo $query_row['password'];?></td>
		<td><?php echo $query_row['designation'];?></td>
		</tr>
	<?php } ?>
      </tbody>
    </table>
  </div>
	<?php } ?>
</section>
</body>
</html>
<!--
//else if(isset($_POST['submit']))
//{
//	echo "<script type='text/javascript'> alert('No date/time selected. Please enter all the details.');</script>";

-->
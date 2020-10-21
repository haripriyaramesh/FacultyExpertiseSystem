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
<body background = "college1.jpg">

<section>
  <!--for demo wrap-->
  <h1>Faculty Expertise Details</h1>
  <center>
  <form method="POST" action="s_page1.php">
Select the Name of Faculty:<select type="name" name="fname">
<br><br>
 <td><option value="">Faculty names</option>
		<?php
		$query2 = "SELECT name FROM faculty ORDER BY name";
		//echo $_SESSION['eid'];
	
	    $result4 = mysqli_query($con, $query2);
		
		while($row4 = mysqli_fetch_array($result4)):;?>

            <option value="<?php echo $row4['name'];?>"><?php echo $row4['name'];?></option>

            <?php endwhile;?></td></select>
Select your option:<select name="option">
<option>award</option>
<option>invited_talks</option>
<option>degrees</option>
<option>conference</option>
<option>consultancy</option>
</select>
<br><br>
<input type="submit" name="submit" value="Show Result">
<br><br><br><br>
</form>
<form method="post" action="signout.php">
<input type="submit" name="signout" value="Sign Out!">
</form>
</center>
<?php

include 'db.php';
$con=mysqli_connect("localhost", "root", "","fes");
session_start();
if(isset($_POST['submit']) && !empty($_POST['fname']) && !empty($_POST['option']))
{
	$fname= $_POST['fname'];
	$option = $_POST['option'];
	$_SESSION['fname']=$fname;
	$_SESSION['option']=$option;
	//$usn=$_SESSION['eid'];
	//if(mysql_num_rows($query_run)==0)
	//{
		//echo "<script type='text/javascript'> alert('No result exists. Select some other option.');</script>";
	//}
	//else
    $query="SELECT eid FROM faculty WHERE '$fname'=name";
    $query_run=mysqli_query($con,$query);
	$row = mysqli_fetch_array($query_run, MYSQLI_BOTH);
	echo $row[0];
	if($option=="award")
	{
	$query="SELECT * FROM award WHERE '$row[0]'=award_eid";
    
    $query_run=mysqli_query($con,$query);
	
?>	
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>AwardName</th>
	<th>eid</th>
	<th>url</th>
	<th>date</th>
	<th>agency_name</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody><?php
	while($query_row=mysqli_fetch_assoc($query_run))
	{
		?>
		<tr>
		<td><?php echo $query_row['award_name'];?></td>
		<td><?php echo $query_row['award_eid'];?></td>
		<td><?php echo $query_row['url'];?></td>
		<td><?php echo $query_row['date'];?></td>
		<td><?php echo $query_row['agency_name'];?></td>
		</tr>
	<?php } ?>
      </tbody>
    </table>
  </div>
<?php } 





else if($option=="conference")
	{
	$query="SELECT conf_name FROM presented_at WHERE '$row[0]'=conf_SSN";
    
    $query_run=mysqli_query($con,$query);
	$row1 = mysqli_fetch_array($query_run, MYSQLI_BOTH);
	$query="SELECT conf_name,venue,title,author,abstract FROM conference WHERE '$row1[0]'=conf_name";
	$query_run=mysqli_query($con,$query);
	
	
?>	
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>conf_name</th>
	
	<th>eid</th>
	<th>url</th>
	<th>date</th>
	<th>agency_name</th> 
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody><?php
	while($query_row=mysqli_fetch_assoc($query_run))
	{
		?>
		<tr>
		<td><?php echo $query_row['conf_name'];?></td>
		<td><?php echo $query_row['venue'];?></td>
		<td><?php echo $query_row['title'];?></td>
		<td><?php echo $query_row['author'];?></td>
		<td><?php echo $query_row['abstract'];?></td>
		</tr>
	<?php } ?>
      </tbody>
    </table>
  </div>
<?php } }?>
</section>
</body>
</html>
<!--
//else if(isset($_POST['submit']))
//{
//	echo "<script type='text/javascript'> alert('No date/time selected. Please enter all the details.');</script>";

-->
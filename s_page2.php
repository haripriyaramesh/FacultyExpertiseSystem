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
  text-align: center;
  font-weight: 500;
  font-size: 15px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 15px;
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
  font-size: 15px;
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
  <h1>Faculty paper presentation and publication Details</h1>
  <center>
  <h3><form method="POST" action="s_page2.php">
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Faculty name</th>
	<th>No. of papers published in journals</th>
	<th>No. of papers presented in conferences </th>
	
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
		<?php
		$query2 = "SELECT name FROM faculty ORDER BY name";
		//echo $_SESSION['eid'];
	
	    $result4 = mysqli_query($con, $query2);
		while($row4 = mysqli_fetch_array($result4)):;?>
		<?php 
		$query = "SELECT eid FROM faculty where '$row4[name]' = name";
		$result	= mysqli_query($con,$query);
		$row = mysqli_fetch_array($result,MYSQLI_BOTH);
		$eid = $row[0];
		//echo $eid;
		$query1 = "SELECT COUNT(journal_title) FROM publishes_in WHERE '$eid' =journal_SSN";
		$result1	= mysqli_query($con,$query1);
		$row1 = mysqli_fetch_array($result1,MYSQLI_BOTH);
		$query1 = "SELECT COUNT(conf_name) FROM presented_at WHERE '$eid' =conf_SSN";
		$result1	= mysqli_query($con,$query1);
		$row2 = mysqli_fetch_array($result1,MYSQLI_BOTH);?>
		<tr>
		<td><?php echo $row4['name'];?>
		<td><?php echo $row1[0];?>
		<td><?php echo $row2[0];?>
		</tr>
		 <?php endwhile;?></h3>
		
		</tbody>
    </table>
  </div>

</body>
</html>
		
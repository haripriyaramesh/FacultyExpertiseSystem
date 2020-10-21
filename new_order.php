<?php
	session_start();
	if(!$_SESSION['loggedIn'])
	{
		header('Location: login.php');
	}
	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "customs";
	
	// connect to mysql database
	
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
	// mysql select query
	$query = "SELECT port_id,name FROM `port`";
	
	// for method 1
	
	$result1 = mysqli_query($connect, $query);
	$result2 = mysqli_query($connect, $query);
	
	$query1 = "SELECT product_id,name FROM product ORDER BY product_id";
	
	$result3 = mysqli_query($connect, $query1);
	
	$query2 = "SELECT company_id,name FROM company ORDER BY company_id";
	
	$result4 = mysqli_query($connect, $query2);
	$result5 = mysqli_query($connect, $query2);
	
	$query4 = "SELECT cont_id FROM container ORDER BY cont_id";
	
	$result6 = mysqli_query($connect, $query4);
	$query5 = "SELECT vehicle_id FROM vehicle ORDER BY vehicle_id";
	
	$result7 = mysqli_query($connect, $query5);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/stylenew.css">
    <link rel="shortcut icon" href="Images/order.png" type="image/x-icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Order</title>
</head>

<body>
<nav id="top-bar">
  <div>
  	<img id="homei" src="Images/h.png" height="30" width="30" />
    <a class="home" href="home_after_login.php">Customs</a>
  </div>
</nav>
<div id="frm">
<form action="new_order_register.php" method="post">
<table>
	<tr align="left">
    	<th>
        	<label class="name1">Issue Date: </label>
        </th>
        <td>
        	<input type="date" id="date" name="date" placeholder="Date" required/><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Consigner ID: </label>
        </th>
        <td>
        	<!--<input type="text" placeholder="Sender ID" id="SenId" name="SenId" required/><span class="error">*</span>-->
            <select name="SenId" id="SenId" required>
        <option value="">Select sender ID</option>

            <?php while($row4 = mysqli_fetch_array($result4)):;?>

            <option value="<?php echo $row4['company_id'];?>"><?php echo $row4['company_id'];?> - <?php echo $row4['name'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Consignee ID: </label>
        </th>
        <td>
        	<!--<input type="text" id="RecId" name="RecId" placeholder="Receiver ID" required/><span class="error">*</span>-->
            <select name="RecId" id="RecId" required>
        <option value="">Select receiver ID</option>

            <?php while($row5 = mysqli_fetch_array($result5)):;?>

            <option value="<?php echo $row5['company_id'];?>"><?php echo $row5['company_id'];?> - <?php echo $row5['name'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Bill Of Lading ID: </label>
        </th>
        <td>
        	<input type="text" id="BOL" name="BOL" placeholder="Bill Of Lading" required/><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Vehicle ID: </label>
        </th>
        <td>
        	<!--<input type="text" id="VehId" name="VehId" placeholder="Vehicle ID" required/><span class="error">*</span>-->
            <select name="VehId" id="VehId" required>
        <option value="">Select vehicle ID</option>

            <?php while($row7 = mysqli_fetch_array($result7)):;?>

            <option value="<?php echo $row7['vehicle_id'];?>"><?php echo $row7['vehicle_id'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">	
    	<th>
        	<label class="name1">Source Port: </label>
        </th>
        <td>
        	<!--<input type="text" id="SPortId" name="SPortId" placeholder="Port ID" required/><span class="error">*</span>-->
            <select name="SPortId" id="SPortId" required>
        <option value="">Select port</option>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1['port_id'];?>"><?php echo $row1['port_id'];?> - <?php echo $row1['name'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Destination Port: </label>
        </th>
        <td>
        	<!--<input type="text" id="DPortId" name="DPortId" placeholder="Port ID" required/><span class="error">*</span>-->
            <select name="DPortId" id="DPortId" required>
        <option value="">Select port</option>

            <?php while($row2 = mysqli_fetch_array($result2)):;?>

            <option value="<?php echo $row2['port_id'];?>"><?php echo $row2['port_id'];?> - <?php echo $row2['name'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
</table>
<p><h2 class="name1">Enter the Product Details:</h2></p>
<table>
	<tr align="left">
    	<th>
        	<label class="name1">Product ID: </label>
        </th>
        <td>
        	<!--<input placeholder="Product ID" type="text" id="ProdId" name="ProdId" required/><span class="error">*</span>-->
            <select name="ProdId" id="ProdId" required>
        	<option value="">Select product</option>

            <?php while($row3 = mysqli_fetch_array($result3)):;?>

            <option value="<?php echo $row3['product_id'];?>"><?php echo $row3['product_id'];?> - <?php echo $row3['name'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
    <tr align="left">
    	<th>
        	<label class="name1">Container ID: </label>
        </th>
        <td>
        	<!--<input placeholder="Container ID" type="text" id="ContId" name="ContId" required/><span class="error">*</span>-->
            <select name="ContId" id="ContId" required>
        <option value="">Select container ID</option>

            <?php while($row6 = mysqli_fetch_array($result6)):;?>

            <option value="<?php echo $row6['cont_id'];?>"><?php echo $row6['cont_id'];?></option>

            <?php endwhile;?>

        </select><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Product Weight: </label>
        </th>
        <td>
        	<input type="number" step="0.01" min="0" placeholder="Weight" id="ProdWt" name="ProdWt" required/><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<th>
        	<label class="name1">Product Volume: </label>
        </th>
        <td>
        	<input type="number" step="0.01" min="0" id="ProdVol" placeholder="Volume" name="ProdVol" required/><span class="error">*</span>
        </td>
    </tr>
	<tr align="left">
    	<td align="right">
        <div id="dummy"></div>
        <br />
        	<input type="reset" id="reset" />
        </td>
        <td>
        <br />
        	<input type="submit" value="Submit" id="submit"/>
        </td>
    </tr>
</table>
</form>
</div>
</body>
</html>
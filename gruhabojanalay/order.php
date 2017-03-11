<?php
	include('includes/top.php');
	include('includes/connet.php');
	include('includes/session.php');
	include('includes/user_data.php');
	$con=m_connect('details');
?>
<!DOCTYPE html>
<html>
	<head>
			<link href="css/userStyle.css" rel="stylesheet" />
			<meta charset='UTF-8'>
			<script src="js/jquery-1.11.3.min.js"></script>
			<link rel="stylesheet" href="css/dropdown.css" />
			<style>
				table, th, td {
    					border: 1px solid green;
					border-radius:3px;
				}
				td{color:greenyellow;}
			</style>
	</head>		
<body>

	<?php
		if(!isset($_SESSION['username']))
		{
		database_user();
			if(!isset($_SESSION['username']))
			{show();}
		}
		if(isset($_SESSION['username']))
		{show2();
			
		}

	?>
	<div id="feedback">
		<a href="feedback.php">feedback</a>
	</div>
	<div id="contactusb">
	<div style="margin:0 auto; width:60%; color:white;">
	<?php
	if(isset($_SESSION['username']))
	{
		if(isset($_POST["Add"]))
		{
			++$_SESSION['orderno'];
			$query="SELECT * FROM Food where NAME='".$_POST['food']."'";
			$result=mysqli_query($con,$query);
			if(($row=mysqli_fetch_array($result,MYSQLI_ASSOC))!=NULL)
			{
				$_SESSION['Price'][$_SESSION["orderno"]]=$row['PRICE'];
			}		
			$_SESSION['Quantity'][$_SESSION["orderno"]]=$_POST['Quantity'];
			$_SESSION['order'][$_SESSION["orderno"]]=$_POST['food'];
			$_SESSION['SubTotal'][$_SESSION["orderno"]]=($_SESSION['Quantity'][$_SESSION["orderno"]])*($_SESSION['Price'][$_SESSION["orderno"]]);
		}
		echo'<fieldset>
			<legend style="color:white; font-weight:bold">Your Orders</legend>
			<table style="width:100%">
			 <tr>
			    <th>Name</th>
			    <th>Price</th>		
			    <th>Quantity</th>
			    <th>Sub Total</th>
			  </tr>';
			$_SESSION['Total']=0;
			for($i=1;$i<=$_SESSION['orderno'];$i++)
			{		$_SESSION['Total']=$_SESSION['Total']+$_SESSION['SubTotal'][$i];	
			echo '<tr><td>'.$_SESSION['order'][$i].'</td><td>'.$_SESSION['Price'][$i].'</td><td>'.$_SESSION['Quantity'][$i].'</td><td>'.$_SESSION['SubTotal'][$i].'</td></tr>';
			}
	echo'</table></br>Total:'.$_SESSION['Total'].'  <a href="getorder.php" style="text-decorations:none; color:yellow;background:blue;">Confirm</a></br></fieldset>
		</br>';
	echo'<fieldset>
		<legend style="color:white; font-weight:bold">Make Order</legend>
		<form method="post" action="order.php">
		</br>
		<label>Food item:</label><select name="food" size="1">';
			$query="SELECT * FROM Food";
			$result=mysqli_query($con,$query);
			while(($row=mysqli_fetch_array($result,MYSQLI_ASSOC))!=NULL)			
			{echo'<option value="'.$row["NAME"].'">'.$row["NAME"].' --Rs.'.$row["PRICE"].'</option>';}		
		echo'	</select>
		<br/>
		<label>Quantity:</lable>		
		<input type="text" value="1" name="Quantity" style="border-radius:7px;width:5%;"/>
		</br>
		<input type="submit" value="add" name="Add" id="butn">
	</form></fieldset>';
		
		}

/*Not signed in*/
		else
		{
			echo "Login first to order";
		}

	?>
	</div>
	</div>
	<div style="hight:10px; width:100%;">&nbsp;</div>

	<footer>
		<nav><a>Gruhabojanaly Copyright © </a></nav>
	</footer>
	<?php
		mysqli_close($con);
	?>
</body>
</html>

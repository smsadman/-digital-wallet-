<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> history  </title>
</head>
<body>
         <h1> Page  2  [ Tansaction History] </h1>
		 <br>
		 <h3> Digital Wallet </h3>
            <a href="home_page.php" ><span style="color: blue ;">  1. Home </span>: </a> <br>
			
			<a href="history.php"><span style="color: blue ;">     2. Tansaction History </span>: </a><br>
	</body>
	
	</html>
<?php
$_TransactionCatetgory ="";
$_to="";
$_amount="";
$Transferred_on="";



?>
<html>
<head>
<h1> Total Record : (4) <h1>
</head>
<body>

</body>
		
			
				
<table style="width: 80%" border="1">
<tr>
   <th>Transaction Catetgory</th>
	<th>TO</th>
	<th>Amount</th>
	<th>Transferred On</th>

	</tr>
		
	<tr>

	<td><?php echo $row['TransactionCatetgory']; ?></td>
	<td><?php echo $row['to']; ?></td>
	<td><?php echo $row['amount']; ?></td>
	<td><?php echo $row['Transferred On']; ?></td>
	<td>

</tr>


</table>
</body>
</html>

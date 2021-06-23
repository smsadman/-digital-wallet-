<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Home </title>
</head>
<body>
         <h1> Page  1 [Home] </h1>
		 <br>
		 <h3> Digital Wallet </h3>
            <a href="home_page.php" ><span style="color: blue ;">  1. Home </span>: </a> <br>
			
			<a href="history.php"><span style="color: blue ;">            2. Tansaction History </span>: </a><br>
	</body>
	
	</html>
	
	
	
	


<?php
   
	$to="";
	$err_to="";
	$amount="";
	$err_amount="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["to"])){
			$err_to="*mobile no can not empty";
		}
		elseif(strlen($_POST["to"]) < 11){
			$err_uname="mobile  Must be 11 Characters Long";
		}
		
		else{
			$uname=$_POST["to"];
		}
		
	   
		if(empty($_POST["amount"])){
			$err_amount="*amount can not emply ";
		}
		else{
			$amount=$_POST["pass"];
		}
	

   
	}
	
	
	
		
?>





<body>
 <div class="center-login"><h3> Fuud Transfer : </h3>
   <form action="" method="Post">
   
         <label for="value ">   Select Category :</label>
		              <select id="value">
			          <option value="bkash">Bkash</option>
			          <option value="send money">send_money </option>
					   <option value="mobile_recharge"> mobile_recharge</option>
			          <option value="cash out ">merchant_pay</option>
		               </select>
           <br><br>
         TO :<input type="Phone_number" name="to " pattern ="[0-9]{11}">
		  <span style="color: red;"><?php echo $err_to; ?></span><br><br>
		 
		 
		 Amount :<input type="number" name="pass " pattern ="[1>0]">
		 <span style="color: red;"><?php echo $err_amount; ?></span> <br>
		 
		 <input type="submit" name="submit" value="submit">
        
                
   </form>

</body>




</html>
		
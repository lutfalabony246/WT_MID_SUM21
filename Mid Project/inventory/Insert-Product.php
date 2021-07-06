<?php
$pid="";
$err_pid="";
$pname="";
$err_pname="";
$price="";
$err_price="";
$bquantity="";
$err_bquantity="";
$squantity="";
$err_squantity="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$catname="";
$err_catname="";
$buyquantitycategory="";
$err_buyquantitycategory="";
$sellquantitycategory="";
$err_sellquantitycategory="";
$hasError=false;
$bquantitycat = array("kg","gram","");		
$squantitycat = array("kg","gram","");
$categorycreate = array("Fruits","Frozen Items","Houshold");
        if (empty($_POST["productid"])) {
			$hasError=true;
			$err_pid=" product id required";
		}
		
		
		elseif (!is_numeric($_POST["productid"])) {
			$hasError = true;
			$err_pid = "Enter only number";
		}
		elseif (strlen($_POST["productid"]) >3) {
			$hasError = true;
			$err_pid = "Enter only 3 digit number or less";
		}
		elseif (strpos($_POST["productid"],".") ){
						$hasError = true;
						$err_pid = "You can not give (dot)";
		}

		
		else
		{
			$pid = $_POST["productid"];
		}
		if (empty($_POST["productname"])) {
			$hasError=true;
			$err_pname=" product name required";
		}

		elseif (strlen($_POST["productname"])>10) {
			$hasError = true;
			$err_pname = "Product name must be less than 10 character ";
		}
		
		elseif (strpos($_POST["productname"],".") ){
						$hasError = true;
						$err_pname = "You can not give (.)";
		}
		elseif (!ucwords($_POST["productname"])) {
			$hasError = true;
			$err_pname = "Starting should be in upper case";
		}
		else
		{
			$pname = htmlspecialchars($_POST["productname"]);
		}
		if (empty($_POST["price"])) {
			$hasError=true;
			$err_price=" product price required";
		}

		elseif (!is_numeric($_POST["price"])) {
			$hasError = true;
			$err_price = "Enter only digit";
		}
		else
		{
			$price = $_POST["price"];
		}
		if (empty($_POST["buyquantity"])) {
			$hasError=true;
			$err_bquantity=" quantity required";
		}
		elseif (!is_numeric($_POST["buyquantity"]) ) {
			$hasError = true;
			$err_bquantity = "Enter only digit";
		}
		

		else
		{
			$bquantity = $_POST["buyquantity"];
		}

		if(!isset($_POST["buyquantitycategory"])){
			$hasError = true;
			$err_buyquantitycategory= "quantity Category Required";
		}
		else
		{
			$buyquantitycategory =$_POST["buyquantitycategory"];
		}
		if (empty($_POST["sellquantity"])) {
			$hasError=true;
			$err_squantity=" quantity required";
		}
		elseif (!is_numeric($_POST["sellquantity"]) ) {
			$hasError = true;
			$err_squantity = "Enter only digit";
		}
		

		else
		{
			$squantity = $_POST["sellquantity"];
		}

		if(!isset($_POST["sellquantitycategory"])){
			$hasError = true;
			$err_sellquantitycategory= "quantity Category Required";
		}
		else
		{
			$sellquantitycategory =$_POST["buyquantitycategory"];
		}
		if(!isset($_POST["day"])){
			$hasError = true;
			$err_day= "day Required";
		}
		else{
			$day = $_POST["month"];
		}

		if(!isset($_POST["month"])){
			$hasError = true;
			$err_month= "month Required";
		}
		else{
			$month = $_POST["month"];
		}

		if(!isset($_POST["year"])){
			$hasError = true;
			$err_year= "Year Required";
		}
		else{
			$year = $_POST["year"];
		}
		if(!isset($_POST["category"])){
			$hasError = true;
			$err_catname= "Category Required";
		}
		else{
			$catname = $_POST["year"];
		}
// if($_SERVER["REQUEST_METHOD"] == "POST")
// 	{
// 		if(!$hasError)
// 		{
		
// 			echo $_POST["productid"]."<br>";
// 			echo $_POST["productname"]."<br>";
// 			echo $_POST["price"]."<br>";
// 			echo $_POST["buyquantity"]."<br>";
// 			echo $_POST["sellquantity"]."<br>";
// 			echo $_POST["buyquantitycategory"]."<br>";
// 			echo $_POST["sellquantitycategory"]."<br>";
// 			echo $_POST["day"]."<br>";
// 			echo $_POST["month"]."<br>";
// 			echo $_POST["year"]."<br>";
// 			echo $_POST["category"]."<br>";


// 		}

// 	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><h2>Product Info</h2></title>
	</head>
	<body>
		<img src="grocery(1).jpg" style="display: inline-block;" width="1350" height="200">
		<fieldset style="background: #C688F7; text-align: center;"><h1 style="color: red;">InsertProduct</h1>
			<form action="" method="post">
				<table style="margin-left: auto; margin-right: auto;">
					<tr>
						<td>Product Id*</td>
						
						<td><input name="productid" value="<?php echo $pid;?>" type="text"><br>
						<span><?php echo $err_pid;?></span></td>
					</tr>
					<hr>
					<tr>
						<td>Product Name*</td>
						<td><input name="productname" value="<?php echo $pname;?>" type="text"><br>
						<span><?php echo $err_pname;?></span></td>
					</tr>
					<hr>
					<tr>
						<td>Price($)*</td>
						<td><input name="price" value="<?php echo $price;?>" type="text"><br>
						<span><?php echo $err_price;?></span></td>
					</tr>
				<tr>
						<td> Buy Quantity*</td>
						<td><br><input name="buyquantity" value="<?php echo $bquantity;?>" type="text">
						
							<select name="buyquantitycategory">
							<option selected disabled>--Select--</option>
							<?php
								foreach($bquantitycat as $bqcat){
									if($bqcat == $buyquantitycategory)
										echo "<option selected>$bqcat</option>";
									else
										echo "<option>$bqcat</option>";
								}
							?>
						</select>
						<br><span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $err_bquantity;?></span> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <span><?php echo $err_buyquantitycategory;?></span>

						</td>
					
					</tr>
					<tr>
						<td> Sell Quantity*</td>
						<td><br><input name="sellquantity" value="<?php echo $bquantity;?>" type="text">
						
							<select name="sellquantitycategory">
							<option selected disabled>--Select--</option>
							<?php
								foreach($squantitycat as $sqcat){
									if($sqcat == $sellquantitycategory)
										echo "<option selected>$sqcat</option>";
									else
										echo "<option>$sqcat</option>";
								}
							?>
						</select>
						<br><span>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $err_squantity;?></span> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <span><?php echo $err_sellquantitycategory;?></span>

						</td>
					
					</tr>
						<td>Date(Date/Month/Year)*</td>
							<td style="padding-left: 90px ;">
								<br>

							<select name="day">
							<option selected disabled>--Day--</option>
							<?php
								for($i=1;$i<32;$i++){
								   if($day == $i)
								   echo "<option selected>$i</option>";
								   else
								   echo "<option>$i</option>";
								   }

							?>
						</select> 
						
						

							<select name="month">
							<option selected disabled>--Month--</option>
							<?php
								for($i=1;$i<32;$i++){
								  if($month == $i)
								    echo "<option selected>$i</option>";
								  else
								    echo "<option>$i</option>";
							          }

							?>
						</select> 
						
						

							<select name="year">
							<option selected disabled>--Year--</option>
							
								<?php
										for($i=2019;$i<2022;$i++){
											if($year == $i)
											echo "<option selected>$i</option>";
											else
											echo "<option>$i</option>";
									        }

									?>
							
						</select> 
						<br><span><?php echo $err_day;?></span> &nbsp; &nbsp; <span><?php echo $err_month;?></span> &nbsp; &nbsp; <span><?php echo $err_year;?></span>
						</td>
						
					</tr>
					
					<tr>
						<td>Category*</td>
							<td>
							

							<select name="category">
							<option selected disabled>--Select--</option>
							<?php
								foreach($categorycreate as $catcat){
									if($catcat == $catname)
										echo "<option selected>$catcat</option>";
									else
										echo "<option>$catcat</option>";
								}
							?>
						</select> <span><br><?php echo $err_catname;?></span>

						</td >
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" style="padding: 10px 30px; color: red; background:#CBB2AD  ;" value="INSERT"></td>
					</tr>
				</table>
			</form>
		</fieldset>
		
	</body>
</html>
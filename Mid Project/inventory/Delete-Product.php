<?php 
$pid="";
$err_pid="";
$catname="";
$err_catname="";
$hasError=false;
$categorycreate = array("Fruits","Frozen Items","Houshold");
if(!isset($_POST["category"])){
			$hasError = true;
			$err_catname= "Category Required";
		}
		else{
			$catname = $_POST["category"];
		}
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
// if($_SERVER["REQUEST_METHOD"] == "POST")
// 	{
// 		if(!$hasError)
// 		{
			
// 			echo $_POST["category"]."<br>";
// 			echo $_POST["productid"]."<br>";


// 		}

// 	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete</title>

</head>
<body>

<fieldset style="align:center;background: red;">
	<h2 style="text-align: center;">Which product you want to delete?</h3>
</fieldset>
<fieldset>
	<h3 style="text-align: center;">Please Enter the product Id</h5>
	<form action="" method="post">
		<table style="margin-left: auto; margin-right: auto;" >
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
						<td>Product Id*</td>
						
						<td><input name="productid" value="<?php echo $pid;?>" type="text"><br>
						<span><?php echo $err_pid;?></span></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" style="padding: 10px 30px; color: red; background:#CBB2AD  ;" value="DELETE"></td>
					</tr>
			
			
		</table>
	</form>
</fieldset>
<h1 style="text-align: center;"><i>Thank You!!!!</i></h1>
</body>
</html>
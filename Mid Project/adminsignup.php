<?php
$afrstname="";
$err_afrstname="";
$alstname="";
$err_alstname="";
$aid="";
$err_aid="";
$aemail="";
$err_aemail="";
$gender="";
$err_gender="";
$apassword="";
$err_apassword="";
$aconpassword="";
$err_aconpassword="";
$aphonecode="";
$err_aphonecode="";
$aphonenumber="";
$err_aphonenumber="";
$hasError=false;
if (empty($_POST["FirstName"])) {
			$hasError=true;
			$err_afrstname="  required";
		}
		elseif (is_numeric($_POST["FirstName"])) {
			$hasError = true;
			$err_afrstname = "You can not enter any number";
		}
		elseif (strlen($_POST["FirstName"]) >10) {
			$hasError = true;
			$err_afrstname = "You can not accessed more than 10 character";
		}
		elseif (strpos($_POST["FirstName"]," ") ){
						$hasError = true;
						$err_afrstname = "You can not give any space";
		}
		else
		{
			$alstname = htmlspecialchars($_POST["FirstName"]);
		}
		if (empty($_POST["LastName"])) {
			$hasError=true;
			$err_alstname="  required";
		}
		elseif (is_numeric($_POST["LastName"])) {
			$hasError = true;
			$err_alstname = "You can not enter any number";
		}
		
		elseif (strlen($_POST["LastName"]) >10) {
			$hasError = true;
			$err_alstname = "You can not accessed more than 10 character";
		}
		elseif (strpos($_POST["LastName"]," ") ){
						$hasError = true;
						$err_afrstname = "You can not give any space";
		}
		else
		{
			$alstname = htmlspecialchars($_POST["FirstName"]);
		}
		if (empty($_POST["AdminId"])) {
			$hasError=true;
			$err_aid=" Id required";
		}
		elseif ($_POST["AdminId"] != "Labony123" ) {
			$hasError=true;
			$err_aid=" Wrong Id!Please enter correct Id for signin";
		}
		else
		{
			$aid = htmlspecialchars($_POST["AdminId"]);
		}
		if (empty($_POST["EmailAddress"])) {
			$hasError=true;
			$err_aemail=" Email Address required";
		}
		elseif (!strpos($_POST["EmailAddress"],"@") ){
			$hasError = true;
			$err_aemail = "Invalid Email.@ is required.";
		}
		elseif (!strpos($_POST["EmailAddress"],".") ){
			$hasError = true;
			$err_aemail = "Invalid Email.(.)is required.";
		}
		else
		{
			$aemail = htmlspecialchars($_POST["EmailAddress"]);
		}
		if(!isset($_POST["Gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["Gender"];
		}
		if(empty($_POST["Password"])){
			$hasError=true;
			$err_apassword="Password Required";
		}
		elseif (strlen($_POST["Password"]) < 8){
			$hasError = true;
			$err_apassword = "Password must be greater than 8 characters";
		}
		elseif (!strpos($_POST["Password"],"#") && !strpos($_POST["Password"],"?") ){
			$hasError = true;
			$err_apassword = "Password should have atleast 1 special character(#,?) ";
		}
		else if(ctype_upper($_POST["Password"]) || ctype_lower($_POST["Password"]) ){
			$hasError = true;
			$err_apassword="Password should combination of uppercase and lowercase alphabet";
				}
		else{
			$apassword=htmlspecialchars($_POST["Password"]);
		}
		if(empty($_POST["ConPassword"])){
			$hasError=true;
			$err_aconpassword="Confirm Password Required";
		}
	     elseif (strlen($_POST["ConPassword"]) < 8){
	      $hasError = true;
	      $err_aconpassword = "Confirm Password must be greater than 8 characters";
	       }
		else
		{
			$aconpassword= htmlspecialchars($_POST["ConPassword"]);
		}
		if(empty($_POST["PhoneCode"])){
			$hasError=true;
			$err_aphonecode=" Phone Code Required";
		}
		elseif (!is_numeric($_POST["PhoneCode"])){
			$hasError=true;
			$err_aphonecode="Invalid phone number.Enter correct phone number!";
		}
		else
		{
			$aphonecode = htmlspecialchars($_POST["PhoneCode"]);
		}

		if(empty($_POST["PhoneNum"])){
			$hasError=true;
			$err_aphonenumber=" Number Required";
		}
		elseif (!is_numeric($_POST["PhoneNum"])){
			$hasError=true;
			$err_aphonenumber="Invalid phone number.Enter correct phone number!";
		}
		else
		{
			$aphonenumber = htmlspecialchars($_POST["PhoneNum"]);
		}

// 	if($_SERVER["REQUEST_METHOD"] == "POST"){
// 	   if(!$hasError)
// 	{
// 		echo $_POST["FirstName"]."<br>";
// 		echo $_POST["LastName"]."<br>";
// 		echo $_POST["AdminId"]."<br>";
// 		echo $_POST["EmailAddress"]."<br>";
// 		echo $_POST["Gender"]."<br>";
// 		echo $_POST["Password"]."<br>";
// 		echo $_POST["ConPassword"]."<br>";
// 		echo $_POST["PhoneCode"]."<br>";
// 		echo $_POST["PhoneNum"]."<br>";


// 	}
// }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<fieldset >
			<form action="" method="post">
				<table style="margin: auto; padding: auto;">
				<tr><h1 style="text-align: center;">ADMIN SIGNUP</h1></tr>
				<hr><hr>
				<tr>
					<td>
						First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="FirstName" value="<?php echo $afrstname ?>"><br>
						<span style="color: red;"><?php echo $err_afrstname;?></span></td>
						<td >Last Name:<input type="text" name="LastName" value="<?php echo $alstname ?>"><br>
						<span style="color: red;"><?php echo $err_alstname;?></span></td>
					
				</tr>
				<tr>
					<td>
						Admin Id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="AdminId" value="<?php echo $aid ?>"><br>
						<span style="color: red;"><?php echo $err_aid;?></span></td>
					
				</tr>
				<tr>
					<td>
						Email Address:<input type="" name="EmailAddress" value="<?php echo $aemail ?>"><br>
						<span style="color: red;"><?php echo $err_aemail;?></span></td>
					
				</tr>
				<tr>
					
					<td>Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="Gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="Gender"> Female <br>
					<span style="color: red;"><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="Password"><br>
						<span style="color: red;"><?php echo $err_apassword;?></span></td>
				</tr>
				<tr>
					<td>ConfirmPassword:<input type="password" name="ConPassword"><br>
						<span style="color: red;"><?php echo $err_apassword;?></span></td>
				</tr>
				<tr>
						
						<td>
							Phone Number:<input type="text" placeholder="code" name="PhoneCode" value="<?php echo $aphonecode;?>">  <input  type="text" placeholder="Number" name="PhoneNum" value="<?php echo $aphonenumber;?>">
							<br><span style="color: red;"><?php echo $err_aphonecode."&nbsp;&nbsp;"; echo $err_aphonenumber;?></span>
						</td>
					</tr>
				<tr>
						
						<td ><input type="submit" name="" style="padding: 10px 30px;  " value="SIGN UP"></td>
					</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>
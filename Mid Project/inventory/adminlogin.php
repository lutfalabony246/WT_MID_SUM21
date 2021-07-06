<?php 
$pusername="";
$err_pusername="";
$password="";
$err_password="";
$hasError=false;
if(empty($_POST["uname"])){
			$hasError=true;
			$err_pusername="User Name Required";
		}
		
		elseif ($_POST["uname"]!= "labony") {
			$hasError=true;
			$err_pusername="user is incorrect.Valid user name required";
		}
		else
		{
			$pusername = $_POST["uname"];
		}
		if(empty($_POST["password"])){
			$hasError=true;
			$err_password="Password Required";
		}
		elseif ($_POST["password"]!="12345678") {
			$hasError=true;
			$err_password="Correct Required";
		}
		else
		{
			$password = $_POST["password"];
		}
// if($_SERVER["REQUEST_METHOD"] == "POST"){
// 	if(!$hasError)
// 	{
// 		echo $_POST["uname"]."<br>";
// 		echo $_POST["password"]."<br>";
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
	<fieldset style="text-align: center;">WELCOME TO ADMIN PANEL<span><img src="adminpic.jpg" width="20" height="20"></span></fieldset>
<fieldset>
	<form action="" method="post">
		<table style="margin-left: auto; margin-right: auto;">
			<tr>
					<td align="right">UserName</td>
					<td>:<input name="uname" value="<?php echo $pusername;?>" type="text"><br>
					<span><?php echo $err_pusername;?></span></td>
				</tr>
				<tr>
						<td align="right">Password</td>
						<td>:<input name="password" value="<?php echo $password;?>" type="password" >
							<br><span><?php echo $err_password;?></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" style="padding: 10px 30px; color: red; background:#CBB2AD  ;" value="DELETE"></td>
					</tr>

		</table>
	</form>
	<h4 style="text-align: center;">Don't have any account? <a href="adminsignup.php">SignUp</a></h4>
</fieldset>
</body>
</html>
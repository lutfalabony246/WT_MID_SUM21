<?php
	
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $email="";
	$err_email="";
	$hasError = false;


	if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //UserName
		if(empty($_POST["username"])){
			$err_username=" *Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters";
			$hasError = true;
		}
		else{
			$username=$_POST["username"];
		}
		//Email
		if(empty($_POST["email"]))
		{
			$err_email = "*Email required";
			$hasError=true;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				if($str[$i] == ".")
					{
						$flag = true;break;
					}
			}
			if($flag == true)
				{
					$email = htmlspecialchars($_POST["email"]);
				}
			else{
				$err_email = "*Invalid email";
				$hasError=true;
			}
		}
        //Password
		if(empty($_POST["password"])){
		$err_password=" *Password required";
		$hasError = true;
		}
		elseif(strlen($_POST["password"]) < 8){
		$err_password=" *Password must be 8 characters long";
		$hasError = true;
		}
		else{
		$password=$_POST["password"];
		}
        
        if(!$hasError){
			echo $_POST["username"]."<br>";
            echo $_POST["email"]."<br>";
			echo $_POST["password"]."<br>";
			}
		
	}
?>


<html>
<head>
    <title>Inventory || Log In</title>
    <style>
        
    </style>
</head>
<body style="background:#7900ff5c;">
    <div>
           <div style="display:inline-block;">
            <a href="index.php"><h2 style="margin: 0;">Inventory Management System</h2></a>
           </div>
            <div style="float:right;">
                <a href="index.php"><button>Home Page</button></a>
                <a  href="Admin/login.php" ><button>Admin</button></a>
                <a href="signup.php"><button>Sign Up</button></a>
                <!-- <a href="login.php"><button>Log In</button></a> -->
            </div>
    </div> <div style="display:inline-block;"></div>
	<div style="border:2px solid red; display:; text-align:center; text-content:center; height:590px;">
    <form action="" method="post">
				<h1>Log-In</h1>
				<table align="center">
					<tr>
                        <td align="right">Username:</td>
                        <td><input name="username" value="<?php echo $username;?>" type="text">
                        <span><?php echo $err_username;?></span></td>
                    </tr>
                    <tr>
						<td align="right">Email:</td>
						<td><input name="email" type="email"  value="<?php echo $email;?>">
                        <span><?php echo $err_email;?></span></td></td>
					</tr>
                    <tr>
                        <td align="right">Password:</td>
                        <td><input name="password" value="<?php echo $password;?>" type="password">
                        <span><?php echo $err_password;?></span></td>
                    </tr>

					<tr>
						<a href="dashboard.php"><td colspan="2" align="center"><input type="submit" name="register" value="Log-In"></td></a>
					</tr> 
                    <tr>
                    <td colspan="2"><p style="text-align:center;">Don't have an account?<a href="signup.php">Sign up</a></p> </td>

                    </tr>
				</table>
    
		</form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Product Table</title>
		<style type="text/css">
			.form1{
				float: right;
			}
			.td1
			{
				border: 2px solid blue;
			}
		</style>
	</head>
	<body>
		<fieldset style="background: white;">
			<span><b style="color: blue;"><a style="text-decoration: none;" 
				href="">&nbsp;&nbsp;&nbsp;&nbsp;Admin</a><a href="#" style="text-decoration: none;" >&nbsp;&nbsp;&nbsp;&nbsp;User</a><a href="#" style="text-decoration: none;" >&nbsp;&nbsp;&nbsp;&nbsp;Supplier</a></b></span>
			<form class="form1">
				<a href=""><input  type="button" name="Submit" value="Log Out"></a>
				<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Log in as <a href="#"><b>Lutfa Noor Labony</b></a></span>
			</form>
			<table  cellpadding="30px" cellspacing="60px">
				<tr>
					<td class="td1"><i><h3>Total Product</h3></i>
						<b style="color: blue; text-align: right;">800</b>
					</td>&nbsp;&nbsp;
					<td class="td1"><i><h3>Total Bought</h3></i>
						<b style="color: blue;">1000</b>
					</td>
					<td class="td1"><i><h3>Total Sold</h3></i>
						<b style="color: blue;">300</b>
					</td>
					<td class="td1"><i><h3>Available</h3></i>
						<b style="color: blue;">500</b>
					</td>
				</tr>
			</table>
			
						<table border="1" cellspacing="0" cellpadding="20" style="margin-left: 55px;">
							
							<tr>
								<th style="background: #03dbfc;">Category Name</th>
									<th style="background: #03dbfc;">Product Id</th>
								<th style="background: #03dbfc;">Product Name</th>
								<th style="background: #03dbfc;">Bought</th>
								<th style="background: #03dbfc;">Sold</th>
								<th style="background: #03dbfc;">Stock</th>
								<th style="background: #03dbfc;">Action</th>

								
								
							</tr>
							<tr>
								<td rowspan="3">
									Fruits
								</td>
								<td>101</td>
								<td>
									Apples
								</td>
								<td>30kg</td>
								<td>15kg</td>
								<td>15kg</td>
								<td rowspan="3" colspan="3">
									<form  >
										<a href="Insert-Product.php"><input type="button" name="" value="Insert"></a>
										<a href="Delete-Product.php"><input type="button" name="" value="Delete"></a>
									<a href="updateproduct.php"><input type="button" name="" value="Update"></a>

										</form>
								</td>
							</tr>
							<tr>
								<td>102</td>
								<td>
									Bananas
								</td>
								<td>500</td>
								<td>250</td>
								<td>250</td>
								
								
							</tr>
							<tr>
								<td>103</td>
								<td>
									Pinaples
								</td>
								<td>300</td>
								<td>150</td>
								<td>150</td>
							</tr>
							<tr>
								<td rowspan="3">Frozen Items</td>
								<td>201</td>

								<td>
									Vegetables
								</td>

								<td>20kg</td>
								<td>15kg</td>
								<td>5kg</td>
								<td rowspan="3" colspan="3">
									<form  >
										<a href="Insert-Product.php"><input type="button" name="" value="Insert"></a>
										<a href="Delete-Product.php"><input type="button" name="" value="Delete"></a>
										<a href="updateproduct.php"><input type="button" name="" value="Update"></a>

										</form>
								</td>
							</tr>
							<tr>
								<td>202</td>
								<td>
									Ice Cream
								</td>
								<td>250</td>
								<td>150</td>
								<td>100</td>
							</tr>
							<tr>
								<td>203</td>
								<td>
									Waffles
								</td>
								<td>15kg</td>
								<td>7kg</td>
								<td>6kg</td>
							</tr>
							<tr>
								<td rowspan="4">
									Household
								</td>
								<td>301</td>
								<td>
									Garbage Bags
								</td>
								<td>1000</td>
								<td>300</td>
								<td>700</td>
								<td rowspan="4" colspan="3">
									<form  >
										<a href="Insert-Product.php"><input type="button" name="" value="Insert"></a>
										<a href="Delete-Product.php"><input type="button" name="" value="Delete"></a>
										<a href="updateproduct.php"><input type="button" name="" value="Update"></a>

										</form>
								</td>
							</tr>
							<tr>
								<td>302</td>
								<td>Hand Soap</td>
								<td>50</td>
								<td>15</td>
								<td>35</td>
							</tr>
							<tr>
								<td>303</td>
								<td>Cleaner</td>
								<td>15</td>
								<td>5</td>
								<td>10</td>
							</tr>
							<tr>
								<td>304</td>
								<td>Light Bulbs</td>
								<td>100</td>
								<td>50</td>
								<td>50</td>
							</tr>
						</table>
						
			</fieldset>
		</body>
	</html>
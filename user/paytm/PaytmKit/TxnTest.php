<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include ("../../functions.php");
	include ("../../includes.php");
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
<center>
	<form method="post" action="pgRedirect.php">
		<table border="1" class="table">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
				<tr hidden>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['cid']; ?>"></td>
				</tr>
				<tr hidden>
					<td>2</td>
					<td><label>MENUID ::*</label></td>
					<td><input id="MENU_ID" tabindex="2" maxlength="12" size="12" name="MENU_ID" autocomplete="off" value="<?php 
						if ($_SERVER['HTTP_REFERER'] == "http://localhost/KHAANA/KHAANA/user/upackage.php"){
							$menuid = 0;
						}
						else {
							# code...
							$menuid = $_POST['dmenuEdit'];
							echo $menuid;
						}
						
					?>" readonly></td>
				</tr>
				<tr hidden>
					<td>3</td>
					<td><label>PackageID ::*</label></td>
					<td><input id="PACK_ID" tabindex="2" maxlength="12" size="12" name="PACK_ID" autocomplete="off" value="<?php 
						if ($_SERVER['HTTP_REFERER'] == "http://localhost/KHAANA/KHAANA/user/umenu.php" ){
							$packid = 0;
						}
						else {
							# code...
							$packid = $_POST['dmenuEdit'];
							echo $packid;
						}
						
					?>" readonly></td>
				</tr>
				
				<tr hidden>
					<td>3</td>
					<td><label>COOKID ::*</label></td>
					<td><input id="COOK_ID" tabindex="2" maxlength="12" size="12" name="COOK_ID" autocomplete="off" value="<?php 
						if ($_SERVER['HTTP_REFERER'] == "http://localhost/KHAANA/KHAANA/user/upackage.php") {
							# http://localhost/KHAANA/KHAANA/user/upackage.php
							if (isset($_POST['dmenuEdit'])) {
								# code...
								$mid = $_POST['dmenuEdit'];
							global $con;
							$qry = "select cook_id from package where package_id = $mid";
							$res = mysqli_query($con,$qry);
							if ($res) {
								# code...
								while ($row = mysqli_fetch_array($res)) {
									# code...
									$cookid = $row['cook_id'];
								}
								echo $cookid;
							}
							else {
								echo "Something is wrong";
							}
							}

						}
						elseif ($_SERVER['HTTP_REFERER'] == "http://localhost/KHAANA/KHAANA/user/umenu.php" ) {
							# code...
							if (isset($_POST['dmenuEdit'])) {
								# code...
								$mid = $_POST['dmenuEdit'];
							global $con;
							$qry = "select cook_id from menu where m_id = $mid";
							$res = mysqli_query($con,$qry);
							if ($res) {
								# code...
								while ($row = mysqli_fetch_array($res)) {
									# code...
									$cookid = $row['cook_id'];
								}
								echo $cookid;
							}
							else {
								echo "Something is wrong";
							}
							}
						}
						
						
						
						
						
					?>" readonly></td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php $price = $_POST['dpriceEdit']; echo $price; ?>" readonly>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" class="btn btn-success" type="submit" name="done" onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
	</center>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php


?>
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
</head>
<body>
	<h1>Merchant Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pgRedirect.php">
		<table border="1">
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
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['cid']; ?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>MENUID ::*</label></td>
					<td><input id="MENU_ID" tabindex="2" maxlength="12" size="12" name="MENU_ID" autocomplete="off" value="<?php 
						$menuid = $_POST['dmenuEdit'];
						echo $menuid;
					?>"></td>
				</tr>
				
				<tr>
					<td>3</td>
					<td><label>COOKID ::*</label></td>
					<td><input id="COOK_ID" tabindex="2" maxlength="12" size="12" name="COOK_ID" autocomplete="off" value="<?php 
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
					?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php $price = $_POST['dpriceEdit']; echo $price; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input value="CheckOut" type="submit" name="done" onclick=""></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html>
<?php


?>
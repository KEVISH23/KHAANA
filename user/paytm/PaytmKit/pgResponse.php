<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
include ("../../includes.php");
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	#echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		#echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
		global $con;
		$orderid = $_POST['ORDERID'];
		$amount = $_POST['TXNAMOUNT'];
		$status = $_POST['STATUS'];
		$tdate = $_POST['TXNDATE'];
		$tid = $_POST['TXNID'];
		$sql = "INSERT INTO payment(payorder_id,amount,status,txnid,txndate) values('$orderid',$amount,'$status','$tid','$tdate')";
		$res = mysqli_query($con,$sql);
		if ($res) {
			# code...
			echo "<script>window.open('../../umenu.php','_self')</script>";	
		}
		else {
			#echo "<script>window.open('../../umenu.php','_self')</script>";
		}
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		$qry = "delete from order_master where payorder_id='$orderid'";
		$r = mysqli_query($con,$qry);
	}

	#if (isset($_POST) && count($_POST)>0 )
	#{ 
	#	foreach($_POST as $paramName => $paramValue) {
	#			echo "<br/>" . $paramName . " = " . $paramValue;
	#	}
	#}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
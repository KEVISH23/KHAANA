<?php
include("includes/includes.php");

function cooksignin(){
    global $con;
	$cpass = $_POST['c_pass'];
	$ccpass = $_POST['c_cpass'];
	$cimage = $_FILES['c_img']['name'];
	$cimage_tmp = $_FILES['c_img']['tmp_name'];
	$qry = "INSERT INTO cook (cook_name,cook_address,cook_email,cook_password,cook_gender,cook_phn,cook_photo,cook_expertise,cook_joindate) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
	if ($cpass != $ccpass) {
		echo "<script>alert('Password Must Be Same!!')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		
		move_uploaded_file($cimage_tmp,"cookimages/$cimage");

		$res = mysqli_prepare($con,$qry);
		if($res){
		
		mysqli_stmt_bind_param($res,"sssssisss", $cname, $cadd, $cemail, $hpass,$cgen,$cphone,$cimage,$speciality,$date);
		date_default_timezone_set('Asia/Kolkata'); 
        $date = date('Y-m-d H:i:s', time());
		$cname = $_POST['c_name'];
		$cemail = $_POST['c_email'];
		$cphone = $_POST['c_phone'];
		$cgen = $_POST['c_gen'];
		$cadd = $_POST['c_add'];
		$hpass = password_hash($cpass,PASSWORD_DEFAULT);
		$ccpass = $_POST['c_cpass'];
		$speciality = $_POST['c_speciality'];
		$cimage = $_FILES['c_img']['name'];
		$cimage_tmp = $_FILES['c_img']['tmp_name'];
		mysqli_stmt_execute($res);
		}
		else {
			echo "Something is wrong";
		}

}
};  
?>
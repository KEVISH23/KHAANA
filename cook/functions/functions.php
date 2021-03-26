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
		if(mysqli_stmt_execute($res)){
			echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
			<strong>Welcome Chef!</strong> You are signed in..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
		}

		}
		else {
			echo "Something is wrong";
		}

}
}; 
function cooklogin(){
	global $con;
	$email = $_POST['s_email'];
	$pass = $_POST['s_pass'];
	
	$qry = "Select * from cook where cook_email = ?";
	$res = mysqli_prepare($con,$qry);
	if ($res) {
		mysqli_stmt_bind_param($res,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$expertise,$joindate);
		if(mysqli_stmt_execute($res)){
			mysqli_stmt_store_result($res);
				$rowcount = mysqli_stmt_num_rows($res);
				if($rowcount>0){
					$bol = password_verify($pass,$dbpass);
					if($bol){
						
						echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome Chef!</strong> You are Logged in succesfully..
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
					}
					else {
		
						echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
							<strong>Oops!</strong> Email or password must be wrong..
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
					}
				}
				else {
					echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome Chef!</strong> Create an account..
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
				}
			}
			
		
		else {
			echo "not executed";
		}
		
		
	}
	else {
		echo "ERROR";
	}
	
};
?>
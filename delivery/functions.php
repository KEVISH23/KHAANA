<?php
include("includes.php");
function deliverysignin(){
    global $con;
	$cpass = $_POST['c_pass'];
	$ccpass = $_POST['c_cpass'];
	$cimage = $_FILES['c_img']['name'];
	$cimage_tmp = $_FILES['c_img']['tmp_name'];
	$qry = "INSERT INTO delivery (delivery_name,delivery_address,delivery_email,delivery_password,delivery_gender,delivery_phn,delivery_photo,delivery_vehicle,delivery_vnumber,delivery_joindate,delivery_jointime) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?)";
	if ($cpass != $ccpass) {
		echo "<script>alert('Password Must Be Same!!')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		
		move_uploaded_file($cimage_tmp,"deliveryimages/$cimage");

		$res = mysqli_prepare($con,$qry);
		if($res){
		
		mysqli_stmt_bind_param($res,"sssssisssss", $cname, $cadd, $cemail, $hpass,$cgen,$cphone,$cimage,$vehicle,$vnumber,$date,$time);
		date_default_timezone_set('Asia/Kolkata');
		$time = date("H:i:sA"); 
        $date = date('Y-m-d H:i:s');
		$cname = $_POST['c_name'];
		$cemail = $_POST['c_email'];
		$cphone = $_POST['c_phone'];
		$cgen = $_POST['c_gen'];
		$cadd = $_POST['c_add'];
		$hpass = password_hash($cpass,PASSWORD_DEFAULT);
		$ccpass = $_POST['c_cpass'];
		$vehicle = $_POST['vehicle'];
        $vnumber = $_POST['vnum'];
		$cimage = $_FILES['c_img']['name'];
		$cimage_tmp = $_FILES['c_img']['tmp_name'];
		if(mysqli_stmt_execute($res)){
			echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
			<strong>Welcome!</strong> You are Registered as a delivery man/woman...
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
function deliverylogin(){
    global $con;
	$email = $_POST['s_email'];
	$pass = $_POST['s_pass'];
	$qry = "Select * from delivery where delivery_email = ?";
	$res = mysqli_prepare($con,$qry);
	if ($res) {
		mysqli_stmt_bind_param($res,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$vehicle,$vnumber,$joindate,$jointime);
		if(mysqli_stmt_execute($res)){
			
			mysqli_stmt_store_result($res);
				$rowcount = mysqli_stmt_num_rows($res);
				if($rowcount>0){
					while(mysqli_stmt_fetch($res)){
						if(password_verify($pass,$dbpass)){
                            $_SESSION['did'] = $id;
							$_SESSION['dname'] = $dbname;
							$_SESSION['demail'] = $dbemail;
							#echo $_SESSION['uname'];
							echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome!</strong> You are Logged in succesfully..
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
							echo "<script>window.open('lindex.php','_self')</script>";
							
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
					
				}
				else {
					echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome!</strong> Create an account..
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
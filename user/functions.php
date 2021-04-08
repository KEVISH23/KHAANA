<?php
include("includes.php");
#session_start();
function usersignin(){
    global $con;
	$cpass = $_POST['u_pass'];
	$ccpass = $_POST['u_cpass'];
	$cimage = $_FILES['u_img']['name'];
	$cimage_tmp = $_FILES['u_img']['tmp_name'];
	$qry = "INSERT INTO user (user_namee,user_address,user_email,user_password,user_gender,user_phn,user_photo,user_joindate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
	if ($cpass != $ccpass) {
		echo "<script>alert('Password Must Be Same!!')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		
		move_uploaded_file($cimage_tmp,"userimages/$cimage");

		$res = mysqli_prepare($con,$qry);
		if($res){
		
		mysqli_stmt_bind_param($res,"sssssiss", $cname, $cadd, $cemail, $hpass,$cgen,$cphone,$cimage,$date);
		date_default_timezone_set('Asia/Kolkata'); 
        $date = date('Y-m-d H:i:s', time());
		$cname = $_POST['u_name'];
		$cemail = $_POST['u_email'];
		$cphone = $_POST['u_phone'];
		$cgen = $_POST['u_gen'];
		$cadd = $_POST['u_add'];
		$hpass = password_hash($cpass,PASSWORD_DEFAULT);
		$ccpass = $_POST['u_cpass'];
		$cimage = $_FILES['u_img']['name'];
		$cimage_tmp = $_FILES['u_img']['tmp_name'];
		if(mysqli_stmt_execute($res)){
			echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
			<strong>Welcome Chef!</strong> You are Registered as a Customer...
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
function userlogin(){
	global $con;
	$email = $_POST['s_email'];
	$pass = $_POST['s_pass'];
	$qry = "Select * from user where user_email = ?";
	$res = mysqli_prepare($con,$qry);
	if ($res) {
		mysqli_stmt_bind_param($res,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$joindate);
		if(mysqli_stmt_execute($res)){
			
			mysqli_stmt_store_result($res);
				$rowcount = mysqli_stmt_num_rows($res);
				if($rowcount>0){
					while(mysqli_stmt_fetch($res)){
						if(password_verify($pass,$dbpass)){
							
							$_SESSION['cemail'] = $dbemail;
                            $_SESSION['cname'] = $dbname;
							#echo $_SESSION['uname'];
							echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome!</strong> You are Logged in succesfully..
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
							echo "<script>window.open('uindex.php','_self')</script>";
                            
							
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
							<strong>Welcome Customer!</strong> Create an account..
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
function randmenu(){
	global $con;
			$get_t = "select *from menu order by rand() limit 3";
			$run_t = mysqli_query($con,$get_t);
			while ($row_t=mysqli_fetch_array($run_t)) {
				$mid = $row_t['m_id'];
				$cookid = $row_t['cook_id'];
				$mname = $row_t['m_name'];
				$mdetails = $row_t['m_details'];
				$mprice = $row_t['m_price'];
				$mimage = $row_t['m_image'];
				$mdate = $row_t['m_date'];
				echo "<div class='col-md-4 col-sm-4 py-3 py-sm-0'>

				<div class='card p-1'>
					<img src='../cook/menuimages/$mimage' class='card-img-top img-fluid'  alt='...'>
					
					<ul class='list-group list-group-flush'>
					  <li class='list-group-item'>Name :- $mname</li>
					  <li class='list-group-item'>Details :- $mdetails</li>
					  <li class='list-group-item'>Price :- $mprice</li>
					</ul>
					
				  </div>
			
			</div>";
			}
};
?>
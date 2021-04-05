<?php
include("includes.php");
#session_start();
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
			<strong>Welcome Chef!</strong> You are Registered as a chef...
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
					while(mysqli_stmt_fetch($res)){
						if(password_verify($pass,$dbpass)){
							$_SESSION['uname'] = $dbname;
							$_SESSION['uemail'] = $dbemail;
							#echo $_SESSION['uname'];
							echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Welcome Chef!</strong> You are Logged in succesfully..
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
function addmenu(){
	global $con;
	$email = $_SESSION['uname'];
	$qry1 = "select * from cook where cook_email = ?";
	$res1 = mysqli_prepare($con,$qry1);
	if ($res1) {
		mysqli_stmt_bind_param($res1,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res1,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$expertise,$joindate);
		if(mysqli_stmt_execute($res1)){
			mysqli_stmt_store_result($res1);
			$rowcount = mysqli_stmt_num_rows($res1);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res1)){
					$cookid = $id;
				}
			}
			else {
				echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again1..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
			}
		}
	}

	else {
		echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again2..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
	}
	$dname = $_POST['dname'];
	$ddetails = $_POST['ddetails'];
	$dprice = $_POST['dprice'];
	$cimage = $_FILES['dphoto']['name'];
	$cimage_tmp = $_FILES['dphoto']['tmp_name'];
	$qry = "Insert into menu(cook_id,m_name,m_details,m_price,m_image,m_date) values (?,?,?,?,?,?)";
	$cimage = $_FILES['dphoto']['name'];
	$cimage_tmp = $_FILES['dphoto']['tmp_name'];
	move_uploaded_file($cimage_tmp,"menuimages/$cimage");
	$res = mysqli_prepare($con,$qry);
	if ($res) {
		mysqli_stmt_bind_param($res,'ississ',$cid,$dname,$ddetails,$dprice,$cimage,$date);
		date_default_timezone_set('Asia/Kolkata'); 
		$dname = $_POST['dname'];
		$cid = $id;
		$ddetails = $_POST['ddetails'];
		$dprice = $_POST['dprice'];
		$cimage = $_FILES['dphoto']['name'];
		$cimage_tmp = $_FILES['dphoto']['tmp_name'];
		$date = date('Y-m-d H:i:s', time());
		if(mysqli_stmt_execute($res)){
			echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
			<strong>Wohoo!</strong>Menu Added SUccesfully..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
		}

		}
		else {

			echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again3..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
		}
	
};
function cookviewmenu(){
	echo "<div class='container'>
	<table class='table table-stripped' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Details</th>
		<th scope='col'>Dish Price</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	  
	global $con;
	$email = $_SESSION['uemail'];
	$qry1 = "select * from cook where cook_email = ?";
	$res1 = mysqli_prepare($con,$qry1);
	if ($res1) {
		mysqli_stmt_bind_param($res1,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res1,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$expertise,$joindate);
		if(mysqli_stmt_execute($res1)){
			mysqli_stmt_store_result($res1);
			$rowcount = mysqli_stmt_num_rows($res1);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res1)){
					$cookid = $id;
				}
			}
			else {
				echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again1..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
			}
		}
	}

	else {
		echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again2..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
	} 
	$qry = "select * from menu where cook_id = ?";
	$res = mysqli_prepare($con,$qry);
	$srno = 0;
	if ($res) {
		mysqli_stmt_bind_param($res,'i',$cid);
		$cid = $cookid;
		mysqli_stmt_bind_result($res,$idd,$coid,$dname,$ddetails,$dprice,$dimage,$date);
		if(mysqli_stmt_execute($res)){
			mysqli_stmt_store_result($res);
			$rowcount = mysqli_stmt_num_rows($res);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res)){
					$srno+=1;
					$menuid = $idd;
					$menucook = $coid;
					$menuname = $dname;
					$menudetails = $ddetails;
					$price = $dprice;
					$mdate = $date;
					echo "<tr>
					<td scope='col'>$srno</td>
					<td scope='col'>$menuname</td>
					<td scope='col'>$menudetails</td>
					<td scope='col'>$price</td>
					<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-primary edit' name='edit' id='$menuid' data-target='#exampleModal'>Edit</button></div> <div class='col-md-6 col-sm-6'><button class='btn btn-danger delete' name='del'id='$menuid'>Delete</button></div></div></td>
				  </tr>
				  
				  ";
				}
			}
			else {
				echo "";
			}
	}
}
#<button class='btn btn-primary' name='edit'>Edit</button><button class='btn btn-danger' name='del'>Delete</button>	  
	  echo "
	</tbody>
  </table>
  </div>";
};
function  cookupgrademenu(){
	echo "<div class='container'>
	<table class='table table-stripped' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Details</th>
		<th scope='col'>Dish Price</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	  
	global $con;
	$email = $_SESSION['uemail'];
	$qry1 = "select * from cook where cook_email = ?";
	$res1 = mysqli_prepare($con,$qry1);
	if ($res1) {
		mysqli_stmt_bind_param($res1,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res1,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$expertise,$joindate);
		if(mysqli_stmt_execute($res1)){
			mysqli_stmt_store_result($res1);
			$rowcount = mysqli_stmt_num_rows($res1);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res1)){
					$cookid = $id;
				}
			}
			else {
				echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again1..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
			}
		}
	}

	else {
		echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again2..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
	} 
	$qry = "select * from menu where cook_id = ?";
	$res = mysqli_prepare($con,$qry);
	$srno = 0;
	if ($res) {
		mysqli_stmt_bind_param($res,'i',$cid);
		$cid = $cookid;
		mysqli_stmt_bind_result($res,$idd,$coid,$dname,$ddetails,$dprice,$dimage,$date);
		if(mysqli_stmt_execute($res)){
			mysqli_stmt_store_result($res);
			$rowcount = mysqli_stmt_num_rows($res);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res)){
					$srno+=1;
					$menuid = $idd;
					$menucook = $coid;
					$menuname = $dname;
					$menudetails = $ddetails;
					$price = $dprice;
					$mdate = $date;
					echo "<tr>
					<td scope='col'>$srno</td>
					<td scope='col'>$menuname</td>
					<td scope='col'>$menudetails</td>
					<td scope='col'>$price</td>
					<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-primary edit' name='edit' id='$menuid' data-target='#exampleModal'>Upgrade</button></div> <div class='col-md-6 col-sm-6'><button class='btn btn-danger delete' name='del'id='$menuid'>Delete</button></div></div></td>
				  </tr>
				  
				  ";
				}
			}
			else {
				echo "";
			}
	}
}
#<button class='btn btn-primary' name='edit'>Edit</button><button class='btn btn-danger' name='del'>Delete</button>	  
	  echo "
	</tbody>
  </table>
  </div>";
};

function  cookviewupgrademenu(){
	echo "<div class='container'>
	<table class='table table-stripped' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Package Days</th>
		<th scope='col'>Package Price</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	  
	global $con;
	$email = $_SESSION['uemail'];
	$qry1 = "select * from cook where cook_email = ?";
	$res1 = mysqli_prepare($con,$qry1);
	if ($res1) {
		mysqli_stmt_bind_param($res1,'s',$cemail);
		$cemail = $email;
		mysqli_stmt_bind_result($res1,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$expertise,$joindate);
		if(mysqli_stmt_execute($res1)){
			mysqli_stmt_store_result($res1);
			$rowcount = mysqli_stmt_num_rows($res1);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res1)){
					$cookid = $id;
				}
			}
			else {
				echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again1..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
			}
		}
	}

	else {
		echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
			<strong>Chef!</strong> Something Went Wrong Please Try Again2..
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div>";
	} 
	$qry = "select * from package where cook_id = ?";
	$res = mysqli_prepare($con,$qry);
	$srno = 0;
	if ($res) {
		mysqli_stmt_bind_param($res,'i',$cid);
		$cid = $cookid;
		mysqli_stmt_bind_result($res,$pidd,$coid,$mid,$mname,$pdays,$dprice,$date);
		if(mysqli_stmt_execute($res)){
			mysqli_stmt_store_result($res);
			$rowcount = mysqli_stmt_num_rows($res);
			if ($rowcount>0) {
				while(mysqli_stmt_fetch($res)){
					$srno+=1;
					$packid = $pidd;
					$packcook = $coid;
					$menuid = $mid;
					$mename = $mname;
					$packdays = $pdays;
					$price = $dprice;
					$mdate = $date;
					echo "<tr>
					<td scope='col'>$srno</td>
					<td scope='col'>$mename</td>
					<td scope='col'>$packdays</td>
					<td scope='col'>$price</td>
					<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-primary edit' name='edit' id='$menuid' data-target='#exampleModal'>Update</button></div> <div class='col-md-6 col-sm-6'><button class='btn btn-danger delete' name='del'id='$menuid'>Delete</button></div></div></td>
				  </tr>
				  
				  ";
				}
			}
			else {
				echo "";
			}
	}
}
#<button class='btn btn-primary' name='edit'>Edit</button><button class='btn btn-danger' name='del'>Delete</button>	  
	  echo "
	</tbody>
  </table>
  </div>";
};
?>
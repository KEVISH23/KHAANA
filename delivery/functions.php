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
function showallorder(){
    echo "<div class='container'>
	<table class='table table-responsive' style='margin-top:50px;' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
        <th scope='col'>Customer Name</th>
		<th scope='col'>From</th>
		<th scope='col'>To</th>
        <th scope='col' hidden>Order id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
    global $con;
    $srno = 0;
    $q = "select * from order_master";
    $r = mysqli_query($con,$q);
    if ($q) {
        # code...
        $rc = mysqli_num_rows($r);
        if ($rc > 0) {
            # code...
            
            while ($row = mysqli_fetch_array($r)) {
                # code...
                $srno+=1;
                $orderid = $row['order_id'];
                $cookid = $row['cook_id'];
                $userid = $row['user_id'];
                $q3 = "select * from accepted_order where order_id = $orderid";
                $r3 = mysqli_query($con,$q3);
                if ($r3) {
                    # code...
                    $rc3 = mysqli_num_rows($r3);
                    if ($rc3 > 0) {
                        $srno-=1;
                        continue;
                    }
                }
                $q1 = "select user_address,user_namee from user where user_id = $userid";
                $r1 = mysqli_query($con,$q1);
                if ($r1) {
                    # code...
                    $rc1 = mysqli_num_rows($r1);
                    if ($rc1 > 0) {
                        while ($row1 = mysqli_fetch_array($r1)) {
                            $useradd = $row1['user_address'];
                            $username = $row1['user_namee'];
                        }
                    }
                }
                $q2 = "select cook_address from cook where cook_id = $cookid";
                $r2 = mysqli_query($con,$q2);
                if ($r2) {
                    # code...
                    $rc2 = mysqli_num_rows($r2);
                    if ($rc2 > 0) {
                        while ($row2 = mysqli_fetch_array($r2)) {
                            $cookadd = $row2['cook_address'];
                        }
                    }
                }
                echo "<tr>
                <td scope='col'>$srno</td>
                <td scope='col'>$username</td>
                <td scope='col'>$cookadd</td>
                <td scope='col'>$useradd</td>
                <td scope='col' hidden>$orderid</td>
                <td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-success edit' name='edit' id='$orderid' data-target='#exampleModal'>Accept</button></div> </div> </td>
              </tr>";
            }
           
        }

    }
};
function showaacceptorder(){
    echo "<div class='container'>
	<table class='table table-responsive' style='margin-top:50px;' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
        <th scope='col'>Customer Name</th>
		<th scope='col'>From</th>
		<th scope='col'>To</th>
        <th scope='col' hidden>Order id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
    global $con;
    $srno = 0;
    $delid = $_SESSION['did'];
    $q = "select * from accepted_order where delivery_id = $delid";
    $r = mysqli_query($con,$q);
    if ($r) {
        # code...
        $rc = mysqli_num_rows($r);
        if ($rc > 0) {
            # code...
            while ($row = mysqli_fetch_array($r)) {
                # code...
                $srno += 1;
                $orderid = $row['order_id'];
                $aoid = $row['ao_id'];
                $q1 = "select user_id,cook_id from order_master where order_id = $orderid";
                $r1 = mysqli_query($con,$q1);
                if ($r1) {
                    # code...
                    $rc1 = mysqli_num_rows($r1);
                    if ($rc1 > 0) {
                        # code...
                        while ($row = mysqli_fetch_array($r1)) {
                            # code...
                            $cookid = $row['cook_id'];
                            $userid = $row['user_id'];
                            $q2 = "select user_address,user_namee from user where user_id = $userid";
                $r2 = mysqli_query($con,$q2);
                if ($r2) {
                    # code...
                    $rc2 = mysqli_num_rows($r2);
                    if ($rc2 > 0) {
                        while ($row2 = mysqli_fetch_array($r2)) {
                            $useradd = $row2['user_address'];
                            $username = $row2['user_namee'];
                        }
                    }
                }
                $q3 = "select cook_address from cook where cook_id = $cookid";
                $r3 = mysqli_query($con,$q3);
                if ($r3) {
                    # code...
                    $rc3 = mysqli_num_rows($r3);
                    if ($rc3 > 0) {
                        while ($row3 = mysqli_fetch_array($r3)) {
                            $cookadd = $row3['cook_address'];
                        }
                    }
                }
                echo "<tr>
                <td scope='col'>$srno</td>
                <td scope='col'>$username</td>
                <td scope='col'>$cookadd</td>
                <td scope='col'>$useradd</td>
                <td scope='col' hidden>$aoid</td>
                <td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-danger edit' name='edit' id='$aoid' data-target='#exampleModal'>Cancel</button></div> </div> </td>
              </tr>";

                        }
                    }
                    

                }
            }
        }
    }
};
?>
<?php
include("includes.php");
#session_start();
function usersignin(){
    global $con;
	$cpass = $_POST['u_pass'];
	$ccpass = $_POST['u_cpass'];
	$cimage = $_FILES['u_img']['name'];
	$cimage_tmp = $_FILES['u_img']['tmp_name'];
	$qry = "INSERT INTO user (user_namee,user_address,user_email,user_password,user_gender,user_phn,user_photo,user_joindate,user_jointime) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?)";
	if ($cpass != $ccpass) {
		echo "<script>alert('Password Must Be Same!!')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		
		move_uploaded_file($cimage_tmp,"userimages/$cimage");

		$res = mysqli_prepare($con,$qry);
		if($res){
		
		mysqli_stmt_bind_param($res,"sssssisss", $cname, $cadd, $cemail, $hpass,$cgen,$cphone,$cimage,$date,$time);
		date_default_timezone_set('Asia/Kolkata'); 
		$time = date("H:i:sA");
        $date = date('Y-m-d H:i:s');
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
			<strong>Welcome!</strong> You are Registered as a Customer...
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
		mysqli_stmt_bind_result($res,$id,$dbname,$add,$dbemail,$dbpass,$gender,$phn,$photo,$joindate,$jointime);
		if(mysqli_stmt_execute($res)){
			
			mysqli_stmt_store_result($res);
				$rowcount = mysqli_stmt_num_rows($res);
				if($rowcount>0){
					while(mysqli_stmt_fetch($res)){
						if(password_verify($pass,$dbpass)){
							$_SESSION['cid'] = $id;
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
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
				
			
			while ($row_t=mysqli_fetch_array($run_t)) {
				$mid = $row_t['m_id'];
				$cookid = $row_t['cook_id'];
				$mname = $row_t['m_name'];
				$mdetails = $row_t['m_details'];
				$mprice = $row_t['m_price'];
				$mimage = $row_t['m_image'];
				$mdate = $row_t['m_date'];
				echo "<div class='col-md-4 col-sm-4 py-3 py-sm-0'>

				<div class='card p-1' >
					<img src='../cook/menuimages/$mimage' class='card-img-top img-fluid'  alt='...' >
					
					<ul class='list-group list-group-flush'>
					  <li class='list-group-item'>Name :- $mname</li>
					  <li class='list-group-item'>Details :- $mdetails</li>
					  <li class='list-group-item'>Price :- $mprice</li>
					</ul>
					
				  </div>
			
			</div>";
			}
		}
		else{
			echo "<h3>No Menu Available</h3>";
		}
};
function showmenu(){
	echo "<div class='container'>
	<table class='table table-responsive' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Image</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Details</th>
		<th scope='col'>Dish Price</th>
		<th scope='col' hidden>Menu Id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	global $con;
	$srno = 0;
	$profit = 0;
	$fprice = 0;
	$get_t = "select *from menu";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
				
			
			while ($row_t=mysqli_fetch_array($run_t)) {
				$srno+=1;
				$mid = $row_t['m_id'];
				$cookid = $row_t['cook_id'];
				$mname = $row_t['m_name'];
				$mdetails = $row_t['m_details'];
				$mprice = $row_t['m_price'];
				$mimage = $row_t['m_image'];
				$mdate = $row_t['m_date'];
				$profit = ($mprice/100)*10;
				$fprice = $mprice + $profit;
				
				echo "<tr>
					<td scope='col'>$srno</td>
					<td scope='col'><img src='../cook/menuimages/$mimage' alt='menuimage' style='width:100px; height:100px;'></td>
					<td scope='col'>$mname</td>
					<td scope='col'>$mdetails</td>
					<td scope='col'>".round($fprice)."</td>
					<td scope='col' hidden>$mid</td>
					<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-success edit' name='edit' id='$mid'>Place Order</button></div> </div></td>
				  </tr>
				  
				  ";
		}
	}
		else{
			#echo "<h3>No Menu Available</h3>";
		}
		echo "
		</tbody>
	  </table>
	  </div>";
};
function showpack(){
	echo "<div class='container'>
	<table class='table table-responsive' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Image</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Details</th>
		<th scope='col'>Dish Price</th>
		<th scope='col'>Duration</th>
		<th scope='col' hidden>Menu Id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	global $con;
	$srno = 0;
	$profit = 0;
	$fprice = 0;
	$get_t = "select *from package";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
				
			
			while ($row_t=mysqli_fetch_array($run_t)) {
				$srno+=1;
				$packid = $row_t['package_id'];
				$cid = $row_t['cook_id'];
				$duration = $row_t['package_days'];
				$pprice = $row_t['package_price'];
				$mname = $row_t['menu_name'];
				$menid = $row_t['menu_id'];
				$pdate = $row_t['package_date'];
				$ptime = $row_t['package_time'];
				if ($duration == "1 week") {
					# code...
					$profit = ($pprice/100)*15;
					$fprice = $pprice+$profit;
				}
				else if ($duration == "1 month") {
					# code...
					$profit = ($pprice/100)*10;
					$fprice = $pprice+$profit;
				}
				else if ($duration == "3 month") {
					# code...
					$profit = ($pprice/100)*5;
					$fprice = $pprice+$profit;
				}
				$sql = "select m_details,m_image from menu where m_id=$menid";
				$res = mysqli_query($con,$sql);
				if ($res) {
					# code...
					if (mysqli_num_rows($res)>0) {
						# code...
						while ($row = mysqli_fetch_array($res)) {
							# code...
							$mdetails = $row['m_details'];
							$mimage = $row['m_image'];
						}
					}
				}
				
				
				echo "<tr>
					<td scope='col'>$srno</td>
					<td scope='col'><img src='../cook/menuimages/$mimage' alt='menuimage' style='width:100px; height:100px;'></td>
					<td scope='col'>$mname</td>
					<td scope='col'>$mdetails</td>
					<td scope='col'>".round($fprice)."</td>
					<td scope='col'>$duration</td>
					<td scope='col' hidden>$packid</td>
					<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-success edit' name='edit' id='$menid'>Place Order</button></div> </div></td>
				  </tr>
				  
				  ";
		}
	}
		else{
			#echo "<h3>No Menu Available</h3>";
		}
		echo "
		</tbody>
	  </table>
	  </div>";
};
function showorders(){

	global $con;
	$srno = 0;
	echo "<div class='container'>
	<table class='table table-responsive' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Image</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Details</th>
		<th scope='col'>Dish Price</th>
		<th scope='col'>Duration</th>
		<th scope='col' hidden>Menu Id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	$userid = $_SESSION['cid'];
	$get_t = "select *from order_master where user_id=$userid";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
			
			
			while ($row_t=mysqli_fetch_array($run_t)) {
				
				$orderid = $row_t['order_id'];
				$payorderid = $row_t['payorder_id'];
				$packid = $row_t['package_id'];
				
				$query1 = "select * from payment where payorder_id = '$payorderid'";
				$result1 = mysqli_query($con,$query1);
				if ($result1) {
					# code...
					$rowcount12 = mysqli_num_rows($result1);
	
					if ($rowcount12 == 0) {
						# code...
						
						$queryy = "delete from order_master where payorder_id = '$payorderid'";
						$resultt = mysqli_query($con,$queryy);
					}
					else {

						# code...
						$mid = $row_t['menu_id'];
						
						$query = "select * from delivery_done where order_id = $orderid";
						$result = mysqli_query($con,$query);
						if ($result) {
							# code...
							$rowcountt = mysqli_num_rows($result);
							if ($rowcountt > 0) {
								# code...
								continue;
							}
						}
						if ($mid == 0) {
							$qry = "select * from package where package_id = $packid";
							$res = mysqli_query($con,$qry);
							if ($res) {
								# code...
								$rowc = mysqli_num_rows($res);
								if ($rowc > 0) {
									$profit = 0;
									$fprice = 0;
									# code...
									while ($rowt = mysqli_fetch_array($res)) {
										# code...
										$srno+=1;
										$packid = $rowt['package_id'];
										$cid = $rowt['cook_id'];
										$duration = $rowt['package_days'];
										$pprice = $rowt['package_price'];
										$mname = $rowt['menu_name'];
										$menid = $rowt['menu_id'];
										$pdate = $rowt['package_date'];
										$ptime = $rowt['package_time'];
										$sql = "select m_details,m_image from menu where m_id=$menid";
										$res = mysqli_query($con,$sql);
										if ($res) {
											# code...
											if (mysqli_num_rows($res)>0) {
												# code...
												while ($row = mysqli_fetch_array($res)) {
													# code...
													$mdetails = $row['m_details'];
													$mimage = $row['m_image'];
												}
											}
										}
										if ($duration == "1 week") {
											# code...
											$profit = ($pprice/100)*15;
											$fprice = $pprice+$profit;
										}
										else if ($duration == "1 month") {
											# code...
											$profit = ($pprice/100)*10;
											$fprice = $pprice+$profit;
										}
										else if ($duration == "3 month") {
											# code...
											$profit = ($pprice/100)*5;
											$fprice = $pprice+$profit;
										}
									
									echo "<tr>
										<td scope='col'>$srno</td>
										<td scope='col'><img src='../cook/menuimages/$mimage' alt='menuimage' style='width:100px; height:100px;'></td>
										<td scope='col'>$mname</td>
										<td scope='col'>$mdetails</td>
										<td scope='col'>".round($fprice)."</td>
										<td scope='col'>$duration</td>
										<td scope='col' hidden>$orderid</td>
										<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-danger edit' name='edit' id='$orderid'>Cancel Tiffin</button></div> </div></td>
									</tr>
									
									";
									}
								}
							}
						}
						else{
							$q = "select * from menu where m_id = $mid";
							$r = mysqli_query($con,$q);
							if ($r) {
								# code..
								$rc = mysqli_num_rows($r);
								if ($rc > 0) {
									$mprofit = 0;
									$mfprice = 0;
									while ($row = mysqli_fetch_array($r)) {
									
										# code...
										$srno+=1;
										$mid = $row['m_id'];
										$cookid = $row['cook_id'];
										$mname = $row['m_name'];
										$mdetails = $row['m_details'];
										$mprice = $row['m_price'];
										$mimage = $row['m_image'];
										$mdate = $row['m_date'];
										$mprofit = ($mprice/100)*10;
										$mfprice = $mprice + $mprofit;
									
									echo "<tr>
									<td scope='col'>$srno</td>
									<td scope='col'><img src='../cook/menuimages/$mimage' alt='menuimage' style='width:100px; height:100px;'></td>
									<td scope='col'>$mname</td>
									<td scope='col'>$mdetails</td>
									<td scope='col'>".round($mfprice)."</td>
									<td scope='col'>--------</td>
									<td scope='col' hidden>$orderid</td>
									<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-danger edit' name='edit' id='$orderid'>Cancel Order</button></div> </div></td>
								</tr>
								
								";
								}
								
							}
						}
							
						
						
					}
				}
				
			
					
			}
		}
	}


				else {
					echo "res not set";	
				}
				echo "
				</tbody>
			  </table>
			  </div>";		
			
		
};
function showcomporders(){
	global $con;
	$q1 = "select order_id from delivery_done";
	$r1 = mysqli_query($con,$q1);
	$uid = $_SESSION['cid'];
	$srno = 0;
	echo "<div class='container'>
	<table class='table table-responsive' id='myTable'>
	<thead>
	  <tr class='text-white'>
		<th scope='col'>Id</th>
		<th scope='col'>Image</th>
		<th scope='col'>Dish Name</th>
		<th scope='col'>Dish Price</th>
		<th scope='col' hidden>Menu Id</th>
		<th scope='col'>Action</th>
	  </tr>
	</thead>
	<tbody>";
	if ($r1) {
		# code...
		$rc = mysqli_num_rows($r1);
		if ($rc > 0) {
			# code...
			while ($row1 = mysqli_fetch_array($r1)) {
				# code...
				$orderid = $row1['order_id'];
				//echo $orderid;
				$q2 = "select menu_id,package_id from order_master where order_id = $orderid and user_id =$uid ";
				$r2 = mysqli_query($con,$q2);
				if ($r2) {
					# code...
					$rc1 = mysqli_num_rows($r2);
					if ($rc1 > 0) {
						# code...
						while ($row2 = mysqli_fetch_array($r2)) {
							# code...
							$menuid = $row2['menu_id'];
							$packid = $row2['package_id'];
							if ($menuid > 0) {
								# code...
								$q3 = "select m_id,m_name,m_details,m_price,m_image from menu where m_id = $menuid";
								$r3 = mysqli_query($con,$q3);
								$profit = 0;
								$fprice = 0;
								if ($r3) {
									# code...
									$rc2 = mysqli_num_rows($r3);
									if ($rc2 > 0) {
										# code...
										while ($row3 = mysqli_fetch_array($r3)) {
											# code...
											$srno += 1;
											$mname = $row3['m_name'];
											$mdetails = $row3['m_details'];
											$mprice = $row3['m_price'];
											$mimage = $row3['m_image'];
											$profit = ($mprice/100)*10;
											$fprice = $mprice + $profit;
											echo "<tr>
											<td scope='col'>$srno</td>
											<td scope='col'><img src='../cook/menuimages/$mimage' alt='menuimage' style='width:100px; height:100px;'></td>
											<td scope='col'>$mname</td>
											<td scope='col'>".round($fprice)."</td>
											<td scope='col' hidden>$orderid</td>
											<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-primary edit' name='edit' id='$orderid'>Give Feedback</button></div> </div></td>
										</tr>
										
										";
										}
									}
								}
								
							}
							elseif($packid > 0){
									$q4 = "select menu_id,menu_name,package_price,package_days from package where package_id = $packid";
									$r4 = mysqli_query($con,$q4);
									$profit = 0;
									$fprice = 0;
									if ($r4) {
										# code..
										$rc3 = mysqli_num_rows($r4);
										if ($rc3 > 0) {
											# code...
											while ($row4 = mysqli_fetch_array($r4)) {
												# code...
												$srno += 1;
												$m_id = $row4['menu_id'];
												$m_name = $row4['menu_name'];
												$pprice = $row4['package_price'];
												$duration = $row4['package_days'];
												if ($duration == "1 week") {
													# code...
													$profit = ($pprice/100)*15;
													$fprice = $pprice+$profit;
												}
												else if ($duration == "1 month") {
													# code...
													$profit = ($pprice/100)*10;
													$fprice = $pprice+$profit;
												}
												else if ($duration == "3 month") {
													# code...
													$profit = ($pprice/100)*5;
													$fprice = $pprice+$profit;
												}
												$q5 = "select m_id,m_name,m_details,m_price,m_image from menu where m_id = $m_id";
												$r5 = mysqli_query($con,$q5);
												if ($r5) {
													# code...
													$rc4 = mysqli_num_rows($r5);
													if ($rc4 > 0) {
														# code...
														while ($row5 = mysqli_fetch_array($r5)) {
															# code...
															$srno += 1;
															$name = $row5['m_name'];
															$details = $row5['m_details'];
															$price = $row5['m_price'];
															$image = $row5['m_image'];
														}
													}
												}
												echo "<tr>
												<td scope='col'>$srno</td>
												<td scope='col'><img src='../cook/menuimages/$image' alt='menuimage' style='width:100px; height:100px;'></td>
												<td scope='col'>$m_name</td>
												<td scope='col'>".round($fprice)."</td>
												<td scope='col' hidden>$orderid</td>
												<td scope='col'><div class='row'><div class='col-md-6 col-sm-6'><button class='btn btn-primary edit' name='edit' id='$orderid'>Give Feedback</button></div> </div></td>
											</tr>
											
											";
											}
										}
									}
							}
						}
					}
				}
			}
		}
	}
};
?>
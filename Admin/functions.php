<?php
include("includes.php");
function usercount(){
    global $con;
	$get_t = "select *from user";
			$run_t = mysqli_query($con,$get_t);
            if ($run_t) {
                $rowcount=mysqli_num_rows($run_t);
                echo "<h4>$rowcount</h4>";   
            }
            else {
                echo "<h4>Something is wrong</h4>";
            }
			
};
function curusercount(){
    global $con;
	$get_t = "select *from user where user_joindate=CURDATE()";
			$run_t = mysqli_query($con,$get_t);
            if ($run_t) {
                $rowcount=mysqli_num_rows($run_t);
                if ($rowcount>0) {
                    echo "<h4>$rowcount</h4>";
                }
                else {
                    echo "<h4>No New User</h4>";
                }
                   
            }
            else {
                echo "<h4>Something is wrong</h4>";
            }
};
function newcookrand(){
    global $con;
			$get_t = "select *from cook where cook_joindate = CURDATE()  order by rand() limit 3";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
                echo "<table class='table bg-info text-white table-hover mt-4'>
                <thead>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Cook Id</th>
                      <th scope='col'>Name</th>
                      <th scope='col'>Speciality</th>
                    </tr>
                  </thead>
                  <tbody>";
			$srno = 0;
			while ($row_t=mysqli_fetch_array($run_t)) {
                $srno+=1;
				$cookid = $row_t['cook_id'];
				$cname = $row_t['cook_name'];
				$cookadd = $row_t['cook_address'];
				$cemail = $row_t['cook_email'];
				$cook_expertise = $row_t['cook_expertise'];
				echo "
                    <tr>
                        <th scope='row'>$srno</th>
                        <td>$cookid</td>
                        <td>$cname</td>
                        <td>$cook_expertise</td>
                    </tr>
                   ";
			}
            echo "</tbody>
            </table>";
		}
		else{
			echo "<h3 class='display-1'>Recently No Cook Joined!</h3>";
		}
};
function newmenu(){
    global $con;
			$get_t = "select *from menu where m_date = CURDATE()  order by rand() limit 3";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
          
			if ($rowcount>0) {
                echo "<table class='table text-white table-hover mt-4'>
                <thead>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Dish Name</th>
                      <th scope='col'>Dish Details</th>
                      <th scope='col'>Dish Price</th>
                    </tr>
                  </thead>
                  <tbody>";
			$srno = 0;
			while ($row_t=mysqli_fetch_array($run_t)) {
                $srno+=1;
                $menuid = $row_t['m_id'];
				$cookid = $row_t['cook_id'];
				$mname = $row_t['m_name'];
				$mdetails = $row_t['m_details'];
				$mprice = $row_t['m_price'];
		echo "		
          <tr>
            <th scope='row'>$srno</th>
            <td>$mname</td>
            <td>$mdetails</td>
            <td>$mprice</td>
          </tr>
          
                  ";
			}
        echo "</tbody>
        </table>";
		}
		else{
			echo "<h3 class='display-1'>Recently No Menu Added!</h3>";
		}
};
function viewallmenu(){
    global $con;
			$get_t = "select *from menu";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
            if ($rowcount>0) {
                $srno = 0;
			while ($row_t=mysqli_fetch_array($run_t)) {
                $srno+=1;
                $menuid = $row_t['m_id'];
				$cookid = $row_t['cook_id'];
				$mname = $row_t['m_name'];
				$mdetails = $row_t['m_details'];
				$mprice = $row_t['m_price'];
                $mimage = $row_t['m_image'];
                echo "		
                <tr>
                    <th scope='row'>$srno</th>
                    <td hidden>$menuid</td>
                    <td>$mname</td>
                    <td><img src='../cook/menuimages/$mimage' alt='menu image' style='width:100px;height:100px;'></td>
                    <td>$mdetails</td>
                    <td>$mprice</td>
                    <td>
                    
                            <button class='btn btn-success edit' name='edit' id='$menuid'>View</button>
                    
                            <button class='btn btn-warning ml-2 update' id='$menuid'>Update</button>
                       
                            <button class='btn btn-danger ml-2 delete' id='$menuid'>Delete</button>
                  
                    </td>
                </tr>";
            }
        }

};
function viewallcook(){
    global $con;
			$get_t = "select *from cook";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
            if ($rowcount>0) {
                $srno = 0;
			while ($row_t=mysqli_fetch_array($run_t)) {
                $srno+=1;
				$cookid = $row_t['cook_id'];
				$cname = $row_t['cook_name'];
                $cadd = $row_t['cook_address'];
                $coemail = $row_t['cook_email'];
                $cgender = $row_t['cook_gender'];
                $cphone = $row_t['cook_phn'];
                $cimage = $row_t['cook_photo'];
                $cexp = $row_t['cook_expertise'];
                $cdate = $row_t['cook_joindate'];
                $ctime= $row_t['cook_jointime'];
				
                echo "		
                <tr>
                    <th scope='row'>$srno</th>
                    <td>$cookid</td>
                    <td>$cname</td>
                    <td>$cexp</td>
                    <td>
                    
                            <button class='btn btn-success edit' name='edit' id='$cookid'>View</button>
                    
                            <button class='btn btn-warning ml-2 update' id='$cookid'>Update</button>
                       
                            <button class='btn btn-danger ml-2 delete' id='$cookid'>Delete</button>
                  
                    </td>
                </tr>";
            }
        }
        else {
            echo "<h3 class='display-1 text-white'>No Cook Registered</h3>";
        }

};
function viewparcook(){
    global $con;
   $id = $_POST['cookid'];
   $qry = "select * from cook where cook_id=$id";
    $r = mysqli_query($con,$qry);
    if ($r) {
      # code...
      $rowcount = mysqli_num_rows($r);
      if ($rowcount>0) {
        # code...
        while($row_t = mysqli_fetch_array($r)){
            $cookid = $row_t['cook_id'];
            $cname = $row_t['cook_name'];
            $cadd = $row_t['cook_address'];
            $coemail = $row_t['cook_email'];
            $cgender = $row_t['cook_gender'];
            $cphone = $row_t['cook_phn'];
            $cimage = $row_t['cook_photo'];
            $cexp = $row_t['cook_expertise'];
            $cdate = $row_t['cook_joindate'];
            $ctime= $row_t['cook_jointime'];
            echo "
            <div class='container d-flex justify-content-center mt-4'>
            <div class='card' style='width: 18rem;'>
            <img src='../cook/cookimages/$cimage' class='card-img-top' alt='Cook Image'>
            <div class='card-body'>
              <h5 class='card-title'>Name: $cname</h5>
              <p class='card-text'>Address: $cadd</p>
            </div>
            <ul class='list-group list-group-flush'>
              <li class='list-group-item'>Email: $coemail</li>
              <li class='list-group-item'>Phone No.: $cphone</li>
              <li class='list-group-item'>Gender: $cgender</li>
              <li class='list-group-item'>Expertise: $cexp</li>
              <li class='list-group-item'>Join Date: $cdate</li>
              <li class='list-group-item'>Join Time: $ctime</li>
            </ul>
            
          </div>
          </div>  
            ";
        }
      }
      else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
        <strong>Oops!</strong>No Such Cook Found...
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";}
    }
    else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
        <strong>Oops!</strong>Something Went Wrong..
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button>
        </div>";}
};
function newuserrand(){
    global $con;
    $get_t = "select *from user where user_joindate = CURDATE()  order by rand() limit 3";
    $run_t = mysqli_query($con,$get_t);
    $rowcount=mysqli_num_rows($run_t);
    if ($rowcount>0) {
        echo "<table class='table bg-info text-white table-hover mt-4'>
        <thead>
            <tr>
              <th scope='col'>#</th>
              <th scope='col'>User Id</th>
              <th scope='col'>Name</th>
              <th scope='col'>Phone No</th>
              <th scope='col'>Address</th>
              <th scope='col'>Email</th>
            </tr>
          </thead>
          <tbody>";
    $srno = 0;
    while ($row_t=mysqli_fetch_array($run_t)) {
        $srno+=1;
        $uid = $row_t['user_id'];
        $uname = $row_t['user_namee'];
        $uphn = $row_t['user_phn'];
        $uadd = $row_t['user_address'];
        $uemail = $row_t['user_email'];
        echo "
            <tr>
                <th scope='row'>$srno</th>
                <td>$uid</td>
                <td>$uname</td>
                <td>$uphn</td>
                <td>$uadd</td>
                <td>$uemail</td>
            </tr>
           ";
    }
    echo "</tbody>
    </table>";
}
else{
    echo "<h3 class='display-1 text-white'>Recently No User Joined!</h3>";
}

};
function viewalluser(){
    global $con;
    $get_t = "select *from user";
    $run_t = mysqli_query($con,$get_t);
    $rowcount=mysqli_num_rows($run_t);
    if ($rowcount>0) {
        $srno = 0;
    while ($row_t=mysqli_fetch_array($run_t)) {
        $srno+=1;
        $userid = $row_t['user_id'];
        $uname = $row_t['user_namee'];
        $uadd = $row_t['user_address'];
        $uoemail = $row_t['user_email'];
        $ugender = $row_t['user_gender'];
        $uphone = $row_t['user_phn'];
        $uimage = $row_t['user_photo'];
        $udate = $row_t['user_joindate'];
        $utime= $row_t['user_jointime'];
        
        echo "		
        <tr>
            <th scope='row'>$srno</th>
            <td>$userid</td>
            <td>$uname</td>
            <td>$uadd</td>
            <td>
            
                    <button class='btn btn-success mt-2 edit' name='edit' id='$userid'>View</button>
            
                    <button class='btn btn-warning mt-2 update' id='$userid'>Update</button>
               
                    <button class='btn btn-danger mt-2 delete' id='$userid'>Delete</button>
          
            </td>
        </tr>";
    }
}
else {
    echo "<h3 class='display-1 text-white'>No User Registered</h3>";
}

};
function viewparuser(){
    global $con;
    $id = $_POST['userid'];
    $qry = "select * from user where user_id=$id";
     $r = mysqli_query($con,$qry);
     if ($r) {
       # code...
       $rowcount = mysqli_num_rows($r);
       if ($rowcount>0) {
         # code...
         while($row_t = mysqli_fetch_array($r)){
             $userid = $row_t['user_id'];
             $uname = $row_t['user_namee'];
             $uadd = $row_t['user_address'];
             $uoemail = $row_t['user_email'];
             $ugender = $row_t['user_gender'];
             $uphone = $row_t['user_phn'];
             $uimage = $row_t['user_photo'];
             $udate = $row_t['user_joindate'];
             $utime= $row_t['user_jointime'];
             echo "
             <div class='container d-flex justify-content-center mt-4 mb-4'>
             <div class='card' style='width: 18rem;'>
             <img src='../user/userimages/$uimage' class='card-img-top' alt='Cook Image'>
             <div class='card-body'>
               <h5 class='card-title'>Name: $uname</h5>
               <p class='card-text'>Address: $uadd</p>
             </div>
             <ul class='list-group list-group-flush'>
               <li class='list-group-item'>Email: $uoemail</li>
               <li class='list-group-item'>Phone No.: $uphone</li>
               <li class='list-group-item'>Gender: $ugender</li>
               <li class='list-group-item'>Join Date: $udate</li>
               <li class='list-group-item'>Join Time: $utime</li>
             </ul>
             
           </div>
           </div>  
             ";
         }
       }
       else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
         <strong>Oops!</strong>No Such User Found...
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
         </button>
         </div>";}
     }
     else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
         <strong>Oops!</strong>Something Went Wrong..
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
         </button>
         </div>";}
};
function newpackrand(){
    global $con;
    $get_t = "select *from package where package_date = CURDATE()  order by rand() limit 3";
    $run_t = mysqli_query($con,$get_t);
    $rowcount=mysqli_num_rows($run_t);
  
    if ($rowcount>0) {
        echo "<table class='table text-white table-hover mt-4'>
        <thead>
            <tr>
            <th scope='col'>Sr.NO</th>
            <th scope='col'>Dish Name</th>
            <th scope='col'>Duration</th>
            <th scope='col'>Dish Price</th>
            </tr>
          </thead>
          <tbody>";
    $srno = 0;
    while ($row_t=mysqli_fetch_array($run_t)) {
        $srno+=1;
        $packid = $row_t['package_id'];
        $menuid = $row_t['menu_id'];
        $cookid = $row_t['cook_id'];
        $mname = $row_t['menu_name'];
        $packdays = $row_t['package_days'];
        $pprice = $row_t['package_price'];
        echo "		
        <tr>
            <th scope='row'>$srno</th>
            <td>$mname</td>
            <td>$packdays</td>
            <td>$pprice</td>
        </tr>
        
                ";
            }
        echo "</tbody>
        </table>";
        }
        else{
            echo "<h3 class='display-1'>Recently No Menu Added!</h3>";
        }
};
function viewallpackage(){
    global $con;
    $get_t = "select *from package";
    $run_t = mysqli_query($con,$get_t);
    $rowcount=mysqli_num_rows($run_t);
    if ($rowcount>0) {
        $srno = 0;
    while ($row_t=mysqli_fetch_array($run_t)) {
        $srno+=1;
        $packid = $row_t['package_id'];
        $cid = $row_t['cook_id'];
        $mid = $row_t['menu_id'];
        $mname = $row_t['menu_name'];
        $pdays = $row_t['package_days'];
        $upprice = $row_t['package_price'];
        $pdate = $row_t['package_date'];
        $ptime= $row_t['package_time'];
        
        echo "		
        <tr>
            <th scope='row'>$srno</th>
            <td>$packid</td>
            <td>$mname</td>
            <td>$pdays</td>
            <td>$upprice</td>
            <td>
            
                    <button class='btn btn-success  edit' name='edit' id='$packid'>View</button>
            
                    <button class='btn btn-warning ml-1 update' id='$packid'>Update</button>
               
                    <button class='btn btn-danger ml-1 delete' id='$packid'>Delete</button>
          
            </td>
        </tr>";
    }
}
else {
    
}
};
function viewparpack(){
    global $con;
    $id = $_POST['packid'];
    $qry = "select * from package where package_id=$id";
     $r = mysqli_query($con,$qry);
     if ($r) {
       # code...
       $rowcount = mysqli_num_rows($r);
       if ($rowcount>0) {
         # code...
         while($row_t = mysqli_fetch_array($r)){
             $packid = $row_t['package_id'];
             $cid = $row_t['cook_id'];
             $mid = $row_t['menu_id'];
             $mname = $row_t['menu_name'];
             $pdays = $row_t['package_days'];
             $pprice = $row_t['package_price'];
             $pdate = $row_t['package_date'];
             $ptime = $row_t['package_time'];
             $q = "select cook_name from cook where cook_id=$cid";
             $r = mysqli_query($con,$q);
             while ($row1 = mysqli_fetch_array($r)) {
                 # code...
                 $cname = $row1['cook_name'];
             }
             $q1 = "select m_image from menu where m_id=$mid";
             $r1 = mysqli_query($con,$q1);
             while ($row2 = mysqli_fetch_array($r1)) {
                 # code...
                 $mimage = $row2['m_image'];
             }
             echo "
             <div class='container d-flex justify-content-center mt-4 mb-4'>
             <div class='card' style='width: 18rem;'>
             <img src='../cook/menuimages/$mimage' class='card-img-top' alt='Cook Image'>
             <div class='card-body'>
               <h5 class='card-title'>Cook Name: $cname</h5>
               <h5 class='card-title'>Dish Name: $mname</h5>
             </div>
             <ul class='list-group list-group-flush'>
               <li class='list-group-item'>Duration: $pdays</li>
               <li class='list-group-item'>Price: $pprice</li>
               <li class='list-group-item'>Added Date: $pdate</li>
               <li class='list-group-item'>Added Date: $ptime</li>
             </ul>
             
           </div>
           </div>  
             ";
         }
       }
       else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
         <strong>Oops!</strong>No Such Package Found...
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
         </button>
         </div>";}
     }
     else{echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
         <strong>Oops!</strong>Something Went Wrong..
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
         <span aria-hidden='true'>&times;</span>
         </button>
         </div>";}
};
function neworderrand(){
    global $con;
			$get_t = "select *from order_master where date = CURDATE()  order by rand() limit 3";
			$run_t = mysqli_query($con,$get_t);
			$rowcount=mysqli_num_rows($run_t);
			if ($rowcount>0) {
                echo "<table class='table bg-info text-white table-hover mt-4'>
                <thead>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Order Id</th>
                      <th scope='col'>PayOrder ID</th>
                      <th scope='col'>Menu Id</th>
                      <th scope='col'>Package Id</th>
                    </tr>
                  </thead>
                  <tbody>";
			$srno = 0;
			while ($row_t=mysqli_fetch_array($run_t)) {
                $srno+=1;
				$orderid = $row_t['order_id'];
				$porderid = $row_t['payorder_id'];
				$menuid = $row_t['menu_id'];
				$packageid = $row_t['package_id'];
				echo "
                    <tr>
                        <th scope='row'>$srno</th>
                        <td>$orderid</td>
                        <td>$porderid</td>
                        <td>$menuid</td>
                        <td>$packageid</td>
                    </tr>
                   ";
			}
            echo "</tbody>
            </table>";
		}
		else{
			echo "<h3 class='display-1'>Recently No One Ordered!</h3>";
		}
};
function viewallorders(){
    global $con;
    $get_t = "select *from order_master";
    $run_t = mysqli_query($con,$get_t);
    $rowcount=mysqli_num_rows($run_t);
    if ($rowcount>0) {
       
    $srno = 0;
    while ($row_t=mysqli_fetch_array($run_t)) {
        $srno+=1;
        $orderid = $row_t['order_id'];
        $porderid = $row_t['payorder_id'];
        $menuid = $row_t['menu_id'];
        $packageid = $row_t['package_id'];
        if ($menuid > 0) {
            # code...
            $q = "select m_image,m_name,m_details,m_price from menu where m_id = $menuid";
            $r = mysqli_query($con,$q);
            if ($r) {
                # code...
                $rc = mysqli_num_rows($r);
                if ($rc > 0) {
                    # code...
                    while ($row = mysqli_fetch_array($r)) {
                        # code...
                        $mimage = $row['m_image'];
                        $mname = $row['m_name'];
                        $mdetails = $row['m_details'];
                        $mprice = $row['m_price'];
                    }
                    echo "		
                    <tr>
                        <th scope='row'>$srno</th>
                        <td>$orderid</td>
                        <td><img src='../cook/menuimages/$mimage' style='width:100px;height:100px;'></td>
                        <td>$mname</td>
                        <td>--------</td>
                        <td>$mprice</td>
                        <td>
                        
                                <button class='btn btn-success  edit' name='edit' id='$orderid'>View</button>
                        
                                
                           
                                <button class='btn btn-danger ml-1 delete' id='$orderid'>Delete</button>
                      
                        </td>
                    </tr>";
                }
            }
        }
        else {
            # code...
            $q1 = "select menu_id,menu_name,package_days,package_price from package where package_id = $packageid";
            $r1 = mysqli_query($con,$q1);
            if ($r1) {
                # code..
                $rc1 = mysqli_num_rows($r1);
                if ($rc1 > 0) {
                    # code...
                    while ($row1 = mysqli_fetch_array($r1)) {
                        # code...
                        $mid = $row1['menu_id'];
                        $menuname = $row1['menu_name'];
                        $pdays = $row1['package_days'];
                        $pprice = $row1['package_price'];
                        $q3 = "select m_image from menu where m_id = $mid";
                        $r3 = mysqli_query($con,$q3);
                        if ($r3) {
                            # code...
                            while ($row3 = mysqli_fetch_array($r3)) {
                                # code...
                                $menuimg = $row3['m_image'];
                            }
                        }
                        echo "		
                        <tr>
                            <th scope='row'>$srno</th>
                            <td>$orderid</td>
                            <td><img src='../cook/menuimages/$menuimg' style='width:100px;height:100px;'></td>
                            <td>$menuname</td>
                            <td>$pdays</td>
                            <td>$pprice</td>
                            <td>
                            
                                    <button class='btn btn-success  edit' name='edit' id='$orderid'>View</button>
                            
                                    
                               
                                    <button class='btn btn-danger ml-1 delete' id='$orderid'>Delete</button>
                          
                            </td>
                        </tr>";
                    }
                }
            }
        }

        }
        echo "</tbody>
        </table>";
        }
        else{
            echo "<h3 class='display-1'>Recently No One Ordered!</h3>";
        }
};
function viewcomporders(){
   
    global $con;
    $q4 = "select order_id from delivery_done";
    $r4 = mysqli_query($con,$q4);
    if ($r4) {
        # code...
        $rc4 = mysqli_num_rows($r4);
        if ($rc4 > 0) {
            # code...
            while ($row5 = mysqli_fetch_array($r4)) {
                # code...
                $orderid1 = $row5['order_id'];
                $get_t = "select * from order_master where order_id = $orderid1";
                $run_t = mysqli_query($con,$get_t);
                $rowcount=mysqli_num_rows($run_t);
                if ($rowcount>0) {
                
                $srno = 0;
                while ($row_t=mysqli_fetch_array($run_t)) {
                    $srno+=1;
                    $orderid = $row_t['order_id'];
                    $porderid = $row_t['payorder_id'];
                    $menuid = $row_t['menu_id'];
                    $packageid = $row_t['package_id'];
                    if ($menuid > 0) {
                        # code...
                        $q = "select m_image,m_name,m_details,m_price from menu where m_id = $menuid";
                        $r = mysqli_query($con,$q);
                        if ($r) {
                            # code...
                            $rc = mysqli_num_rows($r);
                            if ($rc > 0) {
                                # code...
                                while ($row = mysqli_fetch_array($r)) {
                                    # code...
                                    $mimage = $row['m_image'];
                                    $mname = $row['m_name'];
                                    $mdetails = $row['m_details'];
                                    $mprice = $row['m_price'];
                                }
                                echo "		
                                <tr>
                                    <th scope='row'>$srno</th>
                                    <td>$orderid</td>
                                    <td><img src='../cook/menuimages/$mimage' style='width:100px;height:100px;'></td>
                                    <td>$mname</td>
                                    <td>--------</td>
                                    <td>$mprice</td>
                                    <td>
                                    
                                            <button class='btn btn-success  edit' name='edit' id='$orderid'>View</button>
                                    
                                            
                                    
                                            <button class='btn btn-danger ml-1 delete' id='$orderid'>Delete</button>
                                
                                    </td>
                                </tr>";
                            }
                        }
                    }
                    else {
                        # code...
                        $q1 = "select menu_id,menu_name,package_days,package_price from package where package_id = $packageid";
                        $r1 = mysqli_query($con,$q1);
                        if ($r1) {
                            # code..
                            $rc1 = mysqli_num_rows($r1);
                            if ($rc1 > 0) {
                                # code...
                                while ($row1 = mysqli_fetch_array($r1)) {
                                    # code...
                                    $mid = $row1['menu_id'];
                                    $menuname = $row1['menu_name'];
                                    $pdays = $row1['package_days'];
                                    $pprice = $row1['package_price'];
                                    $q3 = "select m_image from menu where m_id = $mid";
                                    $r3 = mysqli_query($con,$q3);
                                    if ($r3) {
                                        # code...
                                        while ($row3 = mysqli_fetch_array($r3)) {
                                            # code...
                                            $menuimg = $row3['m_image'];
                                        }
                                    }
                                    echo "		
                                    <tr>
                                        <th scope='row'>$srno</th>
                                        <td>$orderid</td>
                                        <td><img src='../cook/menuimages/$menuimg' style='width:100px;height:100px;'></td>
                                        <td>$menuname</td>
                                        <td>$pdays</td>
                                        <td>$pprice</td>
                                        <td>
                                        
                                                <button class='btn btn-success  edit' name='edit' id='$orderid'>View</button>
                                        
                                                
                                        
                                                <button class='btn btn-danger ml-1 delete' id='$orderid'>Delete</button>
                                    
                                        </td>
                                    </tr>";
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
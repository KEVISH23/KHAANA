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
            <td>$uphone</td>
            <td>
            
                    <button class='btn btn-success edit' name='edit' id='$userid'>View</button>
            
                    <button class='btn btn-warning ml-2 update' id='$userid'>Update</button>
               
                    <button class='btn btn-danger ml-2 delete' id='$userid'>Delete</button>
          
            </td>
        </tr>";
    }
}
else {
    echo "<h3 class='display-1 text-white'>No Cook Registered</h3>";
}

};
?>
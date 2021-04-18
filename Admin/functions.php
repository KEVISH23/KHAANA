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
                       
                            <button class='btn btn-danger mt-2 delete' id='$menuid'>Delete</button>
                  
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

};
?>
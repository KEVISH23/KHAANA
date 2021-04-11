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
			$get_t = "select *from cook order by rand() limit 3 where cook_joindate = CURDATE()";
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
		}
		else{
			echo "<h3>No Menu Available</h3>";
		}
};
?>
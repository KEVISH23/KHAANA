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
?>
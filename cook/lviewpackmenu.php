<?php
session_start();
if (!isset($_SESSION['uname'])) {

	echo "<script>window.open('index.php','_self')</script>";
}
include ("includes.php");
include ("functions.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstyle.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> 

    <title>Menu</title>
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="lindex.php">KHAANA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="lindex.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lcookaboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lcontactcook.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lmenu.php">Menu</a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="lorder.php">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lpackage.php">Our Package Policy</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
		<li class="nav-item" ><a href="#" class="nav-link">
			<?php
				echo "Welcome ". $_SESSION['uname'];
			?>
		</output></a></li>	
	  <li class="nav-item" ><a href="logout.php" class="nav-link">Log out</output></a></li>
           
        </ul>
  </div>
</nav>
<!--END NAVBAR-->


<nav aria-label="breadcrumb ">
    <ol class="breadcrumb justify-content-center " >
    <li  class="breadcrumb-item " ><a href="lmenu.php"> Add Menu </a></li>
      <li class="breadcrumb-item" ><a href="lviewmenu.php">View Menu</a></li> 
      <li class="breadcrumb-item" ><a href="lpackmenu.php">Upgrade Menu</a></li>
      <li class="breadcrumb-item active" >View Upgraded Menu</li> 
    </ol>
  </nav>


  <?php
    cookviewupgrademenu();
  ?>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Dish Name</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Package Days</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Dish Price</label>
              <input type="text" class="form-control" id="dpriceEdit" name="dpriceEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="1 week" name="pack" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                1 Week
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="1 month" name="pack" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                1 Month
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="3 month" name="pack" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                3 Month
            </label>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </form>
            </div>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
    </div>
  </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
</script>
<script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode.parentNode.parentNode;
        console.log(tr);
        dname = tr.getElementsByTagName("td")[1].innerText;
        ddetails = tr.getElementsByTagName("td")[2].innerText;
        dprice = tr.getElementsByTagName("td")[3].innerText;
        console.log(dname, ddetails,dprice);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        dpriceEdit.value = dprice;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id;

        if (confirm("Are you sure you want to delete this package!")) {
          console.log("yes");
          window.location = `lviewpackmenu.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
    
  </script>
</body>

</html>
<?php
global $con;
if (isset($_POST['update'])) {
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
    $sid = $_POST['snoEdit'];
    $name = $_POST['dnameEdit'];
    $details = $_POST['ddetailsEdit'];
    $price = $_POST['dpriceEdit'];
    $pack = $_POST['pack'];
    #global $con;
    $sql = "update package set cook_id=?,menu_id=?,menu_name=?,package_days=?,package_price=?,package_date=? where menu_id=?";
    $res = mysqli_prepare($con,$sql);
    if ($res) {
        mysqli_stmt_bind_param($res,'iissisi',$cookid,$sid,$name,$pack,$price,$date,$sid);
        $cookid = $id;
        $name = $_POST['dnameEdit'];
        $price = $_POST['dpriceEdit'];
        $pack = $_POST['pack'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s', time());
        $sid = $_POST['snoEdit'];
        if(mysqli_stmt_execute($res)){
          echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
        <strong>Wohoo!</strong>Package Updated Succesfully..
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        echo "<script>window.open('lviewpackmenu.php','_self')</script>";
        }
    }
    else{
      echo "res not set";
    }
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM package WHERE menu_id = $sno";
  $result = mysqli_query($con, $sql);
  echo "<script>window.open('lviewpackmenu.php','_self')</script>";
}
?>
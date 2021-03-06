<?php
session_start();
include ("includes.php");
include ("functions.php");
if (!isset($_SESSION['cname'])) {

echo "<script>window.open('index.php','_self')</script>";
} 
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> 
    <title>Completed Orders</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light ">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php" style="font-family: 'Berkshire Swash';font-size: 22px;">Khaana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="uindex.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uaboutus.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ucontact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="umenu.php">Menu</a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link" href="uorders.php">Orders<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
      <a class="nav-link" href="upackage.php">Tiffin</a>
    </li>
    </ul>
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item text-white">
	  	<a class="nav-link " href="#"style="font-family: 'Cinzel Decorative';font-size: 22px;">
      <?php
		 	if(isset($_SESSION['cname'])){
			 echo "Welcome " . $_SESSION['cname'];
			 }
			 else{
				 echo "Welcome Guest";
			 }
		 ?> 
		 </a>
		</li>
	  
      <li class="nav-item " data-target="#signin" data-toggle="modal"><a href="logout.php" class="nav-link">Logout</a></li>      
        </ul>
  </div>
</nav>
<!--END NAVBAR-->
<!--SIGNUP MODAL-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="uorders.php" style="text-decoration:none; color:orange">My Orders</a></li>
    <li class="breadcrumb-item active">Completed Orders</li>
  </ol>
</nav>
<hr>
</div>
<div class="container mb-3">
     <?php
         showcomporders();
     ?>
</div>
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
              <label for="title">Enter Your Precious Feedback</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp">
            </div>  
            <div class="form-group">
              <label for="title" hidden>Dish Price</label>
              <input type="text" class="form-control" id="dmenuEdit" name="dmenuEdit" aria-describedby="emailHelp" hidden readonly>
            </div>
            <button type="submit" name="confirm" class="btn btn-success">Submit</button>
            </form>
            </div>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
    </div>
  </div>
  
<hr>
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
        menuid = tr.getElementsByTagName("td")[4].innerText;
        dnameEdit.value = ddetails;
        dmenuEdit.value = menuid;
        $('#editModal').modal('toggle');
      })
    })
</script>

  </body>

</html>
<?php
if (isset($_POST['confirm'])) {
    global $con;
    $userid = $_SESSION['cid'];
    $orderid = $_POST['dmenuEdit'];
    $feedback = $_POST['ddetailsEdit'];
    $q = "select cook_id,menu_id,user_id,package_id from order_master where order_id = $orderid";
    $r = mysqli_query($con,$q);
    if ($r) {
      # code...
      $rc = mysqli_num_rows($r);
      if ($rc > 0) {
        # code...
        while ($row = mysqli_fetch_array($r)) {
          # code...
          $cookid = $row['cook_id'];
          $menuid = $row['menu_id'];
          $userid = $row['user_id'];
          $packid = $row['package_id'];
        }
      }
    }
    date_default_timezone_set('Asia/Kolkata'); 
    $time = date("H:i:s");
    $date = date('Y-m-d');
    $qry = "insert into feedback(order_id,user_id,cook_id,menu_id,package_id,description,date,time) VALUES ($orderid,$userid,$cookid,$menuid,$packid,'$feedback','$date','$time')";
    $run = mysqli_query($con,$qry);
    if ($run) {
      echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Okay</strong>Feedback Submited....
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
              echo "<script>window.open('ucomporders.php','_self')</script>";        
    }
    else {
      echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
							<strong>Ooops!</strong> Something Went Wrong...
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
							</div>";
              
    }

}
?>
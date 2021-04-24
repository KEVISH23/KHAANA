<?php
session_start();
if (!isset($_SESSION['dname'])) {

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
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Bigshot One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstyle.css">
    <title>Orders</title>
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" style="font-family: 'Berkshire Swash';font-size: 22px;" href="lindex.php">Khaana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        <a class="nav-link" href="lindex.php">Home </a>
      </li>
      <li class="nav-item">
     
        <a class="nav-link" href="ldelabout.php">About Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ldelcontact.php">Contact Us</a>
      </li>
 
      <li class="nav-item">
      <li class="nav-item active">
        <a class="nav-link" href="ldelorder.php">Order</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
		<li class="nav-item" ><a href="#" class="nav-link" style="font-family: 'Cinzel Decorative';font-size: 22px;">
    <?php
				echo "Welcome ".$_SESSION['dname'];
			?>
		</output></a></li>	
	  <li class="nav-item" ><a href="logout.php" class="nav-link">Log out</output></a></li>
           
        </ul>
  </div>
</nav>

  
<div class="page-content p-5" id="content">


<h2 class="display-2 text-white mb-2 ">Orders</h2><br>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb ">
      <li class="breadcrumb-item active">Total  Orders</li>
      <li class="breadcrumb-item"><a href="lacceptorder.php">Accepted Order</a></li>
      
    </ol>
  </nav>
  
  <div>
  <br>
  <h3 class="display-4 text-white offset-5">Total Orders</h3>      
   </div>

   <?php
      showallorder();
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
              <label for="title">Customer Name</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Customer Address</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Cook Address</label>
              <input type="text" class="form-control" id="caddEdit" name="caddEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title" hidden>Order Id</label>
              <input type="text" class="form-control" id="orderidEdit" name="orderidEdit" aria-describedby="emailHelp" hidden readonly>
            </div>
            <button type="submit" name="confirm" class="btn btn-success">Comfirm Delivery</button>
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
        cadd = tr.getElementsByTagName("td")[3].innerText;
        orderid = tr.getElementsByTagName("td")[6].innerText;
        console.log(dname, ddetails,cadd,orderid);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        caddEdit.value = cadd;
        orderidEdit.value = orderid;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
</script>
  </body>

</html>
<?php
if (isset($_POST['confirm'])) {
  # code...
  $orderid = $_POST['orderidEdit'];
  global $con;
  date_default_timezone_set('Asia/Kolkata');
		$time = date("H:i:sA"); 
    $date = date('Y-m-d H:i:s');
  $delid = $_SESSION['did'];
  $q = "insert into accepted_order(order_id,delivery_id,date,time) values($orderid,$delid,'$date','$time')";
  $r = mysqli_query($con,$q);
  if ($r) {
    # code...
    echo "<script>window.open('ldelorder.php','_self')</script>";
  }
}
?>
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
    <title>Menu</title>
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
        <a class="nav-link" href="umenu.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="uorders.php">Orders</a>
      </li>
      <li class="nav-item ">
      <li class="nav-item  active">
      <a class="nav-link" href="upackage.php">Tiffin<span class="sr-only">(current)</span></a>
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
<hr>
</div>
<div class="container mb-3">
     <?php
         showpack ();
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
          <form method="post" action="paytm/PaytmKit/TxnTest.php">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Tiffin Name</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Tiffin Details</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Tiffin Price</label>
              <input type="text" class="form-control" id="dpriceEdit" name="dpriceEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Duration</label>
              <input type="text" class="form-control" id="ddurationEdit" name="ddurationEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title" hidden>Dish Price</label>
              <input type="text" class="form-control" id="dmenuEdit" name="dmenuEdit" aria-describedby="emailHelp" hidden readonly>
            </div>
            <button type="submit" name="confirm" class="btn btn-success">Confirm Order</button>
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
        dname = tr.getElementsByTagName("td")[2].innerText;
        ddetails = tr.getElementsByTagName("td")[3].innerText;
        dprice = tr.getElementsByTagName("td")[4].innerText;
        duration = tr.getElementsByTagName("td")[5].innerText;
        menuid = tr.getElementsByTagName("td")[6].innerText;
        console.log(dname, ddetails,dprice,duration,menuid);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        dpriceEdit.value = dprice;
        ddurationEdit.value = duration;
        dmenuEdit.value = menuid;
        $('#editModal').modal('toggle');
      })
    })
</script>

  </body>

</html>
<?php
if (isset($_POST['confirm'])) {
  echo "<script>window.open('paytm/PaytmKit/TxnTest.php','_self')</script>";
}
?>
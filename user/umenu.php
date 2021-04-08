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


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstyle.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> 
    <title>User</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light ">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php">KHAANA</a>
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
      <li class="nav-item  active">
        <a class="nav-link" href="umenu.php">Menu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Payment</a>
    </li>
    </ul>
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item text-white">
	  	<a class="nav-link" href="#">
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
         showmenu();
     ?>
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
        menuid = tr.getElementsByTagName("td")[5].innerText;
        console.log(dname, ddetails,dprice,menuid);
      })
    })
</script>

  </body>

</html>
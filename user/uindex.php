
<?php
session_start();
include ("includes.php");
include ("functions.php");
if (!isset($_SESSION['uname'])) {

	echo "<script>window.open('index.php','_self')</script>";
} 
?>

<html>
<head>
	<title>user</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/lstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
				<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light ">
<img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php">KHAANA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="uindex.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="uaboutus.php">About us </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="ucontact.php">Contact us </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Checkout</a>
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
	  <?php 
		
		
	?>
      	<li class="nav-item " data-target="#" data-toggle="modal"><a href="logout.php" class="nav-link">Logout</a></li>      </ul>
  </div>
</nav>
<!-- Carousel -->
<div class="container-fluid slider">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active" style="margin-top: 30px;">
	      <img class="d-block w-100" src="images/thali3.jpg" alt="First slide" style="height: 90vh;">
	    </div>
	    <div class="carousel-item" style="margin-top: 30px;">
	      <img class="d-block w-100" src="images/thali.jpg" alt="Second slide" style="height: 90vh;">
	    </div>
	    <div class="carousel-item" style="margin-top: 30px;">
	      <img class="d-block w-100" src="images/thali2.jpg" alt="Third slide" style="height: 90vh;">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<!--Services-->
<section class="container text-center service">
	<h1>Packages</h1>

	<div class="row rowsetting">
		<div class="col-mg-4 col-md-4 col-sm-4 col-1o d-block m-auto colsetting">
			<div class="imgsetting d-block m-auto bg-warning">
      <i class="fa fa-calendar fa-2x text-white" aria-hidden="true"></i>
			</div>
			<h2>1 WEEK</h2>
			<p>BOOK A TIFFIN FOR  1 WEEK AND ENJOY YOUR DAILY TIFFIN PROVIDED BY OUR COOKS. COST MAY VARRY BY COOKS</p>
		</div>
		<div class="col-mg-4 col-md-4 col-sm-4 col-1o d-block m-auto colsetting">
			<div class="imgsetting d-block m-auto bg-warning">
			<i class="fa fa-calendar fa-2x text-white" aria-hidden="true"></i>
			</div>
			<h2>1 MONTH</h2>
			<p>BOOK A TIFFIN FOR  1 WEEK AND ENJOY YOUR DAILY TIFFIN PROVIDED BY OUR COOKS. COST MAY VARRY BY COOKS</p>
		</div>
		<div class="col-mg-4 col-md-4 col-sm-4 col-1o d-block m-auto colsetting">
			<div class="imgsetting d-block m-auto bg-warning">
      <i class="fa fa-calendar fa-2x text-white" aria-hidden="true"></i>
			</div>
			<h2>3 MONTH</h2>
			<p>BOOK A TIFFIN FOR  1 WEEK AND ENJOY YOUR DAILY TIFFIN PROVIDED BY OUR COOKS. COST MAY VARRY BY COOKS</p>
		</div>
	</div>
</section>
<!--team-->
<div class="teams text-center">
	<div class="container text-center teamcont">
		<h3 class="text-white">Menu</h3>
		<h4 class="text-white">BEST PLACE TO GET TASTE OF HAME MADE FOOD</h4><br>

		<div class="container">
<div class="row ">
<div class="col-md-4 col-sm-4 py-3 py-sm-0">

	<div class="card p-1">
		<img src="images/khaman.jpg" class="card-img-top img-fluid"  alt="...">
		
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- KHAMAN</li>
		  <li class="list-group-item">Price :- 100</li>
		</ul>
		
	  </div>

</div>


<div class="col-md-4 col-sm-4 py-3 py-sm-0">
	<div class="card p-1">
		<img src="images/gj.jpg" class="card-img-top img-fluid "  alt="...">	
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- Gulab Jamun</li>
		  <li class="list-group-item">Price :- 250</li>
		  
		</ul>
		
	  </div>

</div>

<div class="col-md-4 col-sm-4 py-3 py-sm-0">

	<div class="card p-1">
		<img src="images/ghughra.jpg" class="card-img-top img-fluid"  alt="...">
		
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- Ghughra</li>
		  <li class="list-group-item">Price :- 150</li>
		</ul>
		
	  </div>

</div>


</div>


	</div>
	<div class="container">
		<div class="row text-center"></div>
	</div>						
</div>
<!--Footer-->
<div class="container-fluid footer text-center">
	<h4>&copy; Copyright section khaana.com</h4>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<!--php code to signin a customer-->

<!--php code to signin a customer-->



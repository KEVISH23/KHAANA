<?php
session_start();
if (!isset($_SESSION['uname'])) {

	echo "<script>window.open('index.php','_self')</script>";
}
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lstyle.css">
    <title>About US</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="lcookaboutus.php">About Us<span class="sr-only">(current)</span></a>
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
		<li class="nav-item" ><a href="#" class="nav-link" style="font-family: 'Cinzel Decorative';font-size: 22px;">
			<?php
				echo "Welcome ". $_SESSION['uname'];
			?>
		</output></a></li>	
	  <li class="nav-item" ><a href="logout.php" class="nav-link">Log out</output></a></li>
           
        </ul>
  </div>
</nav>
<!--END NAVBAR-->
  

<div class="container text-center p-3 mt-4">
		<h3 style="font-family: 'Bevan';font-size: 22px;">ABOUT US</h3>
	   </div>
	


<div class="container mt-4">
<div class="row">
    <div class="col-sm-6 col-lg-6 mt-4 mb-2" >
    <img class="img-fluid" src="images/KHHANA.jpg" width="auto" height="auto">
    </div>
    <div class="col-sm-6 col-lg-6 mt-4 mb-2"  id="grad1" >
    <h2 class="text-center">About US</h2>
			<h4 class="text-center" style="font-family: 'Bigshot One';font-size: 35px;">Khaana was established in 2020-21<br>Khaana was made by kav<br>Khaana give home made food
			<br>dil ka dariya beh hi gaya</h4>
  </div>

<hr>
	<hr>
<div class="container text-center p-5 mt-4">
	<h3 style="font-family: 'Bevan';font-size: 22px;">TEAM</h3>
   </div>

	  
<div class="container">
<div class="row ">
<div class="col-md-4 col-sm-4 py-3 py-sm-0">

	<div class="card" >
		<img src="images/vs.jpeg" class="card-img-top img-fluid"  alt="...">
		
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- Vatsal Sheth</li>
		  <li class="list-group-item">Age :- 20</li>
		  <li class="list-group-item">Post :- Admin</li>
		</ul>
		
	  </div>

</div>


<div class="col-md-4 col-sm-4 py-3 py-sm-0">
	<div class="card" >
		<img src="images/kt.jpeg" class="card-img-top img-fluid "  alt="..." style="height: 350px;">	
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- Kevish Thakkar</li>
		  <li class="list-group-item">Age :- 20</li>
		  <li class="list-group-item">Post :- Admin</li>
		</ul>
		
	  </div>

</div>

<div class="col-md-4 col-sm-4 py-3 py-sm-0">

	<div class="card" >
		<img src="images/as.jpeg" class="card-img-top img-fluid"  alt="..." style="height: 350px;">
		
		<ul class="list-group list-group-flush">
		  <li class="list-group-item">Name :- Akhil Shah</li>
		  <li class="list-group-item">Age :- 20</li>
		  <li class="list-group-item">Post :- Admin</li>
		</ul>
		
	  </div>

</div>


</div>

<hr>



</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>

<html>
<head>
	<title>user</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
				<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light ">
<img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php">Khaana</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="aboutus.php">About us </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contact.php">Contact us </a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Menu</a>
      </li>
    </ul>
      <ul class="navbar-nav ml-auto">
	  <li class="nav-item text-white">
	  	<a class="nav-link" href="#">
		 <?php
		 	if(isset($_SESSION['cemail'])){
			 echo "Welcome," . $_SESSION['cemail'];
			 }
			 else{
				 echo "Welcome Guest";
			 }
		 ?> 
		 </a>
		</li>
	  <?php 
		
		if(isset($_SESSION['cemail'])){
			echo "<li class='nav-item'><a href='logout.php' class='nav-link'>Log Out</a></li>";
		}
		else{
			echo "<li class='nav-item' data-target='#login' data-toggle='modal'><a href='#' class='nav-link'>Log In</a></li>";
			
		}
	?>
      	<li class="nav-item " data-target="#signin" data-toggle="modal"><a href="#" class="nav-link">Sign Up</a></li>      </ul>
  </div>
</nav>
<!--SIGNUP MODAL-->
<div class="container">
	<div class="modal" id="signin">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header  text-center">
					<h3>Sign Up</h3>
					
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
				
					<form action="index.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" name="c_name" placeholder="Enter Name" required>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="c_email" placeholder="Enter Email" required>
						</div>
						<div class="form-group">
							<label for="Phnno">Phone No.</label>
							<input type="text" class="form-control" id="Phnno" name="c_phone" placeholder="Enter Phone No." required>
						</div>
						<div class="form-group">
							<label for="inputimg">Image</label>
							<input type="file" class="form-control" id="inputimg" name="c_img" required>
						</div>
						<div class="form-group">
							<label for="inputadd">Address</label>
							<input type="text" class="form-control" id="inputadd" name="c_add" placeholder="Enter Address" required>
						</div>
						<div class="form-group">
							<label for="inputpass">Password</label>
							<input type="password" class="form-control" id="inputpass" name="c_pass" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<label for="inputcpass">Confirm Password</label>
							<input type="password" class="form-control" id="inputcpass" name="c_cpass" placeholder="Confirm Password" required>
						</div>
						<div class="form-row">
								<div class="form-group col-md-6  text-center">
									<button type="submit" class="btn btn-success" name="csubmit">Submit</button>
								</div>
								<div class="form-group col-md-6 text-center">
									<button type="cancel" class="btn btn-danger" name="ccancel" data-dismiss="modal">Cancel</button>
								</div>
							</div>
							<div class="form-row">
								<div class="from-row col-md-12 col-sm-12">
									<h5>Already Have an Account, <a href="#login" style="text-decoration:none;" data-toggle="modal" data-dismiss="modal">Log In</a></h5>	
								</div>
							</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>	
<!--Login MODAL-->
<div class="container">
	<div class="modal" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header  text-center">
					<h3>Log In</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="index.php" method="post" enctype="multipart/form-data">
						
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="s_email" placeholder="Enter Email" required>
						</div>
						
						<div class="form-group">
							<label for="inputpass">Password</label>
							<input type="password" class="form-control" id="inputpass" name="s_pass" placeholder="Enter Password" required>
						</div>
						

							<div class="form-row">
								<div class="form-group col-md-6 col-10 text-center">
									<button type="submit" class="btn btn-success" name="ssubmit">Submit</button>
								</div>
								<div class="form-group col-md-6 col-10 text-center">
									<button type="cancel" class="btn btn-danger" name="scancel" data-dismiss="modal">Cancel</button>
								</div>
							</div>
							<div class="form-row">
								<div class="from-row col-md-12 col-sm-12">
									<h5>New One <a href="#signin" style="text-decoration:none;" data-toggle="modal"  data-dismiss="modal">Register Here</a></h5>	
								</div>
							</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
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
      <i class="fa fa-calendar fa-3x text-white" aria-hidden="true"></i>
			</div>
			<h2>1 WEEK</h2>
			<p>BOOK A TIFFIN FOR  1 WEEK AND ENJOY YOUR DAILY TIFFIN PROVIDED BY OUR COOKS. COST MAY VARRY BY COOKS</p>
		</div>
		<div class="col-mg-4 col-md-4 col-sm-4 col-1o d-block m-auto colsetting">
			<div class="imgsetting d-block m-auto bg-warning">
			<i class="fa fa-calendar fa-3x text-white" aria-hidden="true"></i>
			</div>
			<h2>1 MONTH</h2>
			<p>BOOK A TIFFIN FOR  1 WEEK AND ENJOY YOUR DAILY TIFFIN PROVIDED BY OUR COOKS. COST MAY VARRY BY COOKS</p>
		</div>
		<div class="col-mg-4 col-md-4 col-sm-4 col-1o d-block m-auto colsetting">
			<div class="imgsetting d-block m-auto bg-warning">
      <i class="fa fa-calendar fa-3x text-white" aria-hidden="true"></i>
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
		<h4 class="text-white">BEST PLACE TO GET TASTE OF HAME MADE FOOD</h4>
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




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>User</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php">KHAANA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item text-white">
	  	<a class="nav-link" href="#">
		 Welcome Guest 
		 </a>
		</li>
	  <li class="nav-item" data-target="#login" data-toggle="modal"><a href="#" class="nav-link">Log In</a></li>
      <li class="nav-item " data-target="#signin" data-toggle="modal"><a href="#" class="nav-link">Sign Up</a></li>      
        </ul>
  </div>
</nav>
<!--END NAVBAR-->
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
							<input type="text" class="form-control" id="inputName" name="u_name" placeholder="Enter Name" required>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" id="inputEmail" name="u_email" placeholder="Enter Email" required>
						</div>
						<div class="form-group">
							<label for="Phnno">Phone No.</label>
							<input type="text" class="form-control" id="Phnno" name="u_phone" placeholder="Enter Phone No." required>
						</div>
						<div class="form-group">
							<label for="inputimg">Image</label>
							<input type="file" class="form-control" id="inputimg" name="u_img" required>
						</div>
						<div class="form-group">
							<label for="inputadd">Address</label>
							<input type="text" class="form-control" id="inputadd" name="u_add" placeholder="Enter Address" required>
						</div>
                        <div class="form-group">
							<label for="inputadd">Gender</label>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="u_gen" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="u_gen" id="flexRadioDefault1" value="Female">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Female
                            </label>
                        </div>
                        </div>
						
						<div class="form-group">
							<label for="inputpass">Password</label>
							<input type="password" class="form-control" id="inputpass" name="u_pass" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<label for="inputcpass">Confirm Password</label>
							<input type="password" class="form-control" id="inputcpass" name="u_cpass" placeholder="Confirm Password" required>
						</div>
						<div class="form-row">
								<div class="form-group row-md-6  offset-3">
									<button type="submit" class="btn btn-success" name="usubmit">Submit</button>
								</div>
								<div class="form-group row-md-6 offset-2">
									<button type="cancel" class="btn btn-danger" name="ucancel" data-dismiss="modal">Cancel</button>
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
	<!-- logo and form -->
	<div class="container cook"  >
  
	<div class="row">
		<div class="col-sm-6 col-lg-6" >
		<img class="img-fluid" src="images/KHHANA.jpg" width="auto" height="auto">
		</div>
		<div class="col-sm-6 col-lg-6"  id="grad1" >
		<h2>CONTACT US</h2>
		<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="usr" name="name" placeholder="enter your name">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="enter your email id">
		</div>
		<div class="form-group">
			<label for="msg">Message</label>
			<input type="text" class="form-control" id="msg" name="msg" placeholder="message">
		</div>
			<div class="row" style="margin-left: 40px;">
				<div class="col-sm-6" >
					<button type="button" class="btn btn-primary active">submit</button>
				</div>
				<div class="col-sm-6">
				<button type="button" class="btn btn-primary active">cancel</button>
				</div>
			</div>
		</div>
	</div>

</div>
	<!-- logo and form end-->
<div class="container">
	<div class="row rowco">
		<div class="col-sm-4 address"> Address 
		<ul class="list-group list-group-flush">
		  <li class="list-group-item address1">rcti.near gujrat high court <br> ahemdabad  </li>
		
		</ul>
		</div>
		<div class="col-sm-4 phn"> Phone no.
		<ul class="list-group list-group-flush">
		  <li class="list-group-item phn1"> 8155443322</li>
		  
		</ul>
		</div>
		<div class="col-sm-4 email">Email id
		<ul class="list-group list-group-flush">
		  <li class="list-group-item email1">tsf@gmail.com </li>
		  
		</ul>
		</div>

	  </div>
	  </div>
	 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
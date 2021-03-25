

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/package.css">
    <title>Cook</title>
  </head>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <img src="images/khaana.png" class="logohere" alt="logo">
  <a class="navbar-brand" href="index.php">KHAANA</a>
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
      <li class="nav-item active">
        <a class="nav-link" href="lpackage.php">Our Package Policy</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
	 
	  <li class="nav-item" data-target="#login" data-toggle="modal"><a href="#" class="nav-link">Log out</output></a></li>
           
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
							<label for="inputadd">Gender</label>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="c_gen" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="c_gen" id="flexRadioDefault1" value="Female">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Female
                            </label>
                        </div>
                        </div>
						<div class="form-group">
							<label for="inputadd">Expertise</label>
							<input type="text" class="form-control" id="inputadd" name="c_speciality" placeholder="Enter Your Expertise" required>
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

   <div class="image-container">
        <div class="text">PACKAGE</div>
    </div>
   <!--  <div id="div3" class="ease">
     -->   
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center" style="position:inherit;">  
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#section1">Section 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#section2">Section 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="#section3">Section 3</a>
          
        </ul>
      </nav>
      <div class="container" >
      <div class="row">
      <div id="section1" class="col-sm-12 nav1 " style="padding-top:70px;padding-bottom:70px">
        <h1 style="text-align: center;">GOLD</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>
      </div>
      <div class="row">
      <div id="section2" class="col-sm-12 nav2" style="padding-top:70px;padding-bottom:70px">
        <h1 style="text-align: center;">SILVER</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      </div>
    </div>
    <div class="row">
      <div id="section3" class="col-sm-12 nav3" style="padding-top:70px;padding-bottom:70px">
        <h1 style="text-align: center;">PRIMIUM</h1>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
        <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
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
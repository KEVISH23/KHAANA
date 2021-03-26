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
    <title>Cook</title>
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
    <li  class="breadcrumb-item active " >Add Menu</li>
      <li class="breadcrumb-item" ><a href="#">View Menu</a></li>  
    </ol>
  </nav>

<div class="container mt-5" >
     <div class="row justify-content-center" >
       <div class="col-lg-8" >
       <form action="lmenu.php" method="post" enctype="multipart/form-data">
          <div class="form-group flabel" >
            <label for="inputdelivery"style="color:yellow;">Dish Name</label>
            <input type="text" class="form-control"  id="inputdelivery" name="dname" placeholder="Enter Dish Name" required>
          </div>

          <div class="form-group flabel mt-5" >
            <label for="inputdelivery"style="color:yellow;">Dish Details</label>
            <input type="text" class="form-control"  id="inputdelivery" name="ddetails" placeholder="Enter Dish Details" required>
          </div>

          <div class="form-group flabel mt-5" >
            <label for="inputdelivery"style="color:yellow;">Dish Price</label>
            <input type="text" class="form-control"  id="inputdelivery" name="dprice" placeholder="Enter Dish Price" required>
          </div>

          <div class="form-group flabel mt-5" >
            <label for="inputdelivery"style="color:yellow;">Dish Photo</label>
            <input type="file" class="form-control" id="inputimg" name="dphoto" required>
          </div>

          <div class="form-row">
								<div class="form-group col-md-6  text-center">
									<button type="submit" class="btn btn-success" name="msub">Submit</button>
								</div>
								<div class="form-group col-md-6 text-center">
									<button type="cancel" class="btn btn-danger" name="mcancel">Cancel</button>
								</div>
							</div>
             
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
</div>






<hr>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST['msub'])) {
  addmenu();
}
?>
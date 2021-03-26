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
    

<nav aria-label="breadcrumb">
    <ol class="breadcrumb" >
    <li  class="breadcrumb-item active" >Add Menu</li>
      <li class="breadcrumb-item" ><a href="#">View Menu</a></li>  
    </ol>
  </nav>

<div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form>
          <div class="form-group flabel">
            <label for="inputdelivery"style="color:yellow;">Dish Name</label>
            <input type="text" class="form-control" id="inputdelivery" name="dname" placeholder="Enter Dish Name" required>
          </div>
             
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
</div>

<div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form>
          <div class="form-group flabel">
            <label for="inputdelivery" style="color:yellow;">Dish Details</label>
            <input type="text" class="form-control" id="inputdelivery" name="ddetails"  placeholder="Enter Dish Details" required>
          </div>
             
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
</div>

<div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form>
          <div class="form-group flabel">
            <label for="inputdelivery" style="color:yellow;">Dish Price</label>
            <input type="text" class="form-control" id="inputdelivery" name="dprice" placeholder="Enter Dish Price" required>
          </div>
             
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
</div>

<div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form>
          <div class="form-group flabel">
            <label for="inputdelivery" style="color:yellow;">Dish Photo</label>
            <input type="text" class="form-control" id="inputdelivery" name="dphoto"  placeholder="Enter Dish Photo" required>
          </div>
             
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
</div>
<br>
</div>
			<div class="row" style="text-align:center;">
				<div class="row-lg-2 offset-5" >
					<button type="submit" name="msub" class="btn btn-success active">Submit</button>
				</div>
				<div class="col-sm-2">
				<button type="reset" name="mcan" class="btn btn-danger active">Cancel</button>
				</div>
			</div>
		</div>
<hr>
</body>
</html>
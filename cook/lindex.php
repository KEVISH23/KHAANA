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



	<!--BANNER-->
	<div class="banner">
		<div class="container-fluid d-flex align-items-center justify-content-center welcome">
			<div class=" d-flex flex-column justify-content-center align-items-center">
				<div><h1 class="display-3 text-white">Hey Chef!</h1></div>
				<div><h1 class="display-3 text-white">Place Your</h1></div>
        <div><h1 class="display-3 text-white">Menu</h1></div>
				<div><a href="lmenu.php" class="btn btn-success menubtn">Click Here</a></div>
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
<?php
#signin
if(isset($_POST['csubmit'])){
	global $con;
	

	$cname = $_POST['c_name'];
	$cemail = $_POST['c_email'];
	$cphone = $_POST['c_phone'];
	$cgen = $_POST['c_gen'];
	$cadd = $_POST['c_add'];
	$cpass = $_POST['c_pass'];
	$ccpass = $_POST['c_cpass'];
	$speciality = $_POST['c_speciality'];
	$cimage = $_FILES['c_img']['name'];
	$cimage_tmp = $_FILES['c_img']['tmp_name'];
	

	if ($cpass != $ccpass) {
		echo "<script>alert('Password Must Be Same!!')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		#$hpass = password_hash('$cpass',PASSWORD_DEFAULT);
		move_uploaded_file($cimage_tmp,"cookimages/$cimage");

		$stmt = $conn->prepare("INSERT INTO cook (cook_name,cook_address,cook_email,cook_password,cook_gender,cook_phn,cook_photo,cook_expertise,cook_joindate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		echo $stmt;
		$stmt->bind_param("sss", $cname, $cadd, $cemail, $cpass,$cgen,$cphone,$cimage,$speciality,date());
	#$insquery = "insert into customer (cip,cname,cemail,cphnno,cimage,caddress,cpassword) values ('$ip','$cname','$cemail','$cphone','$cimage','$cadd','$cpass')";
	#$insert = mysqli_query($con,$insquery);

	#if ($insert) {
	#	echo "<script>alert('Registered Succesfully')</script>";
	#}
}
}
?>
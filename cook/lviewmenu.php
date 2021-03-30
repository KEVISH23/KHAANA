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
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> 

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
    <li  class="breadcrumb-item " ><a href="lmenu.php"> Add Menu </a></li>
      <li class="breadcrumb-item active" >View Menu</li>  
    </ol>
  </nav>
<div class="container mt-4">

  <?php
    cookviewmenu();
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
        <form action="lviewmenu.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Dish Name</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="title">Dish Details</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="title">Dish Price</label>
              <input type="text" class="form-control" id="dpriceEdit" name="dpriceEdit" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </form>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
    </div>
  </div>
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
        dname = tr.getElementsByTagName("td")[1].innerText;
        ddetails = tr.getElementsByTagName("td")[2].innerText;
        dprice = tr.getElementsByTagName("td")[3].innerText;
        console.log(dname, ddetails,dprice);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        dpriceEdit.value = dprice;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    
  </script>
</body>

</html>
<?php
if (isset($_POST['update'])) {
    $id = $_POST['snoEdit'];
    $name = $_POST['dnameEdit'];
    $details = $_POST['ddetailsEdit'];
    $price = $_POST['dpriceEdit'];
    global $con;
    $sql = "update menu set m_name=?,m_details=?,m_price=?,m_date=? where m_id=?";
    $res = mysqli_prepare($con,$sql);
    if ($res) {
        mysqli_stmt_bind_param($res,'ssis',$name,$ddetails,$price,$date);
        $name = $_POST['dnameEdit'];
        $details = $_POST['ddetailsEdit'];
        $price = $_POST['dpriceEdit'];
        date_default_timezone_set('Asia/Kolkata');
        $date = date('Y-m-d H:i:s', time());
        mysqli_stmt_execute($res);
    }
}
?>
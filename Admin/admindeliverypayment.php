<!DOCTYPE html>
<html>
<head>
    <title>Delivery Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="AdminIndex.css">
    <script src="https://use.fontawesome.com/39ee710c49.js"></script>
</head>
<body>
 
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center">
      <img loading="lazy" src="images.png" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">KAV</h4>
        <p class="font-weight-normal text-muted mb-0">Admin</p>
      </div>
    </div>
  </div>

  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu</p>

  <ul class="nav flex-column bg-light mb-0">
    <li class="nav-item">
      <a href="AdminIndex.php" class="nav-link text-dark bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Dashboard
            </a>
    </li>
    <li class="nav-item">
      <a href="menu.php" class="nav-link text-dark" >
                <i class="fa fa-file-text mr-3 text-primary fa-fw"></i>
                Menu
            </a>
    </li>
    <li class="nav-item">
      <a href="Adminorders.php" class="nav-link text-dark">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Orders
            </a>
    </li>
    <li class="nav-item">
      <a href="admincook.php" class="nav-link text-dark">
        <i class="fa fa-users mr-3 text-primary fa-fw" aria-hidden="true "></i>
                Cook
            </a>
    </li>
 
    <li class="nav-item">
      <a href="adminuser.php" class="nav-link text-dark">
        <i class="fa fa-user-circle mr-3 text-primary fa-fw" aria-hidden="true"></i>
                Customer
            </a>
    </li>
    <li class="nav-item">
      <a href="admindelivery.php" class="nav-link text-dark">
                <i class="fa fa-motorcycle mr-3 text-primary fa-fw"></i>
                Delivery Details
            </a>
    </li>
    <li class="nav-item">
      <a href="adminfeedback.php" class="nav-link text-dark">
                <i class="fa fa-check-square-o mr-3 text-primary fa-fw"></i>
                Feedbacks
            </a>
    </li>
    <li class="nav-item">
      <a href="adminpackage.php" class="nav-link text-dark">
                <i class="fa fa-shopping-basket mr-3 text-primary fa-fw"></i>
                Packages
            </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

  <!-- Demo content -->
  <h2 class="display-4 text-white mb-2">Delivery Details</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admindelivery.php">Recent Delivery</a></li>
      <li class="breadcrumb-item"><a href="adminvalldelivery.php">View All Delivery</a></li>
      <li class="breadcrumb-item"><a href="adminparticulardel.php">View Particular Delivery</a></li>
      <li class="breadcrumb-item active">Payment</li>
      
    </ol>
  </nav>
<!--FORM FOR DELIVERY BOY PAYMENT-->
   <div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form>
          <div class="form-group flabel">
            <label for="inputdelivery">Enter ID</label>
            <input type="text" class="form-control" id="inputdelivery"  placeholder="Enter Delivery Man ID" required>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-6 col-sm-6">
                <button type="submit" class="btn btn-success btn-block" form="modal-details" data-toggle="modal" data-target="#exampleModal">Pay</button>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-6">
                <button type="reset" class="btn btn-danger btn-block">Cancel</button>
              </div>
            </div>
          </div>     
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>
   <!--QR CODE MODAL-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Scan QR Code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <img src="images/qr.png" alt="" class="img-fluid">
        </div>
        <div class="container">
          <div class="row">
            <div class="col"></div>
            <div class="col align-self-center">
              <h5>Name:-Anyone</h5><br><h5>id:-any123</h5>
            </div>
            <div class="col"></div>
            
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
 
  
<!-- End demo content -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="AdminIndex.js"></script>
</body>
</html>
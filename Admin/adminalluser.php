<?php
include("includes.php");
include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 4 Sidebar Menu Responsive with Sub menu  Create Responsive Side Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="AdminIndex.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
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
      <li class="breadcrumb-item"><a href="adminuser.php">Recent Customer</a></li>
      <li class="breadcrumb-item active">View All Customer</a></li>
      <li class="breadcrumb-item"><a href="adminparticularuser.php">View Particular Customer</a></li>
      <li class="breadcrumb-item"><a href="admiccookorder.php">Customer orders</a></li>
      
    </ol>
  </nav>
  <div class="container">
    <div class="row">
        <h3 class="display-4 text-white mb-2">View All Customers</h3>
   </div>
  <table class="table text-dark  mt-4" id="myTable">
      <thead>
          <tr>
            <th scope="col">Sr.NO</th>
            <th scope="col">User Id</th>
            <th scope="col">Name</th></th>
            <th scope="col">Mobile No.</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
         <?php viewalluser(); ?>
        </tbody>
    </table>
  </div>
</div>

  
<!-- End demo content -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="AdminIndex.js"></script>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
</script>
</body>
</html>
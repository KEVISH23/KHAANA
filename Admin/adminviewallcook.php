<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 4 Sidebar Menu Responsive with Sub menu  Create Responsive Side Navigation</title>
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
  <h2 class="display-4 text-white mb-2">Cook Details</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="admincook.php">Recent Cook</a></li>
      <li class="breadcrumb-item active">View All Cook</li>
      <li class="breadcrumb-item"><a href="adminparticularcook.php">View Particular Cook</a></li>
      <li class="breadcrumb-item"><a href="admincookpayment.php">Payment</a></li>
      
    </ol>
  </nav>
  <div class="container">
    <div class="row">
        <h3 class="display-4 text-white mb-2">View All Cook(Curd System)</h3>
   </div>
   <table class="table text-white table-hover mt-4">
    <thead>
        <tr>
          <th scope="col">Sr.NO</th>
          <th scope="col">Name</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operation</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          
          <td><div class="container">
              <div class="row">
                  <div class="col-lg-4">
                      <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter">View</a>
                  </div>
                  <div class="col-lg-4">
                      <a href="#" class="btn btn-warning btn-block">Update</a>
                  </div>
                  <div class="col-lg-4">
                      <a href="#" class="btn btn-danger btn-block">Delete</a>
                  </div>
              </div>
          </div></td>
        </tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        
        <td><div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter">View</a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="btn btn-warning btn-block">Update</a>
                </div>
                <div class="col-lg-4">
                    <a href="#" class="btn btn-danger btn-block">Delete</a>
                </div>
            </div>
        </div></td>
      </tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      
      <td><div class="container">
          <div class="row">
              <div class="col-lg-4">
                  <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter">View</a>
              </div>
              <div class="col-lg-4">
                  <a href="#" class="btn btn-warning btn-block">Update</a>
              </div>
              <div class="col-lg-4">
                  <a href="#" class="btn btn-danger btn-block">Delete</a>
              </div>
          </div>
      </div></td>
    </tr>
      </tbody>
  </table>
  </div>
  <!--Modal of view feedback-->
  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container feedcont">
                      <div class="row feedrow">
                        <div class="col-4">
                          <img src="images/th1.jpg" class="img-fluid">
                        </div>
                         <div class="col-8 mt-2">
                          <p class="feedname">Name:- Anyone</p>
                          <p class="feedpost">Posted On February 12, 2021</p>
                        </div>
                      </div>
                      <div class="row feeddet">
                        <div class="col-lg-12 text-info">dycgsdaoucgovsd aygfofxgofngep</div>
                      </div>
                </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
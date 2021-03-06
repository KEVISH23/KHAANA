<?php
include("includes.php");
include("functions.php");
session_start();
if (!isset($_SESSION['adminname'])) {
  # code...
  echo "<script>window.open('index.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Orders</title>
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
                Payment
            </a>
    </li>
    <li class="nav-item">
      <a href="adminpackage.php" class="nav-link text-dark">
                <i class="fa fa-shopping-basket mr-3 text-primary fa-fw"></i>
                Packages
            </a>
    </li>
    <li class="nav-item">
      <a href="afeedback.php" class="nav-link text-dark">
      <i class="fa fa-comments-o mr-3 text-primary fa-fw" aria-hidden="true"></i>
                Feedback
            </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
  <a href="logout.php" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-sign-out mr-2"></i><small class="text-uppercase font-weight-bold">Logout</small></a>
  <!-- Demo content -->
  <h2 class="display-4 text-white mb-2">Customer Details</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="adminuser.php">Recent Customer</a></li>
      <li class="breadcrumb-item"><a href="adminviewallcook.php">View All Customer</a></li>
      <li class="breadcrumb-item "><a href="adminparticularuser.php">View Particular Customer</a></li>
      <li class="breadcrumb-item active">Customer orders</a></li>
      
    </ol>
  </nav>
<!--FORM FOR DELIVERY BOY PAYMENT-->
   <div class="container mt-5">
     <div class="row">
       <div class="col-lg-8 offset-2">
        <form method="post" action="admiccookorder.php">
          <div class="form-group flabel">
            <label for="inputdelivery">Enter ID</label>
            <input type="text" class="form-control" id="inputdelivery" name="custid"  placeholder="Enter Customer ID" required>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-12 col-sm-12 text-center viewper">
                <button type="submit" name="submit" class="btn btn-success">View Details</button>
              </div>
            </div>
          </div>     
        </form>
       </div>
     </div>
     <div class="col offset-2"></div>
   </div>

  </div>
 
  
<!-- End demo content -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="AdminIndex.js"></script>
</body>
</html>
<?php
global $con;
if(isset($_POST['submit'])){
  $cid = $_POST['custid'];
  #echo $cid;
  $q = "select * from user where user_id = $cid";
  $r = mysqli_query($con,$q);
  if($r){
      $rc = mysqli_num_rows($r);
      #echo $rc;
      if($rc > 0){
          $q1 = "select * from order_master where user_id = $cid";
          $r1 = mysqli_query($con,$q1);
          if($r1){
          $rc1 = mysqli_num_rows($r1);
          #echo $rc1;
          if($rc1 > 0){
              while($row1 = mysqli_fetch_array($r1)){
                  $menuid = $row1['menu_id'];
                  $packid = $row1['package_id'];
                  if ($menuid==0) {
                    # code...
                    $q3 = "select menu_id,package_days,package_price from package where package_id=$packid";
                    $r3 = mysqli_query($con,$q3);
                    if ($r3) {
                      # code...
                      while ($row3 = mysqli_fetch_array($r3)) {
                        # code...
                        $mid = $row3['menu_id'];
                        $pdays = $row3['package_days'];
                        $pprice = $row3['package_price'];
                        $q4 = "select m_image,m_details,m_name from menu where m_id = $menuid";
                  $r4 = mysqli_query($con,$q4);
                  if($r4){
                      while($row4 = mysqli_fetch_array($r4)){
                          $mimage = $row4['m_image'];
                          $mdetails = $row4['m_details'];
                          $mname = $row4['m_name'];
                          
                          
                         /* echo "
                          <div class='container d-flex justify-content-center'>
                          <div class='card mt-3' style='width: 18rem;'>
                            <img class='card-img-top' src='../cook/menuimages/$mimage' alt='Card image cap'>
                            <div class='card-body'>
                              <h2>Dish Name:- $mname</h2>
                               <ul class='list-group list-group-flush'>
                              <li class='list-group-item'>Details: $mdetails</li>
                              <li class='list-group-item'>Duration: $pdays </li>
                              <li class='list-group-item'>$pprice</li>
                            </ul>
                            </div>
                          </div>
                          </div>";*/
                          echo "<div class='container d-flex justify-content-center mt-4 mb-4'>
                          <div class='card' style='width: 18rem;'>
                          <img src='../cook/menuimages/$mimage' class='card-img-top' alt='Cook Image'>
                          <div class='card-body'>
                            <h5 class='card-title'>Name: $mname</h5>

                          </div>
                          <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Details: $mdetails</li>
                            <li class='list-group-item'>Duration: $pdays</li>
                            <li class='list-group-item'>Price: $pprice</li>
                           
                          </ul>
                          
                        </div>
                        </div>  
                          ";
                      }
                  }
                      }
                    }
                  }
                  else{
                  $q2 = "select m_image,m_details,m_name,m_price from menu where m_id = $menuid";
                  $r2 = mysqli_query($con,$q2);
                  if($r2){
                      while($row2 = mysqli_fetch_array($r2)){
                          $mimage = $row2['m_image'];
                          $mdetails = $row2['m_details'];
                          $mname = $row2['m_name'];
                          $mprice = $row2['m_price'];
                          $pro = ($mprice/100)*10;
                          $fp = $mprice + $pro;
                          echo "<div class='container d-flex justify-content-center mt-4 mb-4'>
                          <div class='card' style='width: 18rem;'>
                          <img src='../cook/menuimages/$mimage' class='card-img-top' alt='Cook Image'>
                          <div class='card-body'>
                            <h5 class='card-title'>Name: $mname</h5>

                          </div>
                          <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>Details: $mdetails</li>
                            <li class='list-group-item'>Duration: --------</li>
                            <li class='list-group-item'>Price: $mprice</li>
                           
                          </ul>
                          
                        </div>
                        </div>  
                          ";
                      }
                  }
                }
              }
          }
          else{
            echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
               <strong>Oops!</strong>User has not placed any order...
               <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
               <span aria-hidden='true'>&times;</span>
               </button>
               </div>";
        }
              
          }
      }
      else{
        echo "<div class='alert alert-danger alert-dismissible fade show fixed-top' role='alert'>
           <strong>Oops!</strong>No Such User Found...
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
           </button>
           </div>";}
  }
}
?>
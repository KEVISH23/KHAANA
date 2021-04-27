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
    <title>All Customers</title>
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
                Payment
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
  <h2 class="display-4 text-white mb-2">Customer Details</h2>
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
  <table class="table text-dark text-center mt-4" id="myTable">
      <thead>
          <tr>
            <th scope="col">Sr.NO</th>
            <th scope="col">User Id</th>
            <th scope="col">Name</th></th>
            <th scope="col">Address</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
         <?php viewalluser(); ?>
        </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">View User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">User Id</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">User Name</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">User Address</label>
              <input type="text" class="form-control" id="dpriceEdit" name="dpriceEdit" aria-describedby="emailHelp" readonly>
            </div>
            <button name="update" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </form>
            </div>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
    </div>
  </div>
  <!--Update Modal-->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form method="post">
            <input type="hidden" name="snoEdit" id="usnoEdit">
            <div class="form-group">
              <label for="title">User Id</label>
              <input type="text" class="form-control" id="udnameEdit" name="udnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">User Name</label>
              <input type="text" class="form-control" id="uddetailsEdit" name="uddetailsEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="title">User Address</label>
              <input type="text" class="form-control" id="udpriceEdit" name="udpriceEdit" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </form>
            </div>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
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
<script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        console.log(tr);
        dname = tr.getElementsByTagName("td")[0].innerText;
        ddetails = tr.getElementsByTagName("td")[1].innerText;
        dprice = tr.getElementsByTagName("td")[2].innerText;
        console.log(dname, ddetails,dprice);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        dpriceEdit.value = dprice;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#viewModal').modal('toggle');
      })
    })
    edits = document.getElementsByClassName('update');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        utr = e.target.parentNode.parentNode;
        console.log(utr);
        udname = utr.getElementsByTagName("td")[0].innerText;
        uddetails = utr.getElementsByTagName("td")[1].innerText;
        udprice = utr.getElementsByTagName("td")[2].innerText;
        console.log(udname, uddetails,udprice);
        udnameEdit.value = udname;
        uddetailsEdit.value = uddetails;
        udpriceEdit.value = udprice;
        usnoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id;

        if (confirm("Are you sure you want to delete this user!")) {
          console.log("yes");
          window.location = `adminalluser.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
    
  </script>
</body>
</html>
<?php
global $con;
if (isset($_POST['update'])) {
    $id = $_POST['snoEdit'];
    $name = $_POST['udnameEdit'];
    $details = $_POST['uddetailsEdit'];
    $price = $_POST['udpriceEdit'];
    $qry = "select user_joindate,user_jointime from user where user_id=$id";
    $r = mysqli_query($con,$qry);
    if ($r) {
      # code...
      $rowcount = mysqli_num_rows($r);
      if ($rowcount>0) {
        # code...
        while($row = mysqli_fetch_array($r)){
          $date = $row['user_joindate'];
          $time = $row['user_jointime'];
          
        }
      }
      else{echo "Something went wrong";}
    }
    else{echo "Something went wrong";}
    #global $con;
    $sql = "update user set user_namee=?,user_address=?,user_joindate=?,user_jointime=? where user_id=?";
    $res = mysqli_prepare($con,$sql);
    if ($res) {
        mysqli_stmt_bind_param($res,'ssssi',$name,$details,$cdate,$ctime,$id);
       
        $name = $_POST['uddetailsEdit'];
        $details = $_POST['udpriceEdit'];
        $cdate = $date;
        $ctime = $time;
        $id = $_POST['snoEdit'];
        if(mysqli_stmt_execute($res)){
          echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
        <strong>Wohoo!</strong>User Updated SUccesfully..
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        echo "<script>window.open('adminalluser.php','_self')</script>";
        }
    }
    else{
      echo "res not set";
    }
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM user WHERE user_id = $sno";
  $result = mysqli_query($con, $sql);
  echo "<script>window.open('adminalluser.php','_self')</script>";
}
?>
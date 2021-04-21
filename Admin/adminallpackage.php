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
  <h2 class="display-4 text-white mb-2">Packages</h2>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="adminpackage.php">Recent Packages</a></li>
      <li class="breadcrumb-item active">View All Packages</a></li>
      <li class="breadcrumb-item"><a href="adminparticularpackage.php">View Particular Package</a></li>
      
      
    </ol>
  </nav>
  <div class="container">
    <div class="row">
        <h3 class="display-4 text-white mb-2">View All Packages</h3>
   </div>
  <table class="table text-dark mt-4" id="myTable">
      <thead>
          <tr>
            <th scope="col">Sr.NO</th>
            <th scope="col">Package Id</th>
            <th scope="col">Dish Name</th>
            <th scope="col">Duration</th>
            <th scope="col">Price</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php viewallpackage(); ?>
        </tbody>
    </table>
  </div>
  <!--Modal of view feedback-->
  <!-- Modal -->

  </div>
<!-- End demo content -->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">View Package</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form method="post">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="form-group">
              <label for="title">Package Id</label>
              <input type="text" class="form-control" id="dnameEdit" name="dnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Dish Name</label>
              <input type="text" class="form-control" id="ddetailsEdit" name="ddetailsEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Duration</label>
              <input type="text" class="form-control" id="dpriceEdit" name="dpriceEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Price</label>
              <input type="text" class="form-control" id="priceEdit" name="priceEdit" aria-describedby="emailHelp" readonly>
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
          <h5 class="modal-title" id="editModalLabel">Edit this Package</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        
          <div class="modal-body">
          <form method="post">
            <input type="hidden" name="snoEdit" id="usnoEdit">
            <div class="form-group">
              <label for="title">Package Id</label>
              <input type="text" class="form-control" id="udnameEdit" name="udnameEdit" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="title">Dish Name</label>
              <input type="text" class="form-control" id="uddetailsEdit" name="uddetailsEdit" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="title">Duration</label>
              <div class="form-check">
            <input class="form-check-input" type="radio" value="1 week" name="pack">
            <label class="form-check-label" for="flexCheckDefault">
                1 Week
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="1 month" name="pack">
            <label class="form-check-label" for="flexCheckDefault">
                1 Month
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="3 month" name="pack">
            <label class="form-check-label" for="flexCheckDefault">
                3 Month
            </label>
            </div>
            </div>
            <div class="form-group">
              <label for="title">Price</label>
              <input type="text" class="form-control" id="upriceEdit" name="upriceEdit" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            </form>
            </div>
          <div class="modal-footer d-block mr-auto">
            
          </div>
       
      </div>
    </div>
  </div>
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
        price = tr.getElementsByTagName("td")[3].innerText;
        console.log(dname, ddetails,dprice,price);
        dnameEdit.value = dname;
        ddetailsEdit.value = ddetails;
        dpriceEdit.value = dprice;
        priceEdit.value = price;
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
        //udprice = utr.getElementsByTagName("td")[2].innerText;
        uprice = utr.getElementsByTagName("td")[3].innerText;
        console.log(udname, uddetails,uprice);
        udnameEdit.value = udname;
        uddetailsEdit.value = uddetails;
        
        upriceEdit.value = uprice;
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

        if (confirm("Are you sure you want to delete this package!")) {
          console.log("yes");
          window.location = `adminallpackage.php?delete=${sno}`;
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
    $duration = $_POST['pack'];
    $price = $_POST['upriceEdit'];
    $qry = "select package_date,package_time from package where package_id=$id";
    $r = mysqli_query($con,$qry);
    if ($r) {
      # code...
      $rowcount = mysqli_num_rows($r);
      if ($rowcount>0) {
        # code...
        while($row = mysqli_fetch_array($r)){
          $date = $row['package_date'];
          $time = $row['package_time'];
          
        }
      }
      else{echo "Something went wrong";}
    }
    else{echo "Something went wrong";}
    #global $con;
    $sql = "update package set menu_name=?,package_days=?,package_price=?,package_date=?,package_time=? where package_id=?";
    $res = mysqli_prepare($con,$sql);
    if ($res) {
        mysqli_stmt_bind_param($res,'sssssi',$name,$duration,$details,$cdate,$ctime,$id);
       
        $name = $_POST['uddetailsEdit'];
        $duration = $_POST['pack'];
        $details = $_POST['upriceEdit'];
        
        $cdate = $date;
        $ctime = $time;
        $id = $_POST['snoEdit'];
        if(mysqli_stmt_execute($res)){
          echo "<div class='alert alert-success alert-dismissible fade show fixed-top' role='alert'>
        <strong>Wohoo!</strong>Package Updated SUccesfully..
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
        echo "<script>window.open('adminallpackage.php','_self')</script>";
        }
    }
    else{
      echo "res not set";
    }
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM package WHERE package_id = $sno";
  $result = mysqli_query($con, $sql);
  echo "<script>window.open('adminallpackage.php','_self')</script>";
}
?>
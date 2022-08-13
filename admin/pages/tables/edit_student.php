
<?php

include_once '../../../auth/connection.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
     <?php
     include_once '../../my_include/nav1.php';
     ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <?php
     include_once '../../my_include/nav2.php';
     ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <?php
              $id = $_GET["id"];
              $query = "SELECT * FROM `users` WHERE `id` = $id";
              $show = mysqli_query($conn,$query);
              if(mysqli_num_rows($show)){
                while($data = mysqli_fetch_array($show)){
                  ?>
                  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Students</h4>
                    <p class="card-description"> Students of estudies </p>
                    <form class="forms-sample" method="Post" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" name="f_name" class="form-control" id="exampleInputName1" value="<?php echo $data[1];?>" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" name="l_name" class="form-control"  value="<?php echo $data[2];?>" id="exampleInputName1" value="<?php echo $data[1];?>" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail3" value="<?php echo $data[3];?>" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" name="pass" class="form-control" value="<?php echo $data[5];?>" id="exampleInputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact</label>
                        <input type="text" name="contact" value="<?php echo $data[4];?>" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                   
                      
                      
                      <div class="form-group">
                        <label for="exampleInputCity1">Age</label>
                        <input type="text" name="age" value="<?php echo $data[8];?>" class="form-control" id="exampleInputCity1" placeholder="subject">
                      </div>
                     
                      <button type="submit" name="submit" class="btn btn-success mr-2">Update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
                  <?php
                }
              }
              ?>
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
if(isset($_POST["submit"])){
  $f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
  $l_name = mysqli_real_escape_string($conn, $_POST["l_name"]);
  
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["pass"]);
  $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
  $age = mysqli_real_escape_string($conn, $_POST["age"]);
  
  $query = "UPDATE `users` SET `F_name`='$f_name',`L_name`='$l_name',`Email`='$email',`Contact`='$contact',`Password`='$password',`Age`='$age' WHERE `id` = $id";
  
      mysqli_query($conn, $query);
  
  ?>
<script>
  window.location.assign("basic-table.php");
</script>
  <?php
  }
?>
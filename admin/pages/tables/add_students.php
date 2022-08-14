
<?php
session_start();
if(isset($_POST["submit"])){
  $f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
$l_name = mysqli_real_escape_string($conn, $_POST["l_name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["pass"]);
$contact = mysqli_real_escape_string($conn, $_POST["contact"]);
$age = mysqli_real_escape_string($conn, $_POST["age"]);
$class_id = mysqli_real_escape_string($conn, $_POST["class_id"]);
$father_name = mysqli_real_escape_string($conn, $_POST["father_name"]);


  $image_name = $_FILES["img"]["name"];
  $image_type = $_FILES["img"]["type"];
  $image_temp = $_FILES["img"]["tmp_name"];
  $image_size = $_FILES["img"]["size"];
  $path = "../../../profile/" . $image_name;
  $stud = rand();
    
    $query = "INSERT INTO `users`(`id`, `F_name`, `L_name`, `Email`, `Contact`, `Password`, `Profile`, `Age`, `Class_id`, `father_name`.`student_ID`) VALUES (Null,'$f_name','$l_name','$email','$contact','$password','$image_name','$age','$class_id','$father_name','$stud')";
   
    mysqli_query($conn, $query);
    move_uploaded_file($image_temp,$path);


header("location: basic-table.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
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
          include("../../my_include/nav1.php");
          ?>


      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php
          include("../../my_include/nav2.php");
          ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Company</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="#" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">first Name</label>
                        <input name="f_name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">last Name</label>
                        <input name="l_name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">father Name</label>
                        <input name="father_name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">password</label>
                        <input name="pass" type="text" class="form-control" id="exampleInputEmail3" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Order No</label>
                        <input name="order" type="text" class="form-control" id="exampleInputName1" placeholder="Order No">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Products Category</label>
                        <input name="product" type="text" class="form-control" id="exampleInputName1" placeholder="Product Category">
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input name="city" type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                      </div>
                      <input class="submit" type="submit" name="submit" value="submit">

                    </form>
                  </div>
                </div>
              </div>
       

         
              
           
              
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
          include("../../my_include/footer.php");
          ?>

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

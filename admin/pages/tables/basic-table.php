<?php
include_once '../../../auth/connection.php';


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
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../bg_img_small.png" />	
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php
     include_once '../../my_include/nav1.php';
     ?>

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php
     include_once '../../my_include/nav2.php';
     ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Table</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> id </th>
                            <th> User </th>
                            <th> First name </th>
                            <th> Email </th>
                            <th> Class_id </th>
                            <th> Date Time </th>
                            <th> Edit </th>
                            <th> Delete </th>
                            <!-- <th> Insert </th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          
                          $query = "SELECT * FROM `users`";
                          
                          $result = mysqli_query($conn,$query);
                          
                          if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_array($result)){
                                  
                             
                          ?>
                          <tr>
                            <td><?php echo $row[0]; ?></td>

                            
                            <td class="py-1"><img src="../../../img/<?php echo $row[6]; ?>"  /></td>
                            <td> <?php echo $row[1]; ?>  <?php echo $row[10]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[9]; ?></td>
                            <td><?php echo $row[11]; ?> </td>
                            <td> <a href="edit_student.php?id=<?php echo $row[0];?>"> <button type="button" class="btn btn-success">Edit</button></td>
                            <td> <a href="basic-table.php?id=<?php echo $row[0];?>"> <button type="button" class="btn btn-danger">Delete</button></a></td>
                            <!-- <td><a href="insert.php"><button type="button" class="btn btn-warning">Insert</button></a></td> -->
                          </tr>
                          <?php
                              }}
              ?>
                        </tbody>
                      </table>
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
    
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    $remove = "DELETE FROM `users` WHERE `id` = $id";

  mysqli_query($conn,$remove);
}
?>

    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
<?php

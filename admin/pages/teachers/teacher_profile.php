<?php
include_once '../../../auth/connection.php';
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
        include("../../my_include/nav1.php")
      ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <?php
            include("../../my_include/nav2.php")
        ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
                <center>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/800px-Image_created_with_a_mobile_phone.png" style="width: 11vw; height:11vw; border-radius: 50%;" alt="">
                </center>
                <?php
                    $id = $_GET["id"];
                    $teacher = "SELECT * FROM `teachers` WHERE `id` = '$id'";
                    $teacher_result = mysqli_query($conn, $teacher);
                    $row = mysqli_fetch_array($teacher_result);
                ?>
                <h1 class="text-center mt-4"> <?php echo $row[1]; ?> </h1>
                <p class="text-center mb-4">Teacher</p>
            
            <div class="row">
                
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Profile</h4>
                      <p class="card-description">
                         
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <th> Name </th>
                              <td> <?php echo $row[1]; ?></td>
                            </tr>
                            <tr>
                              <th> Email </th>
                              <td> <?php echo $row[2]; ?></td>
                            </tr>
                            <tr>
                              <th> Contact </th>
                              <td> <?php echo $row[3]; ?></td>
                            </tr>
                            <tr>
                              <th> Gender </th>
                              <td> <?php echo $row[9]; ?></td>
                            </tr>
                            <tr>
                              <th> Address </th>
                              <td> <span class="text-wrap"><?php echo $row[8]; ?></span></td>
                            </tr>                              
                          </tbody>                          
                        </table>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Attendance</h4>
                      <p class="card-description">
                         
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <th>Date</th>
                                <th>Present</th>
                                <th>Absent</th>
                                <th>Leave</th>
                            </thead>
                            <tbody>
                                <?php
                                    $name = $row[1];
                                    $atten = "SELECT * FROM `teacher_attendence` WHERE `Teacher_name` = '$name' ORDER BY `id` DESC";
                                    $atten_res = mysqli_query($conn, $atten);
                                    $i = 0;
                                    if(mysqli_num_rows($atten_res)) {
                                        while($atten_row = mysqli_fetch_array($atten_res)) {
                                            ?>
                                                <tr>                                                    
                                                    <td><?php echo $atten_row[2]; ?></td>
                                                    <?php if($atten_row[3] == "P") { ?><td><i style="color: green;" class="mdi mdi-checkbox-marked-circle-outline"></i></td><?php }else { ?><td><?php echo " "; ?></td><?php } ?>
                                                    <?php if($atten_row[3] == "A") { ?><td><i style="color: red;" class="mdi mdi-checkbox-marked-circle-outline"></i></td><?php }else { ?><td><?php echo " "; ?></td><?php } ?>
                                                    <?php if($atten_row[3] == "L") { ?><td><i style="color: yellow;" class="mdi mdi-checkbox-marked-circle-outline"></i></td><?php }else { ?><td><?php echo " "; ?></td><?php } ?>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>                              
                            </tbody>                          
                        </table>
                      </div>
                  </div>
                </div>
              </div>
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
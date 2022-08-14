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
    <link rel="stylesheet" href="../../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
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
      <!-- partial:partials/_sidebar.html -->
     <?php
     include_once '../../my_include/nav1.php';
     ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php
     include_once '../../my_include/nav2.php';
     ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Teachers</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                              
                    <?php
                          $query = "SELECT Count(*) FROM `teachers`";
                          $result = mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result)){
                              ?>
                          <h2 class="mb-0"><?php echo $row[0];?></h2>
                          <?php
                            }
                          }

                          ?>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Students</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php
                          $query = "SELECT Count(*) FROM `users` WHERE `Roll` = 0";
                          $result = mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result)){
                              ?>
                          <h2 class="mb-0"><?php echo $row[0];?></h2>
                          <?php
                            }
                          }

                          ?>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Feedback</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <?php
                          $query = "SELECT Count(*) FROM `feedback`";
                          $result = mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_array($result)){
                              ?>
                          <h2 class="mb-0"><?php echo $row[0];?></h2>
                          <?php
                            }
                          }

                          ?>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Teacher Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </th>
                            <th> profile </th>
                            <th> Teacher Name </th>
                            <th> Email </th>
                            <th> Contact </th>
                            <th> Subject</th>
                            
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $teacher = "SELECT * FROM `teachers`";
                          $result = mysqli_query($conn,$teacher);
                          if(mysqli_num_rows($result)){
                            while($rows = mysqli_fetch_array($result)){
                              ?>
                              <tr>
                            <td>
                              <div class="form-check form-check-muted m-0">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                </label>
                              </div>
                            </td>
                            <td>
                              <img src="../../../teacher/<?php echo $rows[5]; ?>" alt="image" />
                              <!-- <span class="pl-2"><?php echo $rows[1]; ?></span> -->
                            </td>
                            <td> <?php echo $rows[1]; ?></td>
                            <td> <?php echo $rows[2]; ?></td>
                            <td> <?php echo $rows[3]; ?></td>
                            <td> <?php echo $rows[7]; ?></td>

                            <td>
                              <?php?>
                              <div class="badge badge-outline-success">Approved</div>
                            </td>
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
   
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Visitors by Countries</h4>
                    <div class="row">
                  
                      <div class="col-md-12">

                        <div id="audience-map" class="vector-map"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
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
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
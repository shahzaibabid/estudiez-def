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
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Contact</a></li>
                </ol>
              </nav>
            </div>
            <div class="row">             
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Contact</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 1000px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Subject </th>
                                    <th> Phone </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $VI = "SELECT * FROM `contact` ORDER BY `id` DESC";
                                        $VIresult = mysqli_query($conn, $VI);
                                        if(mysqli_num_rows($VIresult)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($VIresult)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[2]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                                <td><?php echo $row[5]; ?></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?php echo $i; ?>">Message</button>
                                                </td>
                                            </tr>
                                                                                    
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Message</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body container-fluid row">
                                                            <h3><?php echo $row[4]; ?></h3>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
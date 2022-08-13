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
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Test</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Results</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                <h3 class="mb-4">20 Marks Class Tests</h3>
<!-- demo -->

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class VI</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>                                        
                                    <tr>
                                        <th> Students </th>
                                        <th> English </th>
                                        <th> Sindhi </th>
                                        <th> Urdu </th>
                                        <th> P_Studies </th>
                                        <th> Science </th>
                                        <th> Islamiat / Religion </th>
                                        <th> Math </th>
                                    </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $cls = "SELECT c.id FROM `class` c WHERE `Class_name` = 'VI' ORDER BY `id` DESC LIMIT 1";
                                        $clsres = mysqli_query($conn, $cls);
                                        $cls_row = mysqli_fetch_array($clsres);
                                        $name = $cls_row["id"];
                                        $users = "SELECT u.id,u.F_name FROM `users` u WHERE `Class_id` = '$name' ORDER BY `id` DESC";                                        
                                        $user_res = mysqli_query($conn,$users);
                                        if(mysqli_num_rows($user_res)) {
                                            while($row = mysqli_fetch_array($user_res)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["F_name"]; ?></td>
                                                    <?php
                                                        $id = $row["id"];
                                                        $eng = "SELECT * FROM `english` WHERE `user id` = '$id' ORDER BY `id` DESC LIMIT 1";
                                                        $eng_res = mysqli_query($conn,$eng);
                                                        if(mysqli_num_rows($eng_res)) {
                                                            while($eng_row = mysqli_fetch_array($eng_res)) {
                                                                ?>
                                                                <?php if($eng_row[6] == "Fail"){ ?><td style="color:red;"><?php echo $eng_row[5]; ?></td><?php }else { ?><td><?php echo $eng_row[5]; ?></td><?php } ?>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
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
<!-- demo -->

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
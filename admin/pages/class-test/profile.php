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
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
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
            <div >
                <?php
                    $id = $_GET["id"];
                    $sel = "SELECT u.F_name,u.L_name,u.Profile,u.Class_id FROM `users` u WHERE `id` = $id";
                    $result = mysqli_query($conn, $sel);
                    $row = mysqli_fetch_array($result);
                ?>
                    <center>
                        <img src="../../../profile/<?php echo $row["Profile"]; ?>" style="width:11vw; height:11vw; border-radius: 50%" alt="">
                    </center>
                    <h1 class="text-center mt-4"><?php echo $row["F_name"] . " " . $row["F_name"]; ?></h1>
              <p class="text-center mb-5">
                <?php
                    $cid = $row["Class_id"];
                    $sel_class = "SELECT c.Class_name FROM `class` c WHERE `id` = '$cid'";
                    $resclass = mysqli_query($conn, $sel_class);
                    $r_class = mysqli_fetch_array($resclass);
                    echo "Class " . $r_class["Class_name"];
                ?>
              </p>
            </div>
            <div class="row">            
                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">English</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $eng= "SELECT * FROM `english` WHERE `user_id` = $id";
                                        $eng_result = mysqli_query($conn,$eng);
                                        $i=0;
                                        while($eng_row = mysqli_fetch_array($eng_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $eng_row["1"]; ?></td>
                                            <td><?php echo $eng_row["4"]; ?></td>
                                            <td><?php echo $eng_row["5"]; ?></td>
                                            <td><?php echo $eng_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">Islamiat / Religion</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $rel= "SELECT * FROM `islamiat_rel` WHERE `user_id` = $id";
                                        $rel_result = mysqli_query($conn,$rel);
                                        $i=0;
                                        while($rel_row = mysqli_fetch_array($rel_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $rel_row["1"]; ?></td>
                                            <td><?php echo $rel_row["4"]; ?></td>
                                            <td><?php echo $rel_row["5"]; ?></td>
                                            <td><?php echo $rel_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">Math</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $math= "SELECT * FROM `math` WHERE `user_id` = $id";
                                        $math_result = mysqli_query($conn,$math);
                                        $i=0;
                                        while($math_row = mysqli_fetch_array($math_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $math_row["1"]; ?></td>
                                            <td><?php echo $math_row["4"]; ?></td>
                                            <td><?php echo $math_row["5"]; ?></td>
                                            <td><?php echo $math_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">P-Studies</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $psd= "SELECT * FROM `p_studies` WHERE `user_id` = $id";
                                        $psd_result = mysqli_query($conn,$psd);
                                        $i=0;
                                        while($psd_row = mysqli_fetch_array($psd_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $psd_row["1"]; ?></td>
                                            <td><?php echo $psd_row["4"]; ?></td>
                                            <td><?php echo $psd_row["5"]; ?></td>
                                            <td><?php echo $psd_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">Science</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sci= "SELECT * FROM `science` WHERE `user_id` = $id";
                                        $sci_result = mysqli_query($conn,$sci);
                                        $i=0;
                                        while($sci_row = mysqli_fetch_array($sci_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $sci_row["1"]; ?></td>
                                            <td><?php echo $sci_row["4"]; ?></td>
                                            <td><?php echo $sci_row["5"]; ?></td>
                                            <td><?php echo $sci_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <h4 class="card-title">Sindhi</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">                                
                                <thead>                                        
                                    <tr>
                                        <th> # </th>
                                        <th> Date </th>
                                        <th> Total </th>
                                        <th> Obtained </th>
                                        <th> Status </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sind= "SELECT * FROM `sindhi` WHERE `user_id` = $id";
                                        $sind_result = mysqli_query($conn,$sind);
                                        $i=0;
                                        while($sind_row = mysqli_fetch_array($sind_result)){
                                            $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $sind_row["1"]; ?></td>
                                            <td><?php echo $sind_row["4"]; ?></td>
                                            <td><?php echo $sind_row["5"]; ?></td>
                                            <td><?php echo $sind_row["6"]; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>                        
                            </div>
                        </div>
                    </div>
                </div>

                <center class="w-100">
                    <div class="col-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body" style="height: auto;">
                                <h4 class="card-title">Urdu</h4>
                                <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                                <table class="table table-striped">                                
                                    <thead>                                        
                                        <tr>
                                            <th> # </th>
                                            <th> Date </th>
                                            <th> Total </th>
                                            <th> Obtained </th>
                                            <th> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $urdu= "SELECT * FROM `urdu` WHERE `user_id` = $id";
                                            $urdu_result = mysqli_query($conn,$urdu);
                                            $i=0;
                                            while($urdu_row = mysqli_fetch_array($urdu_result)){
                                                $i++;
                                        ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $urdu_row["1"]; ?></td>
                                                <td><?php echo $urdu_row["4"]; ?></td>
                                                <td><?php echo $urdu_row["5"]; ?></td>
                                                <td><?php echo $urdu_row["6"]; ?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>                        
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
  </body>
</html>
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
    <title>Admin Panle</title>
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
                  <li class="breadcrumb-item"><a href="#">Exams</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Results</li>
                </ol>
              </nav>
            </div>
            <div class="row">             
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Class VI</h4>
                        <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                        <table class="table table-striped">
                            <thead>    
                            <tr>
                                <th> Student </th>
                                <th> Total_obtained </th>
                                <th> Percentage </th>
                                <th> Grade </th>
                                <th> Status </th>
                                <th style="visibility: hidden;"> details </th>
                            </tr>
                            </thead>
                            <tbody>      
                                <?php
                                    $sel_VI = "SELECT * FROM `class` WHERE `Class_name` = 'VI'";
                                    $resVI = mysqli_query($conn, $sel_VI);
                                    $r_VI = mysqli_fetch_array($resVI);
                                    $VI = "SELECT * FROM `exam` WHERE `class_id` = '$r_VI[0]'";
                                    $VIresult = mysqli_query($conn, $VI);
                                    if(mysqli_num_rows($VIresult)){
                                        $i=0;
                                        while($row = mysqli_fetch_array($VIresult)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $myname = $row[2];
                                                $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$myname'";
                                                $res_student = mysqli_query($conn, $sel_student);
                                                $r_student = mysqli_fetch_array($res_student);
                                                echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                ?>
                                            </td>
                                            <td><?php echo $row[10] . " / " . $row[11]; ?></td>
                                            <td><?php echo $row[12]; ?></td>
                                            <td><?php echo $row[13]; ?></td>
                                            <td><?php echo $row[14]; ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop<?php echo $i; ?>">Details</button>
                                            </td>
                                        </tr>
                                                                                
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body container-fluid row">
                                                        <div class="col-4 mb-2"><b> English :</b></div> <div class="col-8 mb-2"><?php echo $row[3]; ?></div>
                                                        <div class="col-4 mb-2"><b> Sindhi :</b> </div> <div class="col-8 mb-2"><?php echo $row[5]; ?></div>
                                                        <div class="col-4 mb-2"><b> Urdu :</b> </div> <div class="col-8 mb-2"><?php echo $row[4]; ?></div>
                                                        <div class="col-4 mb-2"><b> P-Studies :</b> </div> <div class="col-8 mb-2"><?php echo $row[6]; ?></div>
                                                        <div class="col-4 mb-2"><b> Science :</b> </div> <div class="col-8 mb-2"><?php echo $row[7]; ?></div>
                                                        <div class="col-4 mb-2"><b> Islamiat / Religion :</b> </div> <div class="col-8 mb-2"><?php echo $row[8]; ?></div>
                                                        <div class="col-4 mb-2"><b> Math :</b> </div> <div class="col-8 mb-2"><?php echo $row[9]; ?></div>
                                                        <div class="col-4 mb-2"><b> Review :</b> </div> <div class="col-8 mb-2 text-wrap"><?php echo $row[15]; ?></div>
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
                           
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Class VII</h4>
                        <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                        <table class="table table-striped">
                            <thead>    
                            <tr>
                                <th> Student </th>
                                <th> Total_obtained </th>
                                <th> Percentage </th>
                                <th> Grade </th>
                                <th> Status </th>
                                <th style="visibility: hidden;"> details </th>
                            </tr>
                            </thead>
                            <tbody>      
                                <?php
                                    $sel_VII = "SELECT * FROM `class` WHERE `Class_name` = 'VII'";
                                    $resVII = mysqli_query($conn, $sel_VII);
                                    $r_VII = mysqli_fetch_array($resVII);
                                    $VII = "SELECT * FROM `exam` WHERE `class_id` = '$r_VII[0]'";
                                    $VIIresult = mysqli_query($conn, $VII);
                                    if(mysqli_num_rows($VIIresult)){
                                        $i=0;
                                        while($row = mysqli_fetch_array($VIIresult)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[2]'";
                                                $res_student = mysqli_query($conn, $sel_student);
                                                $r_student = mysqli_fetch_array($res_student);
                                                echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                ?>
                                            </td>
                                            <td><?php echo $row[10] . " / " . $row[11]; ?></td>
                                            <td><?php echo $row[12]; ?></td>
                                            <td><?php echo $row[13]; ?></td>
                                            <td><?php echo $row[14]; ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop2<?php echo $i; ?>">Details</button>
                                            </td>
                                        </tr>
                                                                                
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop2<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body container-fluid row">
                                                        <div class="col-4 mb-2"><b> English :</b></div> <div class="col-8 mb-2"><?php echo $row[3]; ?></div>
                                                        <div class="col-4 mb-2"><b> Sindhi :</b> </div> <div class="col-8 mb-2"><?php echo $row[5]; ?></div>
                                                        <div class="col-4 mb-2"><b> Urdu :</b> </div> <div class="col-8 mb-2"><?php echo $row[4]; ?></div>
                                                        <div class="col-4 mb-2"><b> P-Studies :</b> </div> <div class="col-8 mb-2"><?php echo $row[6]; ?></div>
                                                        <div class="col-4 mb-2"><b> Science :</b> </div> <div class="col-8 mb-2"><?php echo $row[7]; ?></div>
                                                        <div class="col-4 mb-2"><b> Islamiat / Religion :</b> </div> <div class="col-8 mb-2"><?php echo $row[8]; ?></div>
                                                        <div class="col-4 mb-2"><b> Math :</b> </div> <div class="col-8 mb-2"><?php echo $row[9]; ?></div>
                                                        <div class="col-4 mb-2"><b> Review :</b> </div> <div class="col-8 mb-2 text-wrap"><?php echo $row[15]; ?></div>
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
                           
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Class VIII</h4>
                        <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                        <table class="table table-striped">
                            <thead>    
                            <tr>
                                <th> Student </th>
                                <th> Total_obtained </th>
                                <th> Percentage </th>
                                <th> Grade </th>
                                <th> Status </th>
                                <th style="visibility: hidden;"> details </th>
                            </tr>
                            </thead>
                            <tbody>      
                                <?php
                                    $sel_VIII = "SELECT * FROM `class` WHERE `Class_name` = 'VIII'";
                                    $resVIII = mysqli_query($conn, $sel_VIII);
                                    $r_VIII = mysqli_fetch_array($resVIII);
                                    $VIII = "SELECT * FROM `exam` WHERE `class_id` = '$r_VIII[0]'";
                                    $VIIIresult = mysqli_query($conn, $VIII);
                                    if(mysqli_num_rows($VIIIresult)){
                                        $i=0;
                                        while($row = mysqli_fetch_array($VIIIresult)) {
                                            $i++;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php
                                                $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[2]'";
                                                $res_student = mysqli_query($conn, $sel_student);
                                                $r_student = mysqli_fetch_array($res_student);
                                                echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                ?>
                                            </td>
                                            <td><?php echo $row[10] . " / " . $row[11]; ?></td>
                                            <td><?php echo $row[12]; ?></td>
                                            <td><?php echo $row[13]; ?></td>
                                            <td><?php echo $row[14]; ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop3<?php echo $i; ?>">Details</button>
                                            </td>
                                        </tr>
                                                                                
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop3<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body container-fluid row">
                                                        <div class="col-4 mb-2"><b> English :</b></div> <div class="col-8 mb-2"><?php echo $row[3]; ?></div>
                                                        <div class="col-4 mb-2"><b> Sindhi :</b> </div> <div class="col-8 mb-2"><?php echo $row[5]; ?></div>
                                                        <div class="col-4 mb-2"><b> Urdu :</b> </div> <div class="col-8 mb-2"><?php echo $row[4]; ?></div>
                                                        <div class="col-4 mb-2"><b> P-Studies :</b> </div> <div class="col-8 mb-2"><?php echo $row[6]; ?></div>
                                                        <div class="col-4 mb-2"><b> Science :</b> </div> <div class="col-8 mb-2"><?php echo $row[7]; ?></div>
                                                        <div class="col-4 mb-2"><b> Islamiat / Religion :</b> </div> <div class="col-8 mb-2"><?php echo $row[8]; ?></div>
                                                        <div class="col-4 mb-2"><b> Math :</b> </div> <div class="col-8 mb-2"><?php echo $row[9]; ?></div>
                                                        <div class="col-4 mb-2"><b> Review :</b> </div> <div class="col-8 mb-2 text-wrap"><?php echo $row[15]; ?></div>
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
                           
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Class IX</h4>
                        <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                            <thead>    
                                <tr>
                                <th> Student </th>
                                <th> Total_obtained </th>
                                <th> Percentage </th>
                                <th> Grade </th>
                                <th> Status </th>
                                <th style="visibility: hidden;"> details </th>
                                </tr>
                            </thead>
                            <tbody>      
                                    <?php
                                        $sel_IX = "SELECT * FROM `class` WHERE `Class_name` = 'IX'";
                                        $resIX = mysqli_query($conn, $sel_IX);
                                        $r_IX = mysqli_fetch_array($resIX);
                                        $IX = "SELECT * FROM `exam` WHERE `class_id` = '$r_IX[0]'";
                                        $IXresult = mysqli_query($conn, $IX);
                                        if(mysqli_num_rows($IXresult)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($IXresult)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[2]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td><?php echo $row[10] . " / " . $row[11]; ?></td>
                                                <td><?php echo $row[12]; ?></td>
                                                <td><?php echo $row[13]; ?></td>
                                                <td><?php echo $row[14]; ?></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop3<?php echo $i; ?>">Details</button>
                                                </td>
                                            </tr>
                                                                                    
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop3<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body container-fluid row">
                                                            <div class="col-4 mb-2"><b> English :</b></div> <div class="col-8 mb-2"><?php echo $row[3]; ?></div>
                                                            <div class="col-4 mb-2"><b> Sindhi :</b> </div> <div class="col-8 mb-2"><?php echo $row[5]; ?></div>
                                                            <div class="col-4 mb-2"><b> Urdu :</b> </div> <div class="col-8 mb-2"><?php echo $row[4]; ?></div>
                                                            <div class="col-4 mb-2"><b> P-Studies :</b> </div> <div class="col-8 mb-2"><?php echo $row[6]; ?></div>
                                                            <div class="col-4 mb-2"><b> Science :</b> </div> <div class="col-8 mb-2"><?php echo $row[7]; ?></div>
                                                            <div class="col-4 mb-2"><b> Islamiat / Religion :</b> </div> <div class="col-8 mb-2"><?php echo $row[8]; ?></div>
                                                            <div class="col-4 mb-2"><b> Math :</b> </div> <div class="col-8 mb-2"><?php echo $row[9]; ?></div>
                                                            <div class="col-4 mb-2"><b> Review :</b> </div> <div class="col-8 mb-2 text-wrap"><?php echo $row[15]; ?></div>
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
                           
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Class X</h4>
                        <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                            <thead>    
                                <tr>
                                <th> Student </th>
                                <th> Total_obtained </th>
                                <th> Percentage </th>
                                <th> Grade </th>
                                <th> Status </th>
                                <th style="visibility: hidden;"> details </th>
                                </tr>
                            </thead>
                            <tbody>      
                                    <?php
                                        $sel_X = "SELECT * FROM `class` WHERE `Class_name` = 'X'";
                                        $resX = mysqli_query($conn, $sel_X);
                                        $r_X = mysqli_fetch_array($resX);
                                        $X = "SELECT * FROM `exam` WHERE `class_id` = '$r_X[0]'";
                                        $Xresult = mysqli_query($conn, $X);
                                        if(mysqli_num_rows($Xresult)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($Xresult)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[2]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td><?php echo $row[10] . " / " . $row[11]; ?></td>
                                                <td><?php echo $row[12]; ?></td>
                                                <td><?php echo $row[13]; ?></td>
                                                <td><?php echo $row[14]; ?></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop3<?php echo $i; ?>">Details</button>
                                                </td>
                                            </tr>
                                                                                    
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop3<?php echo $i; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Result</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body container-fluid row">
                                                            <div class="col-4 mb-2"><b> English :</b></div> <div class="col-8 mb-2"><?php echo $row[3]; ?></div>
                                                            <div class="col-4 mb-2"><b> Sindhi :</b> </div> <div class="col-8 mb-2"><?php echo $row[5]; ?></div>
                                                            <div class="col-4 mb-2"><b> Urdu :</b> </div> <div class="col-8 mb-2"><?php echo $row[4]; ?></div>
                                                            <div class="col-4 mb-2"><b> P-Studies :</b> </div> <div class="col-8 mb-2"><?php echo $row[6]; ?></div>
                                                            <div class="col-4 mb-2"><b> Science :</b> </div> <div class="col-8 mb-2"><?php echo $row[7]; ?></div>
                                                            <div class="col-4 mb-2"><b> Islamiat / Religion :</b> </div> <div class="col-8 mb-2"><?php echo $row[8]; ?></div>
                                                            <div class="col-4 mb-2"><b> Math :</b> </div> <div class="col-8 mb-2"><?php echo $row[9]; ?></div>
                                                            <div class="col-4 mb-2"><b> Review :</b> </div> <div class="col-8 mb-2 text-wrap"><?php echo $row[15]; ?></div>
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
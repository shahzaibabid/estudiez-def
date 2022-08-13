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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class VI</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> Student </th>
                                    <th> English </th>
                                    <th> Sindhi </th>
                                    <th> Urdu </th>
                                    <th> P_Studies </th>
                                    <th> Science </th>
                                    <th> Islamiat / Religion </th>
                                    <th> Math </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $sel_VI = "SELECT * FROM `class` WHERE `Class_name` = 'VI'";
                                        $resVI = mysqli_query($conn, $sel_VI);
                                        $r_VI = mysqli_fetch_array($resVI);

                                        $VI_1 = "SELECT * FROM `english` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_1 = mysqli_query($conn, $VI_1);

                                        $VI_2 = "SELECT * FROM `sindhi` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_2 = mysqli_query($conn, $VI_2);

                                        $VI_3 = "SELECT * FROM `urdu` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_3 = mysqli_query($conn, $VI_3);

                                        $VI_4 = "SELECT * FROM `p_studies` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_4 = mysqli_query($conn, $VI_4);

                                        $VI_5 = "SELECT * FROM `science` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_5 = mysqli_query($conn, $VI_5);

                                        $VI_6 = "SELECT * FROM `islamiat_rel` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_6 = mysqli_query($conn, $VI_6);

                                        $VI_7 = "SELECT * FROM `math` WHERE `class_id` = '$r_VI[0]' ORDER BY `user_id` ASC";
                                        $VIresult_7 = mysqli_query($conn, $VI_7);
                                        if(mysqli_num_rows($VIresult_1)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($VIresult_1)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[3]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row[6] == "Fail") {
                                                        ?>
                                                        <span class = "text-danger"><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row2 = mysqli_fetch_array($VIresult_2);
                                                        if($row2[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row3 = mysqli_fetch_array($VIresult_3);
                                                        if($row3[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row4 = mysqli_fetch_array($VIresult_4);
                                                        if($row4[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row5 = mysqli_fetch_array($VIresult_5);
                                                        if($row5[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row6 = mysqli_fetch_array($VIresult_6);
                                                        if($row6[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row7 = mysqli_fetch_array($VIresult_7);
                                                        if($row7[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
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

                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class VII</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> Student </th>
                                    <th> English </th>
                                    <th> Sindhi </th>
                                    <th> Urdu </th>
                                    <th> P_Studies </th>
                                    <th> Science </th>
                                    <th> Islamiat / Religion </th>
                                    <th> Math </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $sel_VII = "SELECT * FROM `class` WHERE `Class_name` = 'VII'";
                                        $resVII = mysqli_query($conn, $sel_VII);
                                        $r_VII = mysqli_fetch_array($resVII);

                                        $VII_1 = "SELECT * FROM `english` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_1 = mysqli_query($conn, $VII_1);

                                        $VII_2 = "SELECT * FROM `sindhi` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_2 = mysqli_query($conn, $VII_2);

                                        $VII_3 = "SELECT * FROM `urdu` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_3 = mysqli_query($conn, $VII_3);

                                        $VII_4 = "SELECT * FROM `p_studies` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_4 = mysqli_query($conn, $VII_4);

                                        $VII_5 = "SELECT * FROM `science` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_5 = mysqli_query($conn, $VII_5);

                                        $VII_6 = "SELECT * FROM `islamiat_rel` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_6 = mysqli_query($conn, $VII_6);

                                        $VII_7 = "SELECT * FROM `math` WHERE `class_id` = '$r_VII[0]' ORDER BY `user_id` ASC";
                                        $VIIresult_7 = mysqli_query($conn, $VII_7);
                                        if(mysqli_num_rows($VIIresult_1)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($VIIresult_1)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[3]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row[6] == "Fail") {
                                                        ?>
                                                        <span class = "text-danger"><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row2 = mysqli_fetch_array($VIIresult_2);
                                                        if($row2[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row3 = mysqli_fetch_array($VIIresult_3);
                                                        if($row3[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row4 = mysqli_fetch_array($VIIresult_4);
                                                        if($row4[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row5 = mysqli_fetch_array($VIIresult_5);
                                                        if($row5[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row6 = mysqli_fetch_array($VIIresult_6);
                                                        if($row6[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row7 = mysqli_fetch_array($VIIresult_7);
                                                        if($row7[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
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

                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class VIII</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> Student </th>
                                    <th> English </th>
                                    <th> Sindhi </th>
                                    <th> Urdu </th>
                                    <th> P_Studies </th>
                                    <th> Science </th>
                                    <th> Islamiat / Religion </th>
                                    <th> Math </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $sel_VIII = "SELECT * FROM `class` WHERE `Class_name` = 'VIII'";
                                        $resVIII = mysqli_query($conn, $sel_VIII);
                                        $r_VIII = mysqli_fetch_array($resVIII);

                                        $VIII_1 = "SELECT * FROM `english` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_1 = mysqli_query($conn, $VIII_1);

                                        $VIII_2 = "SELECT * FROM `sindhi` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_2 = mysqli_query($conn, $VIII_2);

                                        $VIII_3 = "SELECT * FROM `urdu` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_3 = mysqli_query($conn, $VIII_3);

                                        $VIII_4 = "SELECT * FROM `p_studies` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_4 = mysqli_query($conn, $VIII_4);

                                        $VIII_5 = "SELECT * FROM `science` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_5 = mysqli_query($conn, $VIII_5);

                                        $VIII_6 = "SELECT * FROM `islamiat_rel` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_6 = mysqli_query($conn, $VIII_6);

                                        $VIII_7 = "SELECT * FROM `math` WHERE `class_id` = '$r_VIII[0]' ORDER BY `user_id` ASC";
                                        $VIIIresult_7 = mysqli_query($conn, $VIII_7);
                                        if(mysqli_num_rows($VIIIresult_1)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($VIIIresult_1)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[3]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row[6] == "Fail") {
                                                        ?>
                                                        <span class = "text-danger"><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row2 = mysqli_fetch_array($VIIIresult_2);
                                                        if($row2[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row3 = mysqli_fetch_array($VIIIresult_3);
                                                        if($row3[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row4 = mysqli_fetch_array($VIIIresult_4);
                                                        if($row4[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row5 = mysqli_fetch_array($VIIIresult_5);
                                                        if($row5[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row6 = mysqli_fetch_array($VIIIresult_6);
                                                        if($row6[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row7 = mysqli_fetch_array($VIIIresult_7);
                                                        if($row7[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
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

                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class IX</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> Student </th>
                                    <th> English </th>
                                    <th> Sindhi </th>
                                    <th> Urdu </th>
                                    <th> P_Studies </th>
                                    <th> Science </th>
                                    <th> Islamiat / Religion </th>
                                    <th> Math </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $sel_IX = "SELECT * FROM `class` WHERE `Class_name` = 'IX'";
                                        $resIX = mysqli_query($conn, $sel_IX);
                                        $r_IX = mysqli_fetch_array($resIX);

                                        $IX_1 = "SELECT * FROM `english` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_1 = mysqli_query($conn, $IX_1);

                                        $IX_2 = "SELECT * FROM `sindhi` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_2 = mysqli_query($conn, $IX_2);

                                        $IX_3 = "SELECT * FROM `urdu` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_3 = mysqli_query($conn, $IX_3);

                                        $IX_4 = "SELECT * FROM `p_studies` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_4 = mysqli_query($conn, $IX_4);

                                        $IX_5 = "SELECT * FROM `science` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_5 = mysqli_query($conn, $IX_5);

                                        $IX_6 = "SELECT * FROM `islamiat_rel` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_6 = mysqli_query($conn, $IX_6);

                                        $IX_7 = "SELECT * FROM `math` WHERE `class_id` = '$r_IX[0]' ORDER BY `user_id` ASC";
                                        $IXresult_7 = mysqli_query($conn, $IX_7);
                                        if(mysqli_num_rows($IXresult_1)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($IXresult_1)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[3]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row[6] == "Fail") {
                                                        ?>
                                                        <span class = "text-danger"><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row2 = mysqli_fetch_array($IXresult_2);
                                                        if($row2[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row3 = mysqli_fetch_array($IXresult_3);
                                                        if($row3[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row4 = mysqli_fetch_array($IXresult_4);
                                                        if($row4[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row5 = mysqli_fetch_array($IXresult_5);
                                                        if($row5[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row6 = mysqli_fetch_array($IXresult_6);
                                                        if($row6[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row7 = mysqli_fetch_array($IXresult_7);
                                                        if($row7[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
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

                
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Class X</h4>
                            <div class="table-responsive" style="overflow-x:auto; overflow-y:auto; max-height: 400px;">
                            <table class="table table-striped">
                                <thead>    
                                <tr>
                                    <th> Student </th>
                                    <th> English </th>
                                    <th> Sindhi </th>
                                    <th> Urdu </th>
                                    <th> P_Studies </th>
                                    <th> Science </th>
                                    <th> Islamiat / Religion </th>
                                    <th> Math </th>
                                    <th style="visibility: hidden;"> details </th>
                                </tr>
                                </thead>
                                <tbody>      
                                    <?php
                                        $sel_X = "SELECT * FROM `class` WHERE `Class_name` = 'X'";
                                        $resX = mysqli_query($conn, $sel_X);
                                        $r_X = mysqli_fetch_array($resX);

                                        $X_1 = "SELECT * FROM `english` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_1 = mysqli_query($conn, $X_1);

                                        $X_2 = "SELECT * FROM `sindhi` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_2 = mysqli_query($conn, $X_2);

                                        $X_3 = "SELECT * FROM `urdu` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_3 = mysqli_query($conn, $X_3);

                                        $X_4 = "SELECT * FROM `p_studies` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_4 = mysqli_query($conn, $X_4);

                                        $X_5 = "SELECT * FROM `science` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_5 = mysqli_query($conn, $X_5);

                                        $X_6 = "SELECT * FROM `islamiat_rel` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_6 = mysqli_query($conn, $X_6);

                                        $X_7 = "SELECT * FROM `math` WHERE `class_id` = '$r_X[0]' ORDER BY `user_id` ASC";
                                        $Xresult_7 = mysqli_query($conn, $X_7);
                                        if(mysqli_num_rows($Xresult_1)){
                                            $i=0;
                                            while($row = mysqli_fetch_array($Xresult_1)) {
                                                $i++;
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    $sel_student = "SELECT u.F_name,u.L_name FROM `users` u WHERE `id` = '$row[3]'";
                                                    $res_student = mysqli_query($conn, $sel_student);
                                                    $r_student = mysqli_fetch_array($res_student);
                                                    echo $r_student["F_name"] . " " . $r_student["L_name"];
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if($row[6] == "Fail") {
                                                        ?>
                                                        <span class = "text-danger"><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }else {
                                                        ?>
                                                        <span><?php echo $row[4] . " / " . $row[5]; ?></span>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row2 = mysqli_fetch_array($Xresult_2);
                                                        if($row2[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row2[4] . " / " . $row2[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row3 = mysqli_fetch_array($Xresult_3);
                                                        if($row3[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row3[4] . " / " . $row3[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row4 = mysqli_fetch_array($Xresult_4);
                                                        if($row4[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row4[4] . " / " . $row4[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row5 = mysqli_fetch_array($Xresult_5);
                                                        if($row5[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row5[4] . " / " . $row5[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row6 = mysqli_fetch_array($Xresult_6);
                                                        if($row6[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row6[4] . " / " . $row6[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                    
                                                    $row7 = mysqli_fetch_array($Xresult_7);
                                                        if($row7[6] == "Fail") {
                                                            ?>
                                                            <span class = "text-danger"><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <span><?php echo $row7[4] . " / " . $row7[5]; ?></span>
                                                            <?php
                                                        }                                            
                                                    ?>
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
<?php
include_once '../../../auth/connection.php';

session_start();

if(isset($_POST["submit"])) {
  $cid = $_POST["myclass"];
  $sel = "SELECT c.Class_name FROM `class` c WHERE `id` = $cid";
$query = mysqli_query($conn, $sel);
$row = mysqli_fetch_array($query);
$x = $row["Class_name"];
switch ($x) {
    case 'VI':
        $sel = "SELECT * FROM `timetable6`";
        break;
    
    case 'VII':
        $sel = "SELECT * FROM `timetable7`";
        break;

    case 'VIII':
        $sel = "SELECT * FROM `timetable8`";
        break;

    case 'IX':
        $sel = "SELECT * FROM `timetable9`";
        break;

    case 'X':
        $sel = "SELECT * FROM `timetable10`";
        break;                                            
}
  $res = mysqli_query($conn, $sel);
  $i = 0;
  while($row = mysqli_fetch_array($res)) {
    $i++;
    $tb = $row[0];
    $mon = $_POST["mon" . $i];
    $tues = $_POST["tues" . $i];
    $wed = $_POST["wed" . $i];
    $thurs = $_POST["thurs" . $i];
    $fri = $_POST["fri" . $i];
    $sat = $_POST["sat" . $i];
    
    switch ($x) {
      case 'VI':
          $up = "UPDATE `timetable6` SET `mon`='$mon',`tues`='$tues',`wed`='$wed',`thurs`='$thurs',`fri`='$fri',`sat`='$sat' WHERE `id` = $tb";
          break;
      
      case 'VII':
          $up = "UPDATE `timetable7` SET `mon`='$mon',`tues`='$tues',`wed`='$wed',`thurs`='$thurs',`fri`='$fri',`sat`='$sat' WHERE `id` = $tb";
          break;
  
      case 'VIII':
          $up = "UPDATE `timetable8` SET `mon`='$mon',`tues`='$tues',`wed`='$wed',`thurs`='$thurs',`fri`='$fri',`sat`='$sat' WHERE `id` = $tb";
          break;
  
      case 'IX':
          $up = "UPDATE `timetable9` SET `mon`='$mon',`tues`='$tues',`wed`='$wed',`thurs`='$thurs',`fri`='$fri',`sat`='$sat' WHERE `id` = $tb";
          break;
  
      case 'X':
          $up = "UPDATE `timetable10` SET `mon`='$mon',`tues`='$tues',`wed`='$wed',`thurs`='$thurs',`fri`='$fri',`sat`='$sat' WHERE `id` = $tb";
          break;                                            
    }        
    $upres = mysqli_query($conn, $up);
    header("Location: timetable.php");
  }
}
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
                  <li class="breadcrumb-item"><a href="#">TimeTable</a></li>
                  <li class="breadcrumb-item active" aria-current="page">TimeTable</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <form action="#" method="post">
                    <div class="card-body">
                      <h4 class="card-title">TimeTable</h4>
                      <p class="card-description">
                          <select id="mycl" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="myclass">
                            <option selected value="0">SELECT CLASS</option>
                            <?php
                              $c_sel = "SELECT * FROM `class`";
                              $c_res = mysqli_query($conn, $c_sel);
                              while($c_row = mysqli_fetch_array($c_res)) {
                                ?>
                                  <option value="<?php echo $c_row[0]; ?>"><?php echo $c_row[2]; ?></option>
                                <?php
                              } 
                            ?>

                          </select>
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> Time </th>
                              <th> Monday </th>
                              <th> Tuesday </th>
                              <th> Wednesday </th>
                              <th> Thursday </th>
                              <th> Friday </th>
                              <th> (Extra class) <br> Saturday</th>
                            </tr>
                          </thead>
                          <tbody id="mytb">      
                                <?php
                                  // $sel_r = "SELECT * FROM `timetable6`";
                                  // $res_r = mysqli_query($conn, $sel_r);
                                  // $i = 0;
                                  // while($row_r = mysqli_fetch_array($res_r)) {
                                  //   $i++;
                                ?>
                                <!-- <tr>
                                  <td><input type="text" style="background-color: transparent; color: white; border:none;" value="8:30-9:00" readonly></td>
                                  <td><input type="text" name="mon<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[2]; ?>"></td>
                                  <td><input type="text" name="tues<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[3]; ?>"></td>
                                  <td><input type="text" name="wed<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[4]; ?>"></td>
                                  <td><input type="text" name="thurs<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[5]; ?>"></td>
                                  <td><input type="text" name="fri<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[6]; ?>"></td>
                                  <td><input type="text" name="sat<?php echo $i; ?>" style="background-color: transparent; color: white; border:none;" value="<?php echo $row_r[7]; ?>"></td>
                                </tr> -->
                                <?php
                                  // }
                                ?>
                          </tbody>
                        </table>                        
                      </div>
                    </div>
                    <div class="container d-flex justify-content-center mb-4">
                      <input type="submit" value="Submit" class="btn btn-outline-primary" name="submit">
                    </div>
                  </form>
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

    <script>
        $('#mycl').on('change', function() {
          const id =$(this).find(":selected").val();
          $.ajax({
            url: "get_table_data.php",
            cache: false,
            type: "POST",
            data: {id : id},
            success: function(html){
              // alert(html);
              $('#mytb').html(html);
            }
          });
        });;
</script>
  </body>
</html>
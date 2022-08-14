<?php
include_once '../../../auth/connection.php';

session_start();

if(isset($_POST["submit"])) {
  $cid = $_POST["myclass"];
  $at_sel = "SELECT u.id,u.Profile,u.F_name,u.L_name FROM `users` u WHERE `Class_id` = $cid";
  $atresult = mysqli_query($conn, $at_sel);
  $i = 0;
  $date = $_POST["t_date"];
  while($atrow = mysqli_fetch_array($atresult)) { 
      $i++;
      $ud = $atrow["id"];
      $total = $_POST["ttl" . $i];
      $obt = $_POST["obt" . $i];
      if($obt <= 7) {
        $status = "Fail";
      }
      else {
        $status = "Pass";
      }
      $inp = "INSERT INTO `english`(`date`, `class_id`, `user id`, `total`, `obt`, `status`) VALUES ('$date','$cid','$ud','$total','$obt','$status')";
      $inpres = mysqli_query($conn,$inp);
      header("Location: ../../dashboard.php");
  }
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
                  <li class="breadcrumb-item"><a href="#">Tests</a></li>
                  <li class="breadcrumb-item active" aria-current="page">English Test</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <form action="#" method="post"> -->
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
                      <div>
                      <h4 class="card-title">English Result</h4>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> Date </th>
                              <th> Student </th>
                              <th> Obtained </th>
                              <th> Status </th>
                            </tr>
                          </thead>
                          <tbody id="mystu">      

                          <!-- data coming from get_class_data.php -->

                          </tbody>
                        </table>                        
                      </div>
                    <!-- </form> -->
                  </div>
                </div>
              </div>

              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <form action="#" method="post"> -->
                      <div>
                      <h4 class="card-title">English Result</h4>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> Date </th>
                              <th> Student </th>
                              <th> Obtained </th>
                              <th> Status </th>
                            </tr>
                          </thead>
                          <tbody id="mystu">      

                          <!-- data coming from get_class_data.php -->

                          </tbody>
                        </table>                        
                      </div>
                    <!-- </form> -->
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
    
    <script>
        $('#mycl').on('change', function() {
          const id =$(this).find(":selected").val();
          $.ajax({
            url: "get_mk_data.php",
            cache: false,
            type: "POST",
            data: {id : id},
            success: function(html){
              // alert(html);
              $('#mystu').html(html);
            }
          });
        });;
    </script>
  </body>
</html>
<?php
include_once '../../../auth/connection.php';

session_start();

if(isset($_POST["submit"])) {
  $myclass = $_POST["mycl"];
  $student = $_POST["my_user"];
  $eng = $_POST["eng"];
  $urdu = $_POST["urdu"];
  $sindhi = $_POST["sindhi"];
  $math = $_POST["math"];
  $p_studies = $_POST["p_studies"];
  $sci = $_POST["sci"];
  $isl = $_POST["isl"];
  $total = 700;
  $obt = (int)$eng + (int)$urdu + (int)$sindhi + (int)$math + (int)$p_studies + (int)$sci + (int)$isl;
  $per = (float)$obt/$total*100;
  $per = number_format($per, 2, '.', '');
  if($per >= 80) {
    $grade = "A+";
  }elseif($per >= 70) {
    $grade = "A";
  }elseif($per >= 60) {
    $grade = "B";
  }elseif($per >= 50) {
    $grade = "C";
  }elseif($per >= 33) {
    $grade = "D";
  }elseif($per <= 32) {
    $grade = "F";
  }

  if($grade == "F") {
    $status = "Fail";
  }
  else {
    $status = "Pass";
  }

  $remarks = $_POST["remarks"];  
  $remarks = mysqli_real_escape_string($conn,$remarks);

  $inp = "INSERT INTO `exam`(`class_id`, `user_id`, `eng`, `urdu`, `sindhi`, `p_studies`, `sci`, `islamiat_rel`, `math`, `total`, `obt`, `percentage`, `grade`, `status`, `remarks`) 
  VALUES ('$myclass','$student','$eng','$urdu','$sindhi','$p_studies','$sci','$isl','$math','$total','$obt','$per','$grade','$status','$remarks')";
  $pass_result = mysqli_query($conn, $inp);
  ?>
  <Script>
  window.location.assign("add_marks.php");
  </Script>            
<?php
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
              <h3 class="page-title"> Exam Marks </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <form action="#" method="post">
              <div style="display: flex; justify-content:between;">
                <div class="form-group col-5">
                  <select class="form-control text-light" name="mycl" id="mycl">
                    <option>SELECT CLASS</option>
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
                </div>
                <div class="form-group col-5">
                  <select class="form-control text-light" name="my_user" id="my_user">

                  </select>
                </div>
              </div>
              <div class="row">            
                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="forms-sample">
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">English</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="eng" placeholder="English Marks">
                        </div>                    
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">Urdu</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="urdu" placeholder="Urdu Marks">
                        </div>                    
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">Sindhi</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="sindhi" placeholder="Sindhi Marks">
                        </div>                    
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">Math</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="math" placeholder="Math Marks">
                        </div>                    
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="forms-sample">
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">P-Studies</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="p_studies" placeholder="P-Studies Marks">
                        </div>                    
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">Science</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="sci" placeholder="Science Marks">
                        </div>                    
                        <div class="form-group mb-3">
                          <label for="exampleInputName1">Islamiat/Religion</label>
                          <input type="number" class="form-control" id="exampleInputName1" name="isl" placeholder="Islamiat/Religion Marks">
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleTextarea1">Remarks</label>
                          <textarea class="form-control" name="remarks" id="exampleTextarea1" rows="4">Remarks</textarea>
                        </div>                    
                        <div class="form-group text-light float-right">
                          <input type="submit" class="btn btn-success" id="exampleInputName1" value="Submit" name="submit">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script>
        $('#mycl').on('change', function() {
          const id =$(this).find(":selected").val();
          $.ajax({
            url: "get_user_id.php",
            cache: false,
            type: "POST",
            data: {id : id},
            success: function(html){
              // alert(html);
              $('#my_user').html(html);
            }
          });
        });;
    </script>
  </body>
</html>
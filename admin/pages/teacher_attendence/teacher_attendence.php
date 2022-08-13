<?php
include_once '../../../auth/connection.php';

session_start();

if(isset($_POST["submit"])) {
  $query = "SELECT * FROM `teachers` WHERE 1";
  $result = mysqli_query($conn,$query);
  $i = 0;
  if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_array($result)){
      $i++;
      $teacher_name = $row[1];
      $at = $_POST["optionsRadios" . $i];
      $inp = "INSERT INTO `teacher_attendence`(`id`, `Teacher_name`, `attendence`) VALUES (Null,'$teacher_name','$at')";
      $inpres = mysqli_query($conn,$inp);
      header("Location: ../../pages/teachers/teacher.php");
    }
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
                  <li class="breadcrumb-item"><a href="#">Attendance</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Student Attendance</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="#" method="post">
                      <h4 class="card-title">Attendence</h4>
                      <p class="card-description">
                         
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th> profile </th>
                              <th> Teachers </th>
                              <th> Subject </th>

                              <th style="visibility: hidden;"> Absent </th>
                              <th style="visibility: hidden;"> Present </th>
                              <th style="visibility: hidden;"> Leave </th>
                            </tr>
                          </thead>
                          <tbody id="mystu">
                            <?php      
                          $at_sel = "SELECT * FROM `teachers` WHERE 1";
                          // echo $sel;
                          $result = mysqli_query($conn, $at_sel);
                          $i = 0;
                          while($row = mysqli_fetch_array($result)) { 
                              $i++;
                          ?>
                              <tr>
                                  <td><img src="../../../img/<?php echo $row["Profile"]; ?>" alt="" srcset=""></td>
                                  <td> <?php echo $row[1]; ?></td>
                                  <td><?php echo $row[7];?><
                                  <td class="align-middle"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios1<?php echo $i; ?>" value="A">Absent</label></td>
                                  <td class="align-middle"bel><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios2<?php echo $i; ?>" value="P">Present</label></td>
                                  <td class="align-middle"><label><input type="radio" class="form-check-input" name="optionsRadios<?php echo $i; ?>" id="optionsRadios3<?php echo $i; ?>" value="L">Leave</label></td>
                              </t>
                          <?php 
                            }
                          ?>
                          <!-- data coming from get_class_data.php -->

                          </tbody>
                        </table>
                        
                        <div class="container">
                          <input type="submit" value="Submit" class="btn btn-outline-primary" style="float:right;" name="submit">
                        </div>
                      </div>
                    </form>
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

    <script>
        $('#mycl').on('change', function() {
          const id =$(this).find(":selected").val();
          $.ajax({
            url: "get_class_data.php",
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
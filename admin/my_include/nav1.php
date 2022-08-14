
<style>
    #c_test ul li :hover {
        color:white;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../dashboard/dashboard.php"><img src="../../bg_img.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../dashboard/dashboard.php"><img src="../../bg_img_small.png" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="../../assets/images/faces/face15.jpg" alt="">
                    <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                    <span>Gold Member</span>
                </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                    </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                    </div>
                </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../dashboard/dashboard.php">
                <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#teach" aria-expanded="false" aria-controls="teach">
            <span class="menu-icon">
            <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Teachers</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="teach">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../pages/teachers/add_teacher.php"> Add Teacher </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/teacher_attendence/teacher_attendence.php"> Teacher's Attendence </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/teachers/teacher.php"> All Teachers </a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../tables/basic-table.php">
                <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Students Table</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../timetable/timetable.php">
                <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Time Table</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../attendance/attendance.php">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Attendance</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../contact/feedback.php">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Feedback</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="../contact/contact.php">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Contact</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#c_test" aria-expanded="false" aria-controls="c_test">
                <span class="menu-icon">
                <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Class Tests</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="c_test">
                <ul style="height: auto;">
                <li class="nav-item"> <a class="nav-link" href="../class-test/eng.php"> English </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/islamiat_rel.php"> Islamiat/Religion </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/math.php"> Math </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/p_studies.php"> P-Studies </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/science.php"> Science </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/sindhi.php"> Sindhi </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/urdu.php"> Urdu </a></li>
                <li class="nav-item"> <a class="nav-link" href="../class-test/test_result.php"> All Results </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#exam" aria-expanded="false" aria-controls="exam">
            <span class="menu-icon">
            <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">Exams Result</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="exam">
            <ul style="height: auto;">
            <li class="nav-item"> <a class="nav-link" href="../../pages/exams/add_marks.php"> Add Student Result </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/exams/all_exams.php"> All Results </a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
            <i class="mdi mdi-security"></i>
            </span>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="../../../index.php"> Home </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../../aboutus.php"> About Us </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../../contactus.php"> Contact Us </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../../feedback.php"> Feedback </a></li>
            </ul>
        </div>
        </li>
    </ul>
</nav>
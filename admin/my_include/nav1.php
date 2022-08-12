
<style>
    #c_test ul li :hover {
        color:white;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="../../dashboard.php"><img src="../../bg_img.png" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="../../dashboard.php"><img src="../../bg_img_small.png" alt="logo" /></a>
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
            <a class="nav-link" href="../../dashboard.php">
                <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
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
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
            </ul>
        </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
</nav>
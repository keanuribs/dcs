<?php
$currentPage = basename($_SERVER['PHP_SELF']);

session_start();
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../index.php");
    die();
}

include '../db/config.php';

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

if ($query) {
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $fname = $row['fname'];
        $lname = $row['lname'];
    } else {
        $fname = "User Not Found";
        $lname = "User Not Found";
    }
} else {
    die("Query failed: " . mysqli_error($conn));
}
$roles = isset($_SESSION['ROLES']) ? $_SESSION['ROLES'] : "Role Not Found";

?>

<div class="header">

    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="../assets/images/dcs-logo-with-text.png" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="../assets/images/dcss.png" alt="Logo" width="90" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <!-- <div class="top-nav-search">
    <form>
        <input type="text" class="form-control" placeholder="Search here">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div> -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">


        <li class="nav-item dropdown has-arrow new-user-menus">
            <a class="btn btn-primary" href="../db/logout.php" style="color: white">Logout</a>







        </li>

    </ul>

</div>



<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Dashboard</span>
                </li>
                <li class="<?php echo ($currentPage == 'admin-dashboard.php') ? 'active' : ''; ?>">
                    <a href="admin-dashboard.php"><i class="feather-grid"></i> <span>Admin Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <span>Student Details</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span>Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li class="<?php echo ($currentPage == 'students2.php') ? 'active' : ''; ?>"><a
                                href="students2.php">Student List</a></li>
                        <li class="<?php echo ($currentPage == 'course.php') ? 'active' : ''; ?>"><a
                                href="course.php">Course</a></li>
                        <li class="<?php echo ($currentPage == 'yrlvl.php') ? 'active' : ''; ?>"><a
                                href="yrlvl.php">Year Level</a></li>
                        <li class="<?php echo ($currentPage == 'section.php') ? 'active' : ''; ?>"><a
                                href="section.php">Section</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Instructor Details</span>
                </li>
                <li class="<?php echo ($currentPage == 'professor.php') ? 'active' : ''; ?>">
                    <a href="professor.php"><i class="fa fa-user" aria-hidden="true"></i><span>Instructors
                            List</span></a>
                </li>
                <li class="menu-title">
                    <span>Grading</span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-edit"></i><span>Grading</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="../../../../ogswithqr/dcs2/admin/grading/lecuture/lecture.php">Lecture Only</a>
                        </li>
                        <li><a href="../../../../ogswithqr/dcs2/admin/grading/lecturewithlab/lecturewithlab.php">Lecture
                                with Laboratory</a></li>
                        <li><a href="../../../../ogswithqr/dcs2/admin/grading/lecuture/view-lecture-record.php">View
                                Grades Record</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fas fa-graduation-cap"></i> <span>Attendance</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="create-class-attendance.php">Create Attendance</a></li>
                        <li><a href="view-attendance.php">View Attendance</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
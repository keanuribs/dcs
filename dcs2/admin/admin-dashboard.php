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

$queryStudentCount = mysqli_query($conn, "SELECT COUNT(*) AS studentCount FROM students");

if ($queryStudentCount) {
    $rowStudentCount = mysqli_fetch_assoc($queryStudentCount);
    $studentCount = $rowStudentCount['studentCount'];
} else {
    die("Query failed: " . mysqli_error($conn));
}
$roles = isset($_SESSION['ROLES']) ? $_SESSION['ROLES'] : "Role Not Found";

$queryStudentCount = mysqli_query($conn, "SELECT COUNT(*) AS studentCount FROM tblstudents");

if ($queryStudentCount) {
    $rowStudentCount = mysqli_fetch_assoc($queryStudentCount);
    $studentCount = $rowStudentCount['studentCount'];
} else {
    die("Query failed: " . mysqli_error($conn));
}

// Additional variable definitions
$queryCourseCount = mysqli_query($conn, "SELECT COUNT(*) AS courseCount FROM course");
$queryYearLevelCount = mysqli_query($conn, "SELECT COUNT(*) AS yearlevelCount FROM tblyearlvl");
$querySectionCount = mysqli_query($conn, "SELECT COUNT(*) AS sectionCount FROM tblsection");
$queryProfessorCount = mysqli_query($conn, "SELECT COUNT(*) AS professorCount FROM tblprofessors");

if ($queryCourseCount && $queryYearLevelCount && $querySectionCount && $queryProfessorCount) {
    $rowCourseCount = mysqli_fetch_assoc($queryCourseCount);
    $courseCount = $rowCourseCount['courseCount'];

    $rowYearLevelCount = mysqli_fetch_assoc($queryYearLevelCount);
    $yearlevelCount = $rowYearLevelCount['yearlevelCount'];

    $rowSectionCount = mysqli_fetch_assoc($querySectionCount);
    $sectionCount = $rowSectionCount['sectionCount'];

    $rowProfessorCount = mysqli_fetch_assoc($queryProfessorCount);
    $professorCount = $rowProfessorCount['professorCount'];
} else {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php

$importphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-import.php';
require $importphp;
?>
</head>

<body>
    <?php

$sidebarphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-sidebar.php';
require $$sidebarphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-sidebar.php';
;
?>
    <div class="main-wrapper">

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                        <a href="students2.php" class="card-link">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Students</h6>
                                        <h3><?php echo $studentCount; ?></h3>
                                    </div>
                                    <div class="db-icon" style="background-color: red;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                        <a href="course.php" class="card-link">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Courses</h6>
                                        <h3><?php echo $courseCount; ?></h3>
                                    </div>
                                    <div class="db-icon" style="background-color: green;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                        <a href="yrlvl.php" class="card-link">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Year Level</h6>
                                        <h3><?php echo $yearlevelCount; ?></h3>
                                    </div>
                                    <div class="db-icon" style="background-color: rgb(181, 30, 189);">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                        <a href="section.php" class="card-link">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Section</h6>
                                        <h3><?php echo $sectionCount; ?></h3>
                                    </div>
                                    <div class="db-icon" style="background-color: gray;">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                        <a href="professor.php" class="card-link">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Professors</h6>
                                        <h3><?php echo $professorCount; ?></h3>
                                    </div>
                                    <div class="db-icon" style="background-color: gray;">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php

$footerphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-footer.php';
require $footerphp;
?>
</body>

</html>
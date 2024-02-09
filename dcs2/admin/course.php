<!DOCTYPE html>
<html lang="en">

<head>
    <?php
$importphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-import.php';
require $importphp;
?>

    <!-- JavaScript module for application logic -->
    <script src="../assets/js/course.js" type="module"></script>
</head>

<body>

    <?php
$sidebarphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-sidebar.php';
require $sidebarphp;
?>
    <div class="main-wrapper">

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Courses</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Course</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <main>
                        <div class="datatable-container">
                            <div class="top-panel">
                                <a href="#" class="btn btn-success" id="addcourseBtn"><i class="fas fa-plus"></i></a>
                            </div>
                            <table id="CourseList" class="table table-striped border" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Course</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <!-- Course Modal -->
                        <div class="modal fade" id="courseDataModal" tabindex="-1"
                            aria-labelledby="courseAddEditModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="courseModalLabel">Add Course</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form name="courseDataFrm" id="courseDataFrm">
                                        <div class="modal-body">
                                            <div class="frm-status"></div>
                                            <div class="mb-3">
                                                <label for="course" class="form-label">Course</label>
                                                <input type="text" class="form-control" id="course" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" id="courseID" value="0">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success"
                                                id="submitCourseBtn">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </section>
            </div>
        </div>
    </div>
    <?php

$footerphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-footer.php';
require $footerphp;
?>
</body>

</html>

<!-- JavaScript module for application logic -->
<script src="/js/section.js" type="module"></script>
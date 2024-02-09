<!DOCTYPE html>
<html lang="en">

<head>
    <?php

$importphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-import.php';
require $importphp;


?>
    <!-- JavaScript module for application logic -->
    <script src="app2.js" type="module"></script>
</head>

<body>
    <?php

$sidebarphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-sidebar.php';
require $sidebarphp;

?>
    <div class="main-wrapper">



        <div class="main-wrapper">

            <div class="page-wrapper">
                <div class="content container-fluid">

                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-sub-header">
                                    <h3 class="page-title">Students</h3>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Student Details</a></li>
                                        <li class="breadcrumb-item active">Students</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <main>
                        <div class="datatable-container">

                            <div class="top-panel">
                                <a href="#" class="btn btn-success" id="addStudentBtn"><i class="fas fa-plus"></i></a>
                            </div>
                            <table id="studentList" class="table table-striped border" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Student Number</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="modal fade" id="userDataModal" tabindex="-1"
                                aria-labelledby="userAddEditModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="userModalLabel">Add New Student</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form name="userDataFrm" id="userDataFrm">
                                            <div class="modal-body">
                                                <div class="frm-status"></div>
                                                <div class="row mb-2">
                                                    <div class="col">
                                                        <label for="studentLastName" class="form-label">Last
                                                            Name</label>
                                                        <input type="text" class="form-control" id="studentLastName"
                                                            placeholder="Enter Last Name" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="studentFirstName" class="form-label">First
                                                            Name</label>
                                                        <input type="text" class="form-control" id="studentFirstName"
                                                            placeholder="Enter First Name" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="studentMiddleName" class="form-label">Middle
                                                            Name</label>
                                                        <input type="text" class="form-control" id="studentMiddleName"
                                                            placeholder="Enter Middle Name" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="studentNumber" class="form-label">Student Number</label>
                                                    <input type="text" class="form-control" id="studentNumber"
                                                        placeholder="Enter student number" required>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="mb-3">
                                                        <label for="course" class="form-label">Course</label>
                                                        <input type="text" class="form-control" id="course"
                                                            placeholder="Enter course" required>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="mb-3">
                                                            <label for="yearsec" class="form-label">Year and
                                                                Section</label>
                                                            <input type="text" class="form-control" id="yearsec"
                                                                placeholder="Enter Yr&Sec" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" id="studentID" value="0">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success"
                                                                id="submitStudentBtn">Submit</button>
                                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <?php

$footerphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-footer.php';
require $footerphp;
?>

</body>

</html>
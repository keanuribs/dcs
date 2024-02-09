<!DOCTYPE html>
<html lang="en">

<head>
    <?php
$importphp = $_SERVER['DOCUMENT_ROOT'] . '/ogswithqr/dcs2/admin/inc/adminheader-import.php';
require $importphp;
?>

    <!-- JavaScript module for application logic -->
    <script src="js/professors.js" type="module"></script>
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
                                <h3 class="page-title">Professors List</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Professors List</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <main>
                        <div class="datatable-container">
                            <div class="top-panel">
                                <a href="#" class="btn btn-success" id="addProfessorBtn"><i class="fas fa-plus"></i></a>
                            </div>
                            <table id="professorList" class="table table-striped border" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Email</th>
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
                                        <h1 class="modal-title fs-5" id="professorModalLabel">Add New Professor</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form name="professorDataFrm" id="professorDataFrm">
                                        <div class="modal-body">
                                            <div class="frm-status"></div>
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <label for="professorLastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="professorLastName"
                                                        placeholder="Enter Last Name" required>
                                                </div>
                                                <div class="col">
                                                    <label for="professorFirstName" class="form-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control" id="professorFirstName"
                                                        placeholder="Enter First Name" required>
                                                </div>
                                                <div class="col">
                                                    <label for="professorMiddleName" class="form-label">Middle
                                                        Name</label>
                                                    <input type="text" class="form-control" id="professorMiddleName"
                                                        placeholder="Enter Middle Name" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="professorEmail" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="professorEmail"
                                                    placeholder="Enter professor email" required>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" id="professorID" value="0">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success"
                                                    id="submitProfessorBtn">Submit</button>
                                            </div>
                                    </form>
                                </div>
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
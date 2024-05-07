<?php
session_start();

include "../todo-crud/db/config.php";
include "../todo-crud/includes/header.php";

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['username'])) {
    header("Location: ../todo-crud/login/login.php");
    exit();
}

$recordsPerPage = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $recordsPerPage;

$searchTerm = "";
if (isset($_GET["listing"])) {
    $q = mysqli_real_escape_string($con, $_GET["listing"]);
    $searchTerm = " AND listing LIKE '%$q%'";
}

if (!empty($searchTerm)) {
    $searchCondition = " WHERE 1 $searchTerm";
} else {
    $searchCondition = "";
}

$qry = "SELECT * FROM todo $searchCondition LIMIT $offset, $recordsPerPage";
$rawdata = mysqli_query($con, $qry);

if (!$rawdata) {
    die("Error in SQL query: " . mysqli_error($con));
}
$page = isset($_GET['page_no']) ? $_GET['page_no'] : 1;
$offset = ($page - 1) * $recordsPerPage;

// Modify your SQL query to use $offset and $recordsPerPage
$sql = "SELECT * FROM todo LIMIT $offset, $recordsPerPage";
// Calculate total records and total pages
$totalRecordsQuery = "SELECT COUNT(*) as total FROM todo";
$totalRecordsResult = mysqli_query($con, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['total'];
$totalPages = ceil($totalRecords / $recordsPerPage);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        
        .model {
            margin: 0 auto;
        }
    </style>
</head>

<body class="">
    <section class="vh-100" style="background-color: #e2d5de;">
        <div class="container py-5 h-100">
            <div class="col-md-12">
                <?php if (isset($_SESSION['user']['name'])): ?>
                    <h2>Welcome,
                        <?php echo $_SESSION['user']['name']; ?>!
                    </h2>
                <?php endif; ?>
            </div>
            <h6 class="mb-3">Awesome Todo List</h6>

            <ul class="list-group mb-4">
                <?php while ($row = mysqli_fetch_array($rawdata)): ?>
                    <li id="task-list-<?php echo $row['id']; ?>"
                        class="list-group-item d-flex justify-content-between align-items-center">
                        <span id="task_name_<?php echo $row['id']; ?>">
                            <?php echo $row['listing']; ?>
                        </span>
                        <div>
                            <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id']; ?>)"
                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="javascript:void(0);" onclick="openEditPopup(<?php echo $row['id']; ?>)"
                                class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="javascript:void(0);" onclick="openViewPopup(<?php echo $row['id']; ?>)"
                                class="btn btn-outline-success"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <p style="text-align:center">Pages</p>
            <nav aria-label="Page navigation example" id="pagination-container">
                <ul class="pagination justify-content-center" class="loadpage-container">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link" href="javascript:void(0);" onclick="loadPage(<?php echo $i; ?>)">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
       
    </section>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content custom-modal">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Task Details</h5>
                    <button type="button" class="btn-close" id="editmodel" data-bs-dismiss="modal" aria-label="Close"
                        onclick="customCloseFunction()"></button>
                </div>
                <div class="modal-body" id="modalEditTaskContent">
                    <h1>This is content</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
     onclick="customCloseFunction()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-VlNBb5MlErllv0NZ05z1Gb8IbAVNF3msT3GYG97e9/jbz3nX/9CUL/Qlmh/j4cC8"
        crossorigin="anonymous"></script>
    <script>
        function openViewPopup(id) {
            $.ajax({
                url: "../todo-crud/tasks/view-task.php",
                method: "POST",
                data: { id: id },
                success: function (res) {
                    $('#viewPopupContent').html(res);
                    $("#viewModal").show();
                },
                error: function () {
                    alert("Error loading task details for viewing.");
                }
            });
        }

        function closeViewPopup() {
            $("#viewModal").hide();
        }

        function openEditPopup(id) {
            $("#editModal").show();
            $("#editModal").removeClass('fade');
            $("#editModal").addClass('show');
            $('#modalEditTaskContent').html('Loading...');

            $.ajax({
                url: "../todo-crud/tasks/edit-task.php",
                method: "GET",
                data: { id: id },
                success: function (res) {
                    $('#modalEditTaskContent').html(res);
                },
                error: function () {
                    alert("Error loading edit form.");
                }
            });
        }

        function closePopup() {
            $("#myModal").hide();
        }

        function closeEditPopup() {
            $("#editModal").hide();
        }

        function confirmDelete(id) {
            var isConfirmed = confirm("Are you sure you want to delete this task?");
            if (isConfirmed) {
                $.ajax({
                    url: "../todo-crud/tasks/delete-task.php",
                    method: "POST",
                    data: { id: id },
                    success: function (res) {
                        $('#task-list-' + id).remove();
                        console.log(res);
                    },
                    error: function (err) {
                        alert("Error deleting task.");
                    }
                });
            }
        }

        function customCloseFunction() {
            var new_task_name = $(document).find("#listing").val();
            var currentTaskId = $(document).find("#id").val();

            $("#editModal").hide();
            $("#editModal").removeClass('show');
            $("#editModal").addClass('fade');
            $('#modalEditTaskContent').html('Loading...');

            $(document).find("#task_name_" + currentTaskId).text(new_task_name);
        }
        function loadPage(page) {
               $('body').removeClass('page-1-style page-2-style');

    // Add styling based on the active page
    if (page === 1) {
        $('body').addClass('page-1-style');
    } else if (page === 2) {
        $('body').addClass('page-2-style');
    }
            console.log("Loading page: " + page);
            $.ajax({
                url: 'ajax_pagination.php',
                type: 'GET',
                data: { page_no: page },
                success: function (data) {
                    $('#todo-list').html(data.records);
                },
                error: function () {
                    console.log("Error in pagination");
                }
            });
        }

        $(document).ready(function () {
            loadPage(1); // Load initial page
            $('.loadpage-container').on('click', 'a.page-link', function (e) {
                e.preventDefault();
                var page = $(this).attr('page');
                loadPage(page);
            });
        });

     
    </script>

</body>

</html>

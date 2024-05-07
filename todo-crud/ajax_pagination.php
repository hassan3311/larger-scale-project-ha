<?php
include "../todo-crud/db/config.php";

$recordsPerPage = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$sql = "SELECT * FROM todo";
$result = mysqli_query($con, $sql) or die("Query not work");
$totalRecords = mysqli_num_rows($result);
$totalPages = ceil($totalRecords / $recordsPerPage);

if ($totalRecords > 0) {
    echo '<ul class="pagination justify-content-center" id="pagination-container">';
    for ($i = 1; $i <= $totalPages; $i++) {
        $activeClass = ($page == $i) ? 'active' : '';
        echo '<li class="page-item ' . $activeClass . '">';
        echo '<a class="page-link" href="javascript:void(0);" onclick="loadPage(' . $i . ')" page="' . $i . '">';
        echo $i;
        echo '</a></li>';
    }
    echo '</ul>';
}
?>

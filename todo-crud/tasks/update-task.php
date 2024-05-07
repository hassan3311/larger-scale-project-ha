<?php
include "../db/config.php";

$id = $_POST['id'];
$List = $_POST['listing'];
$is_ajax = isset($_POST['is_ajax']) ? 1 : 0;

$query = "UPDATE todo SET listing = '$List' WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result && $is_ajax == 0) {
   echo 'Record Updated.';
} else {
    echo 'Error updating record: ' . mysqli_error($con);
}

exit();
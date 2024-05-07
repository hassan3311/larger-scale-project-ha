<?php
include("dbconnect.php");

$id = $_GET['id'];
mysqli_query($con,"DELETE FROM users WHERE  id='$id'");
header("location: index.php");

?>

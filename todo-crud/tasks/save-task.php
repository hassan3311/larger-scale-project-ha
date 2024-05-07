<?php include "../db/config.php" ?>
<?php
$list = $_POST["listing"];

$query = "INSERT INTO `user`.`todo` (`listing`) VALUES ('$list')";

$result = mysqli_query($con, $query);
header("Location: ../index.php");

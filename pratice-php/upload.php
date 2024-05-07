<?php
 include("dbconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['name'];
    $phone = $_GET['phone'];

    $query = "INSERT INTO users (name, phone) VALUES ('$name', '$phone')";

    if ($con->query($query) === true) {
        echo "Data inserted";
        header("location:index.php");
    } 
}
?>

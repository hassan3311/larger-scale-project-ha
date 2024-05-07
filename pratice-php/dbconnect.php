<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasting";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection error: " . $con->connect_error);
}

?>

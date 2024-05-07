<?php
if (!function_exists('db_connection')) {
    function db_connection($servername, $username, $password, $dbname) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rental";

$conn = db_connection($servername, $username, $password, $dbname);
?>

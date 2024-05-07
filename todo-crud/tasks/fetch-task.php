<?php
include "../db/config.php";

// Check if the request method is GET and if 'id' is set in the GET parameters
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // Fetch data from the database based on the task ID
    $qry = "SELECT * FROM todo WHERE id = '$id'";
    $result = mysqli_query($con, $qry);

    if ($result) {
        // Fetch the data as an associative array
        $data = mysqli_fetch_assoc($result);

        // Convert the data to JSON format and echo it
        echo json_encode($data);
    } else {
        // Handle the case where the query fails
        echo json_encode(['error' => 'Error fetching data from the database.']);
    }
} else {
    // Handle the case where the request is not a valid GET request with an ID
    echo json_encode(['error' => 'Invalid request.']);
}
?>

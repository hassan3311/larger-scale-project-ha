<?php
session_start();

include "../db/logdb.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Check if the required fields are not empty, and passwords match
    if (!empty($username) && !empty($password) && !is_numeric($username) && ($password)) {

        // Use prepared statements to prevent SQL injection
        $query = "INSERT INTO data (name, password) VALUES ('$username', '$password')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("location:../index.php");
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        } else {
            echo "<script type='text/javascript'> alert('Register fail')</script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Register fail')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container">
        <h1 class="text-align:center">Sign Up to our website</h1>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password" required>
                <div id="" class="form-text">Make sure to type the same password.</div>
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="text" class="form-control" name="cpassword" id="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
      
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

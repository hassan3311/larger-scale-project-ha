<?php
include "../db/config.php";
include "../db/logdb.php";

// Check if the form is submitted
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM sigin WHERE email = '$email' AND password='$password' LIMIT 1 ";
    $log_query_run = mysqli_query($con, $log_query);
 

    if ($log_query_run && mysqli_num_rows($log_query_run) > 0) {
        // Fetch the first row from the result set
        $row = mysqli_fetch_assoc($log_query_run);

        // Extract user data from the row
        $user_id = $row['id'];
        $user_name = $row['name'];
        $user_email = $row['email'];
        $user_password = $row['password'];

        // Set session variables
        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
            'user_password' => $user_password
        ];

        $_SESSION['status'] = "Login Successful";
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['status'] = "Invalid password or email";
        header("Location: ../login.php");
        exit();
    }
} else {
    $_SESSION['status'] = "Invalid password or email";
    header("Location:../login.php");
    exit();
}
?>

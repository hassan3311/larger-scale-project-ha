<?php
include ('inc/helper.php');

if (isset($_POST['register_btn'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $nicename=$_POST['nicename'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $register_query="INSERT INTO tbl_users(fname,lname,nicename,email,password) VALUES('$fname','$lname','$nicename','$email','$password') ";
    $register_query_run=mysqli_query($conn,$register_query);

    if($register_query_run)
    {
        $_SESSION['status']='You are registered successfully';
        $_SESSION['status_code']='success';
        header('location:login.php');
    }
    else
    {
        $_SESSION['status']='Not Able To Register';
        $_SESSION['status_code']='error';
        header('location:register.php');
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
<div class="main" >
        <div class="registration">
            <h2>Register Here</h2>
            <form id="register" method="post" action="register.php">
                <label for="">First Name</label>
                <br>
                <input type="text" name="fname" id="name" placeholder="Enter your First Name"> 
                <br><br>
                <label for="">Last Name</label>
                <br>
                <input type="text" name="lname" id="name" placeholder="Enter your First Name"> 
                <br><br>
                <label for="">Username</label>
                <br>
                <input type="text" name="nicename" id="name" placeholder="Enter your First Name"> 
                <br><br>
                <label for="">Email</label>
                <br>
                <input type="email" name="email" id="name" placeholder="Enter Your E-mail">
                <br><br>
                
                <label for="">Password</label>
                <br>
                <input type="text" name="password" id="name" placeholder="Enter your Last Name"> 
                <br><br>  
                         
                               
                <input type="submit" name="register_btn" id="submit" value="Sign Up" >
                
            </form>
        </div><!-----end register-->
    </div><!-----end main-->
</body>
</html>
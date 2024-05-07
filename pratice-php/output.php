<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasting";
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) {
   die($connect->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == "GET") {
   $name = $_GET['name'];
   $email = $_GET['email'];
   $pass = $_GET['pass'];

}
$qurey = "INSERT INTO user(Name,Email,Passdwor) VALUES ('$name','$email','$pass')";
if ($connect->query($qurey) === TRUE) {
   header("location:input.php");
} else {
   echo "EROR";
}


?>
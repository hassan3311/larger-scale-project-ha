<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "large-scale-php-project";
$conn= new mysqli($hostName,$userName,$password,$dbName);
if($conn){
    echo "connected";
}else{
    echo "not connected";
}
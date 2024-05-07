<?php
include "../db/config.php";
$id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];
mysqli_query($con,"DELETE FROM `user`.`todo` WHERE  `id`=$id");
if(isset($_GET['id'])){
    header("location: ../index.php");

}else{
    echo "Record deleted";
}
exit();
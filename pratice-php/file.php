<?php
$target_dir ="uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imagefiletype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "file is an image" .$check["mime"] . ".";
        $uploadOk = 1;
    }
}else{
    echo "file is nat image";
    $uploadOk = 0;
}

?>
<html>
<body>
    <form action="/laragon/www/pratice-php/upload.php" method="POST">
        <input type="file" name="image">
        <input type="submit">

    </form>
</body>
</html>
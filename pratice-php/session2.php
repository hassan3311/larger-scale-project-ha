<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php session 2</title>
</head>
<body>
    <?php
echo "fav animal is is ".$_SESSION['favanimal']."<br>";
echo "fav color is" .$_SESSION['favcolor']."<br>";
print_r($_SESSION);

?>
</body>
</html>
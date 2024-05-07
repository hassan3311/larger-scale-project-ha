<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSION</title>
</head>
<body>
    <?php
$_SESSION['favcolor'] = "blue";
$_SESSION['favanimal'] = " cat";
echo "session variable is set";

    ?>


</body>
</html>
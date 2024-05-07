<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Function</title>
</head>
<body>


<?php
$startoftime = strtotime("saturday");
$endtime = strtotime("+6weeks",$startoftime);

while($startoftime  < $endtime){
    echo date("M/d",$startoftime)."<br>";
    $startoftime = strtotime("+1weeks",$startoftime);

}
?>



  
</body>
</html>
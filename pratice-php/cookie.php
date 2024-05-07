  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$hassan = "'user'";
$chandia ="flex";

setcookie($hassan,$chandia, time() + (86400 * 30),"/");

?>
<body>
  <?php
  
  if(isset($_COOKIE[$chandia])){
    echo "nhu".$hassan."hai";
  }else{
    echo "hai yah par".$hassan."%";
    
  }

  ?>
</body>
</html>
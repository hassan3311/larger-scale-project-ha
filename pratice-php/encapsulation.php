<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>encapsulation.php</title>
</head>
<body>
    <?php

class person{

    private $name;
function __construct($name){
    
    $this->name = $name;
}
function info(){
echo "my name is ".$this->name;
}
}
$p1 = new person("hasseb");
$p1->info();

?>
</body>
</html>
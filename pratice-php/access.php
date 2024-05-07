<html>
<head>
    <title>Access</title>
</head>
<body>
<?php
class base{
    public $name;

  public function __construct($n){

    $this->name = $n;

  } 

  public function show(){
    echo "Your name is ".$this->name;
  }

}
$test = new base("Hassan ehsan");
$test->show();


?>
</body>
</html>

<?php

trait massage{
    public function msg1(){
        echo "oop is fun";
    }
}
trait massage2{
    public function msg2(){
        echo "opp is not fun";
    }
}

class welcome{
  use  massage;
}

class welcome2 {
  use  massage,massage2;
}

$obj = new welcome();
$obj->msg1();
echo "<br>";

$obj1 = new welcome2();
$obj1->msg2();
?>

<?php
  class fruits{
public $color;



protected function set($color){
    $this->color = $color;
}
function get(){
    echo "mango color is :".$this->color;
}
  }



?>
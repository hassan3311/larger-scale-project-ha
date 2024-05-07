<?php

abstract class boy{
    protected $name;

    abstract protected function get_value($name);
}
class girl extends boy{
    function get_value($name){
    echo $name;
    }
}
$girl = new girl();
$girl->get_value('kcvn'); 



?>
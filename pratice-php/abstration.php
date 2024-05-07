<?php
interface parent1{
  public function info();
}

class child implements parent1 {
  public function info(){
    echo "hello world";
  }
}
$p = new child();
$p->info();
?>
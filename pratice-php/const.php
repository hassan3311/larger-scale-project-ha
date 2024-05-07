<?php

class msg{
    const love = "good bye my jan shahbana love u so much";

    function jan(){
      echo  self::love;
    }
}
$bye = new msg();
$bye->jan();

?>
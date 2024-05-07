<?php

class hello{
    public static function msg(){
        echo "hello world"; 
    }
}

hello::msg();
?>

<?php

class domain {
    public static function msg(){
        echo "helllo world";
    }
}

class hello2 extends hello{
    public $website;

    public function __construt(){
    $this->name = $website;
    }
    }



?>
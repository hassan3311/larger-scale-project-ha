
<?php

function callback($item) {
    return strlen($item);
}

$strings = ["apple", "banana", "orange", "grapes"];
$length = array_map("callback", $strings);
print_r($length);

?>

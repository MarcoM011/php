<?php

$frutti = ["mela", "banana", "arancia", "kiwi", "pera"];
$cerca = "kiwi";

if (in_array($cerca, $frutti)) {
    echo "$cerca è presente nell'array." . PHP_EOL;
} else {
    echo "$cerca non è presente nell'array." . PHP_EOL;
}

?>

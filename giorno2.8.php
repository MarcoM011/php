<?php

$array1 = ["Anna", "Luca", "Marco"];
$array2 = ["Elena", "Giulia", "Paolo"];

$arrayUnito = array_merge($array1, $array2);

foreach ($arrayUnito as $valore) {
    echo $valore . PHP_EOL;
}

?>

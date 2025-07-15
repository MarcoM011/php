<?php

$testo = "Programmare in PHP è divertente";

$caratteri = str_split($testo);

$vocali = ['a', 'e', 'i', 'o', 'u', 'à', 'è', 'é', 'ì', 'ò', 'ù'];

foreach ($caratteri as $c) {
    if (in_array(strtolower($c), $vocali)) {
        echo $c . PHP_EOL;
    }
}

?>

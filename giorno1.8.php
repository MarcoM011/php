<?php
$frutti = ["Mela", "Banana", "Arancia", "Pera"];

foreach ($frutti as $frutto) {
    if (strlen($frutto) > 5) {
        echo $frutto . PHP_EOL;
    }
}
?>

<?php

$studenti = [
    "Luca" => 25,
    "Anna" => 17,
    "Marco" => 30,
    "Giulia" => 12,
    "Elena" => 18
];

foreach ($studenti as $nome => $voto) {
    if ($voto >= 18) {
        echo "$nome: $voto" . PHP_EOL;
    }
}

?>

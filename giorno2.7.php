<?php

$parole = ["computer", "sole", "programmazione", "cane", "elefante", "php"];

$conteggio = 0;

foreach ($parole as $parola) {
    if (strlen($parola) > 5) {
        $conteggio++;
    }
}

echo "Parole con più di 5 caratteri: $conteggio" . PHP_EOL;

?>

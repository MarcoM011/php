<?php

$testo = "PHP è un linguaggio di scripting potente";

$parole = explode(" ", $testo);

foreach ($parole as $parola) {
    echo $parola . PHP_EOL;
}

?>

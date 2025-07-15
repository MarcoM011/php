<?php

$linguaggi = "html,css,php,js";

$array = explode(",", $linguaggi);

$array[] = "sql";

$nuova_stringa = implode(",", $array);

echo $nuova_stringa . PHP_EOL;

?>

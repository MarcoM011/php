<?php
$studenti = [
    ["nome" => "Luca", "eta" => 17],
    ["nome" => "Anna", "eta" => 19],
    ["nome" => "Marco", "eta" => 18],
    ["nome" => "Sara", "eta" => 16]
];

foreach ($studenti as $studente) {
    if ($studente["eta"] >= 18) {
        echo $studente["nome"] . " - " . $studente["eta"] . " anni" . PHP_EOL;
    }
}
?>

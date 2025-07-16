<?php
$nome = htmlspecialchars($_POST['nome']);
$cognome = htmlspecialchars($_POST['cognome']);
echo "Ciao $nome $cognome";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $annoNascita = (int) $_POST["anno_nascita"];
    $annoCorrente = date("Y");
    $eta = $annoCorrente - $annoNascita;
    echo "Hai $eta anni." . PHP_EOL;
}
?>
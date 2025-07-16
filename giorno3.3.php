<?php
$tassoCambio = 1.10; // 1 euro = 1.10 dollari
$risultato = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["importo_euro"]) && is_numeric($_POST["importo_euro"])) {
        $euro = (float) $_POST["importo_euro"];
        $dollari = $euro * $tassoCambio;
        $risultato = "€$euro equivalgono a \$" . number_format($dollari, 2, ',', '.') . "";
    } else {
        $risultato = "Inserisci un importo valido.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Convertitore Euro/Dollaro</title>
</head>
<body>
    <h1>Convertitore Euro &rarr; Dollaro</h1>
    <form method="post">
        <label for="importo_euro">Importo in euro:</label>
        <input type="text" name="importo_euro" id="importo_euro" required step="any">
        <button type="submit">Converti</button>
    </form>
    <p><?= $risultato ?></p>
</body>
</html>

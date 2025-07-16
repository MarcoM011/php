<?php
if (isset($_GET["parola"])) {
    $termine = htmlspecialchars($_GET["parola"]); // Sicurezza contro codice HTML
    echo "Hai cercato: $termine" . PHP_EOL;
}
?>

<form method="get" action="">
    <label for="parola">Inserisci una parola:</label>
    <input type="text" name="parola" id="parola" required>
    <button type="submit">Cerca</button>
</form>

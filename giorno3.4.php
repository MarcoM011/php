<?php

$ipUtente = $_SERVER['REMOTE_ADDR'] ?? 'IP non disponibile';

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'User-Agent non disponibile';

$nomeFile = $_SERVER['PHP_SELF'] ?? 'Nome file non disponibile';

echo "Indirizzo IP: $ipUtente" . PHP_EOL;
echo "User-Agent: $userAgent" . PHP_EOL;
echo "Nome file: $nomeFile" . PHP_EOL;
?>

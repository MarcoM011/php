<?php
function prezzoConIva($prezzo, $iva = 22) {
    return $prezzo + ($prezzo * $iva / 100);
}

echo prezzoConIva(100) . PHP_EOL;      // IVA 22% (default)
echo prezzoConIva(50, 10) . PHP_EOL;   // IVA 10%
echo prezzoConIva(80, 4) . PHP_EOL;    // IVA 4%
?>

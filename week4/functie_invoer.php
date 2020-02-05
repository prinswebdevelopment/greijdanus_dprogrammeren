<?php

// Invoer CLI
function invoerCli() {
    $tekst = fgets(STDIN);
    $tekst = trim($tekst);

    return $tekst;
}

// Main
for ($x = 1; $x <= 10; $x += 2) {
    echo "Geef tekst in:";
    $tekst = invoerCli();
    echo $tekst;
}

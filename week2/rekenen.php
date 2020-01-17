<?php
echo "Wat is je voornaam:";
$voornaam = fgets(STDIN);
echo "Wat is je achternaam?";
$achternaam = fgets(STDIN);

$lengteVoornaam = strlen($voornaam);
$lengteAchternaam = strlen($achternaam);
$lengteNaam = $lengteVoornaam + $lengteAchternaam;
echo "Je naam is " . $lengteNaam . " tekens lang\n";

?>
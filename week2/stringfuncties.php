<?php
echo "Wat is je voornaam:";
$voornaam = fgets(STDIN);
echo "Wat is je achternaam?";
$achternaam = fgets(STDIN);

echo "Je voornaam is " . strlen($voornaam) . " je achternaam is " . strlen($achternaam) . " lang.\n";
?>
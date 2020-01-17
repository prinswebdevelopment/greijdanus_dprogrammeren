<?php
echo "Wat is je voornaam:";
$voornaam = fgets(STDIN);
echo "Wat is je achternaam?";
$achternaam = fgets(STDIN);

// alternatief 1
echo "Welkom " . $voornaam . " " . $achternaam . "!\n";

// alternatief 2
echo "Welkom  $voornaam  $achternaam !\n";

// verkeerd gebruik aanhalingsteken
echo 'Welkom  $voornaam  $achternaam !\n';
?>
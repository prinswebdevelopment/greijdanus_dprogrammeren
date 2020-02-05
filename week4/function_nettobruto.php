<?php

// Bruto berekening
function brutoBerekening($nettoBedrag)
{
    $brutoBedrag = $nettoBedrag * 1.21;

    return $brutoBedrag;
}

// BTW berekening
function btwBerekening($nettoBedrag)
{
    $btwBedrag = $nettoBedrag * 0.21;

    return $btwBedrag;
}

// Main
echo "Wat is de netto prijs?";
$nettoBedrag = trim(fgets(STDIN));
$btwBedrag = btwBerekening($nettoBedrag);
$brutoBedrag = brutoBerekening($nettoBedrag);
echo "Te betalen btw: " . number_format($btwBedrag, 2) . "\n" .
    "Te betalen: " . number_format($brutoBedrag, 2);



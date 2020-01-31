<?php

$getal = 40;
$geraden = false;

while($geraden == false) {
    echo "Raad getal:";
    $raden = (int) trim(fgets(STDIN));

    if($raden == $getal) {
        echo "Goed geraden!";
        $geraden = true;
    }
}

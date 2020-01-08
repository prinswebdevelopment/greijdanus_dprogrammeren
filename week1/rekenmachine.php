<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

echo "Voer getal 1 in:" . PHP_EOL;
$getal1 = input();
echo "Voer getal 2 in:" . PHP_EOL;
$getal2 = input();
echo "Uitkomst is:" . PHP_EOL;
echo (int) $getal1 + (int) $getal2;
?>
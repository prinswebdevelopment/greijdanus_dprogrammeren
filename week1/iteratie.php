<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

for ($x = 1; $x <= 10; $x++) {
    $cijfer = input();
    echo "Het cijfer is " . $cijfer . PHP_EOL;
}
?>
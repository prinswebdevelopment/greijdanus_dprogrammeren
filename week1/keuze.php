<?php
# The following function is called whenever your program needs to input data.
# You can change it to use other sources rather than fgets().
function input() {
    return fgets(STDIN);
}

$cijfer = input();
if ($cijfer >= 5.5) {
    echo "voldoende" . PHP_EOL;
} else {
    echo "onvoldoende" . PHP_EOL;
}
?>
<?php
//Multiple Conditions
$a = 15;

$b = 20;
//&& priority more than this ||
if ($a > 10 && $b < 25 || $a == 15) {
    echo "Condition True";
    echo "<br>";
}
?>

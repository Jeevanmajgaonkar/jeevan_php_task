<?php
//Nested Ternary Operator

$a = 12;

$b = 25;

$c = 18;

$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "Max: $max\n";
?>

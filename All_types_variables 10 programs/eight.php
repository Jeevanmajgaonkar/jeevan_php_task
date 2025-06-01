<?php
//Variable Swapping (Without Using Third Variable)


$a = 5;
$b = 10;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "a: $a, b: $b";

?>




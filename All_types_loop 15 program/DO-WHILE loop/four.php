<?php
// sum of n numbers

$n = 10;  
$sum = 0;
$i = 1;

do {
    $sum += $i;
    $i++;
} while ($i <= $n);

echo "Sum of first $n natural numbers = " . $sum;
?>

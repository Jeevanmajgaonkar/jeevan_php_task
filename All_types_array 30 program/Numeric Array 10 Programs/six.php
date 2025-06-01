<?php
// creating two array and merged it
$a = [4, 4, 5, 1, 2, 5];
$b = [6, 5, 41, 2, 8];

// initialize the empty array 
$c = [];

// Add all elements
foreach ($a as $value) {
    $c[] = $value; 
}
foreach ($b as $value) {
    $c[] = $value;
}


print_r($c);
?>

<?php
// slicing the array

$num = [12, 45, 36, 78, 20];
 
$start = 1;    // Start index
$size = 3;     // Number of elements to slice

// count array length
$n = 0;
foreach ($num as $v) {
    $n++;
}

$slice = [];  

for ($i = 0; $i < $n; $i++) {
    if ($i >= $start && $i < $start + $size) {
        $slice[] = $num[$i];
    }
}

// Print the sliced result
echo $slice;
?> 
 
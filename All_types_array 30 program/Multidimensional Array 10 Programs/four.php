<?php
// addition of matrix

$A = [
    [1, 2],
    [3, 4],
    [5, 6]
];

$B = [
    [7, 8],
    [9, 10],
    [11, 12]
];

$result = [];

for ($i = 0; $i < 3 ; $i++) {
    for ($j = 0; $j < 2; $j++) {
        $result[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Output the result
echo "<pre>";
print_r($result);
echo "</pre>";
?>

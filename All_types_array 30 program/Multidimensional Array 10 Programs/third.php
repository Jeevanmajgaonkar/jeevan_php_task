<?php
// Multiplication of Matrices

$A = [
    [1, 2],
    [3, 4],
    [5, 6]
];

$B = [
    [7, 8, 9],   
    [10, 11, 12]
];

$result = []; // Empty array to store multiplication result


for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        $sum = 0; 

  
        for ($k = 0; $k < 2; $k++) {
            $sum += $A[$i][$k] * $B[$k][$j];
        }


        $result[$i][$j] = $sum;
    }
}

// Print the result matrix
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $result[$i][$j] . " ";
    }
    echo "<br>";
}
?>

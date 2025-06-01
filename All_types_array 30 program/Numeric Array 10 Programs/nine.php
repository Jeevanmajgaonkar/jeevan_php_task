<?php
// Find and display duplicate values in an array

$array = [5, 3, 8, 9, 9, 5, 1];
$exist = []; 

foreach ($array as $val) {
    $found = false;

  
    foreach ($exist as $item) {
        if ($item == $val) {
            $found = true;
            break;
        }
    }

    if ($found) {

        echo "Already exists: $val";          
    } else {

        $exist[] = $val;           
    }
}

<?php
//Merge multiple associative arrays

// First associative array
$arr1 = [
    'a' => 10,
    'c' => 30
];

// Second associative array
$arr2 = [
    'd' => 40,
    'e' => 50,
    'b' => 25 
];

// created  empty array 
$merged = [];

//added elements from first array
foreach ($arr1 as $key => $value) {
    $merged[$key] = $value;
}

// added elements from second array
foreach ($arr2 as $key => $value) {
    $merged[$key] = $value;  
}

// Print merged array
foreach ($merged as $key => $value) {
echo $value;
echo "<br>";

}
?>

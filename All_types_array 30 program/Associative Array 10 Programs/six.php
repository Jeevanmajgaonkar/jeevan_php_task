<?php

// Sort array by values
         
$arr = [
    'apple' => 12,
    'banana' => 11,
    'mango' => 15,
    'orange' => 17,
    'grape' => 14,
    'kiwi' => 10,
    'melon' => 18
];

//  Extract all keys
$keys = [];
foreach ($arr as $k => $v) {
    $keys[] = $k;
}


for ($i = 0; $i < count($keys); $i++) {
    for ($j = 0; $j < count($keys) - 1; $j++) {
        if ($arr[$keys[$j]] > $arr[$keys[$j + 1]]) {

            $temp = $keys[$j];
            $keys[$j] = $keys[$j + 1];
            $keys[$j + 1] = $temp;
        }
    }
}


$sorted = [];
foreach ($keys as $key) {
    $sorted[$key] = $arr[$key];
}


foreach ($sorted as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>


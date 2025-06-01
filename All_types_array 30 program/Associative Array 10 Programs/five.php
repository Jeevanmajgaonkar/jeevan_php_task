<?php
// Sort array by keys
$arr = [
    13 => 'apple',
    16 => 'banana',
    15 => 'mango',
    14 => 'orange',
    17 => 'grape',
    19 => 'kiwi',
    18 => 'melon'
];

// Extract all keys
$keys = [];
foreach ($arr as $k => $v) {
    $keys[] = $k;
}

for ($i = 0; $i < count($keys); $i++) {
    for ($j = 0; $j < count($keys); $j++) {
        if ($keys[$i] < $keys[$j]) {
 
            $temp = $keys[$i];
            $keys[$i] = $keys[$j];
            $keys[$j] = $temp;
        }
    }
}

// Create new sorted array
$sorted = [];
foreach ($keys as $key) {
    $sorted[$key] = $arr[$key];
}

//Print sorted array
foreach ($sorted as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>

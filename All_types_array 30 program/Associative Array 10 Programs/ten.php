<?php
// cheacking by key is present or not

$arr = [
    'apple' => 12,
    'banana' => 11,
    'mango' => 15,
    'orange' => 17,
    'grape' => 14,
    'kiwi' => 10,
    'melon' => 18
];

// Key (fruit name) to search for
$searchKey = 'mango';

$found = false;

foreach ($arr as $key => $value) {
    if ($key == $searchKey) {
        echo "Key '$searchKey' found with value: $value";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "Key '$searchKey' not found in the array.";
}
?>

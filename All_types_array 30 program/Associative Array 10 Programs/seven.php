<?php
//search specific array by using index

$fruits = [
    0 => 'apple',
    1 => 'banana',
    2 => 'mango',
    3 => 'orange',
    4 => 'grape',
    5 => 'kiwi',
    6 => 'melon',
];

$fruit = 'banana';

$found = false; // check if fruit is found

foreach ($fruits as $key => $val) {
    if ($val == $fruit) {
        echo "Fruit found: $val at index $key";
        $found = true;
        break; 
    }
}


if (!$found) {
    echo "Fruit '$fruit' not found in the list.";
}
?>

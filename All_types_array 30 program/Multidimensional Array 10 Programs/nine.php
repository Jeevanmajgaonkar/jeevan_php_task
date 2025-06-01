<?php
// Multidimensional array sort by 'age'

$data = [
    ["name" => "Alice", "age" => 30],
    ["name" => "Bob", "age" => 25],
    ["name" => "Charlie", "age" => 35]
];

// Get the length of the array
$length = count($data);


for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - 1 - $i; $j++) {
        // Compare age of current and next element
        if ($data[$j]['age'] > $data[$j + 1]['age']) {

            $temp = $data[$j];
            $data[$j] = $data[$j + 1];
            $data[$j + 1] = $temp;
        }
    }
}

// Print the sorted array
print_r($data);
?>

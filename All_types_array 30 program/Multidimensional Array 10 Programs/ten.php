<?php

//Dynamic Multidimensional Array Example

$students = [];

// Dynamically add student data
$students[] = ["name" => "Alice", "age" => 22, "grade" => "A"];
$students[] = ["name" => "Bob", "age" => 20, "grade" => "B"];
$students[] = ["name" => "Charlie", "age" => 23, "grade" => "A+"];


for ($i = 1; $i <= 3; $i++) {
    $students[] = [
        "name" => "Student " . $i,
        "age" => 18 + $i,
        "grade" => chr(65 + $i)  
    ];
}


echo "<pre>";
print_r($students);
echo "<pre>";
?>

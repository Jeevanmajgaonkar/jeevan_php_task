
<?php
// matrix transpose //


$A = [
    [1, 2],
    [3, 4],
    [5, 6]
];

// Transpose of A//
$transpose = [];

for ($i = 0; $i <2 ; $i++) {
    for ($j = 0; $j <3 ; $j++) { 
        $transpose[$i][$j] = $A[$j][$i];
    }
}

// old matrix //
echo "<pre>";
echo "Original Matrix:\n";
print_r($A);

//new matrix//
echo "<pre>";
print_r($transpose);
echo "</pre>";
?>


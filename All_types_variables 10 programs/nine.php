<?php
// Global and Local Variables

 
$x = 50; // Global variable

function show() {
    $x = 20; // Local variable
    echo "Local x: $x<br>";
}

show();
echo "Global x: $x";


?>
<?php
// input is string or not 

$stirng = "hello";
if (is_string($stirng)) {
    ?><h1 style= 'color:green'> <?php echo "given input is string";?></h1>
<?php } else {
    echo "not string";
}

?>
<?php

// Using ternary operator
$name = "ram";
?>
<h1 style="color:red">
    <?php echo is_string($name) ? "It is a string" : "Not a string"; ?>

</h1>
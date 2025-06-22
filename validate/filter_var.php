<?php
// given number is integer
$int=12012;
if(filter_var($int,FILTER_VALIDATE_INT)){
    echo "it is interger";
}
echo "<br>";
?>
<?php
// given number is float

$float=12.5;
if(filter_var($float,FILTER_VALIDATE_FLOAT)){
    echo "this is float";
}
echo "<br>";
?>

<?php
// to check email
$email="abc@gmail.com";

if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "it is email";
}
?>

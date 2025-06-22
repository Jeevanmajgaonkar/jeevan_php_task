<?php
// empty validation ;
$name="";
echo ($name) ? "true" : "false";

?>

<!-- using if-else  -->
<?php 
$nam="hello";

if (empty($nam)){
?> <h3><?php  echo "string is empty" ?></h3>
 <?php }
else{
    ?>
    <h3><?php  echo "is not empty"?></h3>
<?php }
?>

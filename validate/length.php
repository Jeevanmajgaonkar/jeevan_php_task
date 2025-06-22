<?php
// length validation max ,mix ,equal
// strlen <- he ek string function ahe 
//   strval <- he funtion number ,double ,float la string madhe count kaarat
$min = 412555;

if(strlen(strval($min)) < 2) {
    echo strlen($min) . ". Length is too short";
} else {
    echo strlen($min) . ". Length is acceptable";
}

?>
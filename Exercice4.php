<?php
$number1 = 12;
$number2 = 9;
$title = 'Exercice4';

include 'header.php';
function compare($number1,$number2){
    if ($number1 > $number2){
        echo "Le premier nombre est plus grand";
    }
    else if ($number1 < $number2){
        echo "Le premier nombre est plus petit";
    }
    else {
        echo "Les deux nombres sont identiques";
    }
}
echo compare($number1,$number2);
include 'footer.php';?>
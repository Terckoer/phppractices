<?php

function sum(){
    return 2+5;
}

function substraction($n1=0, $n2=0){
    return $n1-$n2;
}

function multiplication($n1, $n2=1){
    echo $n1*$n2.'</br>';
}

function division( $n1, $n2){
    echo $n1*$n2;
}
echo sum().'</br>';
echo substraction().'</br>';
echo substraction(2,5).'</br>';
multiplication(5);
multiplication(5,10);
division(1,1);

?>
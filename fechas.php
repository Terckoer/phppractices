<?php

$today = date('Y-M-D');
echo $today.'<br/>';

$arreglo = array('uno', 'dos', 'tres');
$nombres = array('j'=>'jorge', 'e'=>'emmanuel', 'f'=>'fernando');

print_r($arreglo);
echo '<br/>';
print_r($nombres);
echo '<br/>';


for($i=0;$i<count($arreglo);$i++){
    echo $arreglo[$i].' USANDO FOR <br/>';
}

foreach ($nombres as $key => $value) {
    echo $value.' <br/>';
    echo $nombres[$key].' Usando forEach <br/>';
}


?>
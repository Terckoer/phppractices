<?php

// Data types
$name = 'JORGE';
$age = 24;
$money = 125.50;
$isHuman = true;
$noValue = null;

//Concat
echo $name.' '.$age.' '.$money.' '.$isHuman.' '.$noValue;

//Assigning again
$isHuman = false;
$noValue = 'With Value';
echo $name.' '.$age.' '.$money.' '.$isHuman.' '.$noValue;

echo '<br/>';
echo '<br/>';
echo '<h3> inner Text </h3>';

define('NOMBRE', 'JORGE LUIS SOLTERO RIVERA');
define('PI', 3.1416);
define('IVA', 16);
echo NOMBRE.' ';
echo PI.' ';
echo IVA.' ';

?>
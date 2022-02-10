<?php

    if($_POST){
        echo 'Sum= '.$_POST['value1']+$_POST['value2'].'<br/>';
        echo 'Substraction= '.$_POST['value1']-$_POST['value2'].'<br/>';
        echo 'Multiplication= '.$_POST['value1']*$_POST['value2'].'<br/>';
        echo 'Division= '.$_POST['value1']/$_POST['value2'].'<br/>';

    }else{
        echo 'Result= 0';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practica5.php" method="post">
        Value 1: <input type="text" name="value1" id=""><br/>
        Value 2: <input type="text" name="value2" id="">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
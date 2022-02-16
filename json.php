<?php

    $animals='[
        {"tipo":"gato", "nombre":"nius"},
        {"tipo":"perro", "nombre":"chuchis"},
        {"tipo":"gato", "nombre":"ñoño"},
        {"tipo":"gato", "nombre":"cabecas"}
    ]';

    $result = json_decode($animals);

    

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
    <h1>JSON DECODE</h1>
        <?php
        foreach ($result as $animal) {
            echo '<p>'.$animal->tipo.' =>'.$animal->nombre.'</p><br/>';
        }
        ?>

</body>
</html>
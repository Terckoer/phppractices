<?php
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        echo 'Hola: '. $nombre;
        echo ' Tu apellido es: '. $apellido;
    }else{
        echo 'No hay nadie aqui';
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
        
    <form action="practica2.php" method="post">
        Nombre: <input type="text" name="nombre" id="">
        Apellido: <input type="text" name="apellido" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
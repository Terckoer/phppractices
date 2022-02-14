<?php

$user='root';
$server='localhost:3307';
$password='';

try {
    $conexion = new PDO("mysql:host=$server;dbname=cursophp",$user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $insert = "INSERT INTO `animales` (`id`, `nombre`, `foto`) VALUES (NULL, 'loro', 'loro.jpg');";

    $conexion->exec($insert);

    echo 'Conexion Exitosa';
} catch (\Throwable $th) {
    echo $th;
}

?>
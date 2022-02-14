<?php

$user='root';
$server='localhost:3307';
$password='';

try {
    $conexion = new PDO("mysql:host=$server;dbname=cursophp",$user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $select = "SELECT * FROM animales;";

    $consult = $conexion->prepare($select);
    $consult->execute();
    $result = $consult->fetchAll();

    foreach ($result as $element) {
        echo $element['nombre'].'<br/>';
    }

    echo 'Conexion Exitosa';


} catch (\Throwable $th) {
    echo $th;
}

session_start();
echo $_SESSION['admin'];


?>
<?php

$servidor = "localhost"; // 127.0.0.1
$usuario ="root";
$contrasenia="";
    $conexion = new PDO("mysql:host=$servidor;dbname=datos", $usuario, $contrasenia);

?>
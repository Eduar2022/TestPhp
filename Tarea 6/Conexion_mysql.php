<?php

$servidor = "localhost"; // 127.0.0.1
$usuario ="root";
$contrasenia="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=datos", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida";

    $sql="INSERT INTO `makis` (`id`, `Nombre`, `ruta`) VALUES (NULL, 'Maki Acevichado', 'MakiAcevichado.jpg');";

    $conexion->exec($sql);

}catch(PDOException $error){
    echo "Conexíon erronea ".$error;

}

?>
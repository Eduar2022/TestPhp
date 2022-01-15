<?php

$servidor = "localhost"; // 127.0.0.1
$usuario ="root";
$contrasenia="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=datos", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql= "SELECT * FROM `makis`";

    $sentencia = $conexion->prepare($sql);

    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
    
    //print_r($resultado);    
    

    foreach($resultado as $maki){
    print_r($maki['ruta']);
    echo "<br/>";
    }
    
    echo "<br/>"."Conexión establecida";

}catch(PDOException $error){
    echo "Conexíon erronea ".$error;

}

?>
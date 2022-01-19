<?php

require_once 'conexion.php';



$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];

$random= rand(1,10);
$id = $id.$random;
$nombreM= strtoupper($nombre);
$apellidoM = strtoupper($apellido);
$direccionM = strtoupper($direccion);
//$nombreLongitud = strlen($nombre);

$sql = "INSERT INTO personas(id,nombre,apellido,direccion,edad)VALUES(:id,:nombreM,:apellidoM,:direccionM,:edad)";
$consulta = $conexion->prepare($sql);
$consulta->bindParam(':id', $id);
$consulta->bindParam(':nombreM', $nombreM);
$consulta->bindParam(':apellidoM', $apellidoM);
$consulta->bindParam(':direccionM', $direccionM);
$consulta->bindParam(':edad', $edad);

   if ($edad>30){
        echo "Edad mayor a 30";
   }else if(strlen($nombre)>64 || strlen($apellido)>64){
        echo "Nombre o apellido exceden 64 caracteres";
   }else if (strpos($direccion, 'manzana') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'carrera') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'calle') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'avenida') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'cll') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'av') !== false){
    $consulta->execute();
   }else if (strpos($direccion, 'mz') !== false){
    $consulta->execute();
   }
   else{
       echo "La dirección no contiene alguna de las siguientes palabras manzana, carrera , calle, avenida, cll, av, mz";
   }
    
    /*[
    )
    'id'=> $id,
    'nombre'=> $nombre,
    'apellido'=> $apellido,
    'direccion'=> $direccion,
    'edad'=> $edad,
]);*/

?>
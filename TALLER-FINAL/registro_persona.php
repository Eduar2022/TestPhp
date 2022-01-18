<?php

require_once 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];

$nombreM= strtoupper($nombre);
$apellidoM = strtoupper($apellido);
$direccionM = strtoupper($direccion);

$sql = "INSERT INTO personas(id,nombre,apellido,direccion,edad)VALUES(:id,:nombreM,:apellidoM,:direccionM,:edad)";
$consulta = $conexion->prepare($sql);
$consulta->bindParam(':id', $id);
$consulta->bindParam(':nombreM', $nombreM);
$consulta->bindParam(':apellidoM', $apellidoM);
$consulta->bindParam(':direccionM', $direccionM);
$consulta->bindParam(':edad', $edad);

$consulta->execute();/*[
    'id'=> $id,
    'nombre'=> $nombre,
    'apellido'=> $apellido,
    'direccion'=> $direccion,
    'edad'=> $edad,
]);*/

?>
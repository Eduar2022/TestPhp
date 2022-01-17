<?php

require_once 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$sql = "INSERT INTO personas(id,nombre,apellido,direccion,edad)VALUES(:id,:nombre,:apellido,:direccion,:edad)";
$consulta = $conexion->prepare($sql);

/*$consulta->bindParam(':id,', $id);
$consulta->bindParam(':nombre,', $nombre);
$consulta->bindParam(':apellido,', $apellido);
$consulta->bindParam(':direccion,', $direccion);
$consulta->bindParam(':edad,', $edad);*/

$resultado = $consulta->execute([
    'id'=> $id,
    'nombre'=> $nombre,
    'apellido'=> $apellido,
    'direccion'=> $direccion,
    'edad'=> $edad,
]);

?>
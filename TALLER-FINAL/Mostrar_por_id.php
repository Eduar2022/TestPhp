<?php
require_once 'conexion.php';    

$code = filter_input(INPUT_GET, 'idUsuario', FILTER_SANITIZE_STRING);

$statement = $conexion->prepare("SELECT * FROM personas WHERE id = :code");
$statement->bindValue(':code', $code, PDO::PARAM_STR);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_ASSOC);

$numeroRandom = rand(1,3);
$edadSumada = $result["edad"] + $numeroRandom;

$direccion= $result["direccion"];
$lendirec = strlen($direccion);

$nombreM = strtolower($result["nombre"]);
$primDireccion1 = substr($result["direccion"], 0, 1);
$primDireccion2 = substr($result["direccion"], -1);
$primDireccion3 = substr($result["direccion"], 1, $lendirec -2);
$direccionMin = strtolower($primDireccion1);
$direccionMin2 = strtolower($primDireccion2);

echo $nombreM."/".$result["apellido"]."¡"."ID->".$result["id"]."(".$edadSumada.")"."&&".$direccionMin.$primDireccion3.$direccionMin2;


/*if (isset($_GET['buscar'])){
    $busqueda = $_GET['idUsuario'];
    $consulta = $conexion->prepare("SELECT * FROM personas WHERE id LIKE '%$busqueda%'");
    while ($row = $consulta->fetchAll()){
        echo $row['id'];
    }
}*/

?>

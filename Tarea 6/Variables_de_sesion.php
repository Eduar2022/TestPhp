<?php
session_start();

$_SESSION["usuario"]="Eduard";
$_SESSION["estatus"]="Logueado";

echo "Sesion iniciada" .":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>". "Estatus: ". $_SESSION["estatus"];

?>
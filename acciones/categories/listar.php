<?php
include("../../connectdb.php");

$sql = "SELECT * FROM categories";
$resultado = $conexion->query($sql);

$datos = [];

while ($fila = $resultado->fetch_assoc()) {
    $datos[] = $fila;
}

echo json_encode($datos);
?>
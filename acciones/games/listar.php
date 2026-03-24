<?php
include("../../connectdb.php");

$buscar = "";

if (isset($_GET["buscar"])) {
    $buscar = $_GET["buscar"];
}

$sql = "SELECT g.code, g.title, g.year, g.size, g.category_id,
               c.name AS category
        FROM games g 
        LEFT JOIN categories c 
        ON g.category_id = c.id
        WHERE g.title LIKE ? 
        OR g.code LIKE ?";

$stmt = $conexion->prepare($sql);

$param = "%$buscar%";
$stmt->bind_param("ss", $param, $param);

$stmt->execute();
$resultado = $stmt->get_result();

$datos = [];

while ($fila = $resultado->fetch_assoc()) {
    $datos[] = $fila;
}

echo json_encode($datos);
?>
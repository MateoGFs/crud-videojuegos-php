<?php
include("../../connectdb.php");

$id = $_POST["id"];
$name = $_POST["name"];
$description = $_POST["description"];

$sql = "UPDATE categories SET name='$name', description='$description' WHERE id='$id'";

$conexion->query($sql);

echo "ok";
?>
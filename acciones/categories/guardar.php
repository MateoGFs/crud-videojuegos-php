<?php
include("../../connectdb.php");

$name = $_POST["name"];
$description = $_POST["description"];

$sql = "INSERT INTO categories (name, description) VALUES ('$name','$description')";

$conexion->query($sql);

echo "ok";
?>
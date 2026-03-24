<?php
include("../../connectdb.php");

$id = $_POST["id"];

$sql = "DELETE FROM categories WHERE id='$id'";

$conexion->query($sql);

echo "ok";
?>
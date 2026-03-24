<?php
include("../../connectdb.php");

$code = $_POST["code"];

$sql = "DELETE FROM games WHERE code='$code'";
$conexion->query($sql);

echo "ok";
?>
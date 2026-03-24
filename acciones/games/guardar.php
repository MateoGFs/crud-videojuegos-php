<?php
include("../../connectdb.php");

$title = $_POST["title"];
$year = $_POST["year"];
$size = $_POST["size"];
$category_id = $_POST["category_id"];

$sql = "INSERT INTO games 
(title,year,size,category_id)
VALUES
('$title','$year','$size','$category_id')";

if($conexion->query($sql)){
    echo "ok";
}else{
    echo "Error: " . $conexion->error;
}
?>
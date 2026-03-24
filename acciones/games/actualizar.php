<?php
include("../../connectdb.php");

$code = $_POST["code"];
$title = $_POST["title"];
$year = $_POST["year"];
$size = $_POST["size"];
$category_id = $_POST["category_id"];

$sql = "UPDATE games SET 
        title='$title',
        year='$year',
        size='$size',
        category_id='$category_id'
        WHERE code='$code'";

$conexion->query($sql);

echo "ok";
?>
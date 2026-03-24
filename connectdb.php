<?php

// Leer archivo .env
$env = parse_ini_file(__DIR__ . '/.env');

// Obtener variables
$host = $env["DB_HOST"];
$usuario = $env["DB_USER"];
$contrasena = $env["DB_PASS"];
$basedatos = $env["DB_NAME"];

// Conexión
$conexion = new mysqli($host, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
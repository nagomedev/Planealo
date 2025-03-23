<?php
// Conexión a la base de datos
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "planealobd";

$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Establecer codificación de caracteres
$conn->set_charset("utf8");
?>

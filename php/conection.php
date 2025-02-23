<?php
$host = 'localhost:3307';
$user = 'root';
$password = ''; // o la contraseña que uses en tu entorno
$database = 'ejemplo';

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Error en la conexión: ' . mysqli_connect_errno());
}
?>
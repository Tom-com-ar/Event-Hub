<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'sitio_moderno';
$conexion = new mysqli($host, $user, $pass, $dbname);
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}
$conexion->set_charset('utf8mb4');

<?php
session_start();
require_once '../includes/conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo json_encode([]);
    exit();
}

$evento_id = $_GET['evento_id'];

$sql = "SELECT nombre, mensaje, fecha 
        FROM comentarios 
        WHERE evento_id = ?
        ORDER BY fecha DESC";

$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $evento_id);
$stmt->execute();

$resultado = $stmt->get_result();

$comentarios = [];

while($fila = $resultado->fetch_assoc()){
    $comentarios[] = $fila;
}

echo json_encode($comentarios);
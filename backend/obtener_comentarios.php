<?php
require_once '../includes/conexion.php';

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
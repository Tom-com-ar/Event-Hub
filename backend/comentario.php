<?php
session_start();
require_once '../includes/conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo "error";
    exit();
}

$evento = $_POST['evento'];
$nombre = $_SESSION['usuario']['nombre'];
$correo = $_SESSION['usuario']['email'];
$mensaje = $_POST['mensaje'];

// Buscar el ID del evento por el título
$sqlEvento = "SELECT id FROM eventos WHERE titulo = ?";
$stmtEvento = $conexion->prepare($sqlEvento);
$stmtEvento->bind_param("s", $evento);
$stmtEvento->execute();
$resultado = $stmtEvento->get_result();

if ($fila = $resultado->fetch_assoc()) {
    $evento_id = $fila['id'];

    $sql = "INSERT INTO comentarios (evento_id, nombre, correo, mensaje)
            VALUES (?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("isss", $evento_id, $nombre, $correo, $mensaje);

    if ($stmt->execute()) {
        echo "ok";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
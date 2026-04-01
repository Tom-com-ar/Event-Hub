<?php
session_start();
require_once '../includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validaciones básicas
    if (empty($nombre) || empty($email) || empty($password) || empty($confirm_password)) {
        header("Location: ../pages/registro.php?error=1&msg=Todos los campos son obligatorios");
        exit();
    }

    if ($password !== $confirm_password) {
        header("Location: ../pages/registro.php?error=1&msg=Las contraseñas no coinciden");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/registro.php?error=1&msg=Correo electrónico no válido");
        exit();
    }

    // Verificar si el email ya existe
    $sql_check = "SELECT id FROM usuarios WHERE email = ?";
    $stmt_check = $conexion->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $resultado_check = $stmt_check->get_result();

    if ($resultado_check->num_rows > 0) {
        header("Location: ../pages/registro.php?error=1&msg=El correo electrónico ya está registrado");
        exit();
    }

    // Hashear la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar usuario
    $sql_insert = "INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)";
    $stmt_insert = $conexion->prepare($sql_insert);
    $stmt_insert->bind_param("sss", $nombre, $email, $hashed_password);

    if ($stmt_insert->execute()) {
        header("Location: ../pages/login.php?success=1&msg=Registro exitoso. Ahora puedes iniciar sesión");
        exit();
    } else {
        header("Location: ../pages/registro.php?error=1&msg=Error al registrar. Inténtalo de nuevo");
        exit();
    }
}
?>
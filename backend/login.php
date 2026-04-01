 <?php
    session_start();
    require_once '../includes/conexion.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT id, nombre, password FROM usuarios WHERE email = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($fila = $resultado->fetch_assoc()) {
            if (password_verify($password, $fila['password'])) {
                $_SESSION['usuario_id'] = $fila['id'];
                $_SESSION['usuario_nombre'] = $fila['nombre'];
                header("Location: ../index.php");
                exit();
            }
        }
        header("Location: ../login.php?error=1");
    }
    ?>
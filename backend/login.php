 <?php
    session_start();
    require_once '../includes/conexion.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT id, nombre, email, password, fecha_nacimiento, descripcion, telefono, direccion, fecha_registro FROM usuarios WHERE email = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($fila = $resultado->fetch_assoc()) {
            if (password_verify($password, $fila['password'])) {
                $_SESSION['usuario'] = [
                    'id' => $fila['id'],
                    'nombre' => $fila['nombre'],
                    'email' => $fila['email'],
                    'fecha_nacimiento' => $fila['fecha_nacimiento'],
                    'descripcion' => $fila['descripcion'],
                    'telefono' => $fila['telefono'],
                    'direccion' => $fila['direccion'],
                    'fecha_registro' => $fila['fecha_registro']
                ];
                header("Location: ../index.php");
                exit();
            }
        }
        header("Location: ../pages/login.php?error=1");
    }
    ?>
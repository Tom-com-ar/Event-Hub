<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - EventHub</title>
    <?php include '../includes/theme-init.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- CSS propio -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <?php include '../includes/header.php'; ?>
    </header>
    <main>
        <div class="grid-container">
            <div class="grid-x grid-margin-x align-center">
                <div class="cell small-12 medium-8 large-6">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h3 class="text-center">Registrarse</h3>
                            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                                <div class="callout alert">
                                    <p><?php echo htmlspecialchars($_GET['msg'] ?? 'Error en el registro.'); ?></p>
                                </div>
                            <?php endif; ?>
                            <form action="../backend/registro.php" method="POST">
                                <label>Nombre
                                    <input type="text" name="nombre" placeholder="Tu nombre" required>
                                </label>
                                <label>Correo Electrónico
                                    <input type="email" name="email" placeholder="tu@email.com" required>
                                </label>
                                <label>Teléfono
                                    <input type="tel" name="telefono" placeholder="Tu teléfono">
                                </label>
                                <label>Fecha de Nacimiento
                                    <input type="date" name="fecha_nacimiento">
                                </label>
                                <label>Dirección
                                    <textarea name="direccion" placeholder="Tu dirección"></textarea>
                                </label>
                                <label>Descripción
                                    <textarea name="descripcion" placeholder="Una breve descripción sobre ti"></textarea>
                                </label>
                                <label>Contraseña
                                    <input type="password" name="password" placeholder="Contraseña" required>
                                </label>
                                <label>Confirmar Contraseña
                                    <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
                                </label>
                                <button type="submit" class="button expanded primary">Registrarse</button>
                            </form>
                            <p class="text-center">¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include '../includes/footer.php'; ?>
    </footer>
    <!-- Compressed JavaScript Foundation -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>
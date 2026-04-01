<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - EventHub</title>
        <!-- Foundation (CORREGIDO) -->
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
                            <h3 class="text-center">Iniciar Sesión</h3>
                            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                                <div class="callout alert">
                                    <p><?php echo htmlspecialchars($_GET['msg'] ?? 'Credenciales incorrectas. Inténtalo de nuevo.'); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                                <div class="callout success">
                                    <p><?php echo htmlspecialchars($_GET['msg'] ?? 'Operación exitosa.'); ?></p>
                                </div>
                            <?php endif; ?>
                            <form action="../backend/login.php" method="POST">
                                <label>Correo Electrónico
                                    <input type="email" name="email" placeholder="tu@email.com" required>
                                </label>
                                <label>Contraseña
                                    <input type="password" name="password" placeholder="Contraseña" required>
                                </label>
                                <button type="submit" class="button expanded primary">Iniciar Sesión</button>
                            </form>
                            <p class="text-center">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>
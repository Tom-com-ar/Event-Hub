<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - EventHub</title>
    <?php include '../includes/theme-init.php'; ?>
    <!-- Compressed CSS Foundation -->
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
            <?php if (isset($_SESSION['usuario'])): ?>
                <div class="grid-x grid-margin-x">
                    <div class="cell small-12 medium-8 large-6">
                        <div class="card card-animada">
                            <div class="card-section">
                                <h3>Perfil de Usuario</h3>
                                <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['usuario']['nombre']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['usuario']['email']); ?></p>
                                <!-- Agregar más campos si es necesario -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="grid-x grid-margin-x align-center">
                    <div class="cell small-12 medium-8 large-6">
                        <div class="callout alert card-animada">
                            <h5>No has iniciado sesión</h5>
                            <p>Por favor, <a href="login.php">inicia sesión</a> para ver tu perfil.</p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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
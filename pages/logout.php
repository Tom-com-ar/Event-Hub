<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión - EventHub</title>
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
                    <div class="callout primary">
                        <h5>Cerrando Sesión...</h5>
                        <p>Redirigiendo...</p>
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
    <script>
        // Redirigir automáticamente al backend/logout.php
        window.location.href = '../backend/logout.php';
    </script>
</body>

</html>
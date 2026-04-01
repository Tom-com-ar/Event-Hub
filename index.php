<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub</title>
    <!-- Compressed CSS Foundation -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundationsites@6.8.1/dist/css/foundation.min.css">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <?php include 'includes/header.php'; ?>
    </header>
    <main>
        <div class="grid-container">
            <h2>Eventos Tecnológicos</h2>

            <div class="grid-x grid-margin-x">

                <div class="cell small-12 medium-6 large-4">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h4>Hackathon 2026</h4>
                            <p>Programación intensiva</p>
                            <button class="neon-button">Inscribirse</button>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-6 large-4">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h4>FLISOL</h4>
                            <p>Software libre</p>
                            <button class="neon-button">Inscribirse</button>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-6 large-4">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h4>Charla IA</h4>
                            <p>Inteligencia Artificial</p>
                            <button class="neon-button">Inscribirse</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script src="assets/js/app.js"></script>
</body>

</html>
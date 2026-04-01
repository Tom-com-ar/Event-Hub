<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub</title>

    <!-- Foundation (CORREGIDO) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">

    <!-- CSS propio -->
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
                            <button class="neon-button"
                                onclick="verEvento(-34.6037, -58.3816, 'Hackathon 2026')">
                                Ver en mapa
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-6 large-4">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h4>FLISOL</h4>
                            <p>Software libre</p>
                            <button class="neon-button"
                                onclick="verEvento(-34.61, -58.38, 'FLISOL')">
                                Ver en mapa
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cell small-12 medium-6 large-4">
                    <div class="card card-animada">
                        <div class="card-section">
                            <h4>Charla IA</h4>
                            <p>Inteligencia Artificial</p>
                            <button class="neon-button"
                                onclick="verEvento(-34.59, -58.42, 'Charla IA')">
                                Ver en mapa
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- MAPA -->
        <div class="grid-container">
            <h3>Mapa de eventos</h3>
            <div id="map"></div>
        </div>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        $(document).foundation();
    </script>

    <!-- TU JS -->
    <script src="assets/js/mapa.js"></script>

</body>

</html>
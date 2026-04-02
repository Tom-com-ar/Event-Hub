<!DOCTYPE html>
<?php 
session_start(); 
require_once 'includes/conexion.php';

$sql = "SELECT * FROM eventos";
$resultado = $conexion->query($sql);
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub</title>
    <?php include 'includes/theme-init.php'; ?>

    <!-- Foundation -->
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

                <?php while($evento = $resultado->fetch_assoc()): ?>

                    <div class="cell small-12 medium-6 large-4">
                        <div class="card card-animada">
                            <div class="card-section">
                                <h4><?= $evento['titulo'] ?></h4>
                                <p><?= $evento['descripcion'] ?></p>

                                <button class="neon-button"
                                    onclick="verEvento(<?= $evento['latitud'] ?>, <?= $evento['longitud'] ?>, '<?= $evento['titulo'] ?>')">
                                    Ver en mapa
                                </button>
                                <button class="neon-button"
                                    onclick="verComentarios(<?= $evento['id'] ?>, '<?= $evento['titulo'] ?>')">
                                    Ver comentarios
                                </button>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>

        <!-- MAPA -->
        <div class="grid-container">
            <h3>Mapa de eventos</h3>
            <div id="map"></div>
        </div>

        <div class="grid-x grid-margin-x align-center">
                <div class="cell small-12 medium-10 large-8">
                    <div class="comment-card light" id="comment-card">
                        <div class="grid-x align-justify align-middle">
                            <div class="cell auto">
                                <h3>Comentarios sobre los eventos</h3>
                            </div>
                        </div>

                        <form id="comment-form" onsubmit="return enviarComentario(event)">
                            <label>Evento
                                <select name="evento" required>
                                    <option value="Hackathon 2026">Hackathon 2026</option>
                                    <option value="FLISOL">FLISOL</option>
                                    <option value="Charla IA">Charla IA</option>
                                </select>
                            </label>

                            <label>Nombre
                                <input type="text" name="nombre" placeholder="Tu nombre" required>
                            </label>

                            <label>Correo
                                <input type="email" name="correo" placeholder="tu@email.com" required>
                            </label>

                            <label>Comentario
                                <textarea name="mensaje" rows="5" placeholder="Cuéntanos qué te pareció el evento" required></textarea>
                            </label>

                            <div class="grid-x grid-margin-x align-justify align-middle">
                                <div class="cell auto">
                                    <button type="submit" class="neon-button">Enviar comentario</button>
                                </div>
                                <div class="cell auto">
                                    <span class="comment-note">Tu opinión ayuda a mejorar los próximos eventos.</span>
                                </div>
                            </div>

                            <p class="success-message" id="comment-message"></p>
                        </form>
                    </div>
                </div>
            </div>

            
        <div id="modal-comentarios" class="reveal" data-reveal>
            <h3 id="titulo-modal">Comentarios</h3>

            <div id="lista-comentarios">
                <!-- se cargan dinámicamente -->
            </div>

            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </main>

    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="assets/js/mapa.js"></script>
    <script src="assets/js/formulario.js"></script>
    <script src="assets/js/app.js"></script>


</body>

</html>
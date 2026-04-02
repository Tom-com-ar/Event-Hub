<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Mi Sitio Moderno</li>
            <li><a href="/Event-Hub/index.php">Inicio</a></li>
            <li><a href="/Event-Hub/pages/perfil.php">Perfil</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <li><a href="#" id="toggleDarkMode"><i class="fas fa-moon"></i> Modo Oscuro</a></li>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="/Event-Hub/backend/logout.php">Cerrar Sesión</a></li>
            <?php else: ?>
                <li><a href="/Event-Hub/pages/login.php">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
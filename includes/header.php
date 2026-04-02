<<<<<<< HEAD
<?php
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$inPages = strpos($scriptName, '/pages/') !== false;
$home = $inPages ? '../index.php' : 'index.php';
$perfil = $inPages ? 'perfil.php' : 'pages/perfil.php';
$login = $inPages ? 'login.php' : 'pages/login.php';
$logout = $inPages ? '../backend/logout.php' : 'backend/logout.php';
?>
<header class="site-header" role="banner">
    <div class="site-header-inner">
        <a class="site-brand" href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">EventHub</a>
        <button type="button" class="site-nav-toggle" id="navToggle" aria-label="Abrir o cerrar menú" aria-expanded="false" aria-controls="headerNav">
            <span class="site-nav-toggle-bars" aria-hidden="true">
                <span class="site-nav-toggle-line"></span>
                <span class="site-nav-toggle-line"></span>
                <span class="site-nav-toggle-line"></span>
            </span>
        </button>
        <div class="site-nav-wrap" id="headerNav">
            <nav class="site-nav-primary" aria-label="Secciones">
                <ul class="site-nav-list">
                    <li><a href="<?php echo htmlspecialchars($home, ENT_QUOTES, 'UTF-8'); ?>">Inicio</a></li>
                    <li><a href="<?php echo htmlspecialchars($perfil, ENT_QUOTES, 'UTF-8'); ?>">Perfil</a></li>
                </ul>
            </nav>
            <nav class="site-nav-secondary" aria-label="Cuenta y apariencia">
                <ul class="site-nav-actions">
                    <li>
                        <a href="#" id="toggleDarkMode" class="site-nav-theme"><i class="fas fa-moon" aria-hidden="true"></i> <span class="site-nav-theme-label">Modo Oscuro</span></a>
                    </li>
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <li><a href="<?php echo htmlspecialchars($logout, ENT_QUOTES, 'UTF-8'); ?>">Cerrar sesión</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo htmlspecialchars($login, ENT_QUOTES, 'UTF-8'); ?>">Iniciar sesión</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
=======
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
>>>>>>> 1747dece229cf969e01a2edea115e84cb17d4d0a

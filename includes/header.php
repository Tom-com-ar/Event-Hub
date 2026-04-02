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

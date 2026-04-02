// Modo oscuro: <html class="dark-mode"> + localStorage (theme-init.php evita flash al cargar)
(function () {
    function setTheme(isDark) {
        var root = document.documentElement;
        if (isDark) {
            root.classList.add('dark-mode');
            document.body.classList.add('dark-mode');
        } else {
            root.classList.remove('dark-mode');
            document.body.classList.remove('dark-mode');
        }
        try {
            localStorage.setItem('darkMode', isDark ? 'true' : 'false');
        } catch (e) {}

        var toggleButton = document.getElementById('toggleDarkMode');
        if (toggleButton) {
            toggleButton.innerHTML = isDark
                ? '<i class="fas fa-sun"></i> Modo Claro'
                : '<i class="fas fa-moon"></i> Modo Oscuro';
        }
    }

    function syncFromStorage() {
        var wantDark = false;
        try {
            wantDark = localStorage.getItem('darkMode') === 'true';
        } catch (e) {}
        setTheme(wantDark);
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Refuerza preferencia por si falta theme-init en alguna página
        syncFromStorage();

        var toggleButton = document.getElementById('toggleDarkMode');
        if (!toggleButton) {
            return;
        }

        toggleButton.addEventListener('click', function (e) {
            e.preventDefault();
            setTheme(!document.documentElement.classList.contains('dark-mode'));
        });
    });
})();

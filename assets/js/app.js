// Modo oscuro + menú móvil del header
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
                ? '<i class="fas fa-sun" aria-hidden="true"></i> <span class="site-nav-theme-label">Modo Claro</span>'
                : '<i class="fas fa-moon" aria-hidden="true"></i> <span class="site-nav-theme-label">Modo Oscuro</span>';
        }
    }

    function syncFromStorage() {
        var wantDark = false;
        try {
            wantDark = localStorage.getItem('darkMode') === 'true';
        } catch (e) {}
        setTheme(wantDark);
    }

    function closeMobileNav(navWrap, navBtn) {
        if (!navWrap || !navBtn) return;
        navWrap.classList.remove('is-open');
        navBtn.classList.remove('is-active');
        navBtn.setAttribute('aria-expanded', 'false');
    }

    document.addEventListener('DOMContentLoaded', function () {
        syncFromStorage();

        var toggleButton = document.getElementById('toggleDarkMode');
        if (toggleButton) {
            toggleButton.addEventListener('click', function (e) {
                e.preventDefault();
                setTheme(!document.documentElement.classList.contains('dark-mode'));
            });
        }

        var navToggle = document.getElementById('navToggle');
        var headerNav = document.getElementById('headerNav');
        if (navToggle && headerNav) {
            navToggle.addEventListener('click', function () {
                var open = headerNav.classList.toggle('is-open');
                navToggle.classList.toggle('is-active', open);
                navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            });

            headerNav.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (window.matchMedia('(max-width: 639px)').matches) {
                        closeMobileNav(headerNav, navToggle);
                    }
                });
            });

            window.addEventListener('resize', function () {
                if (window.matchMedia('(min-width: 640px)').matches) {
                    closeMobileNav(headerNav, navToggle);
                }
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') {
                    closeMobileNav(headerNav, navToggle);
                }
            });
        }
    });
})();

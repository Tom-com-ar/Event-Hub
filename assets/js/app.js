// Modo oscuro
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleDarkMode');
    const body = document.body;
    const icon = toggleButton.querySelector('i');

    // Cargar estado desde localStorage
    const darkModeEnabled = localStorage.getItem('darkMode') === 'true';
    if (darkModeEnabled) {
        body.classList.add('dark-mode');
        icon.className = 'fas fa-sun';
        toggleButton.innerHTML = '<i class="fas fa-sun"></i> Modo Claro';
    } else {
        icon.className = 'fas fa-moon';
        toggleButton.innerHTML = '<i class="fas fa-moon"></i> Modo Oscuro';
    }

    // Toggle al hacer click
    toggleButton.addEventListener('click', function(e) {
        e.preventDefault();
        body.classList.toggle('dark-mode');
        const isDark = body.classList.contains('dark-mode');
        localStorage.setItem('darkMode', isDark);

        if (isDark) {
            icon.className = 'fas fa-sun';
            toggleButton.innerHTML = '<i class="fas fa-sun"></i> Modo Claro';
        } else {
            icon.className = 'fas fa-moon';
            toggleButton.innerHTML = '<i class="fas fa-moon"></i> Modo Oscuro';
        }
    });
});
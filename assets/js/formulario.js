
$(document).foundation();

function toggleCommentTheme() {
    const card = document.getElementById('comment-card');
    const button = document.getElementById('theme-toggle');
    const darkMode = card.classList.toggle('dark');
    card.classList.toggle('light', !darkMode);
    button.textContent = darkMode ? 'Modo claro' : 'Modo oscuro';
}

function enviarComentario(event) {
    event.preventDefault();

    const form = event.target;
    const message = document.getElementById('comment-message');
    const evento = form.evento.value;

    const formData = new FormData(form);

    fetch("backend/comentario.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        if (data === "ok") {
            message.textContent = `Gracias por tu comentario sobre "${evento}" `;
            message.style.color = '#0ff';
            form.reset();
        } else {
            message.textContent = "Error al guardar comentario";
            message.style.color = "red";
        }
    })
    .catch(() => {
        message.textContent = "Error de conexión ❌";
        message.style.color = "red";
    });

    return false;
}

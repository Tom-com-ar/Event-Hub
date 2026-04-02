
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

function verComentarios(eventoId, titulo) {
    const lista = document.getElementById("lista-comentarios");
    const tituloModal = document.getElementById("titulo-modal");

    tituloModal.textContent = "Comentarios de " + titulo;
    lista.innerHTML = "Cargando...";

    fetch("backend/obtener_comentarios.php?evento_id=" + eventoId)
        .then(res => res.json())
        .then(data => {
            if (data.length === 0) {
                lista.innerHTML = "<p>No hay comentarios aún.</p>";
                return;
            }

            let html = "";
            data.forEach(c => {
                html += `
                    <div style="margin-bottom:10px;">
                        <strong>${c.nombre}</strong><br>
                        <small>${c.fecha}</small><br>
                        <p>${c.mensaje}</p>
                        <hr>
                    </div>
                `;
            });

            lista.innerHTML = html;
        });

    // abrir modal (Foundation)
    const modal = new Foundation.Reveal($('#modal-comentarios'));
    modal.open();
}
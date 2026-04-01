let map;
let marker;

// 🔹 Crear mapa al cargar
window.onload = () => {
    map = L.map('map').setView([-34.6, -58.4], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    // Mostrar TODOS los eventos desde el inicio
    cargarEventos();
};

// 🔹 Lista de eventos
const eventos = [
    { nombre: "Hackathon 2026", lat: -34.6037, lng: -58.3816 },
    { nombre: "FLISOL", lat: -34.61, lng: -58.38 },
    { nombre: "Charla IA", lat: -34.59, lng: -58.42 }
];

// 🔹 Mostrar todos los eventos
function cargarEventos() {
    eventos.forEach(e => {
        L.marker([e.lat, e.lng])
            .addTo(map)
            .bindPopup(e.nombre);
    });
}

// 🔹 Cuando hacés click en botón
function verEvento(lat, lng, nombre) {
    map.setView([lat, lng], 15);

    // eliminar marcador anterior
    if (marker) {
        map.removeLayer(marker);
    }

    marker = L.marker([lat, lng])
        .addTo(map)
        .bindPopup(nombre)
        .openPopup();
}   x
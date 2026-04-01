function obtenerUbicacion() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(mostrarPosicion, mostrarError);
  } else {
    alert("Geolocalización no soportada");
  }
}

function mostrarPosicion(posicion) {
  const lat = posicion.coords.latitude;
  const lng = posicion.coords.longitude;

  document.getElementById('coordenadas').innerHTML = `Lat: ${lat}, Lng: ${lng}`;

  // 🔹 Crear mapa centrado en el usuario
  var map = L.map('map').setView([lat, lng], 13);

  // 🔹 Cargar mapa
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap'
  }).addTo(map);

  // 🔹 Marcador del usuario
  L.marker([lat, lng])
    .addTo(map)
    .bindPopup("Estás acá")
    .openPopup();

  // EVENTOS
  var eventos = [   
    {
      nombre: "Hackathon",
      lat: -34.6037,
      lng: -58.3816
    },
    {
      nombre: "FLISOL",
      lat: -34.61,
      lng: -58.38
    },
    {
      nombre: "Charla IA",
      lat: -34.59,
      lng: -58.42
    }
  ];

  // 🔹 Agregar eventos al mapa
  eventos.forEach(evento => {
    L.marker([evento.lat, evento.lng])
      .addTo(map)
      .bindPopup(evento.nombre);
  });
}

function mostrarError() {
  alert("No se pudo obtener la ubicación");
}
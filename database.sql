-- Base de datos para Event-Hub
-- Ejecutar este script en phpMyAdmin o MySQL para crear la base de datos y tablas

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS sitio_moderno;
USE sitio_moderno;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar algunos usuarios de ejemplo (contraseñas hasheadas con password_hash en PHP)
-- Contraseña para todos: 'password123' (hasheada)
INSERT INTO usuarios (nombre, email, password) VALUES
('Admin User', 'admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'), -- password123
('Juan Pérez', 'juan@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'),
('María García', 'maria@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Crear tabla de eventos (opcional, para la funcionalidad de eventos)
CREATE TABLE IF NOT EXISTS eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    descripcion TEXT,
    fecha DATE,
    usuario_id INT,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Insertar algunos eventos de ejemplo
INSERT INTO eventos (titulo, descripcion, fecha, usuario_id) VALUES
('Hackathon 2026', 'Programación intensiva para desarrolladores.', '2026-05-15', 1),
('FLISOL', 'Festival Latinoamericano de Instalación de Software Libre.', '2026-04-25', 2),
('Charla IA', 'Introducción a la Inteligencia Artificial.', '2026-06-10', 3);
CREATE DATABASE IF NOT EXISTS instant_delight;
USE instant_delight;

CREATE TABLE IF NOT EXISTS comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    texto TEXT,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    likes INT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS likes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comentario_id INT,
    usuario VARCHAR(50),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (comentario_id) REFERENCES comentarios(id) ON DELETE CASCADE
);
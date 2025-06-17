CREATE DATABASE IF NOT EXISTS webapp_db;

USE webapp_db;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('Administrator', 'admin123'),
('pavlov_ai', 'pass123');

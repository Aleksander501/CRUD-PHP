CREATE DATABASE CRUD;
USE CRUD;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10, 2)
);

INSERT INTO productos (nombre, descripcion, precio) VALUES
    ('Producto 1', 'Descripción del producto 1', 19.99),
    ('Producto 2', 'Descripción del producto 2', 29.99),
    ('Producto 3', 'Descripción del producto 3', 39.99);

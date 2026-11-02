
CREATE DATABASE IF NOT EXISTS `eating-bulls`;
USE `eating-bulls`;

-- =========================================
-- TABLA: usuarios
-- =========================================
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    telefono VARCHAR(20),
    direccion VARCHAR(255),
    fecha_nacimiento DATE,
    rol VARCHAR(20) NOT NULL DEFAULT 'usuario'
        COMMENT 'Valores: usuario, admin',
    fecha_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- =========================================
-- TABLA: categorias
-- =========================================
CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    descripcion TEXT,
    activa BOOLEAN NOT NULL DEFAULT TRUE
);

-- =========================================
-- TABLA: ingredientes
-- =========================================
CREATE TABLE IF NOT EXISTS ingredientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE,
    precio_extra DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    activo BOOLEAN NOT NULL DEFAULT TRUE
);

-- =========================================
-- TABLA: ofertas
-- =========================================
CREATE TABLE IF NOT EXISTS ofertas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT,
    tipo VARCHAR(20) NOT NULL
        COMMENT 'Valores: descuento, 2x1, combo, codigo',
    valor DECIMAL(10,2),
    codigo VARCHAR(50) UNIQUE,
    fecha_inicio DATETIME NOT NULL,
    fecha_fin DATETIME,
    activa BOOLEAN NOT NULL DEFAULT TRUE
);

-- =========================================
-- TABLA: productos
-- =========================================
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoria_id INT NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    imagen VARCHAR(255),
    activo BOOLEAN NOT NULL DEFAULT TRUE,

    FOREIGN KEY (categoria_id)
        REFERENCES categorias(id)
);

-- =========================================
-- TABLA: producto_ingrediente
-- =========================================
CREATE TABLE IF NOT EXISTS producto_ingrediente (
    producto_id INT NOT NULL,
    ingrediente_id INT NOT NULL,
    cantidad DECIMAL(10,2) NOT NULL DEFAULT 1,

    PRIMARY KEY (producto_id, ingrediente_id),

    FOREIGN KEY (producto_id)
        REFERENCES productos(id),

    FOREIGN KEY (ingrediente_id)
        REFERENCES ingredientes(id)
);

-- =========================================
-- TABLA: oferta_producto
-- =========================================
CREATE TABLE IF NOT EXISTS oferta_producto (
    oferta_id INT NOT NULL,
    producto_id INT NOT NULL,

    PRIMARY KEY (oferta_id, producto_id),

    FOREIGN KEY (oferta_id)
        REFERENCES ofertas(id),

    FOREIGN KEY (producto_id)
        REFERENCES productos(id)
);

-- =========================================
-- TABLA: pedidos
-- =========================================
CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    estado VARCHAR(20) NOT NULL DEFAULT 'pendiente'
        COMMENT 'Valores: pendiente, confirmado, preparando, enviado, entregado, cancelado',
    fecha_pedido DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    subtotal DECIMAL(10,2) NOT NULL,
    descuento DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    total DECIMAL(10,2) NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL DEFAULT 'simulado',
    estado_pago VARCHAR(20) NOT NULL DEFAULT 'pendiente'
        COMMENT 'Valores: pendiente, pagado, fallido',

    FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id)
);

-- =========================================
-- TABLA: pedido_detalle
-- =========================================
CREATE TABLE IF NOT EXISTS pedido_detalle (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    producto_id INT,
    nombre_producto VARCHAR(150) NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    cantidad INT NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL
        COMMENT 'CHECK cantidad > 0 y precio_unitario >= 0',

    FOREIGN KEY (pedido_id)
        REFERENCES pedidos(id),

    FOREIGN KEY (producto_id)
        REFERENCES productos(id)
);

-- =========================================
-- TABLA: pedido_detalle_ingrediente
-- =========================================
CREATE TABLE IF NOT EXISTS pedido_detalle_ingrediente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_detalle_id INT NOT NULL,
    ingrediente_id INT,
    nombre_ingrediente VARCHAR(100) NOT NULL,
    precio_extra DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    accion VARCHAR(20) NOT NULL
        COMMENT 'Valores: incluido, quitado, añadido',

    FOREIGN KEY (pedido_detalle_id)
        REFERENCES pedido_detalle(id),

    FOREIGN KEY (ingrediente_id)
        REFERENCES ingredientes(id)
);

-- =========================================
-- COMPROBAR LAS TABLAS CREADAS
-- =========================================
SHOW TABLES;

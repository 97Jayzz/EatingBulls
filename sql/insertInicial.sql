
USE `eating-bulls`;

-- =====================================================
-- 1. CATEGORIAS
-- =====================================================

INSERT INTO categorias (nombre, descripcion) VALUES
('Hamburguesas', 'Hamburguesas principales de Eating Bulls'),
('Entrantes', 'Entrantes y acompanamientos'),
('Bebidas', 'Bebidas y refrescos'),
('Postres', 'Postres de la carta principal'),
('The Grand Tour Menu', 'Edicion especial del Gran Premio de Mexico');


-- =====================================================
-- 2. INGREDIENTES
-- =====================================================

INSERT INTO ingredientes (nombre, precio_extra) VALUES
('Carne de ternera', 0.00),
('Doble carne de ternera', 4.00),
('Cheddar', 1.00),
('Bacon', 1.50),
('Cebolla caramelizada', 0.80),
('Salsa BBQ', 0.50),
('Salsa de la casa', 0.50),
('Pepinillos', 0.50),
('Cebolla', 0.00),
('Mostaza', 0.00),
('Lechuga', 0.00),
('Tomate', 0.50),
('Cebolla morada', 0.50),
('Pollo crujiente', 0.00),
('Mayonesa picante', 0.50),
('Hamburguesa vegetal', 0.00),
('Salsa de yogur', 0.50),
('Hierbas', 0.00),
('Nachos', 0.00),
('Jalapenos', 0.50),
('Pico de gallo', 0.80),
('Salsa agria', 0.50),
('Tiras de pollo', 0.00),
('Aros de cebolla', 0.00),
('Patatas fritas', 0.00),
('Especias', 0.30),
('Salsa para dipear', 0.50),
('Cheddar fundido', 1.50),
('Brownie', 0.00),
('Helado de vainilla', 1.50),
('Chocolate', 0.00),
('Cookie', 0.00),
('Tortitas', 0.00),
('Fruta', 0.80),
('Nata', 0.50),
('Mini donuts', 0.00),
('Glaseado', 0.50),
('Toppings', 0.50),
('Guacamole', 1.00),
('Mayonesa de chipotle', 0.50),
('Cochinita pibil', 0.00),
('Cilantro', 0.00),
('Tortillas de maiz', 0.00),
('Bizcocho tres leches', 0.00),
('Leche condensada', 0.00),
('Leche evaporada', 0.00),
('Canela', 0.00),
('Arroz', 0.00),
('Azucar', 0.00),
('Mousse de vainilla', 0.00),
('Chocolate blanco', 0.00),
('Frutos rojos', 0.80),
('Chocolate azul', 0.00);


-- =====================================================
-- 3. PRODUCTOS
-- =====================================================

INSERT INTO productos
(id, categoria_id, nombre, descripcion, precio, imagen, activo)
VALUES

-- HAMBURGUESAS (categoria 1)
(1, 1, 'Mad Max',
'Ternera premium, cheddar fundido, bacon ahumado, cebolla crujiente, lechuga fresca y salsa especial de la casa en pan de carbón negro.',
17.50, 'img/productos/hamburguesas/madMax.webp', 1),

(2, 1, 'Petit Prost',
'Ternera premium, cheddar fundido, lechuga, cebolla crujiente y salsa especial de la casa en pan de carbón negro.',
14.50, 'img/productos/hamburguesas/petiteProst.webp', 1),

(3, 1, 'Double Stack',
'Doble ternera, cheddar, lechuga, tomate, cebolla morada y salsa especial.',
16.50, 'img/productos/hamburguesas/doubleStack.webp', 1),

(4, 1, 'Chick Norris',
'Pollo crujiente, cheddar, lechuga, pepinillos y mayonesa ligeramente picante.',
15.50, 'img/productos/hamburguesas/chickNorris.webp', 1),

(5, 1, 'Green Flag',
'Hamburguesa vegetal, queso, lechuga, tomate y salsa de yogur y hierbas.',
15.00, 'img/productos/hamburguesas/greenFlag.webp', 1),

-- ENTRANTES (categoria 2)
(6, 2, 'Grid Nachos',
'Nachos con cheddar fundido, jalapeños, pico de gallo y salsa agria.',
10.50, 'img/productos/entrantes/gridNachos.webp', 1),

(7, 2, 'Chicken Tenders',
'Tiras de pollo crujientes con una salsa a elegir.',
11.50, 'img/productos/entrantes/chickenTenders.webp', 1),

(8, 2, 'Onion Rings',
'Aros de cebolla rebozados con salsa BBQ.',
8.50, 'img/productos/entrantes/arosCebolla.webp', 1),

(9, 2, 'Tequeños',
'Palitos de masa crujiente rellenos de queso fundido.',
5.50, 'img/productos/entrantes/tequenos.webp', 1),

(10, 2, 'Boost Fries',
'Patatas con cheddar fundido, bacon crujiente y salsa de la casa.',
9.00, 'img/productos/entrantes/boostFries.webp', 1),

-- BEBIDAS (categoria 3)
(11, 3, 'Red Bull Original',
'Lata clásica de Red Bull.',
3.50, 'img/productos/bebidas/redBull.webp', 1),

(12, 3, 'Red Bull Sugarfree',
'Red Bull sin azúcar.',
3.50, 'img/productos/bebidas/redBullFree.webp', 1),

(13, 3, 'Victory Cola',
'Refresco de cola con hielo.',
3.00, 'img/productos/bebidas/cocacola.webp', 1),

(14, 3, 'Agua',
'Botella de agua.',
4.00, 'img/productos/bebidas/agua.webp', 1),

(15, 3, 'Podium Shake',
'Batido cremoso de chocolate.',
6.50, 'img/productos/bebidas/podiumShake.webp', 1),

-- POSTRES (categoria 4)
(16, 4, 'The Graining Brownie',
'Brownie de chocolate templado con helado de vainilla.',
7.00, 'img/productos/postres/theGrainingB.webp', 1),

(17, 4, 'Cheesecake',
'Cheesecake con azúcar glas, frambuesas y nata.',
7.50, 'img/productos/postres/cheesecake.webp', 1),

(18, 4, 'Pit Stop Cookie',
'Cookie de chocolate con helado de vainilla.',
6.00, 'img/productos/postres/pitStopCookie.webp', 1),

(19, 4, 'Grand Prix Pancakes',
'Tortitas con sirope, fruta y nata.',
7.00, 'img/productos/postres/grandPrixPancakes.webp', 1),

(20, 4, 'RB22 Dessert',
'Mousse de vainilla y chocolate blanco, frutos rojos y llanta de chocolate azul.',
8.50, 'img/productos/postres/rb22.webp', 1),

-- THE GRAND TOUR MENU: MEXICO (categoria 5, imágenes pendientes)
(21, 5, 'Mexico Grand Prix Burger',
'Doble ternera, queso, guacamole, jalapeños y mayonesa de chipotle.',
18.00, NULL, 1),

(22, 5, 'Hermanos Nachos',
'Nachos con cheddar, guacamole, pico de gallo y jalapeños.',
10.50, NULL, 1),

(23, 5, 'Paddock Tacos',
'Tacos de cochinita pibil con cebolla morada y cilantro.',
12.00, NULL, 1),

(24, 5, 'Podium Tres Leches',
'Bizcocho tradicional mexicano de tres leches.',
7.50, NULL, 1),

(25, 5, 'Mexico Victory Horchata',
'Bebida tradicional de arroz, leche y canela.',
5.00, NULL, 1);


-- =====================================================
-- 4. RELACIONES PRODUCTO - INGREDIENTE
-- =====================================================

-- HAMBURGUESAS

INSERT INTO producto_ingrediente VALUES
(1,1,1),(1,2,1),(1,3,1),(1,4,1),(1,5,1),(1,6,1),(1,7,1),
(2,1,1),(2,3,1),(2,8,1),(2,9,1),(2,10,1),
(3,2,1),(3,3,1),(3,11,1),(3,12,1),(3,13,1),(3,7,1),
(4,14,1),(4,3,1),(4,11,1),(4,8,1),(4,15,1),
(5,16,1),(5,3,1),(5,11,1),(5,12,1),(5,17,1),(5,18,1);

-- ENTRANTES

INSERT INTO producto_ingrediente VALUES
(6,19,1),(6,28,1),(6,20,1),(6,21,1),(6,22,1),
(7,23,1),(7,27,1),
(8,24,1),(8,6,1),
(9,25,1),(9,26,1),
(10,25,1),(10,28,1),(10,4,1),(10,7,1);

-- POSTRES

INSERT INTO producto_ingrediente VALUES
(16,29,1),(16,30,1),(16,31,1),
(17,31,1),(17,30,1),
(18,32,1),(18,31,1),(18,30,1),
(19,33,1),(19,34,1),(19,35,1);

-- RB22 DESSERT (producto 20)

INSERT INTO producto_ingrediente VALUES
(20,50,1),
(20,51,1),
(20,52,1),
(20,53,1);

-- THE GRAND TOUR MENU: MEXICO

INSERT INTO producto_ingrediente VALUES
(21,2,1),(21,3,1),(21,39,1),(21,20,1),(21,40,1),
(22,19,1),(22,28,1),(22,39,1),(22,21,1),(22,20,1),
(23,41,1),(23,42,1),(23,43,1),(23,13,1),
(24,44,1),(24,45,1),(24,46,1),
(25,47,1),(25,48,1),(25,49,1),(25,46,1);


-- =====================================================
-- 5. USUARIOS
-- =====================================================

INSERT INTO usuarios
(nombre, email, password, telefono, direccion, fecha_nacimiento, rol)
VALUES
('Carlos Martinez', 'carlos@gmail.com',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi.',
'600111222', 'Barcelona', '2000-05-12', 'usuario'),

('Laura Fernandez', 'laura@gmail.com',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi.',
'600333444', 'Badalona', '2002-08-20', 'usuario'),

('Administrador', 'admin@eatingbulls.com',
'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi.',
'600555666', 'Barcelona', '1995-03-10', 'admin');


-- =====================================================
-- 6. OFERTAS
-- =====================================================

INSERT INTO ofertas
(nombre, descripcion, tipo, valor, codigo, fecha_inicio, fecha_fin, activa)
VALUES
('Descuento de bienvenida',
'Descuento para nuevos clientes.',
'descuento', 10, NULL,
CURDATE(), DATE_ADD(CURDATE(), INTERVAL 30 DAY), TRUE),

('Oferta hamburguesa',
'Descuento especial en la hamburguesa Mad Max.',
'descuento', 15, NULL,
CURDATE(), DATE_ADD(CURDATE(), INTERVAL 15 DAY), TRUE),

('Codigo PADDOCK',
'Codigo promocional para clientes del restaurante.',
'codigo', 10, 'PADDOCK10',
CURDATE(), DATE_ADD(CURDATE(), INTERVAL 60 DAY), TRUE);


-- =====================================================
-- 7. RELACIONAR OFERTAS Y PRODUCTOS
-- =====================================================

SET @oferta_hamburguesa = (
    SELECT id FROM ofertas
    WHERE nombre = 'Oferta hamburguesa'
    LIMIT 1
);

SET @oferta_codigo = (
    SELECT id FROM ofertas
    WHERE codigo = 'PADDOCK10'
    LIMIT 1
);

SET @mad_max = (
    SELECT id FROM productos
    WHERE nombre = 'Mad Max'
    LIMIT 1
);

SET @rb22 = (
    SELECT id FROM productos
    WHERE nombre = 'RB22 Dessert'
    LIMIT 1
);

INSERT INTO oferta_producto (oferta_id, producto_id)
VALUES
(@oferta_hamburguesa, @mad_max),
(@oferta_codigo, @rb22);


-- =====================================================
-- 8. PEDIDOS
-- =====================================================

SET @carlos = (
    SELECT id FROM usuarios
    WHERE email = 'carlos@gmail.com'
    LIMIT 1
);

SET @laura = (
    SELECT id FROM usuarios
    WHERE email = 'laura@gmail.com'
    LIMIT 1
);

INSERT INTO pedidos
(usuario_id, estado, subtotal, descuento, total,
 metodo_pago, estado_pago)
VALUES
(@carlos, 'entregado', 28.00, 2.80, 25.20,
 'simulado', 'pagado'),

(@laura, 'preparando', 26.00, 0.00, 26.00,
 'simulado', 'pagado');


-- =====================================================
-- 9. DETALLES DE LOS PEDIDOS
-- =====================================================

SET @pedido_carlos = (
    SELECT id FROM pedidos
    WHERE usuario_id = @carlos
    ORDER BY id DESC
    LIMIT 1
);

SET @pedido_laura = (
    SELECT id FROM pedidos
    WHERE usuario_id = @laura
    ORDER BY id DESC
    LIMIT 1
);

SET @producto_mad_max = (
    SELECT id FROM productos
    WHERE nombre = 'Mad Max'
    LIMIT 1
);

SET @producto_nachos = (
    SELECT id FROM productos
    WHERE nombre = 'Grid Nachos'
    LIMIT 1
);

SET @producto_rb22 = (
    SELECT id FROM productos
    WHERE nombre = 'RB22 Dessert'
    LIMIT 1
);

INSERT INTO pedido_detalle
(pedido_id, producto_id, nombre_producto,
 precio_unitario, cantidad, subtotal)
VALUES
(@pedido_carlos, @producto_mad_max, 'Mad Max',
17.50, 1, 17.50),

(@pedido_carlos, @producto_nachos, 'Grid Nachos',
10.50, 1, 10.50),

(@pedido_laura, @producto_mad_max, 'Mad Max',
17.50, 1, 17.50),

(@pedido_laura, @producto_rb22, 'RB22 Dessert',
8.50, 1, 8.50);


-- =====================================================
-- 10. INGREDIENTES DE LOS DETALLES DEL PEDIDO
-- =====================================================

SET @detalle_mad_max = (
    SELECT id FROM pedido_detalle
    WHERE pedido_id = @pedido_carlos
    AND nombre_producto = 'Mad Max'
    LIMIT 1
);

SET @detalle_rb22 = (
    SELECT id FROM pedido_detalle
    WHERE pedido_id = @pedido_laura
    AND nombre_producto = 'RB22 Dessert'
    LIMIT 1
);

SET @ingrediente_bacon = (
    SELECT id FROM ingredientes
    WHERE nombre = 'Bacon'
    LIMIT 1
);

SET @ingrediente_azul = (
    SELECT id FROM ingredientes
    WHERE nombre = 'Chocolate azul'
    LIMIT 1
);

INSERT INTO pedido_detalle_ingrediente
(pedido_detalle_id, ingrediente_id, nombre_ingrediente,
 precio_extra, accion)
VALUES
(@detalle_mad_max, @ingrediente_bacon, 'Bacon', 0.00, 'incluido'),
(@detalle_rb22, @ingrediente_azul, 'Chocolate azul', 0.00, 'incluido');


-- =====================================================
-- 11. COMPROBACION FINAL
-- =====================================================

SELECT c.nombre AS categoria, p.nombre AS producto, p.precio
FROM productos p
INNER JOIN categorias c ON p.categoria_id = c.id
ORDER BY c.id, p.id;

SELECT * FROM usuarios;
SELECT * FROM ofertas;
SELECT * FROM oferta_producto;
SELECT * FROM pedidos;
SELECT * FROM pedido_detalle;
SELECT * FROM pedido_detalle_ingrediente;

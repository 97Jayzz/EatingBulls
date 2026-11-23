<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eating Bulls - Admin</title>
</head>
<body>
    <h1>Panel de administración</h1>

    <form id="eliminarProducto">
        <input type="number" placeholder="¿Qué id quieres eliminar?">
        <input type="submit" value="Eliminar">
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="productos"></tbody>
    </table>

    <script src="views/admin/main.js"></script>
</body>
</html>
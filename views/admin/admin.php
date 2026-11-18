<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script></script>
</head>
<body>
    <section data-view="productos" hidden>

    <form action="" id="eliminarProducto">
        <input type="number" placeholder="que id quieres eliminar?">
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Talla</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody id="productos">

        </tbody>
    </table>
    </section>
    <script src="views/admin/main.js"></script>
</body>
</html>
<h1>Detalle del producto</h1>
<p><a href="?controller=carta">Volver a la carta</a></p>

<p><strong>Nombre:</strong> <?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8')?></p>
<p><strong>Categoria:</strong> <?= htmlspecialchars($producto->getCategoria(), ENT_QUOTES, 'UTF-8')?></p>
<p><strong>Precio:</strong> <?= number_format((float) $producto->getPrecio(), 2, ',' , '.')?>€</p>
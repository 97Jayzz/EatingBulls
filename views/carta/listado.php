<h2>Nuestra carta</h2>

<?php foreach($productos as $producto): ?>

    <article>
        <h3><?php echo $producto->getNombre(); ?></h3>

        <p><?php echo $producto->getDescripcion(); ?></p>

        <p> Precio: <?php echo $producto->getPrecio(); ?></p>

        <p>Categoria: <?php echo $producto->getCategoria(); ?></p>
    </article>
    
    <hr>

    <?php endforeach; ?>
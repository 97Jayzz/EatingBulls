<!-- CONTENIDO PRINCIPAL -->
 <div>
    <h1>Nuestra Carta</h1>

<!-- RECORRER ARRAY DE PRODUCTOS AGRUPADOS PARA TENER LA CATEGORIA Y SUS PRODUCTOS -->
    <?php foreach($productosPorCategoria as $categoria => $productosCategoria){ ?>

        <section>

        <h2><?php echo $categoria; ?></h2>

<!-- SE RECORREN LOS PRODUCTOS DE LA CATEGORIA ACTUAL -->
        <?php foreach($productosCategoria as $producto){ ?>

        <article>
            <img src="<?php echo $producto->getImagen(); ?>" alt="<?php echo $producto->getNombre(); ?>">
            <h3><?php echo $producto->getNombre(); ?></h3>
            <p><?php echo $producto->getDescripcion(); ?></p>
            <p><?php echo $producto->getPrecio(); ?> €</p>

        </article>

        <?php }?>

    </section>

    <?php } ?>
 </div>
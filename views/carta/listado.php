<!-- CONTENIDO PRINCIPAL -->
 <div class="carta">
    <h1>Nuestra Carta</h1>

<!-- RECORRER ARRAY DE PRODUCTOS AGRUPADOS PARA TENER LA CATEGORIA Y SUS PRODUCTOS -->
    <?php foreach($productosPorCategoria as $categoria => $productosCategoria){ ?>

        <section class="categoria">

        <h2><?php echo $categoria; ?></h2>

<!-- SE RECORREN LOS PRODUCTOS DE LA CATEGORIA ACTUAL -->
        <?php foreach($productosCategoria as $producto){ ?>

        <article class="producto">
            <img src="<?php echo $producto->getImagen(); ?>" alt="<?php echo $producto->getNombre(); ?>">
            <h3><?php echo $producto->getNombre(); ?></h3>
            <p><?php echo $producto->getDescripcion(); ?></p>

            <div class="precioBoton">
                <button type="button">Añadir al carrito</button>
                <p><?php echo $producto->getPrecio(); ?> €</p>
            </div>

        </article>

        <?php }?>

    </section>

    <?php } ?>
 </div>
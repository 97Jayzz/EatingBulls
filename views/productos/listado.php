<main class="carta">
    <h1>Nuestra Carta</h1>

    <!-- PASTILLAS: una por categoría -->
    <nav class="categorias-nav">
        <?php foreach ($categorias as $id => $nombre) { ?>
            <a class="pastilla pastilla-<?= $id ?>" href="#categoria-<?= $id ?>">
                <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>
            </a>
        <?php } ?>
    </nav>

    <!-- SECCIONES: una por categoría, con sus tarjetas dentro -->
    <?php foreach ($categorias as $id => $nombre) { ?>
        <section class="categoria" id="categoria-<?= $id ?>">
            <h2><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></h2>

            <div class="carrusel">
                <button class="flecha flecha-izq" type="button" aria-label="Anterior">
                    <img src="img/icons/dFlecha.svg" alt="">
                </button>
                
                <div class="fila-productos">
                    <?php foreach ($productosPorCategoria[$id] as $producto) { ?>
                    <article class="producto">
                        <a href="?controller=carta&action=show&id=<?=(int) $producto->getId()?>">
                            <img src="<?= htmlspecialchars($producto->getImagen(), ENT_QUOTES, 'UTF-8') ?>"
                              alt="<?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?>">
                        </a>
                        <h3><?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></p>
                        
                        <div class="precioBoton">
                            <button type="button">Añadir al carrito</button>
                            <p><?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €</p>
                        </div>
                    </article>
                    <?php } ?>
                </div>
                <button class="flecha flecha-der" type="button" aria-label="Siguiente">
                    <img src="img/icons/dFlecha.svg" alt="">
                </button>
            </div>
        </section>
    <?php } ?>
</main>

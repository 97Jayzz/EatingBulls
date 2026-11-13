<main class="main-detalle"> 
    <section class="section-detalle">
        <!--Imagen banner supongo q irá aqui, ha de tener gradiente -->
        <div class="banner">
            <img src="<?= htmlspecialchars($producto->getImagen(), ENT_QUOTES, 'UTF-8') ?>"
            alt="<?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?>">
        </div>
        
        <!--Parte izquierda -->
        <div class="col-izq">
            <div class="fila-dorsal">
                <h1><?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?></h1>
                <!-- Imagen dorsal ejemplo en caso de que tenga -->
            </div>
            <!--imagen 2 de la hambruguesa sale diferente en la de abajo no banner-->
            <img class="img-detalle" src="<?= htmlspecialchars($producto->getImagen(), ENT_QUOTES, 'UTF-8') ?>"
            alt="<?= htmlspecialchars($producto->getNombre(), ENT_QUOTES, 'UTF-8') ?>">
            
        </div>
        
        <!--Parte derecha -->
        <div class="col-der">
            <h3>Ingredientes:</h3>
            <!-- En caso de que si ponga los dos botones -->
            
            <p><?= htmlspecialchars($producto->getDescripcion(), ENT_QUOTES, 'UTF-8') ?></p>
            <!-- CAJA -->
            <div class="caja-extras">
                
                <h2>Extras</h2>
                
                <div class="grid-extras">
                    <!--extras puestos en un flex tipo grid supongo con estilo checkbox o algo tipo formulario
                    lo tengo que pensar -->
                </div>
            </div>
            
            <div>
                <p>TOTAL:
                    <?= number_format((float) $producto->getPrecio(), 2, ',', '.') ?> €
                </p>
                <button type="button"> Añadir al carrito</button>
            </div>
        </div>
    </section>
</main>
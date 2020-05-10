<?php
    require 'libraries/productos.php';
    $productos = getProductos();
?>
<section class="row col justify-content-center">
    <div class="col-md-12 mt-3">
        <h2>Juegos</h2>
        <p class="lead">Los más jugados del mundo</p>
    </div>
    <div class="col-md-9 col-12 d-flex justify-content-between py-4 flex-wrap align-items-center">
        <?php 
            foreach($productos as $i => $producto): 
        ?>
        <a href="index.php?s=producto-leer&id=<?= $i;?>" class="col-md-4 dest-past">
            <article>
                <div class="prod">
                    <picture class="noticias-item_imagen">
                            <source srcset="<?= $producto['img'];?>" media="all and (min-width: 46.875em)">
                            <img src="<?= $producto['img'];?>" alt="<?= $producto['alt'];?>">
                    </picture>
                </div>
                <div class="box_data nonavailable d-flex justify-content-between align-items-center py-2">
                    <p class="mb-0"><?= $producto['titulo-corto'];?></p>
                    <p class="mb-0">$ <?= $producto['precio'];?></p>
                </div>
            </article>
        </a>
        <?php
        //    }
        endforeach;
        ?>
    </div>
</section>
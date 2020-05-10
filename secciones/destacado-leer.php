<?php
require 'libraries/productos.php';

$destacados = getDestacados();

$iDestacado = $_GET['id'];
//echo "La noticia pedida es: " . $iNoticia . "<br>";

$destacado = $destacados[$iDestacado];

?>
<section class="col">
    <div class="cat-img">
        <img src="img/ps4header.jpg" alt="PlayStation 4" class="col-12">
    </div>
    <article class="col-12 d-flex flex-wrap align-items-center justify-content-between py-4 text-center">
        <h2 class="col-12"><?= $destacado['titulo'];?></h2>
        <picture class="col-12 col-md-6">
            <source srcset="<?= $destacado['img'];?>" media="all and (min-width: 46.875em)">
            <img src="<?= $destacado['img'];?>" alt="<?= $destacado['alt'];?>" class="col-md-6 col-8 mb-3">
        </picture>
        <div class="col-12 col-md-6 text-left">
            <p>Genero: <?= $destacado['genero'];?></p>
            <p>Precio: $ <?= $destacado['precio'];?></p>
            <p>Descripción: <?= $destacado['descripcion'];?></p>
        </div>
    </article>
    <div class="col text-center mb-4">
        <a href="index.php?s=home">
            <button type="button" class="btn btn-outline-primary">Volver Homer</button>
        </a>
    </div>
</section>

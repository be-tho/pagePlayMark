<?php
require 'libraries/productos.php';

$productos = getProductos();

$iProducto = $_GET['id'];
//echo "La noticia pedida es: " . $iNoticia . "<br>";
$producto = $productos[$iProducto];

//ESTO ME MUESTRA EL OBJETO ENTERO
// echo "<pre>";
// print_r($productos);
// echo "</pre>";

?>
<div class="row cat-img mb-4" >
    <img src="img/header2.png" alt="Club plus" class="col-12">
</div>
<section class="col pb-4">
    <article class="col-12 d-flex flex-wrap align-items-center justify-content-between text-center">
        <h2 class="col-12 mb-4"><?= $producto['titulo'];?></h2>
        <picture class="col-12 col-md-6 mb-3">
            <source srcset="<?= $producto['img'];?>" media="all and (min-width: 46.875em)">
            <img src="<?= $producto['img'];?>" alt="<?= $producto['alt'];?>" class="col-md-6 col-8">
        </picture>
        <div class="col-12 col-md-6 text-left">
            <p>Genero: <?= $producto['genero'];?></p>
            <p>Precio: $ <?= $producto['precio'];?></p>
            <p>Descripción: <?= $producto['descripcion'];?></p>
        </div>
    </article>
    <div class="col text-center my-4">
        <a href="index.php?s=home">
            <button type="button" class="btn btn-outline-primary">Volver Homer</button>
        </a>
    </div>
</section>
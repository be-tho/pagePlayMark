<?php

require 'data/bootstrap.php';
require 'data/routes.php';

$seccion = $_GET['s'] ?? "home";
if(!isset($secciones[$seccion])) {
    $seccion = 404;

}
if($enviromentState === ENVIROMENT_MANTAINANCE) {
    $seccion = "mantenimiento";
}
// Obtenemos el title de esta sección.
$title = $secciones[$seccion]['title'];
?>
<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>
    <link rel="shortcut icon" href="img/icono.ico" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header class="container fondo3">
        <a href="index.php?s=home"><h1 id="logo">Playmark</h1></a>
        <div class="row">
            <nav class="col navbar navbar-expand-md navbar-dark bg-blue-dark">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php?s=home">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="index.php?s=productos">Productos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="index.php?s=contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="container">
        <section class="row justify-content-center" style="background: #f7f7f7;">
            <?php
        require 'secciones/' .  $seccion . '.php';
        ?>
        </section>
    </main>
    <footer class="container">
        <div class="footer-top row">
            <div class="container cont-footer">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segmento-uno">
                        <h2>Play <span class="c-mark">Mark</span></h2>
                        <p>Somo una Tienda Online con los mejores precios del mercado, hacemos reservas y tenemos un sistema de intercambio por los juegos que ya no usas.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segmento-dos">
                        <h2>Menú</h2>
                        <ul>
                            <li><a href="index.php?s=home">Home</a></li>
                            <li><a href="index.php?s=productos">Productos</a></li>
                            <li><a href="index.php?s=contacto">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 segmento-tres">
                        <h2>Seguinos</h2>
                        <p>Seguime en todas nuestras redes sociales.</p>
                        <a href="https://www.facebook.com/LAlopezAL" class="facebook" target="_blank"></a>
                        <a href="https://twitter.com/login?lang=es" class="twitter" target="_blank"></a>
                        <a href="https://www.instagram.com/?hl=es-la" class="instagram" target="_blank"></a>
                    </div>   
                    <div class="col-md-3 col-sm-6 col-xs-12 segmento-cuatro">
                        <h2>Más Ofertas</h2>
                        <p>Suscribete para recibir más ofertas y descuentos.</p>
                        <form action="#" class="cont-form">
                            <input type="email">
                            <input type="submit" value="Subscribete">
                        </form>
                    </div>
                    <div class="col-md-12 color-light datos">
                        <h2>Datos del alumno</h2>
                        <ul class="d-alum">
                            <li class="col-md-4">Nombre: Albert Villarroel</li>
                            <li class="col-md-4">Profesor: Santiago Gallino</li>
                            <li class="col-md-4">Materia: Programación II</li>
                            <li class="col-md-4">Comisión: 3A</li>
                            <li class="col-md-4">Turno: Noche</li>
                            <li class="col-md-4">TP: N°1 Ecommerce</li>    
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/picturefill.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/animaScroll.js"></script>

    <script>
        $('.nav-item').on('click', function() {
            $(".navbar-collapse").collapse("hide");
        })
    </script>
</body>
</html>
<?php
    require 'libraries/productos.php';
    $destacados = getDestacados();
?>

<!-- Slide Home-->
<aside>
    <div>
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <figure class="carousel-item active">
                    <img class="d-block w-100" src="img/slider/slide1.jpg" alt="Call of Duty Modern Warfare">
                </figure>
                <figure class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slide2.jpg" alt="Valorant">
                </figure>
                <figure class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slide3.jpg" alt="Pokemon Mystery Dungeon">
                </figure>
                <figure class="carousel-item">
                    <img class="d-block w-100" src="img/slider/slide4.jpg" alt="Dragon ball Z Kakarot">
                </figure>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</aside>
<section>
    <div class="col d-flex justify-content-between py-4 flex-wrap">
        <div class="col-md-2">
            <h2>Destacados<span>Gaming</span></h2>
        </div>
        <div class="col-md-9 col-12 d-flex justify-content-between py-4 flex-wrap">
            <?php 
                foreach($destacados as $i => $destacado): 
            ?>
            <a href="index.php?s=destacado-leer&id=<?= $i;?>" class="col-sm col-6 dest-past">
                <article>
                    <div class="prod">
                        <picture class="noticias-item_imagen">
                                <source srcset="<?= $destacado['img'];?>" media="all and (min-width: 46.875em)">
                                <img src="<?= $destacado['img'];?>" alt="<?= $destacado['alt'];?>">
                        </picture>
                    </div>
                    <div class="box_data nonavailable d-flex justify-content-between align-items-center py-2">
                        <p class="mb-0"><?= $destacado['titulo-corto'];?></p>
                        <p class="mb-0">$ <?= $destacado['precio'];?></p>
                    </div>
                </article>
            </a>
            <?php
            //    }
            endforeach;
            ?>
        </div>
    </div>
</section>
<section>
    <div class="col d-flex mx-auto justify-content-between">
        <div class="col varios px-0"><a href="#"><img src="img/varios/ps2019-80.jpg" alt=""></a></div>
        <div class="col varios px-0"><a href="#"><img src="img/varios/funko2019b.jpg" alt=""></a></div>
        <div class="col varios px-0"><a href="#"><img src="img/varios/starwars2019-80.jpg" alt=""></a></div>
        <div class="col varios px-0"><a href="#"><img src="img/varios/switch2019b.jpg" alt=""></a></div>
        <div class="col varios px-0"><a href="#"><img src="img/varios/xiaomi-2019.jpg" alt=""></a></div>
    </div>
</section>
<section class="col-12 wrap-cat py-5">
    <div class="col-12 pb-4">
        <h2 class="co-mark">¿Qué estás buscando?</h2>
    </div>
    <div class="col-md-12 cont-cat">
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.43px" height="40.51px" viewBox="0 0 31.43 40.51" style="enable-background:new 0 0 31.43 40.51;" xml:space="preserve"><g><g><path class="arma-item-fill" d="M28.04,40.51H1.18C0.53,40.51,0,39.99,0,39.33V3.38C0,2.73,0.53,2.2,1.18,2.2h26.86c0.65,0,1.18,0.53,1.18,1.18v35.95C29.22,39.99,28.69,40.51,28.04,40.51z M1.57,38.94h26.07V3.77H1.57V38.94z"></path></g><g><path class="arma-item-fill" d="M28.87,40.19l-1.05-1.17l2-1.8c0.02-0.02,0.04-0.07,0.04-0.1V1.57H3.41C3.38,1.58,3.33,1.6,3.31,1.62l-1.82,2L0.33,2.56l1.82-2.01C2.44,0.23,2.95,0,3.39,0h26.86c0.65,0,1.18,0.53,1.18,1.18v35.95c0,0.44-0.23,0.95-0.55,1.24L28.87,40.19z"></path></g><g><g><polygon class="arma-item-fill" points="4.38,11.17 2.81,11.17 2.81,9.35 7.1,4.67 11.02,4.67 11.02,6.25 7.79,6.25 4.38,9.96 "></polygon></g><g><rect x="2.77" y="5.05" class="arma-item-fill" width="1.64" height="1.57"></rect></g></g><g><rect x="24.99" y="5.05" class="arma-item-fill" width="1.64" height="1.57"></rect></g><g><polygon class="arma-item-fill" points="26.59,11.17 25.02,11.17 25.02,9.99 21.59,6.25 20.1,6.25 20.1,4.67 22.28,4.67 26.59,9.38 "></polygon></g><g><path class="arma-item-fill" d="M16.6,27.93l-0.28-1.55c4.57-0.82,7.88-4.79,7.88-9.44c0-5.29-4.3-9.59-9.59-9.59c-5.29,0-9.59,4.3-9.59,9.59c0,3.52,1.92,6.75,5.02,8.43l-0.75,1.38c-3.6-1.96-5.84-5.72-5.84-9.82c0-6.16,5.01-11.17,11.17-11.17s11.17,5.01,11.17,11.17C25.77,22.36,21.92,26.98,16.6,27.93z"></path></g><g><path class="arma-item-fill" d="M14.61,19.94c-1.65,0-3-1.35-3-3c0-1.65,1.35-3,3-3c1.65,0,3,1.35,3,3C17.61,18.6,16.26,19.94,14.61,19.94z M14.61,15.52c-0.79,0-1.43,0.64-1.43,1.43s0.64,1.43,1.43,1.43c0.79,0,1.43-0.64,1.43-1.43S15.4,15.52,14.61,15.52z"></path></g><g><polygon class="arma-item-fill" points="26.63,36.16 13.82,36.16 13.82,33.58 8.63,30.04 2.18,30.04 2.18,28.46 9.11,28.46 15.4,32.75 15.4,34.59 26.63,34.59 "></polygon></g><g><rect x="2.77" y="31.53" class="arma-item-fill" width="1.64" height="1.57"></rect></g><g><rect x="2.77" y="36.29" class="arma-item-fill" width="1.64" height="1.57"></rect></g><g><path class="arma-item-fill" d="M8.46,36.51c-1.37,0-2.49-1.12-2.49-2.49c0-1.37,1.12-2.49,2.49-2.49c1.37,0,2.49,1.12,2.49,2.49C10.95,35.39,9.83,36.51,8.46,36.51z M8.46,33.1c-0.51,0-0.92,0.41-0.92,0.92c0,0.51,0.41,0.92,0.92,0.92c0.51,0,0.92-0.41,0.92-0.92C9.38,33.51,8.96,33.1,8.46,33.1z"></path></g><g><path class="arma-item-fill" d="M13.61,32.04l-1.49-0.5l2.92-8.66c0.02-0.05,0.02-0.09,0.03-0.13l-0.44-0.27c-0.03,0.02-0.07,0.05-0.1,0.08L7.5,29.76l-1.13-1.1l7.02-7.19c0.57-0.58,1.35-0.76,1.89-0.43l0.77,0.47c0.54,0.33,0.74,1.1,0.48,1.87L13.61,32.04z"></path></g><g><polygon class="arma-item-fill" points="19.88,35.37 18.31,35.37 18.31,29.29 21.27,29.29 21.27,27.83 25.5,27.83 25.5,35.12 23.92,35.12 23.92,29.41 22.85,29.41 22.85,30.86 19.88,30.86 "></polygon></g><g><rect x="21.36" y="31.81" class="arma-item-fill" width="3.62" height="1.57"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Discos Rigidos</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="34.54px" viewBox="0 0 46 34.54" style="enable-background:new 0 0 46 34.54;" xml:space="preserve"><defs></defs><g><g><polygon class="arma-item-fill" points="13.95,32.18 5.26,32.18 5.26,30.4 13.65,30.4 16.63,28.11 39.06,28.11 41.85,26.03 41.85,8.59 39.06,6.51 16.63,6.51 13.65,4.22 5.26,4.22 5.26,2.44 14.25,2.44 17.23,4.74 39.65,4.74 43.62,7.7 43.62,26.92 39.65,29.88 17.23,29.88 14.25,32.18 "></polygon></g><g><path class="arma-item-fill" d="M15.37,26.52c-5.08,0-9.21-4.13-9.21-9.21c0-5.08,4.13-9.21,9.21-9.21c5.08,0,9.21,4.13,9.21,9.21C24.58,22.39,20.45,26.52,15.37,26.52z M15.37,9.87c-4.1,0-7.44,3.34-7.44,7.44c0,4.1,3.34,7.44,7.44,7.44c4.1,0,7.44-3.34,7.44-7.44C22.8,13.21,19.47,9.87,15.37,9.87z"></path></g><g><path class="arma-item-fill" d="M15.37,20.83c-1.94,0-3.52-1.58-3.52-3.52c0-1.94,1.58-3.52,3.52-3.52c1.94,0,3.52,1.58,3.52,3.52C18.89,19.25,17.31,20.83,15.37,20.83z M15.37,15.56c-0.96,0-1.75,0.78-1.75,1.75c0,0.96,0.78,1.75,1.75,1.75c0.96,0,1.75-0.78,1.75-1.75C17.11,16.35,16.33,15.56,15.37,15.56z"></path></g><g><rect x="11.41" y="11.67" transform="matrix(0.5534 -0.8329 0.8329 0.5534 -3.6045 18.4032)" class="arma-item-fill" width="7.9" height="1.78"></rect></g><g><rect x="18.66" y="11.1" transform="matrix(0.0927 -0.9957 0.9957 0.0927 2.7451 33.118)" class="arma-item-fill" width="1.78" height="7.9"></rect></g><g><rect x="18.45" y="15.97" transform="matrix(0.9207 -0.3902 0.3902 0.9207 -6.2391 9.1225)" class="arma-item-fill" width="1.78" height="7.9"></rect></g><g><rect x="11" y="21.15" transform="matrix(0.6259 -0.7799 0.7799 0.6259 -11.5951 19.903)" class="arma-item-fill" width="7.9" height="1.78"></rect></g><g><rect x="10.12" y="15.23" transform="matrix(0.1818 -0.9833 0.9833 0.1818 -9.858 26.5188)" class="arma-item-fill" width="1.78" height="7.9"></rect></g><g><rect x="10.76" y="10.41" transform="matrix(0.9521 -0.3059 0.3059 0.9521 -3.8325 4.2518)" class="arma-item-fill" width="1.78" height="7.9"></rect></g><g><g><polygon class="arma-item-fill" points="42.73,12.08 36.43,12.08 34.9,10.11 24.23,10.11 24.23,8.33 35.77,8.33 37.3,10.3 42.73,10.3 "></polygon></g><g><rect x="26.86" y="13.04" class="arma-item-fill" width="2.67" height="1.78"></rect></g><g><polygon class="arma-item-fill" points="42.72,16.82 39.06,16.77 37.53,14.81 31.82,14.81 31.82,13.04 38.4,13.04 39.94,15.01 42.75,15.05 "></polygon></g></g><g><g><polygon class="arma-item-fill" points="35.77,26.29 24.23,26.29 24.23,24.51 34.9,24.51 36.43,22.54 42.73,22.54 42.73,24.32 37.3,24.32 "></polygon></g><g><rect x="26.86" y="19.81" class="arma-item-fill" width="2.67" height="1.78"></rect></g><g><polygon class="arma-item-fill" points="38.4,21.58 31.82,21.58 31.82,19.81 37.53,19.81 39.06,17.85 42.72,17.8 42.75,19.57 39.94,19.61 "></polygon></g></g><g><rect x="18.68" y="29.18" class="arma-item-fill" width="4.35" height="1.78"></rect></g><g><rect x="33.81" y="29.56" class="arma-item-fill" width="2.29" height="1.78"></rect></g><g><rect x="19.33" y="3.36" class="arma-item-fill" width="16.65" height="1.78"></rect></g><g><polygon class="arma-item-fill" points="43.28,26.1 42.19,24.7 44.22,23.12 44.22,11.5 42.19,9.92 43.28,8.52 46,10.63 46,23.99 "></polygon></g><g><path class="arma-item-fill" d="M4.42,34.54H1.3V0H4.1l2.05,1.65v31.43L4.42,34.54z M3.08,32.77h0.69l0.61-0.51V2.5l-0.9-0.72h-0.4V32.77z"></path></g><g><polygon class="arma-item-fill" points="2.19,32.18 0,32.18 0,26.34 1.94,25.78 2.44,27.48 1.78,27.68 1.78,30.4 2.19,30.4 "></polygon></g><g><rect y="18.47" class="arma-item-fill" width="1.78" height="3.57"></rect></g><g><rect y="13.27" class="arma-item-fill" width="1.78" height="3.57"></rect></g><g><rect y="8.07" class="arma-item-fill" width="1.78" height="3.57"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Placa de Video</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38px" height="40.85px" viewBox="0 0 38 40.85" style="enable-background:new 0 0 38 40.85;" xml:space="preserve"><defs></defs><g><g><path class="arma-item-fill" d="M12.51,40.85l-5.92,0c-0.1,0-2.48-0.1-4.32-2.19c-1.65-1.88-2.32-4.7-1.97-8.38c0.67-7.11,0.32-9.45,0.08-10.99c-0.08-0.53-0.15-0.99-0.17-1.52c-0.01-0.24-0.05-0.54-0.08-0.86c-0.17-1.46-0.44-3.66,1.09-5.42c1.46-1.68,4.17-2.53,8.3-2.61l0.02,0l0.02,0c4.13,0.08,6.85,0.93,8.31,2.61c1.54,1.76,1.28,3.97,1.11,5.43c-0.04,0.32-0.07,0.61-0.08,0.85c-0.02,0.53-0.09,0.99-0.17,1.52c-0.24,1.55-0.59,3.89,0.08,10.99c0.35,3.68-0.31,6.5-1.97,8.38c-1.84,2.09-4.22,2.19-4.32,2.19L12.51,40.85z M6.64,39.23h5.84c0.17-0.01,1.84-0.14,3.16-1.66c1.33-1.53,1.85-3.92,1.55-7.12c-0.69-7.31-0.32-9.77-0.07-11.39c0.08-0.5,0.14-0.9,0.15-1.34c0.01-0.3,0.05-0.63,0.09-0.97c0.15-1.31,0.34-2.95-0.72-4.17c-1.13-1.29-3.52-1.99-7.1-2.06c-3.58,0.07-5.96,0.76-7.08,2.05c-1.06,1.21-0.86,2.85-0.71,4.16c0.04,0.35,0.08,0.69,0.09,0.99c0.02,0.44,0.08,0.84,0.15,1.34c0.25,1.63,0.62,4.09-0.07,11.39c-0.3,3.2,0.22,5.59,1.55,7.12C4.8,39.08,6.47,39.22,6.64,39.23z"></path></g><g><rect x="8.73" y="9.7" class="arma-item-fill" width="1.63" height="3.13"></rect></g><g><path class="arma-item-fill" d="M9.59,21.94h-0.1c-1.35,0-2.44-1.1-2.44-2.44v-5.04c0-1.35,1.1-2.44,2.44-2.44h0.1c1.35,0,2.44,1.1,2.44,2.44v5.04C12.04,20.85,10.94,21.94,9.59,21.94z M9.49,13.64c-0.45,0-0.81,0.37-0.81,0.81v5.04c0,0.45,0.37,0.81,0.81,0.81h0.1c0.45,0,0.81-0.37,0.81-0.81v-5.04c0-0.45-0.37-0.81-0.81-0.81H9.49z"></path></g><g><rect x="6.71" y="22.89" transform="matrix(2.687490e-03 -1 1 2.687490e-03 -14.1853 33.1913)" class="arma-item-fill" width="5.67" height="1.63"></rect></g><g><path class="arma-item-fill" d="M11.67,10.15l-0.72-2.48H8.13l-0.72,2.48L5.85,9.69l0.78-2.67c0.16-0.57,0.71-0.98,1.3-0.98h3.22c0.59,0,1.14,0.41,1.3,0.98l0.78,2.67L11.67,10.15z"></path></g><g><rect x="5.38" y="35.09" class="arma-item-fill" width="1.63" height="1.63"></rect></g><g><rect x="8.73" y="35.09" class="arma-item-fill" width="1.63" height="1.63"></rect></g><g><rect x="12.07" y="35.09" class="arma-item-fill" width="1.63" height="1.63"></rect></g><g><rect x="33.32" y="18.72" class="arma-item-fill" width="1.63" height="3.41"></rect></g><g><path class="arma-item-fill" d="M31.08,31.16h-2.65c-2.13,0-3.87-1.74-3.87-3.87V3.87c0-1.24-1-2.24-2.24-2.24h-9.73c-1.24,0-2.24,0.99-2.24,2.21v3.02H8.73V3.84C8.73,1.72,10.46,0,12.59,0h9.73c2.13,0,3.87,1.74,3.87,3.87v23.42c0,1.24,1,2.24,2.24,2.24h2.65c1.24,0,2.24-1,2.24-2.24v-2.1h1.63v2.1C34.95,29.42,33.21,31.16,31.08,31.16z"></path></g><g><g><path class="arma-item-fill" d="M35.35,19.24h-2.44c-1.46,0-2.65-1.19-2.65-2.65V11.7H38v4.89C38,18.05,36.81,19.24,35.35,19.24z M31.89,13.33v3.26c0,0.56,0.46,1.02,1.02,1.02h2.44c0.56,0,1.02-0.46,1.02-1.02v-3.26H31.89z"></path></g><g><rect x="31.08" y="14.65" class="arma-item-fill" width="3.05" height="1.63"></rect></g><g><path class="arma-item-fill" d="M37.12,12.52h-1.63V8.05h-2.44v4.46h-1.63V7.44c0-0.56,0.48-1.02,1.06-1.02h3.57c0.59,0,1.06,0.46,1.06,1.02V12.52z"></path></g></g></g></svg>
                    </div>
                    <div>
                        <p>Mouses</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="43.43px" height="42.85px" viewBox="0 0 43.43 42.85" style="enable-background:new 0 0 43.43 42.85;" xml:space="preserve"><style type="text/css">.arma-item-fill{fill:#474747;}</style><defs></defs><g><g><path class="arma-item-fill" d="M41.03,42.85h-9.69v-0.87c0-0.62-0.58-0.82-1.09-0.88v1.75H2.4c-1.33,0-2.4-1.08-2.4-2.4V2.4C0,1.08,1.08,0,2.4,0h38.62c1.33,0,2.4,1.08,2.4,2.4v38.04C43.43,41.77,42.35,42.85,41.03,42.85z M32.93,41.1h8.1c0.36,0,0.66-0.29,0.66-0.66V2.4c0-0.36-0.29-0.66-0.66-0.66H2.4c-0.36,0-0.66,0.29-0.66,0.66v38.04c0,0.36,0.29,0.66,0.66,0.66h26.09v-1.68l0.8-0.07c0.19-0.02,0.38-0.03,0.57-0.03C31.58,39.33,32.57,40.13,32.93,41.1z"></path></g><g><g><rect x="5.17" y="9.91" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="5.17" y="14.06" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="5.17" y="18.22" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="5.17" y="22.37" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="5.17" y="26.52" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="5.17" y="30.68" class="arma-item-fill" width="3.46" height="1.75"></rect></g></g><g><g><rect x="34.8" y="9.91" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="34.8" y="14.06" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="34.8" y="18.22" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="34.8" y="22.37" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="34.8" y="26.52" class="arma-item-fill" width="3.46" height="1.75"></rect></g><g><rect x="34.8" y="30.68" class="arma-item-fill" width="3.46" height="1.75"></rect></g></g><g><path class="arma-item-fill" d="M18.64,26.44c-2.09-0.05-3.58-0.84-4.11-2.17c-0.48-1.2-0.09-2.6,1.1-3.96c1.05-1.2,2.63-2.26,4.46-2.99l0.65,1.63c-1.57,0.62-2.92,1.52-3.78,2.51c-0.72,0.83-1.01,1.62-0.79,2.17c0.25,0.63,1.2,1.03,2.53,1.06L18.64,26.44z"></path></g><g><path class="arma-item-fill" d="M23.34,25.52L22.7,23.9c3.18-1.26,5.04-3.51,4.57-4.68c-0.25-0.63-1.19-1.03-2.52-1.06l0.04-1.75c2.08,0.05,3.58,0.84,4.11,2.17C29.81,20.87,27.37,23.92,23.34,25.52z"></path></g><g><g><path class="arma-item-fill" d="M35.67,35.38H29.6l-0.28-1.2h-1.67l-0.28,1.2H7.76V7.47h6.07l0.28,1.2h1.67l0.28-1.2h19.62V35.38z M31,33.63h2.93V9.22H17.44l-0.28,1.2h-4.45l-0.28-1.2H9.51v24.41h16.48l0.28-1.2h4.45L31,33.63z"></path></g></g><g><rect x="11.22" y="34.5" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="14.34" y="34.5" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="17.46" y="34.5" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="20.58" y="34.5" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="31.19" y="6.41" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="28.35" y="6.41" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="25.5" y="6.41" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="22.66" y="6.41" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="19.82" y="6.41" class="arma-item-fill" width="1.75" height="1.93"></rect></g><g><rect x="23.54" y="10.78" class="arma-item-fill" width="8.53" height="1.75"></rect></g><g><rect x="19.02" y="10.78" class="arma-item-fill" width="2.43" height="1.75"></rect></g><g><rect x="12.1" y="29.88" class="arma-item-fill" width="2.62" height="1.75"></rect></g><g><rect x="17.61" y="29.88" class="arma-item-fill" width="7.16" height="1.75"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Procesadores</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="38px" height="41.59px" viewBox="0 0 38 41.59" style="enable-background:new 0 0 38 41.59;" xml:space="preserve"><defs></defs><g><g><path class="arma-item-fill" d="M24.4,5.62H13.38c-0.31,0-0.67-0.13-0.9-0.34L11,3.97c-0.26-0.23-0.43-0.6-0.43-0.95V1.01c0-0.56,0.45-1.01,1.01-1.01H26.2c0.56,0,1.01,0.45,1.01,1.01v2.01c0,0.35-0.17,0.72-0.43,0.95L25.3,5.28C25.07,5.49,24.71,5.62,24.4,5.62z M13.47,4.02h10.84l1.3-1.15V1.6H12.17v1.27L13.47,4.02z"></path></g><g><g><path class="arma-item-fill" d="M2.54,16.32h-1.6l0-1.98C1.56,8.15,4.3,4.83,6.49,3.15c2.4-1.85,4.67-2.21,4.76-2.22l0.24,1.58l-0.12-0.79l0.12,0.79c-0.32,0.05-7.88,1.35-8.95,11.94V16.32z"></path></g><g><path class="arma-item-fill" d="M5.79,15.55l-1.6-0.01c0.04-5.45,2.26-8.42,4.12-9.95c2.03-1.68,4.07-2.04,4.15-2.05l0.27,1.58L12.6,4.32l0.14,0.79C12.45,5.15,5.85,6.43,5.79,15.55z"></path></g><g><path class="arma-item-fill" d="M7.85,34.17c-0.83,0-1.53-0.62-1.63-1.45L4.6,19.63c-0.11-0.9,0.53-1.72,1.43-1.83l3.43-0.42c0.91-0.11,1.73,0.54,1.83,1.43l1.61,13.09c0.05,0.44-0.07,0.87-0.34,1.21c-0.27,0.35-0.66,0.57-1.1,0.62l-3.43,0.42C7.98,34.16,7.91,34.17,7.85,34.17z M9.67,18.96l-3.44,0.42c-0.02,0-0.04,0.03-0.04,0.05L7.8,32.53c0,0.03,0.03,0.04,0.05,0.04l0.01,0l3.43-0.42c0,0,0.02,0,0.03-0.02c0.01-0.02,0.01-0.03,0.01-0.03L9.71,19.01C9.71,18.98,9.68,18.96,9.67,18.96z"></path></g><g><path class="arma-item-fill" d="M6.53,32.69l-3.34-1.95c-0.31-0.18-0.56-0.55-0.6-0.91l-0.53-4.33l-0.76-0.73c-0.22-0.21-0.39-0.54-0.42-0.84l-0.86-7c-0.07-0.55,0.33-1.06,0.88-1.13l4.9-0.6c0.47-0.06,0.94,0.21,1.13,0.64l1,2.3l-1.47,0.64L5.6,16.84l-3.93,0.48l0.78,6.34l0.76,0.73c0.22,0.21,0.39,0.54,0.42,0.84l0.52,4.23l3.18,1.85L6.53,32.69z"></path></g></g><g><g><path class="arma-item-fill" d="M37.06,16.32h-1.6v-1.86C34.39,3.81,26.59,2.52,26.51,2.51l0.24-1.58c0.1,0.01,2.36,0.37,4.76,2.22c2.19,1.69,4.93,5,5.54,11.19l0,0.08V16.32z"></path></g><g><path class="arma-item-fill" d="M32.21,15.55C32.15,6.38,25.34,5.12,25.27,5.1l0.27-1.58c0.09,0.01,2.12,0.37,4.15,2.05c1.86,1.53,4.08,4.51,4.12,9.95L32.21,15.55z"></path></g><g><path class="arma-item-fill" d="M30.15,34.17C30.15,34.17,30.15,34.17,30.15,34.17c-0.07,0-0.13,0-0.2-0.01l-3.43-0.42c-0.44-0.05-0.82-0.27-1.1-0.62c-0.27-0.35-0.39-0.78-0.34-1.21l1.61-13.09c0.11-0.89,0.92-1.55,1.83-1.43l3.43,0.42c0.9,0.11,1.54,0.93,1.43,1.83l-1.61,13.09C31.69,33.55,30.98,34.17,30.15,34.17z M28.34,18.97c-0.02,0-0.05,0.02-0.05,0.04l-1.61,13.09c0,0,0,0.02,0.01,0.03c0.01,0.02,0.03,0.02,0.03,0.02l3.44,0.42l0,0c0.02,0,0.04-0.02,0.05-0.04l1.61-13.09c0-0.02-0.02-0.05-0.04-0.05L28.34,18.97C28.34,18.97,28.34,18.97,28.34,18.97z"></path></g><g><path class="arma-item-fill" d="M31.47,32.69l-0.81-1.38l3.18-1.85l0.52-4.23c0.04-0.3,0.2-0.63,0.42-0.84l0.76-0.73l0.78-6.34l-3.93-0.48l-0.85,1.95l-1.47-0.64l1-2.3c0.19-0.43,0.66-0.7,1.13-0.64l4.9,0.6c0.55,0.07,0.95,0.57,0.88,1.13l-0.86,7c-0.04,0.3-0.2,0.63-0.42,0.84l-0.76,0.73l-0.53,4.33c-0.04,0.36-0.29,0.73-0.6,0.91L31.47,32.69z"></path></g></g><g><path class="arma-item-fill" d="M28.85,40.14h-5.88v-1.6h5.88c0.22,0,0.52-0.21,0.6-0.42l2.82-7.54l1.5,0.56l-2.82,7.54C30.63,39.51,29.73,40.14,28.85,40.14z"></path></g><g><path class="arma-item-fill" d="M21.7,41.59h-3.24c-1.14,0-2.07-0.93-2.07-2.07v-0.35c0-1.14,0.93-2.07,2.07-2.07h3.24c1.14,0,2.07,0.93,2.07,2.07v0.35C23.77,40.66,22.84,41.59,21.7,41.59z M18.46,38.69c-0.25,0-0.47,0.21-0.47,0.47v0.35c0,0.25,0.21,0.47,0.47,0.47h3.24c0.25,0,0.47-0.21,0.47-0.47v-0.35c0-0.25-0.21-0.47-0.47-0.47H18.46z"></path></g></g></svg>
                    </div>
                    <div>
                        <p>Auriculares</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-12 cont-cat">
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="20.6px" viewBox="0 0 50 20.6" style="enable-background:new 0 0 50 20.6;" xml:space="preserve"><defs></defs><g><g><path class="arma-item-fill" d="M50,20.6H25.26v-1.06c0-0.15-0.12-0.26-0.26-0.26c-0.15,0-0.26,0.12-0.26,0.26v1.06H0v-6.55h10.97v2.13H2.13v2.29h20.74c0.39-0.79,1.2-1.33,2.14-1.33c0.94,0,1.75,0.54,2.14,1.33h20.74v-2.29H14.46v-2.13H50V20.6z"></path></g><g><polygon class="arma-item-fill" points="50,15.21 47.87,15.21 47.87,10.79 46.81,10.79 46.81,5.95 47.87,5.95 47.87,2.13 29.13,2.13 29.13,0 50,0 50,8.07 48.94,8.07 48.94,8.66 50,8.66 "></polygon></g><g><polygon class="arma-item-fill" points="2.13,15.21 0,15.21 0,8.66 1.06,8.66 1.06,8.07 0,8.07 0,0 20.87,0 20.87,2.13 2.13,2.13 2.13,5.95 3.19,5.95 3.19,10.79 2.13,10.79 "></polygon></g><g><path class="arma-item-fill" d="M12.82,12.73H7.12V3.63h5.71V12.73z M9.24,10.61h1.45V5.75H9.24V10.61z"></path></g><g><path class="arma-item-fill" d="M22.73,12.73h-5.71V3.63h5.71V12.73z M19.15,10.61h1.45V5.75h-1.45V10.61z"></path></g><g><path class="arma-item-fill" d="M32.63,12.73h-5.71V3.63h5.71V12.73z M29.05,10.61h1.45V5.75h-1.45V10.61z"></path></g><g><path class="arma-item-fill" d="M42.53,12.73h-5.71V3.63h5.71V12.73z M38.95,10.61h1.45V5.75h-1.45V10.61z"></path></g><g><rect x="22.68" class="arma-item-fill" width="4.95" height="2.13"></rect></g><g><rect x="43.99" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="40.41" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="36.83" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="33.25" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="29.67" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="18.39" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="14.81" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="11.23" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="7.65" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g><g><rect x="4.07" y="17.33" class="arma-item-fill" width="2.13" height="2.21"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Memoria Ram</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51.35px" height="43.64px" viewBox="0 0 51.35 43.64" style="enable-background:new 0 0 51.35 43.64;" xml:space="preserve">
                        <style type="text/css">
                        </style>
                        <defs>
                        </defs>
                        <g>
                            <g>
                                <path class="arma-item-fill" d="M49.27,34.65H2.08C0.93,34.65,0,33.71,0,32.57V2.08C0,0.93,0.93,0,2.08,0h47.19c1.15,0,2.08,0.93,2.08,2.08
                                    v30.49C51.35,33.71,50.42,34.65,49.27,34.65z M2.08,2C2.04,2,2,2.04,2,2.08v30.49c0,0.04,0.04,0.08,0.08,0.08h47.19
                                    c0.04,0,0.08-0.04,0.08-0.08V2.08c0-0.04-0.04-0.08-0.08-0.08H2.08z"></path>
                            </g>
                            <g>
                                <rect x="6.07" y="25.54" class="arma-item-fill" width="44.68" height="2"></rect>
                            </g>
                            <g>
                                <rect x="45.37" y="28.87" class="arma-item-fill" width="2.16" height="2"></rect>
                            </g>
                            <g>
                                <rect x="41.68" y="28.87" class="arma-item-fill" width="2.16" height="2"></rect>
                            </g>
                            <g>
                                <polygon class="arma-item-fill" points="35.76,43.64 15.59,43.64 15.59,40.12 18.29,37.77 19.4,37.77 20.43,33.42 22.38,33.88 20.98,39.77 
                                    19.04,39.77 17.59,41.03 17.59,41.64 33.76,41.64 33.76,41.03 32.32,39.77 30.37,39.77 28.97,33.88 30.92,33.42 31.95,37.77 
                                    33.06,37.77 35.76,40.12 		"></polygon>
                            </g>
                            <g>
                                <rect x="20.19" y="37.77" class="arma-item-fill" width="8" height="2"></rect>
                            </g>
                        </g>
                        </svg>
                    </div>
                    <div>
                        <p>Monitores</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32.58px" height="42px" viewBox="0 0 32.58 42" style="enable-background:new 0 0 32.58 42;" xml:space="preserve"><defs></defs><g><g><path class="arma-item-fill" d="M29.07,42H1.22C0.55,42,0,41.45,0,40.78V3.5c0-0.67,0.55-1.22,1.22-1.22h27.84c0.67,0,1.22,0.55,1.22,1.22v37.27C30.29,41.45,29.74,42,29.07,42z M1.63,40.37h27.03V3.91H1.63V40.37z"></path></g><g><path class="arma-item-fill" d="M29.92,41.66l-1.09-1.21l2.07-1.87c0.02-0.02,0.04-0.07,0.04-0.1V1.63H3.53C3.5,1.64,3.45,1.66,3.43,1.68L1.55,3.75l-1.21-1.1l1.89-2.09C2.53,0.23,3.06,0,3.52,0h27.84c0.67,0,1.22,0.55,1.22,1.22V38.5c0,0.45-0.24,0.98-0.57,1.29L29.92,41.66z"></path></g><g><g><polygon class="arma-item-fill" points="4.54,11.58 2.91,11.58 2.91,9.69 7.36,4.84 11.42,4.84 11.42,6.47 8.07,6.47 4.54,10.33 "></polygon></g><g><rect x="2.88" y="5.24" class="arma-item-fill" width="1.7" height="1.63"></rect></g></g><g><rect x="25.9" y="5.24" class="arma-item-fill" width="1.7" height="1.63"></rect></g><g><polygon class="arma-item-fill" points="27.57,11.58 25.94,11.58 25.94,10.36 22.38,6.47 20.84,6.47 20.84,4.84 23.1,4.84 27.57,9.73 "></polygon></g><g><rect x="2.88" y="32.68" class="arma-item-fill" width="1.7" height="1.63"></rect></g><g><rect x="2.88" y="37.62" class="arma-item-fill" width="1.7" height="1.63"></rect></g><g><path class="arma-item-fill" d="M4.86,22.21c0,0.65,0.52,0.94,2.51,0.94c1.65,0,2.15-0.18,2.15-0.66c0-0.51-0.35-0.59-2.33-0.69c-2.66-0.12-3.72-0.54-3.72-1.91c0-1.34,1.37-1.77,3.66-1.77c2.3,0,3.7,0.58,3.7,2.08H9.26c0-0.67-0.67-0.84-2.3-0.84c-1.54,0-1.91,0.15-1.91,0.6c0,0.47,0.37,0.56,2.15,0.66c2.41,0.13,3.9,0.26,3.9,1.81c0,1.63-1.54,1.96-3.8,1.96c-2.5,0-4-0.43-4-2.19H4.86z"></path><path class="arma-item-fill" d="M13.09,22.21c0,0.65,0.52,0.94,2.51,0.94c1.65,0,2.15-0.18,2.15-0.66c0-0.51-0.35-0.59-2.33-0.69c-2.66-0.12-3.72-0.54-3.72-1.91c0-1.34,1.37-1.77,3.66-1.77c2.3,0,3.7,0.58,3.7,2.08h-1.57c0-0.67-0.67-0.84-2.3-0.84c-1.54,0-1.91,0.15-1.91,0.6c0,0.47,0.37,0.56,2.15,0.66c2.41,0.13,3.9,0.26,3.9,1.81c0,1.63-1.54,1.96-3.8,1.96c-2.5,0-4-0.43-4-2.19H13.09z"></path><path class="arma-item-fill" d="M27.29,21.26c0,2.08-1.39,3.05-2.97,3.05h-4.43v-6.11h4.43C25.9,18.21,27.29,19.19,27.29,21.26z M25.72,21.26c0-1.48-0.8-1.74-1.99-1.74h-2.27V23h2.27C24.92,23,25.72,22.74,25.72,21.26z"></path></g></g></svg>
                    </div>
                    <div>
                        <p>SSD</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="36.63px" viewBox="0 0 44 36.63" style="enable-background:new 0 0 44 36.63;" xml:space="preserve"><defs></defs><g><g><g><path class="arma-item-fill" d="M44,34.39H0V26.7h0.88v-1.72H0V2.49h44v5.15h-1.45v3.19H44V34.39z M1.69,32.7h40.62V12.53h-1.45V5.95h1.45V4.18H1.69v19.1h0.88v5.11H1.69V32.7z"></path></g><g><polygon class="arma-item-fill" points="9.14,3.34 7.44,3.34 7.44,1.69 5.63,1.69 5.63,3.34 3.93,3.34 3.93,0 9.14,0 "></polygon></g><g><polygon class="arma-item-fill" points="15.69,3.34 14,3.34 14,1.69 12.18,1.69 12.18,3.34 10.49,3.34 10.49,0 15.69,0 "></polygon></g><g><polygon class="arma-item-fill" points="22.24,3.34 20.55,3.34 20.55,1.69 18.73,1.69 18.73,3.34 17.04,3.34 17.04,0 22.24,0 "></polygon></g><g><polygon class="arma-item-fill" points="35.99,36.63 26.52,36.63 26.52,33.55 28.21,33.55 28.21,34.94 34.3,34.94 34.3,33.55 35.99,33.55 "></polygon></g><g><path class="arma-item-fill" d="M36.48,29.62H26.02V19.16h10.46V29.62z M27.72,27.92h7.07v-7.07h-7.07V27.92z"></path></g><g><g><rect x="27.18" y="17.99" class="arma-item-fill" width="1.69" height="2.02"></rect></g><g><rect x="30.41" y="17.99" class="arma-item-fill" width="1.69" height="2.02"></rect></g><g><rect x="33.63" y="17.99" class="arma-item-fill" width="1.69" height="2.02"></rect></g></g><g><g><rect x="35.64" y="20.32" class="arma-item-fill" width="2.02" height="1.69"></rect></g><g><rect x="35.64" y="23.54" class="arma-item-fill" width="2.02" height="1.69"></rect></g><g><rect x="35.64" y="26.76" class="arma-item-fill" width="2.02" height="1.69"></rect></g></g><g><g><rect x="33.63" y="28.77" class="arma-item-fill" width="1.69" height="2.02"></rect></g><g><rect x="30.41" y="28.77" class="arma-item-fill" width="1.69" height="2.02"></rect></g><g><rect x="27.18" y="28.77" class="arma-item-fill" width="1.69" height="2.02"></rect></g></g><g><g><rect x="24.85" y="26.76" class="arma-item-fill" width="2.02" height="1.69"></rect></g><g><rect x="24.85" y="23.54" class="arma-item-fill" width="2.02" height="1.69"></rect></g><g><rect x="24.85" y="20.32" class="arma-item-fill" width="2.02" height="1.69"></rect></g></g><g><path class="arma-item-fill" d="M22.6,15H4.54V6.68H22.6V15z M6.24,13.31h14.67V8.37H6.24V13.31z"></path></g><g><rect x="5.39" y="9.99" class="arma-item-fill" width="16.36" height="1.69"></rect></g><g><path class="arma-item-fill" d="M26.72,10.98c-1.19,0-2.15-0.97-2.15-2.15c0-1.19,0.97-2.15,2.15-2.15c1.19,0,2.15,0.97,2.15,2.15C28.88,10.02,27.91,10.98,26.72,10.98z M26.72,8.37c-0.25,0-0.46,0.21-0.46,0.46c0,0.25,0.21,0.46,0.46,0.46c0.25,0,0.46-0.21,0.46-0.46C27.18,8.57,26.98,8.37,26.72,8.37z"></path></g><g><path class="arma-item-fill" d="M36.65,15.89c-1.19,0-2.15-0.97-2.15-2.15s0.97-2.15,2.15-2.15c1.19,0,2.15,0.97,2.15,2.15S37.83,15.89,36.65,15.89z M36.65,13.28c-0.25,0-0.46,0.21-0.46,0.46s0.21,0.46,0.46,0.46c0.25,0,0.46-0.21,0.46-0.46S36.9,13.28,36.65,13.28z"></path></g><g><rect x="20.48" y="17.14" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="25.42" y="13.31" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="29.94" y="13.31" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="30.34" y="23.54" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="16.97" y="17.14" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="20.48" y="19.84" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="16.97" y="19.84" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="20.48" y="22.53" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><rect x="16.97" y="22.53" class="arma-item-fill" width="1.83" height="1.69"></rect></g><g><path class="arma-item-fill" d="M39.19,10.98h-8.27V6.68h8.27V10.98z M32.61,9.29h4.89V8.37h-4.89V9.29z"></path></g><g><g><path class="arma-item-fill" d="M8.83,30.61H4.32v-6.27h4.52V30.61z M6.01,28.91h1.13v-2.89H6.01V28.91z"></path></g><g><rect x="5.73" y="23.7" class="arma-item-fill" width="1.69" height="1.48"></rect></g><g><rect x="5.73" y="29.83" class="arma-item-fill" width="1.69" height="1.48"></rect></g></g><g><g><path class="arma-item-fill" d="M15,30.57h-4.52V24.3H15V30.57z M12.18,28.88h1.13v-2.89h-1.13V28.88z"></path></g><g><rect x="11.9" y="23.66" class="arma-item-fill" width="1.69" height="1.48"></rect></g><g><rect x="11.9" y="29.8" class="arma-item-fill" width="1.69" height="1.48"></rect></g></g><g><path class="arma-item-fill" d="M13.59,22.41H4.51V17.6h9.08V22.41z M6.21,20.72h5.69v-1.43H6.21V20.72z"></path></g><g><rect x="16.97" y="29.12" class="arma-item-fill" width="5.34" height="1.69"></rect></g></g><g><rect x="20.55" y="33.55" class="arma-item-fill" width="1.69" height="2.24"></rect></g><g><rect x="17.04" y="33.55" class="arma-item-fill" width="1.69" height="2.24"></rect></g><g><rect x="13.53" y="33.55" class="arma-item-fill" width="1.69" height="2.24"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Motherboards</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-md cat">
            <a href="">
                <div>
                    <div>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="41.87px" height="38px" viewBox="0 0 41.87 38" style="enable-background:new 0 0 41.87 38;" xml:space="preserve"><defs></defs><g><g><g><path class="arma-item-fill" d="M40.87,38H1.01C0.45,38,0,37.55,0,36.99V19.22c0-0.55,0.45-1.01,1.01-1.01h39.86c0.55,0,1.01,0.45,1.01,1.01v17.78C41.87,37.55,41.42,38,40.87,38z M1.61,36.39h38.65V19.82H1.61V36.39z"></path></g><g><path class="arma-item-fill" d="M33.36,35.62H8.34v-4.36h25.02V35.62z M9.95,34.01h21.8v-1.14H9.95V34.01z"></path></g><g><path class="arma-item-fill" d="M7.06,35.62H2.84v-4.36h4.23V35.62z M4.45,34.01h1.01v-1.14H4.45V34.01z"></path></g><g><path class="arma-item-fill" d="M7.06,30.29H2.84v-4.36h4.23V30.29z M4.45,28.68h1.01v-1.14H4.45V28.68z"></path></g><g><path class="arma-item-fill" d="M7.06,24.92H2.84v-4.36h4.23V24.92z M4.45,23.31h1.01v-1.14H4.45V23.31z"></path></g><g><path class="arma-item-fill" d="M12.56,24.92H8.34v-4.36h4.23V24.92z M9.95,23.31h1.01v-1.14H9.95V23.31z"></path></g><g><path class="arma-item-fill" d="M18.06,24.92h-4.23v-4.36h4.23V24.92z M15.45,23.31h1.01v-1.14h-1.01V23.31z"></path></g><g><path class="arma-item-fill" d="M23.56,24.92h-4.23v-4.36h4.23V24.92z M20.95,23.31h1.01v-1.14h-1.01V23.31z"></path></g><g><path class="arma-item-fill" d="M29.06,24.92h-4.23v-4.36h4.23V24.92z M26.45,23.31h1.01v-1.14h-1.01V23.31z"></path></g><g><path class="arma-item-fill" d="M34.57,24.92h-4.23v-4.36h4.23V24.92z M31.95,23.31h1.01v-1.14h-1.01V23.31z"></path></g><g><path class="arma-item-fill" d="M38.79,30.29h-8.45v-4.36h8.45V30.29z M31.95,28.68h5.23v-1.14h-5.23V28.68z"></path></g><g><path class="arma-item-fill" d="M12.56,30.29H8.34v-4.36h4.23V30.29z M9.95,28.68h1.01v-1.14H9.95V28.68z"></path></g><g><path class="arma-item-fill" d="M18.06,30.29h-4.23v-4.36h4.23V30.29z M15.45,28.68h1.01v-1.14h-1.01V28.68z"></path></g><g><path class="arma-item-fill" d="M23.56,30.29h-4.23v-4.36h4.23V30.29z M20.95,28.68h1.01v-1.14h-1.01V28.68z"></path></g><g><path class="arma-item-fill" d="M29.06,30.29h-4.23v-4.36h4.23V30.29z M26.45,28.68h1.01v-1.14h-1.01V28.68z"></path></g><g><path class="arma-item-fill" d="M38.79,35.62h-4.23v-4.36h4.23V35.62z M36.18,34.01h1.01v-1.14h-1.01V34.01z"></path></g><g><path class="arma-item-fill" d="M11.26,19.02H9.65v-1.11H5.76v1.11H4.15v-1.71c0-0.55,0.45-1.01,1.01-1.01h5.1c0.55,0,1.01,0.45,1.01,1.01V19.02z"></path></g><g><path class="arma-item-fill" d="M8.51,17.1H6.9v-1.54c0-1.29,1.08-2.35,2.41-2.35h23.65c0.44,0,0.8-0.36,0.8-0.8v-0.8c0-0.44-0.36-0.8-0.8-0.8h-11.2c-1.33,0-2.41-1.08-2.41-2.41V6.64h1.61v1.74c0,0.44,0.36,0.8,0.8,0.8h11.2c1.33,0,2.41,1.08,2.41,2.41v0.8c0,1.33-1.08,2.41-2.41,2.41H9.31c-0.44,0-0.8,0.34-0.8,0.74V17.1z"></path></g><g><path class="arma-item-fill" d="M21.35,7.45h-2.41c-1.44,0-2.62-1.17-2.62-2.62V0h7.65v4.83C23.97,6.27,22.79,7.45,21.35,7.45z M17.93,1.61v3.22c0,0.55,0.45,1.01,1.01,1.01h2.41c0.55,0,1.01-0.45,1.01-1.01V1.61H17.93z"></path></g></g><g><rect x="17.12" y="2.92" class="arma-item-fill" width="3.02" height="1.61"></rect></g></g></svg>
                    </div>
                    <div>
                        <p>Teclados</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

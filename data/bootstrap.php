<?php
// Vamos a crear nuestro archivo de bootstrapping.
// Primero, NO TIENE NADA QUE VER CON EL FRAMEWORK DE CSS.
// Los archivos de Bootstrapping son aquellos que se ejecutan cuando la página arranca.
// Se los usa para setear valores de configuración, de entorno, constantes, etc.

// Definimos el huso horario de la aplicación.
date_default_timezone_set('America/Argentina/Buenos_Aires');

// Definimos las constantes de rutas.
const PATH_IMG = __DIR__ . "/../imgs";

// Definimos unas constantes de estado de entorno.
const ENVIROMENT_DEV = 0;
const ENVIROMENT_PROD = 1;
const ENVIROMENT_MANTAINANCE = 2;


// Definimos el estado del entorno.
$enviromentState = ENVIROMENT_DEV;
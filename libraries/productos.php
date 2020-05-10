<?php 
// TOMANDO EN CUENTA QUE ESTOY PARADO EN MI ARCHIVO CON EL OBJETO
// Este objeto es llamado con el archivo conver_Producto que contiene una funcion que llama a este objeto y lo transforma en un array con JSON_encode luego ese contenido lo leeo con file_get_contents y lo guardo en una variable para finalmente retornar esa variable que almacena este archivo, retornarlo convertido en un array con json_decode.

const DESTACADOS_JSON_FILEPATH = __DIR__ . "/../api/destacados.json";
const PRODUCTOS_JSON_FILEPATH = __DIR__ . "/../api/articulos.json";

function getProductos() {
    $productos = file_get_contents(PRODUCTOS_JSON_FILEPATH);
    
    // convierto de json a un array de php y retorno
    return json_decode($productos, true);
}


function getDestacados() {

    $contenido = file_get_contents(DESTACADOS_JSON_FILEPATH);
    
    // convierto de json a un array de php y retorno
    return json_decode($contenido, true);
}
<?php

include_once("./libro.php");


var_dump($_GET);



if (isset($_GET["titulo"])) {
    $titulo = $_GET["titulo"];
    Libro::encontrarPrecio($titulo);
}
else{
    echo "No hay titulo";
}





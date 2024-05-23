<?php

include_once("./libro.php");


var_dump($_POST);

if (isset($_POST["titulo"]) && isset($_POST["precio"])) {
    $titulo = $_POST["titulo"];
    $precio = $_POST["precio"];
    
    $libro = new Libro($titulo, $precio);
    
    
    Libro::guardarLibro($libro);

}else{
    echo "No se enviaron los parametros correspondientes";
}

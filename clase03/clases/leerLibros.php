<?php

include_once("./libro.php");

echo "<h1>Archivos</h1><br><br>";


echo "<h3>Leer archivo</h3><br>";

$archivo = fopen("./libros.txt","r");
Libro::leerLibros($archivo);


fclose($archivo);

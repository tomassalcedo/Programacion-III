<?php

include_once("./libro.php");

echo "<h1>Archivos</h1><br><br>";

$libro = new Libro("SocaBooooom: La explosion", 95000);

echo "<h3>Guardado de libros</h3><br>";

Libro::guardarLibro($libro);
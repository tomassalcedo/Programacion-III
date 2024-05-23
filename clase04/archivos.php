<?php

//Definimos en que carpeta vamos a guardar los archivos.
//La carpeta debe estar creada.
$carpeta_archivos = "subida/";

//Datos del archivo enviado por POST
$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];
$tamanio_archivo = $_FILES["archivo"]["size"];

//Ruta destino, carpeta + nombre del archivo que quiero guardar.
$ruta_destino = $carpeta_archivos . $nombre_archivo;

//realizamos las validaciones del archivo
if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg") && ($tamanio_archivo < 1000000)))) {
    echo "La extension o el tamaño de los archivos no es correcta.<br><br><table><tr><td><li>Se
    permiten archivos .png o .jpg <br><li>se permiten archivos de 100kb máximo.</td></tr></table>";
} else{
    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta_destino)) {
        echo "El archivo ha sido cargado correctamente.";
    }
    else{
        echo "Ocurrió algún error al subir el fichero. No pudo guardarse";
    }
}
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Si se recibieron todos los datos necesarios
    if (isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["mail"])) {
        
        include_once "./usuario.php";

        $nombre = $_POST["nombre"];
        $clave = $_POST["clave"];
        $mail = $_POST["mail"];

        $usuario = new Usuario($nombre, $clave, $mail);

        $archivo = fopen("usuarios.csv","a");
        fputcsv($archivo, $usuario->toArray());
        fclose($archivo);

        echo "Usuario agregado correctamente";
    }
    else{
        echo "Faltan datos";
    }
}
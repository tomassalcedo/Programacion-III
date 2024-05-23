<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["mail"])) {
        include_once "./registroProfe.php";
     

        //$nuevoUser = new Registro($_POST["nombre"], $_POST["clave"], $_POST["mail"], $id, $fechaStr);
         
    }
}

Registro::agregarAJSON($nuevoUser);
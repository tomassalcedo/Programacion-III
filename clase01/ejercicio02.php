<?php
/*
Salcedo Tomas
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Verano (21 de diciembre a 20 de marzo).
Otoño (21 de marzo a 20 de junio).
Invierno (21 de junio a 20 de septiembre).
Primavera (21 de septiembre a 20 de diciembre).
*/

$fechaActual = date("d-m-Y"); //obtengo fecha con funcion date

$fecha = new DateTime($fechaActual); //la hago un objeto de tipo datetime

$mes = $fecha->format("n"); //obtengo el mes con el metodo format "n" es para que me de el numero del mes sin 0

$estacion = "";
switch ($mes) {
    case 12:
        if($fecha->format("d") >= 21)
        {
            $estacion = "Verano";
        }
        else{
            $estacion = "Primavera";
        }
        break;
    case 1:
    case 2:
        $estacion = "Verano";
        break;
    case 3:
        if ($fecha->format("d") >= 21) {
            $estacion = "Otoño";
        }
        else{
            $estacion = "Verano";
        }

        break;
    case 4:
    case 5:
        $estacion = "Otoño";
        break;
    case 6:
        if ($fecha->format("d") >= 21) {
            $estacion = "Invierno";
        }
        else{
            $estacion = "Otoño";
        }
        break;
    case 7:
    case 8:
        $estacion = "Invierno";
        break;
    case 9:
        if ($fecha ->format("d") >= 21) {
            $estacion = "Primavera";
        }
        else{
            $estacion = "Invierno";
        }
        break;
    case 10:
    case 11:
        $estacion = "Primavera";
        break;
}

echo "Fecha actual : $fechaActual , es : $estacion";

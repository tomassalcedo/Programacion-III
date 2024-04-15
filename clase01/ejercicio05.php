<?php
/*
Salcedo Tomas
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

*/

$num = 27;

// arreglo con los nombres de los numeros del 0 al 19
$numeros = array(
    0 => 'cero',
    1 => 'uno',
    2 => 'dos',
    3 => 'tres',
    4 => 'cuatro',
    5 => 'cinco',
    6 => 'seis',
    7 => 'siete',
    8 => 'ocho',
    9 => 'nueve',
   
);

// arreglo con las decenas
$decenas = array(
    2 => 'veinti',
    3 => 'treinta',
    4 => 'cuarenta',
    5 => 'cincuenta',
    6 => 'sesenta'
);

// verifico si el numero esta  entre 20 y 60
if ($num >= 20 && $num <= 60) {
    // descompongo el numero

    $decena = floor($num / 10);
    $unidad = $num % 10;
    // Mostramos el nombre del número
    echo $decenas[$decena];
    if ($unidad > 0) {
        echo ' y ' . $numeros[$unidad];
    }
} else {
    echo "El número no está entre 20 y 60";
}
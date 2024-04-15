<?php
/*
Salcedo Tomas
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.
*/

$array = array();

for ($i=0; $i < 20 ; $i++) { 
    if ($i % 2 != 0) {
        $array[] = $i;
    }
}

echo "Muestro el array con estructura for: <br/>";
for ($i=0; $i < count($array) ; $i++) { 
    echo "$array[$i] <br/>";
}


$indice = 0;
echo "Muestro el array con estructura while <br/>";
while ($indice < count($array)) {
    echo "$array[$indice] <br/>";
    $indice++;
}


echo "Muestro el array con estructura foreach <br/>";
foreach ($array as $numero) {
    echo "$numero <br/>";
}
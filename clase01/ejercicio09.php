<?php
/*
Salcedo Tomas
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/

/*

OPCION 1 CON TRES ARRAYS DISTINTOS POR CADA LAPICERA
$lapicera1 = array("color"=>"Azul", "Marca"=>"Bic", "Trazo "=>"Fino", "Precio"=>10);
$lapicera2 = array("color"=>"Negro", "Marca"=>"Salcedo", "Trazo"=>"Fino", "Precio"=>40);
$lapicera3 = array("color"=>"Rojo", "Marca"=>"Lapicerin", "Trazo"=>"Grueso", "Precio"=>20);

foreach ($lapicera1 as $key => $value) {
    echo "$key: $value, ";
}
echo "<br/>";

foreach ($lapicera2 as $key => $value) {
    echo "$key: $value, ";
}
echo "<br/>";

foreach ($lapicera3 as $key => $value) {
    echo "$key: $value, ";
}
*/

//OPCION 2 CON UN UNICO ARRAY MULTIDIMENSIONAL
$lapicera = array(
array("color"=>"Azul", "Marca"=>"Bic", "Trazo "=>"Fino", "Precio"=>10),
array("color"=>"Negro", "Marca"=>"Salcedo", "Trazo"=>"Fino", "Precio"=>40),
array("color"=>"Rojo", "Marca"=>"Lapicerin", "Trazo"=>"Grueso", "Precio"=>20)
);

foreach ($lapicera as $key => $value) { //PRIMER FOREACH RECORRE LAS LAPICERAS
    echo "Lapicera ", $key + 1, ": ";
    foreach ($value as $atr => $val) { //SEGUNDO FOREACH RECORRE SUS ATRIBUTOS
        echo "$atr: $val, ";
    }
    echo "<br/>";
}
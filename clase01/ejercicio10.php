<?php
/*
Salcedo Tomas
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.
*/

$lapicera1 = array("color" => "Azul", "Marca" => "Bic", "Trazo" => "Fino", "Precio" => 10);
$lapicera2 = array("color" => "Negro", "Marca" => "Salcedo", "Trazo" => "Fino", "Precio" => 40);
$lapicera3 = array("color" => "Rojo", "Marca" => "Lapicerin", "Trazo" => "Grueso", "Precio" => 20);

$arrayAsociativo = array(
"Lapicera1" => $lapicera1,
"Lapicera2" => $lapicera2,
"Lapicera3" => $lapicera3
);

$arrayIndexado = array($lapicera1,$lapicera2,$lapicera3);

echo "Array asociativo: <br/>";
foreach ($arrayAsociativo as $nombre => $lapicera) {
    echo "$nombre: ";
    foreach ($lapicera as $atr => $valor) {
        echo "$atr: $valor, ";
    }
    echo "<br/>";
}

echo "Arroy indexado: <br/>";
foreach ($arrayIndexado as $indice => $lapicera) {
    echo "Lapicera ",$indice +1 , ": ";
    foreach ($lapicera as $atr => $valor) {
        echo "$atr: $valor, ";
    }
    echo "<br/>";
}
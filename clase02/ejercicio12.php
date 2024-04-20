<?php
/*
Salcedo Tomas
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/


function invertirPalabra($array){
    $arrayInvertido = array_reverse($array);
    $palabraInvertida = implode("",$arrayInvertido);
    return $palabraInvertida;
}

$arrayCaracteres = array("H","O","L","A");
echo invertirPalabra($arrayCaracteres);

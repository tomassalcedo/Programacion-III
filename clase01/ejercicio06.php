<?php
/*
Salcedo Tomas
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/

$array = array();

for ($i=0; $i < 5; $i++) { 
    $array[$i] = rand(1,10);
}

$acumulador = array_sum($array);

$promedio = $acumulador / 5;

echo "Promedio: $promedio <br/>";

if ($promedio > 6) {
    echo "El promedio es mayor a 6 <br/>";
}
else if ($promedio < 6) {
    echo "El promedio es menor a 6 <br/>";
}
else{
    "El promedio es igual a 6";
}


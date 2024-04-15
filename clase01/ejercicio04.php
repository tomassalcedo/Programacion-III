<?php
/*
Salcedo Tomas
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.
*/

$operador = "/";
$resultado = 0;
$num1 = 2;
$num2 = 0;

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $resultado = $num1 / $num2;    
        } else {
            echo "No se puede dividir por 0";
            exit;
        }
        break;

    case '*':
        $resultado = $num1 * $num2;
        break;
}
echo "Resultado = $resultado";

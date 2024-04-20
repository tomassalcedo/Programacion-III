<?php
require_once "./ejercicio17.php";
require_once "./ejercicio18.php";

// $auto1 = new Auto("Chevrolet","Negro");
// $auto2 = new Auto("Chevrolet","Rojo");

// $auto3 = new Auto("VolksWagen","Verde",100);
// $auto4 = new Auto("VolksWagen","Verde",50);

// $auto5 = new Auto("BMW","Azul",90,"1999-07-12");

// $auto3->AgregarImpuestos(1500);
// $auto4->AgregarImpuestos(1500);
// $auto5->AgregarImpuestos(1500);

// $resultado = Auto::Add($auto1,$auto2);

// $resultadoPrimerComparacion =  $auto1->Equals($auto2);

// $resultadoSegundaComparacion = $auto1->Equals($auto5);

// echo "<br>";
// echo "<br>";

// echo (bool)$resultadoPrimerComparacion;
// echo "<br>";
// echo (bool)$resultadoSegundaComparacion;

// Auto::MostrarAuto($auto1);
// echo "<br>";
// Auto::MostrarAuto($auto3);
// echo "<br>";
// Auto::MostrarAuto($auto5);

//*****EJERCICIO 18*******

$auto10 = new Auto("Volvo", "Negro", 100, "2008-07-12");
$auto11 = new Auto("BMW", "Azul", 500, "2010-06-13");


$garage = new Garage("Style Garage", 15);

$garage->MostrarGarage();

$esta = $garage->Equals($auto10);

var_dump($esta); //me va a mostrar false porque el auto no esta.

echo "<br>";

$garage->Add($auto10);

$esta = $garage->Equals($auto10);

var_dump($esta); //Ahora me va a mostrar true porque el auto si esta en el garage

echo "<br>";
$garage->MostrarGarage();

$garage->Add($auto11);

$garage->MostrarGarage();

$garage->Remove($auto11);
$garage->MostrarGarage();

$garage->Remove($auto11); //Le paso un auto que ya no esta
$garage->Add($auto10); //Le paso un auto que ya esta en el garage




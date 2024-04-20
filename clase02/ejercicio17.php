<?php
/*
Salcedo Tomas
Aplicación No 17 (Auto)
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
por parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
*/
class Auto{

    //ATRIBUTOS
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;
    

    //CONSTRUCTOR
    public function __construct($marca, $color, $precio = 0, $fecha = null){
        $this-> _marca = $marca;
        $this-> _color = $color;
        $this-> _precio = $precio;
        $this-> _fecha = $fecha ? new DateTime($fecha) : null;
    }

    //METODO DE INSTANCIA PARA AGREGAR IMPUESTOS
    public function AgregarImpuestos($double){
        $this->_precio += $double; 
    }

    //METODO ESTATICO PARA MOSTRAR LOS ATRIBUTOS DE UN OBJTO AUTO
    public static function MostrarAuto(Auto $auto){
        echo "Marca: " . $auto->_marca . "<br>";
        echo "Color: " . $auto->_color . "<br>";
        echo "Precio: " .$auto->_precio . "<br>";
        if ($auto->_fecha) {
            echo "Fecha: " . $auto->_fecha->format("Y-m-d") . "<br>";
        } 
        echo "<br>";
    }

    //METODO DE INSTANCIA PARA COMPARAR DOS OBJETOS AUTOS POR LA MARCA
    public function Equals(Auto $auto){
        if( $this->_marca === $auto->_marca){
            return true;
        }
        return false;
    }

    //METODO ESTATICO PARA SUMAR DOS AUTOS SI SON DE LA MISMA MARCA Y COLOR
    public static function Add($auto1, $auto2)
    {
        if ($auto1->_marca === $auto2->_marca && $auto1->_color === $auto2->_color) {
           return $auto1->_precio + $auto2->_precio;
        }
        else{
            echo "Los autos no son de la misma marca y color";
            return 0;
        }
    }
}
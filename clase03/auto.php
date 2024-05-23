<?php


/*
 
Realizar una clase llamada “Auto” que posea los siguientes atributos

privados: _color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como

parámetros: i. La marca y el color.

ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto” por
parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo devolverá
TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son de la
misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con la suma de los
precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
 */


class Auto
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;


    public function __construct($marca, $color, $precio = 0, $fecha = null)
    {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_fecha = $fecha ? new DateTime($fecha) : null;
    }


    public function AgregarImpuestos($double)
    {
        $this->_precio += $double;
    }

    public static function MostrarAuto(Auto $auto)
    {
        echo "Marca: " . $auto->_marca . "<br>";
        echo "Color: " . $auto->_color . "<br>";
        echo "Precio: " . $auto->_precio . "<br>";

        if ($auto->_fecha) {
            echo "Fecha: " . $auto->_fecha->format("Y-m-d") . "<br>";
        }
        echo "<br>";
    }

    public function Equals(Auto $auto)
    {
        if ($this->_marca === $auto->_marca) {
            return true;
        }
        return false;
    }


    public static function Add(Auto $auto1, Auto $auto2)
    {
        if ($auto1->_marca === $auto2->_marca && $auto1->_color === $auto2->_color) {
            return $auto1->_precio + $auto2->_precio;
        } else {
            echo "Los autos no son de la misma marca y color";
            return 0;
        }
    }




    public static function GuardarAuto($auto, $archivo = "./autos.csv")
    {
        if (!$auto instanceof Auto) {
            echo "El objeto no es un auto";
            return;
        }

        $archivo = fopen($archivo, "a");

        $fecha = "";
        if ($auto->_fecha) {
            $fecha = $auto->_fecha->format("Y-m-d");
        }

        fputcsv($archivo, [(string)$auto->_marca, (string)$auto->_color, (string)$auto->_precio, $fecha]);
        fclose($archivo);
    }



    public static function LeerAutos($archivo = "autos.csv")
    {
        $autos = array();

        if (!file_exists($archivo)) {
            echo "El archivo no existe...<br>";
            return $autos;
        }

        $handle = fopen($archivo, "r");

        while (($contenido = fgetcsv($handle)) !== false) {
            $fecha = null;
            if (!empty($contenido[3])) {
                $fecha = $contenido[3];
            }

            // Creo una nueva instancia de Auto y la agrego al array $autos
            $autos[] = new Auto($contenido[0], $contenido[1], $contenido[2], $fecha);
        }

        fclose($handle);
        return $autos;
    }
}
